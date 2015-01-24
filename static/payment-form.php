<form class="form-horizontal" id="order_info" name="order_info" class="order_info" method="post" action="/" enctype="multipart/form-data">
  <div class="email form-group form-group-lg">
    <label for="email" class="col-sm-2 control-label">Your Email:</label>
    
    <div class="col-sm-10">
      <input id="email" name="email" type="email" class="email form-control input-lg" placeholder="username@provider.com">
    </div>
  </div><!--/email-->

  <div class="name form-group form-group-lg">
    <label for="name" class="name col-sm-2 control-label">Child's Name:</label>
    
    <div class="col-sm-10">
      <input id="name" name="name" type="name" class="name form-control input-lg">
    </div>
  </div><!--/name-->

  <div class="file form-group form-group-lg">
    <label for="file" class="file col-sm-2 control-label">Child's Photo:</label>
    
    <div class="col-sm-4">
      <input id="file" name="file" type="file" class="file form-control input-lg">
      <span class="help-block">*Allowed file types: <em>.jpg, .jpeg, .png</em></span>
      <input id="file_path" name="file_path" type="hidden">
    </div>
    
    <div class="col-sm-1"><p style="margin-top:45%"><em>- or -</em></p></div>
    
    <div class="col-sm-4">
      <input id="file_url" name="file_url" type="url" class="file_url form-control input-lg">
      <span class="help-block">Enter a url to your child's photo <em>eg: https://www.facebook.com/photo.php?fbid=10154935699275551</em></span>
    </div>
  </div><!--/file-->
  
  
  <div class="row">
    <div class="col-sm-6">
      <div class="page-header">
        <h3>Frame Options:</h3>
      </div>
      
      <div class="btn-group btn-group-lg" data-toggle="buttons">
        <label class="btn btn-default btn-lg">
          <input id="frame_silver" name="frame" type="radio" autocomplete="off" value="silver"> Silver Frame
        </label>
        
        <label class="btn btn-primary btn-black btn-lg active">
          <input id="frame_black" name="frame" type="radio" autocomplete="off" value="black" checked> Black Frame <em>default</em>
        </label>    
      </div><!--/frame-->
    </div>
    
    <div class="col-sm-6">
      <div class="page-header">
        <h3>Background Options:</h3>
      </div>
      
      <div class="btn-group btn-group-lg" data-toggle="buttons">
        <label class="btn btn-default btn-lg">
          <input id="background_shaded" name="background" type="radio" autocomplete="off" value="shaded"> Shaded Background
        </label>
        
        <label class="btn btn-primary btn-black btn-lg active">
          <input id="background_plain" name="background" type="radio" autocomplete="off" value="plain" checked> White Background <em>default</em>
        </label>    
      </div><!--/background-->
    </div>
  </div>
  
  <div class="footer-inset bg-blue-lighter">
    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-blue btn-large" value="+ Add To Cart and Checkout.">
  </div>
</form>