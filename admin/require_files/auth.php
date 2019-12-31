<?php
    session_start();

    if(isset($_SESSION['token']) ||  $_SESSION['id']){
        
        $token = $_SESSION['token'];
        $id = $_SESSION['id'];

        $token_q = "SELECT `id` FROM `users` WHERE `token` = '".$token."' && `id` = '".$id."'";
        $token_exec = mysqli_query($con, $token_q);
        $token_fetch = mysqli_fetch_assoc($token_exec);
        $count = mysqli_num_rows($token_exec);

        if($count == 0){

            $q = "UPDATE users SET `token` = NULL WHERE `id` = ".$id;
            $res = mysqli_query($con,$q);

            unset($_SESSION['token']);
            header("Location:login.php");
        }
    }
    else
    {
        header("Location:login.php");
    }
?>