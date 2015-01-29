<!doctype html><!--[if lt IE 7]><html lang="us" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if lt IE 8]><html lang="us" class="no-js lt-ie10 lt-ie9 lt-ie8"><![endif]--><!--[if lt IE 9]><html lang="us" class="no-js lt-ie10 lt-ie9"><![endif]--><!--[if lt IE 10]><html lang="us" class="no-js lt-ie10"><![endif]--><!--[if gte IE 10]><!--><html lang="us" class="no-js"><!--<![endif]-->
<head>

<meta name="apple-mobile-web-app-capable" content="yes"><meta name="viewport" content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0,width=device-width,minimal-ui"><meta name="HandheldFriendly" content="True"><meta name="MobileOptimized" content="320">

<title>Testing</title>
<meta name="robots" content="noindex, nofollow">

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

<body class="bg-blue-lighter text-blue-darker">
<a class="sr-only" href="#content">Skip to content.</a>

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
        <li><a href="#portfolio">Portfolio</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#ordering" title="Get your Forever in Charcoal, Fine Art Charcoal Portait Today"><em>Purchase Today!</em></a></li>

        <li><a href="//plus.google.com/113290018799292395530" title="Google+: Adrienne Mollette - Forever In Charcoal" rel="publisher"><span class="social social-google-plus"></span> <span class="visible-xs-inline-block">Google+</span></a></li>

        <li><a href="//twitter.com/4evercharcoal" title="Twitter: Adrienne Mollette - Forever In Charcoal" rel="publisher"><span class="social social-twitter"></span> <span class="visible-xs-inline-block">Twitter</span></a></li>

        <li><a href="//facebook.com/FICchildmemories" title="Facebook: Adrienne Mollette - Forever In Charcoal" rel="publisher"><span class="social social-facebook"></span> <span class="visible-xs-inline-block">Facebook</span></a></li>

        <li><a href="tel://1-828-944-0203"><span class="halflings halflings-phone"></span> <span class="visible-xs-inline-block">Call: +1 (828) 944-0203</span></a></li>
      </ul>
    </div><!--navbar-collapse-->
  </div><!--container-fluid-->
</nav><!--navbar-->

<div id="banner" class="jumbotron text-center bg-blue-light">
  <div class="container-fluid">
    <h1 class="fancy fancy-lg">
      <img src="/img/fic-logo.png" alt="Forever In Charcoal - Fine Art Charcoal Portraits by Adrienne Mollette." style="max-width:800px; width:100%; height:auto">
    </h1>

    <h2><em>- Custom, Handmade, Fine Art, Charcoal Portraits of Children by Adrienne Mollette.</em></h2>
  </div>
</div><!-- /jumbotron -->

