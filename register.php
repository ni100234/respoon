<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="register.css" rel="stylesheet" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<style>
  body{
    background: url(w1.jpg)
  }
  </style>

  <!------ Include the above in your HEAD tag ---------->
  <form action="action.php"  method="post">
  <div style="background:; height:400px; width:400px; border-radius:10px; text-align:center; margin-top:180px;" marginTop="100px" class="col-md-offset-4">
  <h1 style="text-align:center; padding-top:30px; color:#ffffff;">Register now</h1>

  <div class="col-sm-12" style="padding-top:10px;">
  <input type="Text" class="form-control" name="Firstname" id="Firstname" placeholder="First Name" name="Firstname" style="border-radius:15px;">
  </div>
  <div class="col-sm-12" style="padding-top:10px;">
  <input type="Text" class="form-control" name="Lastname" id="Lastname" placeholder="Last Name" name="Lastname" style="border-radius:15px;">
  </div>
  <div class="col-sm-12" style="padding-top:10px;">
  <input type="Address" class="form-control" name="Address" id="Address" placeholder="Address" name="Address" style="border-radius:15px;">
  </div>
  <div class="col-sm-12" style="padding-top:10px;">
  <input type="Email" class="form-control" name="Email" id="Email" placeholder="Enter Email" name="Email" style="border-radius:15px;">
  </div>
  <div class="col-sm-12" style="padding-top:10px;"> 
  <input type="Password" class="form-control" name="Password" id="Password" placeholder="Type your Password" name="Password" style="border-radius:15px;">
  </div>


  <button name="register" class="col-8 col-md-offset-4 btn" style="background-color:#ffffff; color:#626a69; font-size:20px; margin-top:10px;" type="submit"> Submit
  </button>

</body>
</html>