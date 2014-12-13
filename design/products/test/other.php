<?php $page='o'; ?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<!--Declare page as mobile friendly --> 
<meta content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" name="viewport">
<!-- Declare page as iDevice WebApp friendly -->
<meta content="yes" name="apple-mobile-web-app-capable">
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link href="images/splash/splash-icon.png" sizes="114x114" rel="apple-touch-icon-precomposed"> 
<!-- iPhone 3, 3Gs -->
<link media="screen and (max-device-width: 320px)" href="images/splash/splash-screen.png" rel="apple-touch-startup-image"> 
<!-- iPhone 4 -->
<link media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" href="images/splash/splash-screen@2x.png" rel="apple-touch-startup-image"> 
<!-- iPhone 5 -->
<link href="images/splash/splash-screen@3x.png" sizes="640x1096" rel="apple-touch-startup-image">

<!-- Page Title -->
<title>Epsilon Elements | Mobile Framework Starter</title>

<!-- Stylesheet Load -->
<link type="text/css" rel="stylesheet" href="styles/style.css">
<link type="text/css" rel="stylesheet" href="styles/framework-style.css">
<link type="text/css" rel="stylesheet" href="styles/framework.css">
<link type="text/css" rel="stylesheet" href="styles/bxslider.css">
<link type="text/css" rel="stylesheet" href="styles/swipebox.css">
<link type="text/css" rel="stylesheet" href="styles/icons.css">
<link media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" rel="stylesheet" href="styles/retina.css">


<!--Page Scripts Load -->
<script type="text/javascript" src="scripts/jquery.min.js"></script>	
<script type="text/javascript" src="scripts/snap.js"></script>
<script type="text/javascript" src="scripts/hammer.js"></script>	
<script type="text/javascript" src="scripts/jquery-ui-min.js"></script>
<script type="text/javascript" src="scripts/subscribe.js"></script>
<script type="text/javascript" src="scripts/contact.js"></script>
<script type="text/javascript" src="scripts/jquery.swipebox.js"></script>
<script type="text/javascript" src="scripts/bxslider.js"></script>
<script type="text/javascript" src="scripts/colorbox.js"></script>
<script type="text/javascript" src="scripts/retina.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" src="scripts/framework.js"></script>

</head>
<body>

<div id="preloader" style="display: none;">
	<div id="status" style="display: none;">
    	<p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>



