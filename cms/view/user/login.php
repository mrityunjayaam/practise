<?php
include('../../model/login/login.php');
if (isset($_POST['submit'])) {
    $uname=$_POST['userName'];
    $pass=$_POST['password'];

Login($uname,$pass);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="logo"> <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt=""> </div>
    <div class="text-center mt-4 name"> Twitter </div>
    <form class="p-3 mt-3" method="post" action="">
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="userName" placeholder="Username"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Password"> </div> 
        <button class="btn mt-3" name="submit">Login</button>
    </form>
   
</div>
</body>
</html>