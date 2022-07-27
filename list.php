

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
  <!------ Include the above in your HEAD tag ---------->
  <form method="post" action="action.php" enctype="multipart/form-data">
  <div style="background-color:grey; height:400px; width:400px; border-radius:10px; text-align:center; margin-top:180px;" marginTop="100px" class="col-md-offset-4">
  <h1 style="text-align:center; padding-top:30px; color:#ffffff;">Add Product</h1>

  <div class="col-sm-12" style="padding-top:10px;">
  <input type="Text" class="form-control" name="name" id="Firstname" placeholder="Name"  style="border-radius:15px;">
  </div>
  <div class="col-sm-12" style="padding-top:10px;">
  <input type="Text" class="form-control" name="date" id="date" placeholder="date"  style="border-radius:15px;">
  </div>
  <div class="col-sm-12" style="padding-top:10px;">
  <input type="discription" class="form-control" name="discription" id="discription" placeholder="discription"  style="border-radius:15px;">
  </div>
  <div class="col-sm-12" style="padding-top:10px;">
  <input type="location" class="form-control" name="location" id="location" placeholder="Enter location" 
   style="border-radius:15px;">
  </div>
  <div class="col-sm-12">
  <label for="formFileLg" class="form-label"></label>
  <input class="form-control" name="image" id="File" type="file"/>

  </div>


  <button name="listitems" class="col-md-4 col-md-offset-4 btn" style="background-color:#ffffff; color:#626a69; font-size:20px; margin-top:10px;" type="submit"> Submit
  </button>
</form>

</body>