<div id="content" class="container-fluid big-marketing-block">
  <div class="row">
    <div id="purchase-today" class="col-lg-12">
      <h1 class="slab">Purchase Today,</h1>
      <h3><em>A one of a kind, charcoal portrait of your child, 8&half;" x 11", in a black or silver frame, delivered to your door.</em></h3>
      <h2>$50.<sup><small>00</small></sup></h2>
      <p><a href="#ordering" class="btn btn-empty-blue btn-lg">Ordering Info <span class="glyphicons glyphicons-down-arrow"></span></a></p>
    </div>
  </div>

  <div id="ordering" class="row text-left anchor-padding">
    <div id="order-info" class="col-lg-12">
      <div class="page-header">
        <h2 class="slab">How to order:</h2>
      </div>

      <p>*Follow the steps below. After providing the required information, selecting checkout will take you to PayPal for secure payment processing. Once your payment information has been processed you will receive a payment confirmation email from PayPal.</p>

      <p>*Please provide shipping information to PayPal during checkout.</p>

      <p>*Once your payment has been received your order status will be: "Pending Verification". At this time we are reviewing your order information. Once your order information has been verified you will receive an order status update via email, confirming your order information and your new order status will be: "Processing." At this time, your custom charcoal portrait is being created and you should expect your order to be shipped within 5 to 7 business days.</p>
    </div>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0; padding:0">
      <input name="cmd" value="_s-xclick" type="hidden">
      <input name="hosted_button_id" value="NU6PK7FZEWDUY" type="hidden"><!-- /paypal info -->

      <input name="on0"  value="Order ID"   type="hidden">
      <input name="on1"  value="Photo"      type="hidden">
      <input name="on2"  value="Frame"      type="hidden">
      <input name="on3"  value="Portfolio"  type="hidden">

      <input name="on4"  value="Name"       type="hidden">
      <input name="on5"  value="Phone"      type="hidden">
      <input name="on6"  value="Email"      type="hidden">
      
      <input name="on7"  value="Comments"   type="hidden">

      <input name="os0" value="<?php print uniqid(); ?>" type="hidden">
      <input name="os1" id="photo-path" type="hidden"><!-- /programmatic fields -->

      <div id="step1" class="col-lg-4">
        <div class="page-header">
          <h3 class="slab">Step One: <small class="text-blue-dark">Information</small></h3>
        </div>

        <div class="alert alert-info"><strong>*During this process we may need to contact you. Please provide valid contact information.</strong></div>

        <div id="name-group" class="form-group">
          <label id="name-label" for="name" class="text-danger">Name:</label>
          <input id="name" name="os4" type="text" placeholder="* John Doe" maxlength="200" class="form-control">
        </div>

        <div id="phone-group" class="form-group">
          <label id="phone-label" for="phone" class="text-danger">Phone:</label>
          <input id="phone" name="os5" type="text" placeholder="* 8285646536" maxlength="200" class="form-control">
        </div>

        <div id="email-group" class="form-group">
          <label id="email-label" for="email" class="text-danger">Email:</label>
          <input id="email" name="os6" type="text" placeholder="* you@example.com" maxlength="200" class="form-control" pattern="/.+@.+/">
        </div>
        <div class="alert alert-success">
          <p><strong>*Privacy Policy:</strong> Forever In Charcoal, will not share your information without your explicit consent.</p>
        </div>
      </div>

      <div id="step2" class="col-lg-5">
        <div class="page-header">
          <h3 class="slab">Step Two: <small class="text-blue-dark">Options</small></h3>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h4>Would you like your finished product to arrive in a black frame or a silver frame?</h4>

            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input id="frame-black" name="os2" value="black" type="radio" autocomplete="off" checked> Black frame
              </label>

              <label class="btn btn-primary">
                <input id="frame-silver" name="os2" value="silver" type="radio" autocomplete="off"> Silver frame
              </label>
            </div>
            <hr>

            <h4>Would you like to feature your finished product in the portfolio?</h4>

            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-info active">
                <input id="portfolio-yes" name="os3" value="yes" type="radio" autocomplete="off" checked> Yes
              </label>

              <label class="btn btn-info">
                <input id="portfolio-no" name="os3" value="no" type="radio" autocomplete="off"> No
              </label>
            </div>
            <hr class="hidden-lg">
          </div>

          <div class="col-lg-6">
            <h4>Upload A Photo:</h4>

            <div id="photo-ux">
              <div id="photo-thumbnail" class="collapse">
                <img src="/img/fic-add.png" alt="Your file:" class="thumbnail img-responsive" style="min-width:100%; height:auto">
              </div>

              <div id="photo-upload" class="collapse in">
                <span class="btn btn-danger" style="position:relative; overflow:hidden">
                  <span class="glyphicons glyphicons-plus"> </span>

                  <span>Choose Photo...</span>

                  <input id="file" name="files[]" type="file" data-url="/files/foreverincharcoal.com/" class="btn-file">
                </span><br><br>
                
                <div class="alert alert-warning"><strong>*Allowed file types:</strong> jpg, jpeg, png</div>
              </div>

              <div id="photo-progress" class="collapse">
                <div class="progress">
                  <div class="progress-bar progress-bar-success progress-bar-striped active"></div>
                </div>
              </div><!-- /photo-progress-->
            </div><!-- /photo-ux-->
            <hr>
            
            <h4>Additional Comments?</h4>            
            <textarea id="comments" name="os7" class="form-control" placeholder="Anything to add?" rows="3"></textarea>
          </div><!-- /col-photo-upload-->
        </div><!-- /row-->
      </div><!-- /Step 2-->

      <div id="step3" class="col-lg-3">
        <div class="page-header">
          <h3 class="slab">Step Three: <small class="text-blue-dark">Checkout</small></h3>
        </div>
        
        <div class="alert alert-info">
          <h4>*Selecting the button <em>Checkout</em> below will take you to PayPal for payment processing</h4>
          <p>*PayPal will collect billing and shipping information on their payment form.</p>
          <p>*PayPal accepts all major payment methods, you do not need a PayPal account to checkout.</p>
        </div>

        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-blue disabled" title="Checkout with PayPal."><span class="social social-paypal"> </span> Checkout</button>
      </div>
    </form>
  </div>
