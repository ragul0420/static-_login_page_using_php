<?php

$server_name = 'localhost';
$user_name   = 'root';
$password    = '';
$database    = 'user';

$conn = mysqli_connect($server_name,$user_name,$password,$database) or die('Mysql connection failed');
?>