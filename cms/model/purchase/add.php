<?php

session_start();
if(isset($_POST['submit'])){
    $pname=$_POST['pname'];
    $quantity=$_POST['quantity'];
    $rate=$_POST['rate'];
    $ino=$_POST['ino'];
    $date=date("Y/m/d");
    
    add($pname,$quantity,$rate,$ino,$date);
  }
function add($pname,$quantity,$rate,$ino,$date){
     include('../../db.php');
   $sql="INSERT INTO purchase(id,pid,quantity,rate,i_no,pdate) VALUES('','$pname','$quantity','$rate','$ino','$date'); ";
    $res=mysqli_query($conn,$sql);
    if ($res){
       $_SESSION['puradd']="Added sucessfully";
       header("location:../../view/purchase/index.php");
    }

}

?>