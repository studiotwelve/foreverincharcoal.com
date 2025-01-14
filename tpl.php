<!doctype html><!--[if lt IE 7]><html lang="us" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if lt IE 8]><html lang="us" class="no-js lt-ie10 lt-ie9 lt-ie8"><![endif]--><!--[if lt IE 9]><html lang="us" class="no-js lt-ie10 lt-ie9"><![endif]--><!--[if lt IE 10]><html lang="us" class="no-js lt-ie10"><![endif]--><!--[if gte IE 10]><!--><html lang="us" class="no-js"><!--<![endif]-->
<head>

<meta name="apple-mobile-web-app-capable" content="yes"><meta name="viewport" content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0,width=device-width,minimal-ui"><meta name="HandheldFriendly" content="True"><meta name="MobileOptimized" content="320">

<title><?php print $head_title; ?></title>
<meta name="description" content="Custom, handmade, fine art, charcoal portraits, or your child, baby, newborn, infant and more, by Adrienne Mollette.">

<link rel="publisher"  href="https://twitter.com/4evercharcoal">
<link rel="publisher"  href="https://facebook.com/FICchildmemories">
<link rel="publisher"  href="https://plus.google.com/113290018799292395530">

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

<body class="bg-blue-lighter text-blue-darker" data-execution-time="<?php print $execution_time; ?>">
<a class="sr-only" href="#content">Skip to content.</a>

<nav id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
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
        <li><a href="#ordering" title="Get your Forever in Charcoal, Fine Art Charcoal Portait Today.">Ordering Info</a></li>
        <li><a href="#portfolio" title="View Forever in Charcoal, Fine Art Charcoal Portraits of Children.">Portfolio</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="//twitter.com/4evercharcoal" title="Twitter: Adrienne Mollette - Forever In Charcoal" rel="publisher"><span class="social social-twitter"></span> <span class="visible-xs-inline-block">Twitter</span></a></li>
        
        <li><a href="//facebook.com/FICchildmemories" title="Facebook: Adrienne Mollette - Forever In Charcoal" rel="publisher"><span class="social social-facebook"></span> <span class="visible-xs-inline-block">Facebook</span></a></li>
        
        <li><a href="//plus.google.com/113290018799292395530" title="Google+: Adrienne Mollette - Forever In Charcoal" rel="publisher"><span class="social social-google-plus"></span> <span class="visible-xs-inline-block">Google+</span></a></li>
        
        <li><a href="tel://1-828-944-0203"><span class="halflings halflings-phone"></span> <span class="visible-xs-inline-block">Call: +1 (828) 944-0203</span></a></li>
      </ul>
    </div><!--navbar-collapse-->
  </div><!--container-fluid-->
</nav><!--navbar-->

<?php print $content; ?>

<div id="bottom" class="footer bg-blue-darker text-blue-light container-fluid">
  <p>&copy; Forever In Charcoal 2015</p>

  <p><a href="https://twitter.com/4evercharcoal" rel="publisher">Twitter</a></p>
  <p><a href="https://facebook.com/FICchildmemories" rel="publisher">Facebook</a></p>
  <p><a href="https://plus.google.com/113290018799292395530" rel="publisher">Google+</a></p>
</div>

<div id="share"></div>
<a href="#banner" class="cd-top"></a>

<script src="/js/jquery.js"></script>
<script src="/js/ui.js"></script>
<script src="/js/migrate.js"></script>
<script src="/js/easing.js"></script>

<script src="/js/bootstrap.js"></script>
<script src="/js/chosen.js"></script>

<script src="/lib/jquery-share/jquery.share.js"></script>

<script src="/lib/jquery-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="/lib/jquery-upload/js/jquery.iframe-transport.js"></script>
<script src="/lib/jquery-upload/js/jquery.fileupload.js"></script>

<script src="/js/scrollReveal.js"></script>
<script src="/js/switchable.js"></script>
<script src="/js/knob.js"></script>

<script src="/js/core.js"></script>

<!-- jquery-upload -->
<script>
function isEmpty(o){
  //check if o is undefined|null|false|""
  r = false;
  
  if(o==undefined|o==null|o==false|o==""){
    r = true;
  }
  
  return r;
}

function checkRequired($o){
  var  v = $o.val(),
       m = "Your "+ $o.parent(".form-group").find(".control-label").text() +" is required.";
  
  if (isEmpty(v)) {
    addError($o,m);
    return false;
  } else {
    removeError($o);
    return true;
  }
}

