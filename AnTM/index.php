<?php

echo "Hello World!";

?>

<?php
        ob_start();
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        require_once('connection/connectDB.php');
       // var domain_name= "http://apps.foxsportsasia.com/asia-sports-icon/";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="moment.min.js">

</script>      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<title>index</title>
    <script>
        arrayA = new Array();

    </script>
     <?php 

            mysql_select_db($database_con, $con) or die(mysql_error());
	        $query1 = mysql_query("SELECT * FROM ESS_COC_2013_MATCHES E",$con) or die(mysql_error());
            

      while($activeMatch = mysql_fetch_row($query1)){

      ?>
    <script>

        arrayA.push([<?php echo '"'.implode('","',  $activeMatch).'"'?>]);
                

           
            </script>


    <?php      }?>
    
   
    
    
            
</head>





<body>
	<div class="wrapper">
    	<div class="wrapper_content">
        	<div class="header">
            	<div class="logo">
                	<a href="index.php"><img src="images/logo.png" height="68" alt="" /></a>
                </div>
				<!--
                <div class="heading">
                	<h1>A.S.I.A<h2></h2></h1>
                    
                    <span>ASIAN SPORTING ICON AWARD</span>
                </div>
                -->
             </div>
        <div class="body_wrapper">
        	<p class="pragraph_align"><a href="#"><img src="images/profiles.png" height="27" width="113" alt=""></a>
                <a href="#"><img src="images/howtovote.png" height="27" width="133" alt=""></a>
                
						<br /> 
						<strong></strong></p>


            


             <?php 

            mysql_select_db($database_con, $con) or die(mysql_error());
	        $query = mysql_query("SELECT * FROM ESS_COC_2013_MATCHES E where isActive = 1",$con) or die(mysql_error());
            $activeMatch = mysql_fetch_row($query);

       
	    ?>
            <script>
                var dat = moment('<?php echo $activeMatch[8]?>');
            </script>
  
        <!-- Match 1 Start -->
        	<div class="match_1_2">
               
            	<div class="match_1_2_active">
                <div class="heading_align">
                	<h1>Match 1 <span id="date1"><script> $('#date1').text(moment('' + arrayA[0][8]).format("D MMM") + '-' + moment(arrayA[0][9]).format("D MMM YY") + ''); </script></span></h1>
                    
                    </div>
                     <a href="voting.php"> 
                        <div class="boxes">
 <?php 
           mysql_select_db($database_con, $con) or die(mysql_error());
	        $query = mysql_query("SELECT A.ID as MatchID, B.Name,B.Picture FROM 380317_espnstar.ESS_COC_2013_MATCHES as A , 380317_espnstar.ESS_COC_2013_PLAYERS as B
Where (A.Player1 = B.ID or A.Player2 = B.ID or A.Player3 = B.ID or A.Player4 = B.ID) and A.ID=1;",$con) or die(mysql_error());
			while( $match = mysql_fetch_row($query)){
        ?>

 <div class="team_member">
                              <img src="<?php if ($match[2] !=' '){echo $match[2];} else echo "images/default_player.png" ?> " height="78" width="61" alt="<?php echo $match[1]?>" />
                                <h4><?php echo $match[1]?></h4>
                            </div>
                            
                               <?php  }?>
                            <?php  if($activeMatch[0]!=1) {?> <div class="boxes_2"></div><?php }?>
                            
                        </div>   
                    </a>   
                </div>
        <!-- Match 1 End -->







                <!-- Match 2 Start -->
                <div class="match_1_2_content">
                	<div class="heading_align">
                	<h1>Match  2 <span id="date2"> <script> $('#date2').text(moment('' + arrayA[1][8]).format("D MMM") + '-' + moment(arrayA[1][9]).format("D MMM YY") + ''); </script></span></h1>
                    
                </div>
                	<div class="boxes">
                         <?php 
           mysql_select_db($database_con, $con) or die(mysql_error());
	        $query = mysql_query("SELECT A.ID as MatchID, B.Name,B.Picture FROM 380317_espnstar.ESS_COC_2013_MATCHES as A , 380317_espnstar.ESS_COC_2013_PLAYERS as B
Where (A.Player1 = B.ID or A.Player2 = B.ID or A.Player3 = B.ID or A.Player4 = B.ID) and A.ID=2;",$con) or die(mysql_error());
			while($match = mysql_fetch_row($query)){
        ?>

                       <div class="team_member">
                               <a href="voting.php"> <img src="<?php if ($match[2] !=' '){echo $match[2];} else echo "images/default_player.png" ?> " height="78" width="61" alt="<?php echo $match[1]?>" /></a>
                                <h4><?php echo $match[1]?></h4>
                            </div>
                            
                               <?php   }?>
                             <?php  if($activeMatch[0]!=2) {?> <div class="boxes_2"></div><?php }?>
                        </div>
                </div>

         
            </div>
            <div class="support">
            	<img src="images/support.png" height="247" width="40" alt="" />
            </div>

            <!-- Match 5 Start -->
            <div class="match_5">
            	<div class="match5_heading">
            	<h1>Match 5</h1>
                <span id="date5"><script> $('#date5').text('' + moment('' + arrayA[4][8]).format("D MMM") + '-' + moment(arrayA[4][9]).format("D MMM YY") + ''); </script></span>
                </div>
            	
            	<ul class="th_boxes">
                                     <?php 
           mysql_select_db($database_con, $con) or die(mysql_error());
	        $query = mysql_query("SELECT A.ID as MatchID, B.Name,B.Picture FROM 380317_espnstar.ESS_COC_2013_MATCHES as A , 380317_espnstar.ESS_COC_2013_PLAYERS as B
Where (A.Player1 = B.ID or A.Player2 = B.ID or A.Player3 = B.ID or A.Player4 = B.ID) and A.ID=5;",$con) or die(mysql_error());
			while($match = mysql_fetch_row($query)){
        ?>
                    	<li>
                        	<img src="<?php if ($match[2] !=0){echo $match[2];} else echo "images/match_5_images.png" ?>"  height="78" width="61"  alt="" />
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $match[1]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </li>
                    <li>
                        	<img src="<?php if ($match[2] !=0){echo $match[2];} else echo "images/match_5_images.png" ?>"  height="78" width="61"  alt="" />
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $match[1]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </li>
                    <li>
                        	<img src="<?php if ($match[2] !=0){echo $match[2];} else echo "images/match_5_images.png" ?>"  height="78" width="61"  alt="" />
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $match[1]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </li>
                    <li>
                        	<img src="<?php if ($match[2] !=0){echo $match[2];} else echo "images/match_5_images.png" ?>"  height="78" width="61"  alt="" />
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $match[1]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </li>
                            <?php   }?>
                        
                    </ul>
            </div>
            <div class="support">
            	<img src="images/support.png" height="247" width="40" alt="" />
            </div>

            <!-- Match FINAL Start -->
            <div class="final">
            	<ul>

       
                	<li>
                    	<img src="images/final.png" alt="" />
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;None&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </li>
                    <li>
                    	<img src="images/final.png" alt="" />
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;None&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </li>
                </ul>
                	<div class="final_headings">
                    <h2>FINAL</h2>
                    <h4 id="datef"><script> $('#datef').text(moment('' + arrayA[6][8]).format("D MMM") + '-' + moment(arrayA[6][9]).format("D MMM YY") + ''); </script></h4>
                    </div>
                <ul>
                	<li>
                    	<img src="images/final.png" alt="" />
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;None&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </li>
                   <li>
                    	<img src="images/final.png" alt="" />
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;None&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </li>
                </ul>
                
            
            </div>
            <div class="support_flip">
            	<img src="images/support._flippng.png" height="247" width="40" alt="" />
            </div>

            <!-- Match 6 Start -->
            <div class="match_5">
            	<div class="match4_heading">
            	<h1>Match 6</h1>
                <span id="date6"> <script> $('#date6').text(moment('' + arrayA[5][8]).format("D MMM") + '-' + moment(arrayA[5][9]).format("D MMM YY") + ''); </script></span>
                </div>
            	
                	<ul class="th_boxes">
                    	   <?php 
           mysql_select_db($database_con, $con) or die(mysql_error());
	        $query = mysql_query("SELECT A.ID as MatchID, B.Name,B.Picture FROM 380317_espnstar.ESS_COC_2013_MATCHES as A , 380317_espnstar.ESS_COC_2013_PLAYERS as B
Where (A.Player1 = B.ID or A.Player2 = B.ID or A.Player3 = B.ID or A.Player4 = B.ID) and A.ID=6;",$con) or die(mysql_error());
			while($match = mysql_fetch_row($query)){
        ?>
                    	<li>
                        	<img src="<?php if ($match[2] !=0){echo $match[2];} else echo "images/match_5_images.png" ?>"  height="78" width="61"  alt="" />
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $match[1]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </li>
                    <li>
                        	<img src="<?php if ($match[2] !=0){echo $match[2];} else echo "images/match_5_images.png" ?>"  height="78" width="61"  alt="" />
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $match[1]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </li>
                    <li>
                        	<img src="<?php if ($match[2] !=0){echo $match[2];} else echo "images/match_5_images.png" ?>"  height="78" width="61"  alt="" />
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $match[1]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </li>
                    <li>
                        	<img src="<?php if ($match[2] !=0){echo $match[2];} else echo "images/match_5_images.png" ?>"  height="78" width="61"  alt="" />
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $match[1]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </li>
                            <?php   }?>
                        
                    </ul>
                
            </div>
            <div class="support_flip">
            	<img src="images/support._flippng.png" height="247" width="40" alt="" />
            </div>

            <!-- Match 3 Start -->
            <div class="match_3">
            	<div class="match_1_2_content">
                	<div class="heading_align">
                	<h1>Match 3 <span id="date3"> <script> $('#date3').text(moment('' + arrayA[2][8]).format("D MMM") + '-' + moment(arrayA[2][9]).format("D MMM YY") + ''); </script></span></h1>
                    
                </div>
            		<div class="boxes">

                         <?php 
           mysql_select_db($database_con, $con) or die(mysql_error());
	        $query = mysql_query("SELECT A.ID as MatchID, B.Name,B.Picture FROM 380317_espnstar.ESS_COC_2013_MATCHES as A , 380317_espnstar.ESS_COC_2013_PLAYERS as B
Where (A.Player1 = B.ID or A.Player2 = B.ID or A.Player3 = B.ID or A.Player4 = B.ID) and A.ID=3;",$con) or die(mysql_error());
			while($match = mysql_fetch_row($query)){
        ?>
                    	  <div class="team_member">
                               <a href="voting.php"> <img src="<?php if ($match[2] !=' '){echo $match[2];} else echo "images/default_player.png" ?> " height="78" width="61" alt="<?php echo $match[1]?>" /></a>
                                <h4><?php echo $match[1]?></h4>
                            </div>
                            
                               <?php   }?>
                         <?php  if($activeMatch[0]!=3) {?> <div class="boxes_2"></div><?php }?>
                    </div>
                </div>

                <!-- Match 4 Start -->
                <div class="match_1_2_content">
                	<div class="heading_align">
                	<h1>Match 4 <span id="date4"> <script> $('#date4').text(moment('' + arrayA[3][8]).format("D MMM") + '-' + moment(arrayA[3][9]).format("D MMM YY") + ''); </script></span></h1>
                    
                </div>
                	<div class="boxes">
                        
                         <?php 
           mysql_select_db($database_con, $con) or die(mysql_error());
	        $query = mysql_query("SELECT A.ID as MatchID, B.Name,B.Picture FROM 380317_espnstar.ESS_COC_2013_MATCHES as A , 380317_espnstar.ESS_COC_2013_PLAYERS as B
Where (A.Player1 = B.ID or A.Player2 = B.ID or A.Player3 = B.ID or A.Player4 = B.ID) and A.ID=4;",$con) or die(mysql_error());
			while($match = mysql_fetch_row($query)){
        ?>
               
                        <div class="team_member">
                               <a href="voting.php"> <img src="<?php if ($match[2] !=' '){echo $match[2];} else echo "images/default_player.png" ?> " height="78" width="61" alt="<?php echo $match[1]?>" /></a>
                                <h4><?php echo $match[1]?></h4>
                            </div>
                            
                            
                               <?php   }?>
                         <?php  if($activeMatch[0]!=4) {?> <div class="boxes_2"></div><?php }?>
                  	</div>
                </div>
            </div>            
        </div>
        
        </div>
    	<div class="footer">    
                <div class="footer_content">
                    <div class="footer_left">
				<!--					
                    	<img src="images/prize.png" height="52" width="178" alt="" />
				-->
                    </div>
                    <div class="footer_center">
                    	<h3>You can find us:</h3>
                        <ul>
                        	<li>
                            	<a href="https://www.facebook.com/foxsportsasia" target="_blank"><img src="images/icon_facebook.png" height="42" width="40" alt="" /></a>
                            </li>
                            <li>
                            	<a href="https://twitter.com/wearefoxsports" target="_blank"><img src="images/icon_twitter.png" height="42" width="40" alt="" /></a>
                            </li>
                        
                        </ul>
                    </div>
                    <div class="footer_right">
                    	<div class="align_footer_right">
                    	<h1>Share it with your</h1>
                        <h2>Friends</h2>
                        <p>And if you want to improve the chances of your favourite athlete 
going through to the next round, tell your friends to <a href="#">VOTE!</a> </p>
						<a href="#"><img src="images/share_button.png" height="42" width="144" alt="" /></a>
                    </div>
                    </div>
                    
                </div>
            </div>
    </div>
	
</body>
</html>
    