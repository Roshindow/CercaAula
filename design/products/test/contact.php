<?php $page='c'; ?>
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
              
         <div class="container">
            <div class="maps-container">
        		<iframe src="https://maps.google.com/?ie=UTF8&amp;ll=47.595131,-122.330414&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed" class="responsive-image maps"></iframe>
            </div>
        </div>

        <div class="decoration"></div>
    	<div class="container no-bottom">
            <div class="contact-form no-bottom"> 
                <div id="formSuccessMessageWrap" class="formSuccessMessageWrap" style="display: none;">
                    <div class="notification-box green-box">
                        <h4>MESSAGE SENT!</h4>
                        <a class="close-notification" href="#">x</a>
                        <div class="clear"></div>
                        <p>
                            You're message has been successfully sent. Please allow up to 48 hours for us to reply!  
                        </p>  
                    </div> 
                </div>
            
                <form id="contactForm" class="contactForm" method="post" action="php/contact.php">
                    <fieldset>
                        <div id="contactNameFieldError" class="formValidationError" style="display: none;">
                            <div class="small-notification red-notification no-bottom">
                                <p>NAME IS REQUIRED</p>
                            </div>
                        </div>             
                        <div id="contactEmailFieldError" class="formValidationError" style="display: none;">
                            <div class="small-notification red-notification no-bottom">
                                <p>EMAIL IS REQUIRED</p>
                            </div>
                        </div> 
                        <div id="contactEmailFieldError2" class="formValidationError" style="display: none;">
                            <div class="small-notification red-notification no-bottom">
                                <p>ADDRESS MUST BE VALID</p>
                            </div>
                        </div> 
                        <div id="contactMessageTextareaError" class="formValidationError" style="display: none;">
                            <div class="small-notification red-notification no-bottom">
                                <p>MESSAGE FIELD IS EMPTY</p>
                            </div>
                        </div>   
                        <div class="formFieldWrap">
                            <label for="contactNameField" class="field-title contactNameField">Name:<span>(required)</span></label>
                            <input type="text" id="contactNameField" class="contactField requiredField" value="" name="contactNameField">
                        </div>
                        <div class="formFieldWrap">
                            <label for="contactEmailField" class="field-title contactEmailField">Email: <span>(required)</span></label>
                            <input type="text" id="contactEmailField" class="contactField requiredField requiredEmailField" value="" name="contactEmailField">
                        </div>
                        <div class="formTextareaWrap">
                            <label for="contactMessageTextarea" class="field-title contactMessageTextarea">Message: <span>(required)</span></label>
                            <textarea id="contactMessageTextarea" class="contactTextarea requiredField" name="contactMessageTextarea"></textarea>
                        </div>
                        <div class="formSubmitButtonErrorsWrap">
                            <input type="submit" data-formid="contactForm" value="SUBMIT" id="contactSubmitButton" class="buttonWrap button-minimal grey-minimal contactSubmitButton">
                            <a href="tel:+12 345 657 8963" class="button-minimal grey-minimal">CALL</a>
                            <a href="sms:+12 345 657 8963" class="button-minimal grey-minimal">TEXT</a>
                        </div>
                    </fieldset>
                </form>       
            </div>
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