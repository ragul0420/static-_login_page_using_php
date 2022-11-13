<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
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

   </style>
</head>
<body>

</body>
</html>
<?php

require('config/dbconnect.php');
$name = $_GET['id'];
echo '<div class="con1"><h1>Welcome '.$name .'</h1></div>';
?>