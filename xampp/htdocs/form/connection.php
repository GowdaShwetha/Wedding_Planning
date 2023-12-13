<?php

session_start();

?>

<html>
    <head>
        <title>admin</title>
    </head>
    <body>
        <h1>user</h1><?php
 echo  $_SESSION["username"]?>    </body>
</html>