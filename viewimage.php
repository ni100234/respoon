<?php
session_start();
if(!$_SESSION['tiket']){
    header('location:login.php');
}
    include('database.php');

    $id=$_GET['id'];
    $query="select * from gallery where id='$id'";
    $result=$conn->query($query);
    $image=$result->fetch_assoc();
$loginuser=$_SESSION['userid'];
$query="select * from respon where id='$loginuser'";
$result=$conn->query($query);
$webuser=$result->fetch_assoc();

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <form action="action.php" method="post">
        <input type="hidden" name="imgid" value="<?php echo $image['id'] ?>">
        <input type="hidden" name="userid" value="<?php echo $webuser['id'] ?>">
        <input type="hidden" name="firstname" value="<?php echo $webuser['Firstname'] ?>">
        <input type="hidden" name="lastname" value="<?php echo $webuser['Lastname'] ?>">
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card" style="border-radius: 15px;">
                            <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="items/<?php echo $image['image'];?>"
                                    style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                    class="img-fluid" alt="Laptop" />
                                <a href="#!">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p><?php echo $image['name'];?></p>
                                        <p class="small text-muted"><?php echo $image['date'];?></p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between">
                                    <p><a href="#!" class="text-dark"><?php echo $image['location'];?></a></p>
                                </div>
                                <p class="small text-muted"><?php echo $image['discription'];?></p>
                            </div>
                            <hr class="my-0" />
                            <hr class="my-0" />
                            <hr class="my-0" />
                            <h3 style="margin-left:20px;">Comments</h3>
                            <br>
                            <?php
                        $loginuser=$_SESSION['userid'];
                        $img="select * from comments where imageid='$id'";
                        $output=$conn->query($img);
                        while($comments=$output->fetch_assoc()){
                          ?>
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between">
                                    <p><?php echo $comments['Firstname'];?> <?php echo $comments['Lastname'];?><br>
                                        <?php echo $comments['comment'];?></p>
                                </div>
                                <p></p>
                            </div>
                            <hr class="my-0" />

                            <?php } ?>
                            <hr class="my-0" />
                            <hr class="my-0" />
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between">
                                    <textarea name="comm" class="form-control form-control-lg"
                                        placeholder="Enter comment " required></textarea>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                    <a href="display-images.php" class="text-dark fw-bold">Back</a>
                                    <label class="form-label">
                                        <button type="submit" name="commentt" class="btn btn-primary">Comment</button>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

</body>

</html>