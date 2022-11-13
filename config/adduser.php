<?php

require('dbconnect.php');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$sql = "INSERT INTO accountinfo (`fname`,`lname`,`dob`,`gender`,`password`,`phone`,`email`) VALUES ('$fname','$lname','$dob','$gender','$password','$phone','$email')";

$result = mysqli_query($conn,$sql);

header('Location: ../welcome.php?id='.$email);