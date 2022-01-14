<?php
 include('../../view/navbar.php');

function EditProduct($id,$name){ 
    include('../../db.php');

    $upd="UPDATE product SET pname='$name' WHERE id='$id'";
    $que=mysqli_query($conn,$upd);
    if ($que) {
       session_start();
       $_SESSION['msg']="Updated sucessfully";
       header("location:index.php");
    }
    else {
        echo "unable to update";
    }
}
function oldData($id){
    include('../../db.php');
    $sql="SELECT * FROM product WHERE id='$id'";
    $res=mysqli_query($conn,$sql);
   $data=mysqli_fetch_assoc($res);
   echo $data['pname'];
}






?>