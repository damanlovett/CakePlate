<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <?php $this->Html->charset(); ?>  

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

  <!-- encoding must be specified within the first 512 bytes www.whatwg.org/specs/web-apps/current-work/multipage/semantics.html#charset -->

  <!-- meta element for compatibility mode needs to be before all elements except title & meta msdn.microsoft.com/en-us/library/cc288325(VS.85).aspx --> 
  <!-- Chrome Frame is only invoked if meta element for compatibility mode is within the first 1K bytes code.google.com/p/chromium/issues/detail?id=23003 -->    

  
  <title><?php echo $title_for_layout;?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php echo $this->Html->url('/favicon.ico'); ?>">
  <link rel="apple-touch-icon" href="<?php echo $this->Html->url('/apple-touch-icon.png'); ?>">
                
  <?php   	  	
	$this->Html->css(array('style'),NULL,array('inline'=>false));	
	
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
    <header id="header">
	<?php echo $this->element('header');?>
    </header>
    
    <div id="content">
	<?php echo $content_for_layout ?>
    </div>
    
    <footer id="footer">
	<?php echo $this->element('footer');?>
    </footer>
  </div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
 <!-- If you want to fallback, download jquery to your js dir -->
  <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo $this->Html->url('/js/libs/jquery-1.4.4.min.js'); ?>"%3E%3C/script%3E'))</script>

  <!--[if lt IE 7 ]>
	<?php echo $this->Html->script('libs/dd_belatedpng'); ?>
  <![endif]-->

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
  
</body>
</html>