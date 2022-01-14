<?php
$db=mysqli_connect('localhost','root','') or 
die ('unable to connect.');
$query= "CREATE DATABASE IF NOT EXISTS basic";
mysqli_select_db($db,'basic');
mysqli_query($db,$query) or die(mysql_error($db));
$query="CREATE TABLE IF NOT EXISTS user user 
(
   id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   uname varchar(100),
   pass varchar(50) NOT NULL
)";
 mysqli_query($db,$query) or die(mysqli_error($db));
$query="CREATE TABLE product
(
   id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   pname varchar(100),
   
)";
mysqli_query($db,$query) or die(mysqli_error($db));



?>