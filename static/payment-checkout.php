<?php
  $hosted_button_id = "NU6PK7FZEWDUY";
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="<?php print $hosted_button_id; ?>">

<input type="hidden" name="on0" value="Order ID">
<input type="hidden" name="os0" value="<?php print uniqid(); ?>" class="paypal-on1" maxlength="200">

<input type="hidden" name="on1" value="File Path">
<input type="hidden" name="os1" value="" class="paypal-os1" maxlength="200">

<button type="submit" name="submit" title="Checkout with PayPal" class="btn btn-success btn-lg"><span class="glyphicons glyphicons-paypal"></span> Checkout</button>

<p class="text-center"><em><small>*Billing and shipping information with be collected during PayPal checkout.</small></em></p>
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
