<!doctype html><!--[if lt IE 7]><html lang="us" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if lt IE 8]><html lang="us" class="no-js lt-ie10 lt-ie9 lt-ie8"><![endif]--><!--[if lt IE 9]><html lang="us" class="no-js lt-ie10 lt-ie9"><![endif]--><!--[if lt IE 10]><html lang="us" class="no-js lt-ie10"><![endif]--><!--[if gte IE 10]><!--><html lang="us" class="no-js"><!--<![endif]-->
<?php print "<!-- Execution time: ".$execution_time." -->"; ?>
<head>

<meta name="apple-mobile-web-app-capable" content="yes"><meta name="viewport" content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0,width=device-width,minimal-ui"><meta name="HandheldFriendly" content="True"><meta name="MobileOptimized" content="320">

<title><?php print $head_title; ?></title>
<meta name="description" content="Custom, handmade, fine art, charcoal portraits, or your child, baby, newborn, infant and more, by Adrienne Mollette.">

<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/glyphicons.css">
<link rel="stylesheet" href="/css/glyphicons-social.css">
<link rel="stylesheet" href="/css/glyphicons-halflings.css">
<link rel="stylesheet" href="/css/chosen.css">
<link rel="stylesheet" href="/lib/jquery-share/jquery.share.css">
<link rel="stylesheet" href="/fonts/freebooterscript.css">
<link rel='stylesheet' href="/fonts/museoslab500.css">
<link rel="stylesheet" href="/css/main.css" class="cssfx">

<script src="/js/html5.js"></script>
<script src="/js/cssfx.js"></script>
<script src="/js/modernizr.js"></script>
</head>

<body class="bg-blue-lighter text-blue-darker"><a class="sr-only" href="#content">Skip to content.</a>
<nav id="navbar" class="navbar navbar-inverse bg-blue-dark navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/">Forever in Charcoal</a>
    </div><!--navbar-header-->

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="/#portfolio">Portfolio</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/#content" title="Get your Forever in Charcoal, Fine Art Charcoal Portait Today"><em>Purchase Today!</em></a></li>
        
        <li><a href="//facebook.com/adrienne.mollette" title="Facebook: Adrienne Mollette - Forever In Charcoal"><span class="social social-facebook"></span> <span class="visible-xs-inline-block">Facebook</span></a></li>
        
        <li><a href="tel://1-828-226-2697"><span class="halflings halflings-phone"></span> <span class="visible-xs-inline-block">Call: +1 (828) 226-2697</span></a></li>
      </ul>
    </div><!--navbar-collapse-->
  </div><!--container-fluid-->
</nav><!--navbar-->

<?php print $content; ?>

<div id="bottom" class="footer bg-blue-darker text-blue-light container-fluid">
  <p>&copy; Forever In Charcoal 2015</p>
</div>

<div id="share"></div>
<a href="#0" class="cd-top"></a>

<script src="/js/jquery.js"></script>
<script src="/js/migrate.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/ui.js"></script>
<script src="/js/easing.js"></script>
<script src="/js/chosen.js"></script>
<script src="/lib/jquery-share/jquery.share.js"></script>
<script src="/js/scrollReveal.js"></script>
<script src="/js/switchable.js"></script>
<script src="/js/knob.js"></script>
<script src="/js/core.js"></script>

<script>
  $(function(){
    
  });
</script>

<script>
$(function(){
  $('#share').share({
    networks: ['twitter','facebook','googleplus','linkedin','stumbleupon'],
    orientation: 'vertical',
    urlToShare: 'http://foreverincharcoal.com',
    affix: 'right center',
    theme: 'square',
  });
  
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 100,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 300,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 500,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
});
</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-58708838-1', 'auto');
ga('send', 'pageview');
</script>
</body>
</html>