</div>

<div id="portfolio" class="container-fluid">
  <h1 class="page-header slab slab-lg">Portfolio: <small class="text-blue-dark">Charcoal Portraits</small></h1>

  <div class="row">
    <div class="col-md-3"><img class="thumbnail img-responsive" src="/img/fic-lilu-1.png" alt="Forever In Charcoal - Fine Art Charcoal Drawings, by Adrienne Mollette"></div>

    <div class="col-md-3"><img class="thumbnail img-responsive" src="/img/fic-lilu-2.png" alt="Forever In Charcoal - Fine Art Charcoal Drawings, by Adrienne Mollette"></div>

    <div class="col-md-3"><img class="thumbnail img-responsive" src="/img/fic-lilu-3.png" alt="Forever In Charcoal - Fine Art Charcoal Drawings, by Adrienne Mollette"></div>

    <div class="col-md-3">
      <a href="#ordering" title="Order your custom, handmade, fine art charcoal portrait by Adrienne Mollette Now!" class="thumbnail">
        <img src="/img/fic-add.png" class="img-responsive placeholder" alt="Order and you could see your charcoal portrait here...">
      </a>

      <div class="popover top p-static">
        <div class="arrow"></div>

        <div class="popover-content text-center">
          <h4 class="slab">You could see your charcoal portrait here...</h4>
          <p class="text-center"><a href="#ordering" title="Order your custom, handmade, fine art charcoal portrait by Adrienne Mollette Now!" class="btn btn-primary btn-blue btn-lg"><span class="glyphicons glyphicons-cart-in"> </span> Order Now!</a></p>
        </div>
      </div>
    </div><!--col-md-3-->
  </div><!--row-->
</div><!--container-fluid-->

<div id="bottom" class="footer bg-blue-darker text-blue-light container-fluid">
  <p>&copy; Forever In Charcoal 2015</p>

  <p><a href="https://twitter.com/4evercharcoal" rel="publisher">Twitter</a></p>
  <p><a href="https://facebook.com/FICchildmemories" rel="publisher">Facebook</a></p>
  <p><a href="https://plus.google.com/113290018799292395530" rel="publisher">Google+</a></p>
</div>

<div id="share"></div>
<a href="#0" class="cd-top"></a>

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
$(function () {
  $('#file').fileupload({
    dataType: 'json',

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

      $("#submit").removeClass("disabled");

      $.each(data.result.files, function (index, file) {
        $("#photo-path").val("/files/foreverincharcoal.com/uploaded/"+file.name);

        $("#photo-thumbnail img").attr("src", $("#photo-path").val());
      });
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

	var offset = 100, offset_opacity = 300, scroll_top_duration = 500, $back_to_top = $('.cd-top');

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
