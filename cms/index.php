<?php
session_start();
if(!isset($_SESSION['uname'])){
     header("location:view/user/login.php");
    
}
include('view/navbar.php');
include('view/sidebar.php');


?>
