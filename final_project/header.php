<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Blood bank</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/backgroundPosition.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
<style>
.text1{ color:#000; !important; font-size:24px !important;}
</style>
</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
      <br>
        <h1 style="font-size:38px;"><a href="index.php" style="color:#F00; padding-bottom:1Opx; ">ONLINE<br><br>
 BLOOD<br><br>
 BANK</a></h1><br><br>
        <!--id="logo"--><nav>
          <ul id="top_nav">
          
            <li><a href="display_gallery.php" class="text1"><!--<img src="images/top_icon1.gif" alt="">-->Gallery</a></li>
            <li><a href="display_van_schedule.php" class="text1"><!--<img src="images/top_icon2.gif" alt="">-->Van_Schedule</a></li>
            
            <li><a href="moreservices.php" class="text1">  More Services  </a></li>	
            <li class="end"><a href="display_donation_camp.php" class="text1"><!--<img src="images/top_icon3.gif" alt="">-->Donation Camp</a></li>
          </ul>
        </nav>
        <nav>
          <ul id="menu">
            <!--id="menu_active"-->
            <li><a href="index.php">Home</a></li>
            <li><a href="mission.php">Our Mission</a></li>
          <!--  <li><a href="news.php">News</a></li>
             --><li><a href="help.php">Help</a></li>
            <li><a href="contact.php">contact</a></li>
<?php
if(!isset($_SESSION['login']) && $_SESSION['login']!=1){
?>
          <li><a href="registration.php">Sign up</a></li><?php } else {?>
      <li><a href="logout.php"><?php echo $_SESSION['login'] ?>&nbsp;&nbsp;&nbsp;Logout</a></li>
<?php }?>
  
          </ul>
        </nav>
      </div>