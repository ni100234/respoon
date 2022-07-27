<?php
session_start();

if(!$_SESSION['tiket']){
    header('location:login.php');
}


$userid = $_SESSION['userid'];
include('database.php');
 $query="select * from respon where id='$userid'";

 $result=$conn->query($query);
 $datauser=$result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>dashboard</title>
        
        
    </head>
    <body>
        
        <?php include('navbar.php'); ?>

  <div class="container">
    <div class=row>
        <div class="col-md-3"></div>
        <div class="clo-md-3"></div>
        <img src="picR.jpg" class="img-circle" width="100px" height="100px" align="left">
        <h3><?php echo $datauser['Firstname']; echo" "; echo $datauser['Lastname']; ?><h3>
        <p><?php echo $datauser['Email']?></p>
        <div class="col-md-3"></div>
    </div>
</div>


    
</body>
</html>