<?php

session_start();
require_once __DIR__."./config.php";
$id = $_SESSION['id'];

$q = "UPDATE users SET `token` = NULL WHERE `id` = ".$id;
$res = mysqli_query($con,$q);
if($res){
    header("Location:./../login.php");
}
else{
    echo "FAILED";
}