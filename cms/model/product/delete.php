<?php
$id=$_GET['id'];
function delete($id){
include('../../db.php');

$sql="DELETE FROM product WHERE id='$id'";
$res=mysqli_query($conn,$sql);
if ($res) {
    session_start();
    $_SESSION['del']="Deletes sucessfully";
    header("location:../../view/product/index.php");
}
else {
    $_SESSION['ndel']="cant be deleted";
    header("location:inpex.php");
}
}
delete($id);
?>