function checkPattern($o){
  var  v = $o.val(),
       p = new RegExp($o.attr("pattern")),
       m = "Your "+ $o.parent(".form-group").find(".control-label").text() +" does not match the specified format: "+ $o.attr("data-format") +".",
       r = p.test(v);
  
  if (!r) {
    addError($o,m);
    return false;
  } else {
    removeError($o);
    return true;
  }
}

function addError($o,m){
  var $g = $o.parent(".form-group");
  
  $g.addClass("has-error");
  
  $g.append("<div class=\"alert alert-danger\"><strong>"+ m +".</strong></div>");
}

function removeError($o){
  var $g = $o.parent(".form-group");
  
  $g.removeClass("has-error").addClass("has-success");
  $g.find(".alert").remove();
}

$(function(){
  $('#file').fileupload({
    dataType: 'json',
    
    url: '<?php print "/files/".DOMAIN."/"; ?>',
    
    disableImageResize: /Android(?!.*Chrome)|Opera/
        .test(window.navigator.userAgent),
        
    maxFileSize: 2000000,
    
    acceptFileTypes: /(\.|\/)(jpe?g|png)$/i,

    start: function (e) {
      $("#photo-upload").collapse("hide");
      $("#photo-progress").collapse("show");
    },

    progressall: function (e, data) {
      $('#photo-progress .progress .progress-bar').css(
        'width', parseInt(data.loaded / data.total * 100, 10) + '%'
      );
    },

    done: function (e, data) {
      $('#photo-progress').collapse("hide");
      $('#photo-thumbnail').collapse("show");

      $.each(data.result.files, function (index, file) {
        $("#photo").val("/files/foreverincharcoal.com/uploaded/"+file.name);

        $("#photo-thumbnail img").attr("src", $("#photo").val());
      });
    }
  });
  
  $("#submit").click(function(event){        
    var $post = {
          fid       : "checkout",
          order     : $("#order").val(),
          name      : $("#name").val(),
          phone     : $("#phone").val(),
          email     : $("#email").val(),
          frame     : $("[name='os2'][checked]").val(),
          portfolio : $("[name='os3'][checked]").val(),
          photo     : $("#photo").val(),
          comments  : $("#comments").val()
    };
        
    var purl = "http://foreverincharcoal.com/files/foreverincharcoal.com/post.php";
          
    $.post(purl, $post, function(data, status){
      $("#checkout").submit();
    });
  });
  
  $("[required]").blur(function(e){
    $(this).parent("form").estatus = checkRequired($(this));
  });
  
  $("[pattern]").blur(function(e){
    $(this).parent("form").estatus = checkPattern($(this));
  });
  
  $("textarea[maxlength]").each(function(element){
    var $ele = $(this),
        xlen = $ele.attr("maxlength");
    
    $ele.css({"position":"relative", "overflow":"hidden"});
    $ele.after("<div class='counter'></div>");
    $ele.next(".counter").css({"position":"absolute", "bottom":0, "right":"15px", "background":"#fff", "border":"1px solid", "color":"#ddd", "border-bottom-right-radius":"4px","padding":"4px"}).text(xlen);
  }).on("keyup",function(event){
    var diff = $(this).attr("maxlength") - $(this).val().length;
    
    $(this).next(".counter").text(diff);
    
    if(diff>$(this).attr("maxlength")){
      event.preventDefault();
      event.stopPropagation();
      $(this).blur();
    }
  });
  
  $(".has-error [pattern]").blur(function(event){
    if(checkPattern($(this))){
      removeError($(this));
      $(this).trigger(event);
    }
  });
});
</script>

<!-- back to top -->
<script>
$(function(){
  $('#share').share({
    networks: ['twitter','facebook','googleplus','linkedin','stumbleupon'],
    orientation: 'vertical',
    urlToShare: 'http://foreverincharcoal.com',
    affix: 'right center',
    theme: 'square',
  });
  
  //clean anchors
  $("[href^='#']").each(function(index){
    $(this).click(function(event){
      event.preventDefault();
      
      var destination = $($(this).attr("href")).offset().top+"px";
      
      $("body,html").animate({scrollTop:destination}, 300);
    });
  });
  
  //back-to-top
	var offset = 100, offset_opacity = 300, scroll_top_duration = 300, $back_to_top = $('.cd-top');

	$(window).scroll(function(){
		($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if($(this).scrollTop() > offset_opacity){
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({scrollTop:0}, scroll_top_duration);
	});
});

</script>

<!-- google-analytics -->
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
