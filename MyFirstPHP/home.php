<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Project Description" />
    <meta name="keywords" content="Project Keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>DZDivs</title>
    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!--[if IE]><link rel="stylesheet" href="css/style-ie.css" type="text/css" /><![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#slider-images').cycle({ 
                fx:     'fade', 
                speed:   500, 
                timeout: 3000,
                pager: '#slider-nav'
            });               
        });
    </script>        
</head>

<body>

    <div id="top" class="clearfix">
        <div class="wrap clearfix">
            <div id="sitelogo" class="left">
                <a href="index.html">DZDivs</a>
            </div><!-- // end #sitelogo -->
            <div id="topnav" class="right">
                <ul>
                	<li><a href="index.php">Login</a></li>
                	<?php 
                		include('linkdb.php');
	                	include('menu.php');
                	?>
                </ul>
            </div><!-- // end #topnav -->
        </div><!-- // end .wrap -->
    </div><!-- // end #top -->
    
    <div id="splash">
        <div class="wrap">
            <div id="splash-slider" class="rounded">
                <div id="slider-images">
                    <img src="images/slide-1.jpg" alt="slide"  class="rounded" />
                    <img src="images/slide-2.jpg" alt="slide"  class="rounded" />
                    <img src="images/slide-3.jpg" alt="slide"  class="rounded" />
                    <img src="images/slide-1.jpg" alt="slide"  class="rounded" />
                    <img src="images/slide-2.jpg" alt="slide"  class="rounded" />
                    <img src="images/slide-3.jpg" alt="slide"  class="rounded" />                    
                </div>
            </div><!-- // end #splash-slider -->
            <div id="slider-nav"></div>            
        </div><!-- // end .wrap -->
    </div><!-- // end #splash -->
    
    <div id="main">
        <div class="content wrap clearfix">
            <div class="column-a left">
				<?php include('showAllData.php'); ?>
        	</div><!-- // end .wrap -->
    </div><!-- // end #main -->
</body>
</html>