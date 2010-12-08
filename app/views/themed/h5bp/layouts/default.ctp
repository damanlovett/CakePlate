<?php
//Make sure these are always added first to asset (before stuff in your views)

$_styles = array('style');
$_scripts = array('plugins','script');
?>
<!doctype html>   
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <?php echo $this->Html->charset(); ?>  

  <?php
      // Always force latest IE rendering engine (even in intranet) & Chrome Frame 
      // Remove this if you use the .htaccess
    if(Configure::read('chromeEdge')): 
  ?>
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <?php endif; ?>
  
  <title><?php echo $title_for_layout;?> h5bp</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
      // Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references
    if(Configure::read('faviconUrl')): ?>
  <link rel="shortcut icon" href="<?php echo $this->Html->url(Configure::read('faviconUrl')); ?>">
  <?php endif; if(Configure::read('appleiconUrl')): ?>
  <link rel="apple-touch-icon" href="<?php echo $this->Html->url(Configure::read('appleiconUrl')); ?>">
  <?php endif;
  
	// you may add additional stylesheets or use asset compress style sweetener using cake libs etc
	if(Configure::read('assetCompress.css')):
	  $this->AssetCompress->css($_styles);		
	  echo $this->AssetCompress->includeCss();
	else:
	  echo $this->Html->css($_styles,NULL,array('inline'=>false)); 
	endif;
	
	//Don't include handheld in asset because it needs media="handheld"
	echo $this->Html->css(array('handheld'),null,array('media'=>'handheld'));	
	
	//Example of how to use google webfonts - see webroot/css/custom.css
	//echo $this->Html->css('http://fonts.googleapis.com/css?family=Lobster',NULL,array('inline'=>true));
  ?>
  
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php echo $this->Html->script('libs/modernizr-1.6.min.js'); ?>

  
</head>

<body>

  <div id="container">
    <header>
	<?php echo $this->element('header');?>
    </header>
    
    <div id="main">
	<?php echo $content_for_layout ?>
    </div>
    
    <footer>
	<?php echo $this->element('footer');?>
    </footer>
  </div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <!-- If you want to fallback, download jquery to your js dir -->
  <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo $this->Html->url('/js/libs/jquery-1.4.4.min.js'); ?>"%3E%3C/script%3E'))</script>
  
  <!-- Optional: <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>-->  
  <!-- Optional: <script src="http://cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js"></script>-->
  
<?php
    // again you may use script or plugins with asset compress sweetener or add them here
	if(Configure::read('assetCompress.js')):
	  $this->AssetCompress->script($_scripts);
	  echo $this->AssetCompress->includeJs();
	else:
	  echo $this->Html->script($_scripts);
	endif;
 ?>

  <!--[if lt IE 7 ]>
	<?php echo $this->Html->script('libs/dd_belatedpng'); ?>
  <![endif]-->


  <?php if(Configure::read('yahooProfiling')): ?>
  <!-- yui profiler and profileviewer - remove for production -->
  <?php echo $this->Html->script('profiling/yahoo-profiling.min'); ?>
  <?php echo $this->Html->script('profiling/config')?>  
  <!-- end profiling code -->
  <?php endif; ?>
  
  <?php if(Configure::read('googleAnalytics')): ?>
  <?php echo $this->element('google_analytics', array('ga' => Configure::read('googleAnalytics'))); ?>
  <?php endif; ?>
</body>
</html>