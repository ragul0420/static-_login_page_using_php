<?php
require('dbconnect.php');
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT password FROM accountinfo WHERE email='$email'";
$result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
if($password==$result['password']){
    header('location: ../welcome.php?id='.$email);
}
?>