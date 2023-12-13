<?php

session_start();
if(!isset($_SESSION["username"])){
    header("location:login form.php");
}
?>

<html>
    <head>
        <title>admin</title>
    </head>
    <body>
        <h1>admin</h1><?php
 echo  $_SESSION["username"]?>  

<a href="logout.php">Logout</a>
</body>
</html>