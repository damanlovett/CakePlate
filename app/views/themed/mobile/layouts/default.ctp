<?php

// TODO : use mobile checking script to identify and redirect based on UA in app ctrlr

//Make sure these are always added first to asset (before stuff in your views)
$this->Html->script(array('mylibs/mobile','mylibs/plugins','mylibs/commonscript'),array('inline'=>false));
?>
<!doctype html>
<html lang="en" class="no-js" manifest="default.manifest">
<head>
  <?php echo $this->Html->charset(); ?>

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $title_for_layout;?> h5bp</title>
  <meta name="description" content="">
  <meta name="author" content="">
  
  <!-- Mobile viewport optimized: http://bit.ly/9AKHaZ -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  
  <!-- Web app will display in full screen mode when launched from the Web Clip icon -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  
  <!-- Makes status bar partially transparent and additionally removes it from the document flow -->
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  
  <!-- full screen startup -->
  <link rel="apple-touch-startup-image" media="screen and (resolution: 163dpi)" href="<?php echo $this->Html->url('/img/myCustomStartupGraphic.png'); ?>">
  <link rel="apple-touch-startup-image" media="screen and (resolution: 326dpi)" href="<?php echo $this->Html->url('/img/myCustomStartupGraphic4.png'); ?>">
	
  <!-- Replace apple-touch-icon.png in the root of your domain and delete these references -->
  
  <!-- High Res 114 x 114 iPhone, Android -->
  <link rel="apple-touch-icon-precomposed" media="screen and (min-resolution: 220dpi)" href="<?php echo $this->Html->url('/img/myCustomStartupGraphic4.png'); ?>">
  
  <!-- Low Res 57 x 57 iPhone, Android icon -->
  <link rel="apple-touch-icon-precomposed" media="screen and (max-resolution: 219dpi)" href="<?php echo $this->Html->url('/apple-touch-icon.png'); ?>">
  
  <!-- Nokia icon -->
  <link rel="shortcut icon" href="<?php echo $this->Html->url('/apple-touch-icon.png'); ?>">
  
  <!-- BlackBerry and some others use a meta tag for defining mobile-friendly documents -->
  <meta name="HandheldFriendly" content="True">
  
  <!-- Windows-proprietary meta tag -->
  <meta name="MobileOptimized" content="320"/>
  
  <!-- Mobile Internet Explorer allows us to activate ClearType technology for smoothing fonts for easy reading -->
  <meta http-equiv="cleartype" content="on">
  
  <!-- Specifically targeting mobile browsers -->
  <link rel="stylesheet" href="css/style.css?v=1">
  
  <?php
  
  //Don't include handheld in asset because it needs media="handheld"
  echo $this->Html->css(array('handheld'),null,array('media'=>'handheld'));	?> 
  
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php echo $this->Html->script('libs/modernizr-1.6.min.js'); ?>
</head>

<body>

  <div id="container">
    <header>
	<?php echo $this->element('header');?>
    </header>
    
    <div id="main">

    </div>
    
    <footer>
	<?php echo $this->element('footer');?>
    </footer>
  </div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo $this->Html->url('/js/libs/jquery-1.4.4.min.js'); ?>"%3E%3C/script%3E'))</script>

  <script src="js/mobile.js?v=1"></script>
<?php
  	echo $asset->scripts_for_layout('js');
 ?>

  <!--[if lt IE 7 ]>
	<?php echo $html->script('libs/dd_belatedpng')?>
  <![endif]-->


  <!-- yui profiler and profileviewer - remove for production -->
  <?php echo $html->script('profiling/yahoo-profiling.min')?>
  <?php echo $html->script('profiling/config')?>  
  <!-- end profiling code -->


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
       change the UA-XXXXX-X to be your site's ID -->
  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = '//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  <noscript>Your browser does not support JavaScript!</noscript>
</body>
</html>