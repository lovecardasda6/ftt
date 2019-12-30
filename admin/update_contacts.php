<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  

if(isset($_POST['updateAddress'])){
    $id =mysqli_real_escape_string($con,  $_POST['id']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $q = "UPDATE address SET `address` = '".$contact."' WHERE `id` = ".$id;
    $exec = mysqli_query($con, $q);
}

if(isset($_POST['updateTelephone'])){
    $id =mysqli_real_escape_string($con,  $_POST['id']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $q = "UPDATE telephone_number SET `tel_number` = '".$contact."' WHERE `id` = ".$id;
    $exec = mysqli_query($con, $q);
}

if(isset($_POST['updateMobile'])){
    $id =mysqli_real_escape_string($con,  $_POST['id']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $q = "UPDATE mobile_number SET `mobile_number` = '".$contact."' WHERE `id` = ".$id;
    $exec = mysqli_query($con, $q);
}

if(isset($_POST['updateEmail'])){
    $id =mysqli_real_escape_string($con,  $_POST['id']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $q = "UPDATE email_address SET `email_address` = '".$contact."' WHERE `id` = ".$id;
    $exec = mysqli_query($con, $q);
}

header("Location:contacts.php");

?>