<?php
session_start();
unset($_SESSION['uname']);

    header("location:../../view/user/login.php");



?>