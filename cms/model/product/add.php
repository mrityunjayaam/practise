<?php
 include('../../view/navbar.php');
function ProductAdd($name){
    include('../../db.php');
    $sql="INSERT INTO product(id,pname) VALUES('','$name'); ";
    $res=mysqli_query($conn,$sql);
    if($res){
        session_start();
        $_SESSION['add']="Added sucessfully";
        header("location:../../view/product/index.php");
    }
    else {
        $_SESSION['addfail']="fail to Add";
        header("location:../../view/product/index.php 0");
    }
}
?>