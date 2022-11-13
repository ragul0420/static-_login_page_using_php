<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            background-color: #47B5FF;
            color: #A0E4CB;
        }
        .con1{
            background-color: #06283D;
            border-style: solid;
            margin: auto;
            width: 300px;
            padding: 5%;
            text-align: center;
            align-content: center;
            border-radius: 20px;
        }
        .con2{
            text-align: left;
            margin: auto;
            width: 200px;
        }
        input{
            width: inherit;
        }
    </style>
</head>
<body>
    <div class="con1">
        <h1>Welcome to Rookey</h1>
        <div class="con2">
        <h4>Create your account here</h4>
        <form action="config/adduser.php" method="post">
            First Name <br><input type="text" name="fname" id=""><br>
            Last Name <br><input type="text" name="lname" id=""><br>
            Gender<br>
            <input type="radio" name="gender" id="male">Male
            <input type="radio" name="gender" id="female">Female<br>
            Date Of Birth<br> <input type="date" name="dob" id=""><br>
            Phone Number<br> <input type="tel" name="phone" id=""><br>
            Email <br> <input type="email" name="email" id=""><br>
            Password <br><input type="password" name="password" id=""><br>
            Conform Password <br><input type="password" name="cpass" id=""><br><br>
            <button type="submit">Create Account</button> <a href="index.php">Sign up</a>
        </form>
        </div>


    </div>
</body>
</html>
<?php


?>