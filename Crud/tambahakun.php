<?php
    include "koneksi.php";

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    mysqli_query($koneksi, "insert into operator values('$user','$pass')");
    header("location:registrasi.php");

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
