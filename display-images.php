<?php
session_start();

if(!$_SESSION['tiket']){
    header('location:login.php');
}
include('database.php');
$loginuser=$_SESSION['userid'];
$query="select * from respon where id='$loginuser'";
$result=$conn->query($query);
$webuser=$result->fetch_assoc();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include('navbar.php')?>
    <form action="action.php" method="post">
        <div class="container">
            <div class="row">

                <?php
        $loginuser=$_SESSION['userid'];
        $qq="select * from gallery";
        $result=$conn->query($qq);
        while($data=$result->fetch_assoc()){?>
                <div class="col-md-3">
                    <p><img src="items/<?php echo $data['image'];?>" class="img-thumbnail" /></p>
                    <p><?php echo $data['name'];?>,<?php echo $data['date'];?>,<?php echo $data['discription'];?>,<?php echo $data['location'];?>
                    </p>


                    <?php if((isset($_SESSION['tiket']) && $_SESSION['usertype']=="admin")){
                ?>
                    <button type="button" name="delete" class="btn btn-primary" style="colour:grey;">
                        <a href="action.php?dataid=<?php echo $data['id'] ?>"
                            style="text-decoration:none; color:white;">Delete</a>
                    </button>
                    <button type="button" name="update" class="btn btn-primary" style="colour:black;">
                        <a href="updateproduct.php?id=<?php echo $data['id'] ?>"
                            style="text-decoration:none; color:white;">Update</a>
                    </button>
                    <button type="button" name="comment" class="btn btn-primary" style="colour:grey;">
                        <a href="viewimage.php?id=<?php echo $data['id'] ?>"
                            style="text-decoration:none; color:white;"><i class="fa fa-comments" aria-hidden="true"></i>
                        </a>
                    </button>
                    

                    <?php
            }
            else{ ?>
                    <button type="button" name="comment" class="btn btn-primary" style="colour:grey;">
                        <a href="viewimage.php?id=<?php echo $data['id'] ?>"
                            style="text-decoration:none; color:white;"><i class="fa fa-comments" aria-hidden="true"></i>
                        </a>
                    </button>
                    <?php }?>
                </div>
                <?php
        }
        ?>
            </div>
        </div>
    </form>
</body>

</html>