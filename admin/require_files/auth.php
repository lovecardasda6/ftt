<?php
    session_start();
    $token = $_SESSION['token'];
    $token_q = "SELECT `id` FROM `users` WHERE `token` = '".$token."'";
    $token_exec = mysqli_query($con, $token_q);
    $token_fetch = mysqli_fetch_assoc($token_exec);
    $auth_token = $token_fetch['id'];

    if($auth_token != 0 || $auth_token != NULL || !empty($auth_token)){

    }
    else
    {
        unset($_SESSION['token']);
        header("Location:login.php");
    }
?>