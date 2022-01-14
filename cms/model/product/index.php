<?php
session_start();
include('../../view/navbar.php');
include('../../db.php');
$sql="SELECT * FROM product";
$res=mysqli_query($conn,$sql);
function ProductName(){

 if(!empty($_SESSION['msg'])){
 echo $_SESSION['msg'];
 unset($_SESSION['msg']);
}
if(!empty($_SESSION['del'])){
    echo $_SESSION['del'];
    unset($_SESSION['del']);
   }
   if(!empty($_SESSION['ndel'])){
    echo $_SESSION['ndel'];
    unset($_SESSION['ndel']);
   }
   if(!empty($_SESSION['add'])){
        echo $_SESSION['add'];
       unset($_SESSION['add']);
   }
   if(!empty($_SESSION['addfail'])){
        echo $_SESSION['addfail'];
       unset($_SESSION['addfail']);
   }
   
}
?>