
<?php
  $con = @mysqli_connect("localhost","root","","ftt");
  $id = @$_GET['id'];

  if(isset($_POST['save'])){
    $package_name = $_POST['package_name'];
    $package_price = $_POST['package_price'];

    $update_query = "UPDATE `tour_packages` SET `package_name`='".$package_name."', `price`='".$package_price."' WHERE id = ".$id;
    $exec = mysqli_query($con, $update_query);

/***********************************************/
    if($_POST['destination1'] != null || !empty($_POST['destination1'])){
        $destination1 = $_POST['destination1'];

        if($_POST['id1'] != null || !empty($_POST['id1'])){ 
            $id1 = $_POST['id1'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination1."' WHERE `id` = ".$id1;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination1."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id1'] != null || !empty($_POST['id1'])){ 
            $id1 = $_POST['id1'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id1;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination2'] != null || !empty($_POST['destination2'])){
        $destination2 = $_POST['destination2'];

        if($_POST['id2'] != null || !empty($_POST['id2'])){
            $id2 = $_POST['id2'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination2."' WHERE `id` = ".$id2;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination2."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id2'] != null || !empty($_POST['id2'])){ 
            $id2 = $_POST['id2'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id2;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination3'] != null || !empty($_POST['destination3'])){
        $destination3 = $_POST['destination3'];

        if($_POST['id3'] != null || !empty($_POST['id3'])){
            $id3 = $_POST['id3'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination3."' WHERE id = ".$id3;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination3."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id3'] != null || !empty($_POST['id3'])){ 
            $id3 = $_POST['id3'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id3;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination4'] != null || !empty($_POST['destination4'])){
        $destination4 = $_POST['destination4'];

        if($_POST['id4'] != null || !empty($_POST['id4'])){
            $id4 = $_POST['id4'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination4."' WHERE id = ".$id4;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination4."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id4'] != null || !empty($_POST['id4'])){ 
            $id4 = $_POST['id4'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id4;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination5'] != null || !empty($_POST['destination5'])){
        $destination5 = $_POST['destination5'];

        if($_POST['id5'] != null || !empty($_POST['id5'])){
            $id5 = $_POST['id5'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination5."' WHERE id = ".$id5;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination5."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id5'] != null || !empty($_POST['id5'])){ 
            $id5 = $_POST['id5'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id5;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination6'] != null || !empty($_POST['destination6'])){
        $destination6 = $_POST['destination6'];

        if($_POST['id6'] != null || !empty($_POST['id6'])){
            $id6 = $_POST['id6'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination6."' WHERE id = ".$id6;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination6."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id6'] != null || !empty($_POST['id6'])){ 
            $id6 = $_POST['id6'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id6;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination7'] != null || !empty($_POST['destination7'])){
        $destination7 = $_POST['destination7'];

        if($_POST['id7'] != null || !empty($_POST['id7'])){
            $id7 = $_POST['id7'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination7."' WHERE id = ".$id7;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination7."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id7'] != null || !empty($_POST['id7'])){ 
            $id7 = $_POST['id7'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id7;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination8'] != null || !empty($_POST['destination8'])){
        $destination8 = $_POST['destination8'];

        if($_POST['id8'] != null || !empty($_POST['id8'])){
            $id8 = $_POST['id8'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination8."' WHERE id = ".$id8;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination8."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id8'] != null || !empty($_POST['id8'])){ 
            $id8 = $_POST['id8'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id8;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination9'] != null || !empty($_POST['destination9'])){
        $destination9 = $_POST['destination9'];

        if($_POST['id9'] != null || !empty($_POST['id9'])){
            $id9 = $_POST['id9'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination9."' WHERE id = ".$id9;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination9."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id9'] != null || !empty($_POST['id9'])){ 
            $id9 = $_POST['id9'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id9;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination10'] != null || !empty($_POST['destination10'])){
        $destination10 = $_POST['destination10'];

        if($_POST['id10'] != null || !empty($_POST['id10'])){
            $id10 = $_POST['id10'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination10."' WHERE id = ".$id10;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination10."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id10'] != null || !empty($_POST['id10'])){ 
            $id10 = $_POST['id10'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id10;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination11'] != null || !empty($_POST['destination11'])){
        $destination11 = $_POST['destination11'];

        if($_POST['id11'] != null || !empty($_POST['id11'])){
            $id11 = $_POST['id11'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination11."' WHERE id = ".$id11;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination11."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id11'] != null || !empty($_POST['id11'])){ 
            $id11 = $_POST['id11'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id11;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/
    if($_POST['destination12'] != null || !empty($_POST['destination12'])){
        $destination12 = $_POST['destination12'];

        if($_POST['id12'] != null || !empty($_POST['id12'])){
            $id12 = $_POST['id12'];
            $update_query = "UPDATE `package_destinations` SET `destination`='".$destination12."' WHERE id = ".$id12;
            $exec = mysqli_query($con, $update_query);

        }else{
            $save_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$id."', '".$destination12."')";
            $exec = mysqli_query($con, $save_query);
        }
    }else{
        if($_POST['id12'] != null || !empty($_POST['id12'])){ 
            $id12 = $_POST['id12'];
            $delete_query = "DELETE FROM `package_destinations` WHERE `id` = ".$id12;
            $exec = mysqli_query($con, $delete_query);
        }
    }

/***********************************************/


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
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

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
                        <div class="col-2 col-md-2">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">

                            <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3">
                                <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                <span class="icon-menu h3"></span> <span class="menu-text"></span>
                                </a>
                            </div>

                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                              <li><a href="index.php#update" class="nav-link">Update</a></li>
                              <li><a href="services.php" class="nav-link">Services</a></li>
                              <li><a href="package_tours.php" class="nav-link">Tour Package</a></li>
                              <li><a href="tour_destinations.php" class="nav-link">New Destinations</a></li>
                              <li><a href="photos.php" class="nav-link">Photos</a></li>
                              <li><a href="index.php#contact-section" class="nav-link">Contact</a></li>
                              <li><a href="index.php#other-services-offered" class="nav-link">Other Services Offered</a></li>
                            </ul>
                            </div>
                        </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .site-navbar-wrap -->

<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<div class="site-section bg-light" style="margin-top: -75px;">
    <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <h2 class="title text-primary">PACKAGE TOUR</h2>
            <span class="sub-title mb-2 d-block">Modify Package</span>
          </div>
        </div>
        <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Package Informations</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off">
                <?php
                    $q = "SElECT * FROM tour_packages WHERE id = ".$id;
                    if($res = mysqli_query($con, $q))
                    {
                        while($row = mysqli_fetch_assoc($res))
                        {
                ?>
                            <input type="text" name="package_name" value="<?php echo $row['package_name']; ?>" placeholder="Package Name" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                            <input type="text" name="package_price" value="<?php echo $row['price']; ?>" placeholder="Price" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                            <Br>
                            <br>
                            <span style="font-size:18px; color: rgb(0,123,255); font-weight:bold;">Destinations</span>
                            <?php
                                $q2 = "SELECT * FROM package_destinations WHERE tour_package_id = ".$id;
                                if($res2 = mysqli_query($con, $q2))
                                {
                                    $counter = 1;
                                    while($r2 = mysqli_fetch_assoc($res2))
                                    {
                            ?>
                            <input type="hidden" name="id<?php echo $counter; ?>" value="<?php echo $r2['id']; ?>">
                            <input type="text" name="destination<?php echo $counter; ?>" value="<?php echo $r2['destination']; ?>" placeholder="Destination 1" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <?php
                                        $counter++;
                                    }

                                    if($counter != 12){
                                        for($i = $counter; $i <= 12; $i++){
                ?>
                                            <input type="hidden" name="id<?php echo $i; ?>">
                                            <input type="text" name="destination<?php echo $i; ?>"  placeholder="Destination <?php echo $i; ?>" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                                            <?php
                                        }
                                    }
                                }
                        }
                    }
                ?>
                <br> <br>
                <input type="submit" value="Save" name="save"/> | <button onclick="$('.add_new_package').css('display', 'none');">Cancel</button>
            </form>
        </div>
    </div>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
</div>
</div>   
    </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>
     
  </body>
</html>
