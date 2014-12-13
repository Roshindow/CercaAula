<?php $page='h'; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png"> 
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" /> 
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />

<!-- Page Title -->
<title>Epsilon Elements | Mobile Framework Starter</title>

<!-- Stylesheet Load -->
<link href="styles/style.css"				rel="stylesheet" type="text/css">
<link href="styles/framework-style.css" 	rel="stylesheet" type="text/css">
<link href="styles/framework.css" 			rel="stylesheet" type="text/css">
<link href="styles/bxslider.css"			rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"			rel="stylesheet" type="text/css">
<link href="styles/icons.css"				rel="stylesheet" type="text/css">
<link href="styles/retina.css" 				rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />
<link href="styles/custom.css"				rel="stylesheet" type="text/css">


<!--Page Scripts Load -->
<script src="scripts/jquery.min.js"		 type="text/javascript"></script>	
<script src="scripts/snap.js"			 type="text/javascript"></script>
<script src="scripts/hammer.js"			 type="text/javascript"></script>	
<script src="scripts/jquery-ui-min.js"   type="text/javascript"></script>
<script src="scripts/subscribe.js"		 type="text/javascript"></script>
<script src="scripts/contact.js"		 type="text/javascript"></script>
<script src="scripts/jquery.swipebox.js" type="text/javascript"></script>
<script src="scripts/bxslider.js"		 type="text/javascript"></script>
<script src="scripts/colorbox.js"		 type="text/javascript"></script>
<script src="scripts/retina.js"			 type="text/javascript"></script>
<script src="scripts/custom.js"			 type="text/javascript"></script>
<script src="scripts/custom2.js"		 type="text/javascript"></script>
<script src="scripts/framework.js"		 type="text/javascript"></script>

</head>
<body>

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>



<div class="all-elements">
    
    <?php include 'sidebar.php';?>
       
    <div id="content" class="page-content">
        <div class="page-header">
            <p class="logo location">
                <img src="images/misc/logo.png" width="63">
            </p>
            <a href="#" class="deploy-sidebar"></a>
        </div>
		<div class="container">
			<select class="day">
			</select>
			<select class="orainizio">
			</select>
			<select class="orafine">
			</select>
		</div>
		<div class="container no-bottom result">
			<ul>
			</ul>
		</div>
        <div class="container">
        	<h4 class="heading center-text">WELCOME</h4>
            <p class="center-text">Flat interfaces made to shine, look clean and perfect on any device! We've also implemented swipe features! Drag this text to the right!</p>
        </div>
        
        <div class="container-gray">
            <div class="column shadow">
                <div class="one-half">
                    <img class="center-icon" src="images/icons-large/icon2@2x.png" alt="img">
                    <h5 class="center-text uppercase">Large <br>compatibilty</h5>
                    <p class="center-text no-bottom">
                        Lorem ipsum dolor sit, consectetur adipisci. <br>
                    </p> 
                </div>
                <div class="one-half">
                    <img class="center-icon" src="images/icons-large/icon1@2x.png" alt="img">
                    <h5 class="center-text uppercase">Very <br> friendly</h5>
                    <p class="center-text no-bottom">
                        Lorem ipsum dolor sit, consectetur adipisci. <br>
                    </p> 
                </div>
            </div>
            <div class="column shadow">
                <div class="one-half">
                    <img class="center-icon" src="images/icons-large/icon3@2x.png" alt="img">
                    <h5 class="center-text uppercase">Documented for everyone</h5>
                    <p class="center-text no-bottom">
                        Lorem ipsum dolor sit, consectetur adipisci. <br>
                    </p> 
                </div>
                <div class="one-half">
                    <img class="center-icon" src="images/icons-large/icon4@2x.png" alt="img">
                    <h5 class="center-text uppercase">Built from experience</h5>
                    <p class="center-text no-bottom">
                        Lorem ipsum dolor sit, consectetur adipisci. <br>
                    </p> 
                </div>
            </div>
            <div class="column no-bottom">
                <div class="one-half">
                    <a href="#" class="flat-button flat-settings">MORE SERVICES</a>
                </div>
                <div class="one-half">
                    <a href="#" class="flat-button flat-features">PAGE FEATURES</a>
                </div>
            </div>
        </div>
        
        <div class="container no-bottom">
        	<h4 class="heading center-text">FROM THE GALLERY</h4>
            <p class="center-text">We've included a swipe gallery, both on the homepage and on a dedicated page! Try it out!</p>
        </div>
        
        <div class="container-gray">
            <ul class="gallery gallery-homepage">
                <li>
                    <a class="swipebox" href="images/gallery/full/1.jpg" title="An awesome gallery!">
                        <img src="images/slider/0s.jpg" alt="Image 001" />
                    </a>
                </li>
                <li>
                    <a class="swipebox" href="images/gallery/full/2.jpg" title="An awesome gallery!">
                        <img src="images/slider/1s.jpg" alt="Image 001" />
                    </a>
                </li>
                <li>
                    <a class="swipebox" href="images/gallery/full/3.jpg" title="An awesome gallery!">
                        <img src="images/slider/2s.jpg" alt="Image 001" />
                    </a>
                </li>
                <li>
                    <a class="swipebox" href="images/gallery/full/4.jpg" title="An awesome gallery!">
                        <img src="images/slider/3s.jpg" alt="Image 001" />
                    </a>
                </li>
                <li>
                    <a class="swipebox" href="images/gallery/full/5.jpg" title="An awesome gallery!">
                        <img src="images/slider/4s.jpg" alt="Image 001" />
                    </a>
                </li>
                <li>
                    <a class="swipebox" href="images/gallery/full/2.jpg" title="An awesome gallery!">
                        <img src="images/slider/3s.jpg" alt="Image 001" />
                    </a>
                </li>
                <li>
                    <a class="swipebox" href="images/gallery/full/1.jpg" title="An awesome gallery!">
                        <img src="images/slider/0s.jpg" alt="Image 001" />
                    </a>
                </li>
                <li>
                    <a class="swipebox" href="images/gallery/full/2.jpg" title="An awesome gallery!">
                        <img src="images/slider/1s.jpg" alt="Image 001" />
                    </a>
                </li>
                <li>
                    <a class="swipebox" href="images/gallery/full/3.jpg" title="An awesome gallery!">
                        <img src="images/slider/2s.jpg" alt="Image 001" />
                    </a>
                </li>
            </ul> 
            <div class="column no-bottom">
                <div class="one-half">
                    <a href="#" class="flat-button flat-gallery">OUR GALLERY</a>
                </div>
                <div class="one-half">
                    <a href="#" class="flat-button flat-portfolio">OUR PORTFOLIO</a>
                </div>
            </div>
        </div>
        
        <div class="container no-bottom">
        	<h4 class="heading center-text">DEPLOY THE MENU!</h4>
            <p class="center-text">The page comes with a swipe sidebar, to deploy the menu, swipe anywhere to the right!</p>
            <a href="#" class="flat-button flat-menu center-button">SWIPE TO THE RIGHT</a>
        </div>
        
        <div class="footer">
        	<a href="#" class="footer-facebook"></a>
            <a href="#" class="footer-twitter"></a>
            <a href="#" class="footer-up go-up"></a>
            <em>All rights reserved</em>
        </div>     
	</div> 
</div>


</body>
</html>





























