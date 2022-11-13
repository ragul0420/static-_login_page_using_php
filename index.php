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
            width: 250px;
            padding: 5%;
            text-align: center;
            align-content: center;
            border-radius: 20px;
            margin-top:5%;
            
        }
        .con2{
            text-align: left;
            margin: auto;
            width: 200px;
        }
        .uni1{
            margin: 5px;
        }
        input{
            width: inherit;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="con1">
        <h1>Welcome to Rookey</h1>
        <div class="con2">
        <h4>Login here</h4>
        <form action="config/checkuser.php" method="post">
            Email <br> <input type="email" name="email" id="">
            Password <br><input type="password" name="password" id=""><br>
           
            <button type="submit" class="uni1">Login</button> <a href="signin.php" class="uni1">Create Account</a>
        </form>
        </div>


    </div>
</body>
</html>
<?php

?>