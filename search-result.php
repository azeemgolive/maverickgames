<?php
session_start();
require 'setup.php';
include("dbconnection.php");
include("googlelogin.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Game About Us</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' /
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/wow.min.js"></script>

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
     <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 8]>
<script type="text/javascript" src="/assets/js/html5.js"></script>
<html lang="en" class="ie ie8">
<![endif]-->

<meta name="google-site-verification" content="ywXjYOYCEEAo7oFbxaG3VU1x2uA4yI9q1PHhRNGTtxY" />
</head>

<body class="home">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=481352955356475";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Start popup-->

<!-- Login form -->		

<!-- End signUp form -->
<div class="popup-overlay"></div>

<!-- End popup-->
<?php
            include("user-login-menus.php");
            ?>
<?php
include("sidebarlinks.php");
?>

<div class="featured-area">
	<div class="container">
    <div class="row">
     <div class="col-md-10 col-sm-9">
      <div class="inner-cnt"> 
  <h2>Search  <span>Result</span></h2>
  
  <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
  
  <div class="search-box">
  <div class="border-line">
                                <img width="221" height="125" alt="" class="img-responsive" src="silverhat_games/game_image/dothedive.png">
                                </div>
  <h3>Game1</h3>
  <p>sssssd</p>
  
  
  
  </div>
  </div>
  
  <div class="col-md-4 col-sm-4 col-xs-12">
  
  <div class="search-box">
  <div class="border-line">
                                <img width="221" height="125" alt="" class="img-responsive" src="silverhat_games/game_image/dothedive.png">
                                </div>
  <h3>Game1</h3>
  <p>sssssd</p>
  
  
  
  </div>
  </div>
  
  <div class="col-md-4 col-sm-4 col-xs-12">
  
  <div class="search-box">
  <div class="border-line">
                                <img width="221" height="125" alt="" class="img-responsive" src="silverhat_games/game_image/dothedive.png">
                                </div>
  <h3>Game1</h3>
  <p>sssssd</p>
  
  
  
  </div>
  </div>
  

  
   </div>
   
</div>
     </div>
      <?php 
      include("rightadds.php");
      ?>
    </div>
    
    
    	<?php 
include("featured-games.php");
?>
    </div>
</div>



<?php
include("footer.php");
?>






</body>
</html>