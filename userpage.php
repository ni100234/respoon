<?php
session_start();

if(!$_SESSION['tiket']){
    header('location:login.php');
}
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('navbar.php')?>
<form action="action.php">
    <div class="container">
        <div class="row">

        <?php
        $qq="select * from gallery";
        $result=$conn->query($qq);
        while($data=$result->fetch_assoc()){?>
        <div class="col-md-3">
            <p><img src="items/<?php echo $data['image'];?>" class="img-thumbnail"/></p>
            <p><?php echo $data['name'];?>,<?php echo $data['date'];?>,<?php echo $data['discription'];?>,<?php echo $data['location'];?></p>
            
   
            <?php if(isset($_SESSION['tiket'])){?>
                <button type="button" name = "Comment" class="btn btn-primary" style="colour:grey;">
                <a href="action.php?id=<?php echo $data['id'] ?>" style="text-decoration:none; color:white;"><i class="fa fa-comments" aria-hidden="true"></i>
</a>
            </button>
                <button type="comment" name = "rating" class="btn btn-primary" style="colour:black;">
                <a href="updateproduct.php?id=<?php echo $data['id'] ?>" style="text-decoration:none; color:white;"><i class="fa fa-star" aria-hidden="true"></i>
</a>
            </button>


                <?php
            }?>

        </div>
        <?php
        }
        ?>
        </div>
    </div>
    </form>
</body>
</html>