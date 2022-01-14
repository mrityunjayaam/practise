<?php
function Login($uname,$pass){
include('../../db.php');

  $sql="SELECT * FROM user WHERE uname='$uname' AND pass='$pass'";
  $res= mysqli_query($conn,$sql);
  $row=mysqli_num_rows($res);
  if($row>0){
      session_start();
      $_SESSION['uname']=$uname;
      
      header("location:../../index.php");
  }
  else {
      echo "invalid username or password";
  }

}
?>