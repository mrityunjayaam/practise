<?php
include('../../function.php');
function isLogin(){
    if(!isset($_SESSION['uname'])){
        header("location:");
    }
}
isLogin();
?>