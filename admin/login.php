<?php

  require_once __DIR__."/require_files/config.php";
  
  session_start();
  $invalid = false;
  if(isset($_POST['login']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT id FROM users WHERE `username` = '".$username."' AND `password` = '".$password."' AND `status` != 'ARCHIVE'";
    $exec = mysqli_query($con, $q);
    $fetch = mysqli_fetch_assoc($exec);
    $id = $fetch['id'];
    
    $count = mysqli_num_rows($exec);

    if($count != 0 )
    {
      $token = "0923j21313fasf12090asdi09m";
      $q = "UPDATE users SET `token` = '".$token."' WHERE `id` = ".$id;
      $exec = mysqli_query($con, $q);
      $_SESSION['token'] = $token;
      $_SESSION['id'] = $id;
      header("Location: home.php");
    }
    else
    {
      $invalid = true;
    }
    
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fely's Tours and Travel - Trips for Keeps</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"  style="background-color: #f9f9f9;">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->
 
        <div class="site-navbar-wrap">
            <div class="site-navbar site-navbar-target js-sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-10 col-md-10" style="padding:0px; margin:0px;">
							<h1 class="my-0 site-logo">
								<img src="./images/img.png"style=" width: 62px;height: 62px;"/>
								<a href="./../index.php">Fely's Tours & Travel<span class="text-primary">.</span> </a>
							</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .site-navbar-wrap -->


        <div class="container" style="margin-top: 150px;">
          <div style="width: 35%; margin: auto; text-align:center;">
            <?php if($invalid){ ?>
              <label>Invalid username and/or password.</label>
            <?php } ?>
            <h1>Account Login</h1>
          </div>
          <Br>
          
          <div style="width: 30%; height: 300px; margin: auto; padding: 15px;">
            <form method="POST" autocomplete="off">
              <label for="">Username : </label>
              <input type="text" style="width: 100%; padding-left: 5px;" placeholder="Username" name="username"/>
              <br><br>
              <label for="">Password : </label>
              <input type="password" style="width: 100%; padding-left: 5px;" placeholder="Password" name="password"/>
              <hr>
              <input type="submit" class="btn btn-primary" name="login" value="Login" style="border-radius:0px;"/>
            </form>
          </div>
        </div><!-- END .site-navbar-wrap -->
        
    </div>
  </body>
</html>