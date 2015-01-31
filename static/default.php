<div id="banner" class="giant-marketing-banner">
  <div class="container-fluid">
    <h1 class="fancy">
      <strong><a href="/" title="Home | Forever In Charcoal - Custom, Handmade, Fine Art, Charcoal Portraits of Children by Adrienne Mollette"><img src="/img/fic-logo-white.png" alt="Forever In Charcoal" style="max-width:480px; width:100%; height:auto"></a></strong>
    </h1>

    <h2><em>- Custom, Handmade, Fine Art, Charcoal Portraits of Children by Adrienne Mollette.</em></h2>
    
    <p class="anchor-padding"><a href="#ordering" class="btn btn-empty-white btn-lg">Ordering Info <span class="glyphicons glyphicons-down-arrow"></span></a></p>
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
    
    <form id="checkout" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0; padding:0">
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

      <input name="os0" id="order" value="<?php print uniqid(); ?>" type="hidden" required>
      <input name="os1" id="photo" type="hidden"><!-- /programmatic fields -->

      <div id="step1" class="col-lg-4">
        <div class="page-header">
          <h3 class="slab">Step One: <small class="text-blue-dark">Information</small></h3>
        </div>

        <div class="alert alert-info"><strong>*During this process we may need to contact you. Please provide valid contact information.</strong></div>

        <div id="name-group" class="form-group">
          <label id="name-label" for="name" class="control-label">* Name:</label>
          <input id="name" name="os4" type="text" placeholder="John Doe" maxlength="200" class="form-control" required>
        </div>

        <div id="phone-group" class="form-group">
          <label id="phone-label" for="phone" class="control-label">* Phone:</label>
          <input id="phone" name="os5" type="text" placeholder="8285555555" maxlength="200" class="form-control" required>
        </div>

        <div id="email-group" class="form-group">
          <label id="email-label" for="email" class="control-label">* Email:</label>
          <input id="email" name="os6" type="text" placeholder="you@example.com" maxlength="200" class="form-control" pattern="[^ @]*@[^ @]*" data-format="name@domain[.tld]">
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

                  <input id="file" name="files[]" type="file" class="btn-file">
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
            <textarea id="comments" name="os7" class="form-control" placeholder="Anything to add?" rows="3" maxlength="200"></textarea>
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

        <button type="submit" name="submit" id="submit" class="btn btn-success" title="Checkout with PayPal."><span class="social social-paypal"> </span> Checkout</button>
      </div>
    </form>
  </div>
  
  <hr>
  <p class="anchor-padding"><a href="#portfolio" class="btn btn-empty-blue btn-lg">Portfolio <span class="glyphicons glyphicons-down-arrow"></span></a></p>
</div>

<div id="portfolio" class="container-fluid anchor-padding">
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