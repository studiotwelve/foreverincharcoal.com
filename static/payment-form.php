<form class="form-horizontal" id="order_info" name="order_info" class="order_info" method="post" action="/test.php" enctype="multipart/form-data">
  <div class="page-header">
    <h2>Order Form:</h2>
  </div>

  <div class="email form-group form-group-lg">
    <label for="email" class="col-md-2 control-label">Your Email:</label>

    <div class="col-md-10">
      <input id="email" name="email" type="email" class="email form-control input-lg" placeholder="username@provider.com">
    </div>
  </div><!--/email-->

  <div class="name form-group form-group-lg">
    <label for="name" class="name col-md-2 control-label">Child's Name:</label>

    <div class="col-md-10">
      <input id="name" name="name" type="name" class="name form-control input-lg">
    </div>
  </div><!--/name-->

  <div class="file form-group form-group-lg">
    <label for="file" class="file col-md-2 control-label">Child's Photo:</label>

    <div class="col-md-3">
      <input id="file" name="file" type="file" class="file form-control input-lg" placeholder="path/to/photo.jpg">
      <span class="help-block">*Allowed file types: <em>.jpg, .jpeg, .png</em></span>
      <input id="file_path" name="file_path" type="hidden">
    </div>

    <div class="col-md-1 text-center"><p style="margin-top:25%"><em>- or -</em></p></div>

    <div class="col-md-6">
      <input id="file_url" name="file_url" type="url" class="file_url form-control input-lg" placeholder="https://www.facebook.com/photo.php?fbid=10154935699275551">
      <span class="help-block">Enter a url to your child's photo.</span>
    </div>
  </div><!--/file-->


  <div class="row">
    <div class="col-md-5">
      <div class="page-header">
        <h3>Frame Options:</h3>
      </div>

      <div class="btn-group btn-group-lg text-center" data-toggle="buttons">
        <label class="btn btn-default btn-lg active">
          <input id="frame_black" name="frame" type="radio" autocomplete="off" value="black" checked> Black Frame <small><em>default</em></small>
        </label>

        <label class="btn btn-default btn-lg">
          <input id="frame_silver" name="frame" type="radio" autocomplete="off" value="silver"> Silver Frame
        </label>
      </div><!--/frame-->
    </div>

    <div class="col-md-7">
      <div class="page-header">
        <h3>Background Options:</h3>
      </div>

      <div class="btn-group btn-group-lg text-center" data-toggle="buttons">
        <label class="btn btn-default btn-lg active">
          <input id="background_plain" name="background" type="radio" autocomplete="off" value="plain" checked> White Background <small><em>default</em></small>
        </label>

        <label class="btn btn-default btn-lg">
          <input id="background_shaded" name="background" type="radio" autocomplete="off" value="shaded"> Shaded Background
        </label>
      </div><!--/background-->
    </div>
  </div>

  <div class="footer padding-md text-center">
    <button id="submit" name="submit" type="submit" class="btn btn-success btn-lg"><span class="glyphicons glyphicons-cart-tick"></span> Add to cart / Checkout</button>
  </div>
</form>
