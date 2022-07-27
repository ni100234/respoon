<?php
session_start();
if(!$_SESSION['tiket']){
    header('location:private.php');
}

?>