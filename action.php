<?php
session_start();
include("database.php");

//for register code


if(isset($_POST['register']))
{
    $Firstname=$_POST['Firstname'];
    $Lastname= $_POST['Lastname'];
    $Address=$_POST['Address'];
    $Email=$_POST['Email'];
    $Password = md5($_POST['Password']);
     
    $query="insert into respon(id,Firstname,Lastname,Address,Email,Password)   
     values(NULL,'$Firstname','$Lastname','$Address','$Email','$Password')";
    $conn->query($query);
    header("location:login.php");


}


//for login code

    if(isset($_POST['login']))
    {
        $Email=$_POST['Email'];
        $Password=md5($_POST['Password']);
        $query="select * from respon where Email='$Email' and Password='$Password'";
        $result = $conn->query($query);
      

        //fetches data from the database;

        $userdata=$result->fetch_assoc();
        $count = $result->num_rows;
        
        if ($count==0){
            echo "Invalid login";
        
        }
        else{
            if($userdata['usertype']=='admin'){
                $_SESSION['usertype']='admin';
                $_SESSION['tiket']='done';
                $_SESSION['userid']=$userdata['id'];
                header('location:display-images.php');
            }
            else{
                $_SESSION['usertype']='user';
                $_SESSION['tiket']='done';
                $_SESSION['userid']=$userdata['id'];
                header('location:display-images.php');

            }
        }
        // else{


        // $_SESSION['tiket']='done';
        // $_SESSION['userid']=$userdata['id'];
        // $_SESSION['admin']=$userdata['Admin'];
        // if ($userdata['Admin'] == 1){
        //     header('location:display-images.php');
        // } else {
        //     header('location:userpage.php');
        // }
        // }
    }
// add product
if(isset($_POST['listitems']))
{
    $title=$_POST['name'];
    $date=$_POST['date'];
    $discription=$_POST['discription'];
    $location=$_POST['location'];
    $image=$_FILES['image']['name'];
    $ext=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $randomimagename=rand(1,100000);
    $newpicname=$randomimagename."_gallery.".$ext;
    if($ext=='jpg' || $ext=='JPG' ||  $ext=='PNG' || $ext=='png' ||  $ext=='gif' || $ext=='GIF' ||  $ext=='JPEG' || $ext=='jpeg')
    {

    move_uploaded_file($_FILES['image']['tmp_name'],"items/".$newpicname);
    $query="insert into gallery(id,name,date,discription,location,image) values (NULL,'$title','$date','$discription','$location','$newpicname')";
    $conn->query($query);

    }
    else{
        echo '<script>alert("Invalid file format.")</script>';
       

    }
    header('location:display-images.php');
}

//update page
 if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $date=$_POST['date'];
    $discription=$_POST['discription'];
    $location=$_POST['location'];
    $id=$_POST['id'];
    $query="UPDATE gallery SET name='$name',date='$date',discription='$discription',location='$location' WHERE id='$id'";
    $conn->query($query);
     header("location:display-images.php");
     
 
}
//delete page
if(isset($_GET['dataid']))
{
    $id=$_GET['dataid'];
    $query="DELETE from gallery where id ='$id'";
    $conn->query($query);
    header('location:display-images.php');
}
if(isset($_POST['commentt']))
{
    $comment=$_POST['comm'];
    $imageid=$_POST['imgid'];
    $userid=$_POST['userid'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $query="insert into comments (id,userid,imageid,Firstname,Lastname,comment) values (NULL,'$userid','$imageid','$firstname','$lastname','$comment')";
    $conn->query($query);

    header('location:display-images.php');
}
?>