<div class="all-elements">
    
    <?php include './sidebar.php';?>
       
    <div class="page-content" id="content">
        <div class="page-header">
            <p class="logo">
                <img width="63" src="images/misc/logo.png">
            </p>
            <a class="deploy-sidebar" href="#"></a>
        </div>  
        
        <div class="decoration"></div>

           
        <div class="column iphone-detected no-detected-background no-bottom">
            <p class="uppercase">
                <span><img width="28" alt="img" class="replace-2x" src="images/detector/iphone.png"></span>
                Availalble for your iPhone on the Apple Appstore! <a href="#">Get it now!</a>
            </p> 
        </div>
        
        <div class="column ipad-detected no-detected-background no-bottom">
            <p class="uppercase">
                <span><img width="28" alt="img" class="replace-2x" src="images/detector/ipad.png"></span>
                 Availalble for your iPad on the Apple Appstore! <a href="#">Get it now!</a>
            </p> 
        </div>
        
        <div class="column android-detected no-detected-background no-bottom">
            <p class="uppercase">
                <span><img width="28" alt="img" class="replace-2x" src="images/detector/droid.png"></span>
                 Availalble for your Android on the GooglePlay store! <a href="#">Get it now!</a>  
            </p> 
        </div>
        <div class="decoration"></div>
                
        <!--CSS3 Buttons-->
                             
        <div class="container">
            <h4 class="heading-icon">CSS3 Minimal Buttons</h4>
            <p class="no-bottom">Pure CSS3 buttons made to expand to the width of the screen regardless how much text is entered!</p>
            <a class="no-bottom demo-button button-minimal yellow-minimal" href="#">Button</a>
            <a class="no-bottom demo-button button-minimal grey-minimal" href="#">Button</a>
            <a class="no-bottom demo-button button-minimal red-minimal" href="#">Button</a>
            <a class="no-bottom demo-button button-minimal blue-minimal" href="#">Button</a>
            <a class="no-bottom demo-button button-minimal green-minimal" href="#">Button</a>
            <a class="no-bottom demo-button button-minimal black-minimal" href="#">Button</a>
            <a class="no-bottom demo-button button-minimal purple-minimal" href="#">Button</a>
            <a class="no-bottom demo-button button-minimal gblue-minimal" href="#">Button</a>
            <a class="no-bottom demo-button button-minimal yellow-minimal" href="#">Button</a>
        </div>
        
        <div class="decoration"></div>
        
        <div class="container">
        	<h4 class="heading-icon">All above buttons fullscren!</h4>
            <p class="no-bottom">Yes, you can use fullscreen buttons as well!</p>
            <a class="no-bottom demo-button button-minimal grey-minimal fullscreen-button no-bottom" href="#">Minimal Fullscreen Button</a>
        	<a class="demo-button button grey fullscreen-button" href="#">Regular Fullscreen Button</a>
        </div>
        
        <div class="decoration"></div>

        <!--Charts-->
    
        <div class="container no-bottom">
            <h4 class="heading-icon">Vertical Charts?</h4>
            <p>Charts are important, but everyone hates those complicated 500 lines of code charts! We have a solution! Simple CSS3 ones!</p>
            <div class="decoration"></div>
                <span class="stat-vertical-background">
                    <span class="percent-vertical red-minimal vp30"></span>
                    <span class="vertical-stat-number">a</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical red-minimal  vp40"></span>
                    <span class="vertical-stat-number">b</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical yellow-minimal  vp60"></span>
                    <span class="vertical-stat-number">d</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical yellow-minimal  vp70"></span>
                    <span class="vertical-stat-number">e</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical green-minimal  vp80"></span>
                    <span class="vertical-stat-number">f</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical green-minimal  vp90"></span>
                    <span class="vertical-stat-number">g</span>
                </span>
                <span class="stat-vertical-background">
                    <span class="percent-vertical green-minimal  vp100"></span>
                    <span class="vertical-stat-number">h</span>
                </span>
            <div class="clear"></div>
        </div>
        
        <div class="decoration"></div>
        
        <div class="container no-bottom">
            <h4 class="heading-icon">Horizontal Charts?</h4>
            <p>Charts are important, but everyone hates those complicated 500 lines of code charts! We have a solution! Simple CSS3 ones!</p>
            <div class="decoration"></div>
    
            <div class="stat">
                <p class="stat-left">Monday</p>
                <p class="stat-right">123 Visits <strong class="increase">15% Increase</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent green-minimal  p10"></span>
                </span>
            </div>
            <div class="stat">
                <p class="stat-left">Tuesday</p>
                <p class="stat-right">234 Visits<strong class="increase">45% Increase</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent green-minimal  p40"></span>
                </span>
            </div>
            <div class="stat">
                <p class="stat-left">Wednesday</p>
                <p class="stat-right">453 Visits<strong class="increase">55% Increase</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent green-minimal  p50"></span>
                </span>
            </div>
            <div class="stat">
                <p class="stat-left">Thursday</p>
                <p class="stat-right">300 Visits <strong class="decrease">15% Decrease</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent red-minimal  p40"></span>
                </span>
            </div>
            <div class="stat">
                <p class="stat-left">Friday</p>
                <p class="stat-right">123 Visits<strong class="decrease">20% Decrease</strong></p>
                <div class="clear"></div>
                <span class="stat-background">
                    <span class="stat-cleaner"></span>
                    <span class="percent red-minimal  p20"></span>
                </span>
            </div>
        </div>
        <div class="decoration"></div>

    
        <!--Tables-->
        <div class="container no-bottom">
           <h4 class="heading-icon">How about a table?</h4>
           <p>And it's pure CSS3! That means you just fill in the data, and the table expands to fit the size you need!</p>
           <table cellspacing="0" class="table">
                <tbody><tr>
                    <th>TABLE</th>
                    <th class="table-title">PLUS</th>
                    <th class="table-title">PRO</th>
                </tr>
                    
                <tr>
                    <td class="table-sub-title">ONE</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
                
                <tr class="even">
                    <td class="table-sub-title">TWO</td>
                    <td>No</td>
                    <td>Yes</td>
                </tr>
                
                <tr>
                    <td class="table-sub-title">THREE</td>
                    <td>No</td>
                    <td>No</td>
                </tr>
                
                <tr class="even">
                    <td class="table-sub-title">VALUE</td>
                    <td class="price">$9.<sup class="small-price">99</sup></td>
                    <td class="price">$109.<sup class="small-price">99</sup></td>
                </tr>       
            </tbody></table>
        </div>   
        <div class="footer">
        	<a class="footer-facebook" href="#"></a>
            <a class="footer-twitter" href="#"></a>
            <a class="footer-up go-up" href="#"></a>
            <em>All rights reserved</em>
        </div>           
	</div>
</div>


































<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><div id="cboxNext" style="float: left;"></div><div id="cboxPrevious" style="float: left;"></div><div id="cboxSlideshow" style="float: left;"></div><div id="cboxClose" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>