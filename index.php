<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script type="text/javascript" src="//use.typekit.net/tlm7ich.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<title>Hannah Sowd | Skin Care & Massage | San Francisco California</title>

<meta name="description" content="">

<link rel="shortcut icon" href="favicon.ico">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="template/css/style.css">
<link rel="stylesheet" href="template/css/grid.css">

<script src="js/libs/modernizr-2.5.3.min.js"></script>

</head>
<body class="slabtexted" style="background-image:none;">
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div class="page-wrap">
<header class="grid-whole">
<h1><a href="index.php" id="home-header">Hannah Sowd | Skin Care &amp; Massage</a></h1>
</header>

<!-- Navigation, IDs are used to create certain widths of the <a> tag's. Designers choice not to use a font that has not been created into a web font yet. Thus this page being produced with a bunch of back ground images -->

	<nav class="grid-whole">
	<ul>
	<li><a href="about-hannah.php" id="nav-about">WHO IS HANNAH</a></li>
	<li><a href="http://www.genbook.com/bookings/slot/reservation/30051977?bookingSourceId=1000" target="_blank" id="nav-shedule">SCHEDULE/BOOK</a></li>
	<li><a href="services.php" id="nav-services">SERVICES</a></li>
	<li><a href="http://blog.hannahsowd.com" target="_blank" id="nav-blog">READ HER BLOG</a></li>
	<li><a href="http://shop.hannahsowd.com/" target="_blank" id="nav-shop">SHOP</a></li>
	</ul>
	</nav>

  
<div id="wraps" class="grid-whole">
<div class="grid-2">&nbsp;</div>
<div class="grid-8">
<img src="img/TopDivider.png" class="responsiveimage">
<h2 class="slabtextdone number"><span class="slabtext">415.830.4227</span></h2>
<h2 class="slabtextdone email"><span class="slabtext">h a n n a h s o w d @ g m a i l &middot; c o m</span></h2>
<h2 class="slabtextdone number"><span class="slabtext">1640 Bush Street</span></h2>
<h2 class="slabtextdone email"><span class="slabtext">San Francisco &middot; California &middot; 94109</span></h2>
<img src="img/BottomDivider.png" class="responsiveimage" style="padding-top: 1%; padding-bottom: 9%;">

<div class="grid-3">&nbsp;</div>
<div class="grid-half">
<div class="grid-4"><a href="http://www.facebook.com/hannahsowdskincareandmassage" target="_blank"><img src="img/facebook_flat.png" class="responsiveimage"></a></div>
<div class="grid-4">&nbsp;</div>
<div class="grid-4"><a href="http://twitter.com/#!/hannahskincare" target="_blank"><img src="img/twitter_flat.png" class="responsiveimage"></a></div>
</div>
<div class="grid-3">&nbsp;</div>

</div>
<div class="grid-2">&nbsp;</div>


<footer>
<p>Content copyright 2009-2013. Hannah Sowd, L.M.T. All rights reserved</p>
</footer>

</div>
</div>
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/libs/jquery.slabtext.min.js"></script>
<script>
  
  // smart resize - http://paulirish.com/2009/throttled-smartresize-jquery-event-handler/
  (function($,sr){
 
    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
        var timeout;
   
        return function debounced () {
            var obj = this, args = arguments;
            function delayed () {
                if (!execAsap)
                    func.apply(obj, args);
                timeout = null; 
            };
   
            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);
   
            timeout = setTimeout(delayed, threshold || 100); 
        };
    }
    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
   
  })(jQuery,'smartresize');

</script>
<script>
    // Function to slabtext the H1 headings
    function slabTextHeadlines() {
        $("h2").slabText({
            // Don't slabtext the headers if the viewport is under 380px
            "viewportBreakpoint":380
        });
    };
    
    // Called one second after the onload event for the demo (as I'm hacking the
    // fontface load event a bit here)

    // Please do not do this in a production environment - you should really use
    // google WebFont loader events (or something similar) for better control
    $(window).load(function() {
        // So, to recap... don't actually do this, it's nasty!
        setTimeout(slabTextHeadlines, 1000);
    });
  </script>  

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>


<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>