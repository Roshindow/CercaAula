<?php $page='t'; ?>
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
        
       
        <!--Text Columns-->
        
        <div class="container no-bottom">
            <h4>1/1</h4>
            <p>
                Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo.  
                Lorem ipsum dolor sit, consectetur adipiscing.  
            </p> 
        </div>
    
        <div class="column">
            <div class="one-half">
                <h4>1/2</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque fermentum. 
                </p> 
            </div>
            <div class="one-half">
                <h4>2/2</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque fermentum. 
                </p> 
            </div>
        </div>
    
        <div class="column">
            <div class="one-third">  
                <h4>1/3</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque. 
                </p>
            </div>
            <div class="one-third">
                <h4>2/3</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque. 
                </p> 
            </div>
            <div class="one-third">
                <h4>3/3</h4>
                <p class="no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque. 
                </p>
            </div>
        </div>
        
        <div class="decoration"></div>
    
    
        <div class="container">
            <img alt="img" src="images/icons-large/icon1@2x.png" class="center-icon half-bottom">
            <h3 class="center-text uppercase">A large centered icon!</h3>
            <p class="center-text">
                Lorem ipsum dolor sit amet, consectetur. <br>
                Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
            </p> 
        </div> 
        
        <div class="decoration"></div>
    
        <div class="column">
            <div class="one-half">
                <img alt="img" src="images/icons-large/icon2@2x.png" class="center-icon">
                <h3 class="center-text uppercase">Big Icons?</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. <br>
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p> 
            </div>
            <div class="one-half">
                <img alt="img" src="images/icons-large/icon1@2x.png" class="center-icon">
                <h3 class="center-text uppercase">Centerd up!</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. <br>
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p> 
            </div>
        </div>
        
    
        
        <!--<div class="container no-bottom">
            <img class="column-icon" src="images/icons-large/icon1@2x.png" width="85" alt="img">
            <h3>A large icon</h3>
            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. </p> 
        </div> -->
        
        <div class="decoration"></div>
        
        <div class="column">
            <div class="one-third">
                <img alt="img" src="images/icons-large/icon2@2x.png" class="center-icon">
                <h3 class="uppercase center-text">One Thirds</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. 
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p> 
            </div>
            <div class="one-third">
                <img alt="img" src="images/icons-large/icon3@2x.png" class="center-icon">
                <h3 class="uppercase center-text">Two Thirds</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing. 
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p>  
            </div>
            <div class="one-third">
                <img alt="img" src="images/icons-large/icon4@2x.png" class="center-icon">
                <h3 class="uppercase center-text">Three Thirds</h3>
                <p class="center-text no-bottom">
                    Lorem ipsum dolor sit, consectetur adipiscing.
                    Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo. <br> 
                </p> 
            </div>
        </div>
        
        <div class="decoration"></div>
        
        <!--Text Columns With Icons-->
    
        <div class="column">
            <h4 class="uppercase">Full width text!</h4>
            <p class="no-bottom">
                <span class="icon icon-user1"></span>
                Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque fermentum, justo arcu posuere justo.  
                Lorem ipsum dolor sit, consectetur adipiscing.
            </p> 
        </div>
        
        <div class="column">
            <div class="one-half">
                <h4>1/2</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque. 
                </p> 
            </div>
            <div class="one-half">
                <h4>2/2</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem ipsum dolor sit, consectetur adipiscing. Aliquam pellentesque, purus quis pellentesque.  
                </p> 
            </div>
        </div>
        
        <div class="column">
            <div class="one-third">  
                <h4>1/3</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem Ipsum is simply dum text of the print. 
                </p>
            </div>
            <div class="one-third">
                <h4>2/3</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem Ipsum is simply dum text of the print. 
                 </p> 
            </div>
            <div class="one-third">
                <h4>3/3</h4>
                <p class="no-bottom">
                    <span class="icon icon-user1"></span>Lorem Ipsum is simply dum text of the print. 
                </p>
            </div>
        </div>
        
        <div class="decoration"></div>
     
        <!--Headings And Text Left Right Center--> 
        
        <div class="container no-bottom">
            <h4 class="uppercase left-text">Left Heading</h4>
            <p class="left-text">Lorem Ipsum is simply dummy text. </p>
            
            <h4 class="uppercase center-text">Center Heading</h4>
            <p class="center-text">Lorem Ipsum is simply dummy text. </p>
            
            <h4 class="uppercase right-text">Right Heading</h4>
            <p class="right-text">Lorem Ipsum is simply dummy text. </p>
        </div>
        
        <div class="decoration"></div>
        
        <div class="column">
            <div class="one-half-responsive">
                <h4 class="uppercase">Show me the headings!</h4>
                <p>All types of headings, made beautiful, perfectly selected! Headings have a very simple class that if added turn the to uppercase! No need to type all caps, no need to edit a long line! Just add or remove a class!</p>
            </div>
            <div class="one-half-responsive">
                <h5 class="center-text">This is a heading example</h5>
                <h4 class="center-text">This is a heading example</h4>
                <h3 class="center-text">This is a heading example</h3>
                <h2 class="center-text">This is a heading example</h2>
                <h1 class="center-text">This is a heading example</h1>
            </div>
        </div>
    
        <div class="decoration"></div>
       
        <!--DropCaps-->
    
        <div class="column no-bottom">
            <div class="one-half-responsive">
                <h4 class="uppercase">Dropcaps!</h4>
                <p>Maybe you have a taste for oldschool typography! In that case you really need dropcaps! It's just amazing!</p>
            </div>
            <div class="one-half-responsive">
            	<p>
                <strong class="dropcaps">D</strong>
                ropcaps is amazing, especially when you love typopgraphy like I do! Typography is very important, and needs to be clean and perfectly sized! 
                </p>
            </div>
        </div>
        
        <div class="decoration"></div>
        
        <!--Highlights-->
        
        <div class="container no-bottom">
            <h4 class="uppercase">Highlights!</h4>
            <p>There are some parts of text where bold just won't cut it! Having text highlights makes it so much easier to emphesize a point of view!</p>
        </div>
        <div class="no-bottom">
        <div class="container">
            <p>
                <span class="highlight bg-gray">Highlighted text is</span>is simply awesome!
            </p>
            
            <p>
                <span class="highlight bg-orange">Highlighted text is</span>is simply awesome!
            </p>
            <p>
                <span class="highlight bg-yellow">Highlighted text is</span>is simply awesome!
            </p>
            
            <p>
                <span class="highlight bg-green">Highlighted text is</span>is simply awesome!
            </p>
        </div>
    
        <div class="decoration"></div>
    
        <div class="column no-bottom">
            <div class="one-half-responsive">
                <h4 class="uppercase">Want code?</h4>
                <p>We have this too! Of course! It's suppose to be the most complete template out there!</p>        
            </div>
            <div class="one-half-responsive">
                <div class="code">
                    <span class="wline"> &lt;p class="test1" &gt;Simple code! &lt;/p&gt;</span>
                    <span class="gline"> &lt;p class="test2" &gt;Simple code! &lt;/p&gt;</span>
                </div>        
            </div>  
        </div>
    
        <div class="decoration"></div>
    
        <!--Quotes-->
        
        <div class="column">
            <div class="one-half-responsive">
                <h4 class="uppercase">Quotes</h4>
                <p>Maybe you have some testimonials you would like to share! So we've styled some quote styles for you! Quotes can use icons or can simply be used as text! And they are extremly simple to use!</p>        
            </div>
            <div class="one-half-responsive">
                <blockquote class="quote">
                    <em>
                        "Lorem ipsum dolor sit amet, consec tetur adisc ipiscing elit."
                    </em>
                    <strong>- John Doe, CEO</strong>
                </blockquote>	
                <blockquote class="quote-icon">
                    <em>
                        <span class="icon icon-user1"></span>
                        "Lorem ipsum dolor sit amet, consec tetur adisc ipiscing elit."
                    </em>
                    <strong>- John Doe, CEO</strong>
                </blockquote>	        
            </div>
        </div>
    
        <!--Simple Lists-->
        
        <div class="decoration"></div>
    
        <div class="container no-bottom">
            <h4 class="uppercase">Lists and Icon Lists?</h4>
            <p>lists are probably the most important element in any page! So we piled 40 of the best icons just for you!</p>
    
            <div class="column no-bottom">
                <div class="one-half">
                    <ul class="icon-lists">
                        <li class="list-address">Addressbook.</li>
                        <li class="list-block">Block icon.</li>
                        <li class="list-bookmark">Bookmark.</li>
                        <li class="list-bubble">Bubble list.</li>
                        <li class="list-briefcase">Briefcase list.</li>
                        <li class="list-buy">Buy icon list.</li>
                        <li class="list-calendar">Calendar list.</li>
                        <li class="list-clipboard">Clipboard list.</li>
                        <li class="list-delete">Delete icon.</li>
                        <li class="list-clock">Clock icon.</li>
                        <li class="list-diagram">Diagram list.</li>
                        <li class="list-document">Document.</li>
                        <li class="list-down">Down icon.</li>
                        <li class="list-flag">Flag icon list.</li>
                        <li class="list-folder">Folder icon.</li>
                        <li class="list-gear">Gear icon list.</li>
                        <li class="list-globe">Globe icon.</li>
                        <li class="list-heart">Heart icon.</li>
                        <li class="list-help">Help icon list.</li>
                        <li class="list-home">Home icon.</li>
                    </ul>            
                </div>
                <div class="one-half">
                    <ul class="icon-lists">
                        <li class="list-label">Label icon.</li>
                        <li class="list-left">Left icon list.</li>
                        <li class="list-letter">Letter icon.</li>
                        <li class="list-monitor">Monitor list.</li>
                        <li class="list-pencil">Pencil icon.</li>
                        <li class="list-plus">Plus icon list.</li>
                        <li class="list-present">Present list.</li>
                        <li class="list-print">Print icon.</li>
                        <li class="list-right">Right icon.</li>
                        <li class="list-save">Save icon list.</li>
                        <li class="list-shield">Sheild icon.</li>
                        <li class="list-statistics">Statistics list.</li>
                        <li class="list-stop">Stop icon list.</li>
                        <li class="list-tick">Tick icon list.</li>
                        <li class="list-trash">Trash icon.</li>
                        <li class="list-up">Up icon list.</li>
                        <li class="list-user">User icon list.</li>
                        <li class="list-walet">Wallet list.</li>
                        <li class="list-warning">Warning list.</li>
                        <li class="list-key">Key icon list.</li>
                    </ul>           
                </div>
        	</div>     
        </div>   
        <div class="decoration"></div>
       
    
        <!--The Tables-->   
          
        <div class="container no-bottom">
           <h4 class="uppercase">How about a table?</h4>
           <p>And it's pure CSS3! That means you just fill in the data, and the table expands to fit the size you need!</p>
           <table cellspacing="0" class="table">
                <tbody><tr>
                    <th>TABLE</th>
                    <th class="table-title">PLUS</th>
                    <th class="table-title">PRO</th>
                </tr>
                    
                <tr>
                    <td class="table-sub-title"> ONE</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
                
                <tr class="even">

                    <td class="table-sub-title"> TWO</td>
                    <td>No</td>
                    <td>Yes</td>
                </tr>
                
                <tr>
                    <td class="table-sub-title"> THREE</td>
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
    
        <div class="decoration"></div> 
        
        <!--Speach Bubbles-->
        
        <div class="container no-bottom">
            <h3>Speach bubbles?</h3>
            <p>A nice way of showing off a conversation maybe?</p>
        
            <em class="speach-left-title">John Doe says:</em>
            <p class="speach-left">This is just an awesome bubble!</p>
            
            <div class="clear"></div>
            
            <em class="speach-right-title">Jane Doe replied:</em>
            <p class="speach-right">Yeap! It's awesome isn't it and it's not that hard to use! And they act like bubbles, only expanding to 75% of width!</p>
            
            <div class="clear"></div>  
                 
            <em class="speach-left-title">John Doe says:</em>
            <p class="speach-left">Awesome stuff!</p>
            
        </div>
        
        <div class="decoration"></div>
        
        <div class="column no-bottom">
            <div class="one-half-responsive">
                <h4 class="uppercase">Want code?</h4>
                <p>We have this too! Of course! It's suppose to be the most complete template out there!</p>        
            </div>
            <div class="one-half-responsive">
                <div class="code">
                    <span class="wline"> &lt;p class="test1" &gt;Simple code! &lt;/p&gt;</span>
                    <span class="gline"> &lt;p class="test2" &gt;Simple code! &lt;/p&gt;</span>
                </div>        
            </div>  
        </div>
    
        <div class="decoration"></div>
    
        <!--Quotes-->
        
        <div class="column">
            <div class="one-half-responsive">
                <h4 class="uppercase">Quotes</h4>
                <p>Maybe you have some testimonials you would like to share! So we've styled some quote styles for you! Quotes can use icons or can simply be used as text! And they are extremly simple to use!</p>        
            </div>
            <div class="one-half-responsive">
                <blockquote class="quote">
                    <em>
                        "Lorem ipsum dolor sit amet, consec tetur adisc ipiscing elit."
                    </em>
                    <strong>- John Doe, CEO</strong>
                </blockquote>	
                <blockquote class="quote-icon">
                    <em>
                        <span class="icon icon-user1"></span>
                        "Lorem ipsum dolor sit amet, consec tetur adisc ipiscing elit."
                    </em>
                    <strong>- John Doe, CEO</strong>
                </blockquote>	        
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


































</div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><div id="cboxNext" style="float: left;"></div><div id="cboxPrevious" style="float: left;"></div><div id="cboxSlideshow" style="float: left;"></div><div id="cboxClose" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>