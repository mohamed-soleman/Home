<?php
    $name = $_COOKIE["user_name"];
    echo $name;
    setcookie("user_name" , $name , 1 ,'/');
    header("location:services.php");


?>