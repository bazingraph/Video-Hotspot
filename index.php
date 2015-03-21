 <?php
$video_array = array
('http://artheontech.com/images/test1.mp4',
'http://artheontech.com/images/test2.mp4',
'http://artheontech.com/images/test3.mp4',
'http://artheontech.com/images/test4.mp4');

shuffle( $video_array );
$video = $video_array[0];
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
  
    <!-- Basic -->
	<title>ATRAMS Hotspot</title>
    
    <!-- Define Charset -->
	<meta charset="utf-8">
    
    <!-- Responsive MetaTag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Page Description and Author -->
    <meta name="description" content="ATRAMS Hotspot">
    <meta name="author" content="Kofi Kwarteng">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    
    <!-- CSS Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/icons.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/colors/chrome-orange.css" media="screen">
	<link href="css/video-js.css" rel="stylesheet" type="text/css">
	<link href="css/video.css" rel="stylesheet" type="text/css">
     

	<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
</head>
<body>
 
    

<!-- Start Video Section -->


	<div class="container">
    
    	<div class="row">
            
            <div class="col-md-6 col-md-offset-3">
                <!-- Title -->
                <div class="section-title text-center">
                    <h2>ATRAMS Hotspot</h2>
						<div class="title-icon"><span><i class="icon-video"></i></span></div>
                    <p class="lead">Free browsing <span>Starts</span> in 60 seconds.</p>
                </div>
                <!-- Space -->
                <div class="hr" style="margin-bottom:50px;"></div>
            </div>
            
        </div>
    	
        <div class="row">
            
            <div class="col-md-6 col-md-offset-3">
				<div class="video_holder">
					<video id="video1" class="video-js vjs-default-skin vjs-big-play-centered video-js-fullscreen" width="500" height="270" controls preload="none" autoplay preload="none" data-setup='{ "example_option": true, "width": "auto", "height": "auto", "techOrder": ["html5","flash"] }'>
						<source src="<?php echo $video; ?>" type='video/mp4' />
					</video> 
               
               </div> 
            </div>
        
        </div>
        
    </div>


<!-- End Video Section -->
 
<!-- Start Footer -->
<div id="footer" class="section footer-section light-section">
    
    <a href="#video" id="goTop" class="scroll-to"><i class="icon-arrow-up11"></i></a>

	<div class="container">
    
    	<div class="row">
        
        	<div class="col-md-12">
              
                
                <!-- Copyright -->
                <div class="copyright">All rights reserved. Copyright © 2015 <a class="accent-color" href="http://atrams.co" target="_blank">ATRAMS Tracking LTD</a></div>
                <!-- Social Icons -->
                <div class="social-icons">
                	<ul>
                    	<li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        
        </div>
    
    </div>
    
</div>
<!-- End Footer -->


<!-- Javascript-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/video.js" ></script>
<script type="text/javascript" src="js/hotspot.js"></script>





</body>
</html>