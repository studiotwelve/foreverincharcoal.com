<div class="jumbotron text-center bg-blue-light">
  <div class="container-fluid">
    <h1 class="fancy fancy-lg">
      <img src="/img/fic-logo.png" alt="Forever In Charcoal - Fine Art Charcoal Portraits by Adrienne Mollette." style="max-width:800px; width:100%; height:auto">
    </h1>
    
    <h2><em>- Fine Art Charcoal Portraits by Adrienne Mollette.</em></h2>

    <p>Use the <em>"Buy Now"</em> button below, to pay for your custom fine art charcoal portait(s).</p>

    <p class="text-right"><small><em>*You will be taken to PayPal for the checkout process.</em></small></p>
  </div>
</div>

<div id="content" class="container-fluid big-marketing-block">
    <div class="row">
      <div id="purchase-today" class="col-md-12 text-lg">
        <h2 class="slab slab-lg">Purchase Today,</h2>
        <p><small><em>A one of a kind, charcoal portrait of your child, 8&half;" x 11", in a black or silver frame, delivered to your door.</em></small></p>
        <h3>$50.<sup><small>00</small></sup></h3>
        
        <?php print parse(ROOT."/static/payment-checkout.php"); ?>
      </div>
    </div>
</div>

<div class="container-fluid" id="portfolio">
  <h1 class="page-header slab slab-lg">Portfolio: <small class="text-blue-dark">Charcoal Portraits</small></h1>

  <div class="row">
    <div class="col-md-3"><img class="thumbnail img-responsive" src="/img/fic-lilu-1.png" alt="Forever In Charcoal - Fine Art Charcoal Drawings, by Adrienne Mollette"></div>

    <div class="col-md-3"><img class="thumbnail img-responsive" src="/img/fic-lilu-2.png" alt="Forever In Charcoal - Fine Art Charcoal Drawings, by Adrienne Mollette"></div>

    <div class="col-md-3"><img class="thumbnail img-responsive" src="/img/fic-lilu-3.png" alt="Forever In Charcoal - Fine Art Charcoal Drawings, by Adrienne Mollette"></div>

    <div class="col-md-3">
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">

        <input type="hidden" name="hosted_button_id" value="G4XS3F4SLZZYU">

        <input class="thumbnail img-responsive placeholder" type="image" src="/img/fic-add.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

        <div class="popover top p-static">
          <div class="arrow"></div>

          <div class="popover-content text-center">
            <h4 class="slab">You could see your charcoal portrait here...</h4>
            <input type="submit" class="btn btn-blue btn-lg btn-block" name="submit" value="Buy Now">
          </div>
        </div>
      </form><!--PayPal Form-->
    </div><!--col-md-3-->
  </div><!--row-->
</div><!--container-fluid-->