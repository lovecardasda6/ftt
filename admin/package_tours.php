
<?php
  $con = @mysqli_connect("localhost","root","","ftt");
  $id = @$_GET['id'];
  $action = @$_GET['action'];

  if($action == "ARCHIVE"){
    $action_query = "UPDATE tour_packages SET action = 'ARCHIVE' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }else if($action == "ACTIVE"){
    $action_query = "UPDATE tour_packages SET action = 'ACTIVE' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }else if($action == "REMOVE"){
    $action_query = "DELETE FROM tour_packages WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }

  if(isset($_POST['save'])){
    $package_name = $_POST['package_name'];
    $package_price = $_POST['package_price'];

    $save_query = "INSERT INTO `tour_packages`(`package_name`, `price`, `action`) VALUES ('".$package_name."', '".$package_price."', 'ACTIVE')";
    $exec = mysqli_query($con, $save_query);
    $exec_id = mysqli_insert_id($con);

    $destinations = array();
    if($_POST['destination1'] != null || !empty($_POST['destination1']))
      array_push($destinations, $_POST['destination1']);

    if($_POST['destination2'] != null || !empty($_POST['destination2']))
      array_push($destinations, $_POST['destination2']);

    if($_POST['destination3'] != null || !empty($_POST['destination3']))
      array_push($destinations, $_POST['destination3']);

    if($_POST['destination4'] != null || !empty($_POST['destination4']))
      array_push($destinations, $_POST['destination4']);

    if($_POST['destination5'] != null || !empty($_POST['destination5']))
      array_push($destinations, $_POST['destination5']);

    if($_POST['destination6'] != null || !empty($_POST['destination6']))
      array_push($destinations, $_POST['destination6']);

    if($_POST['destination7'] != null || !empty($_POST['destination7']))
      array_push($destinations, $_POST['destination7']);

    if($_POST['destination8'] != null || !empty($_POST['destination8']))
      array_push($destinations, $_POST['destination8']);

    if($_POST['destination9'] != null || !empty($_POST['destination9']))
      array_push($destinations, $_POST['destination9']);

    if($_POST['destination10'] != null || !empty($_POST['destination10']))
      array_push($destinations, $_POST['destination10']);

    if($_POST['destination11'] != null || !empty($_POST['destination11']))
      array_push($destinations, $_POST['destination11']);

    if($_POST['destination12'] != null || !empty($_POST['destination12']))
      array_push($destinations, $_POST['destination12']);
    
    foreach($destinations as $destination){
      $destination_query = "INSERT INTO `package_destinations`(`tour_package_id`, `destination`) VALUES ('".$exec_id."', '".$destination."')";
      $exec = mysqli_query($con, $destination_query);
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
    
    <link rel="stylesheet" href="./gallery_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./gallery_assets/css/jquery-ui.css">
    
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
<!-- .START site-section -->
    <div class="site-section bg-light" id="what-we-do-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <h2 class="title text-primary">TOUR PACKAGE</h2>
            <span class="sub-title mb-2 d-block">ACTIVE PACKAGE</span>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" onclick="$('.add_new_package').css('display', 'block ');" >Add New Package</span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">

              <?php
                $tour_package_query = "SELECT * FROM tour_packages WHERE action != 'ARCHIVE' ORDER BY package_name ASC";

                if($result = mysqli_query($con, $tour_package_query))
                {
                  while($row = mysqli_fetch_assoc($result )){
                    $package_id = $row['id'];
                    $package_destionation_query = "SElECT * FROM package_destinations WHERE tour_package_id = ".$package_id;

              ?>
                  <!---------------------------------->
                  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="service h-100" style="position:relative;">
                    
                    <div style="position:absolute; top:0px; right: 0px; color: white; font-weight:bold; background-color: rgb(0, 123, 255); padding: 10px 5px;">
                        <?php
                            echo $row['action'] == "ARCHIVE"? "ARCHIVED" : "ACTIVE";
                        ?>
                    </div>


                      <span class="icon-map-marker display-4 text-primary d-block mb-4"></span>
                      <h3><?php echo $row["package_name"] ?></h3>
                      <?php
                        $package_destionation_query = "SElECT * FROM package_destinations WHERE tour_package_id = ".$package_id." ORDER BY destination ASC";
                        if($result2 = mysqli_query($con, $package_destionation_query)){
                          while($row2 = mysqli_fetch_assoc($result2)){
                      ?>
                        <li><?php echo $row2['destination']; ?></li>
                      <?php
                          }
                        }
                      ?>
                      <br>
                      <span class="sub-title mb-2 d-block">
                        <h5 class="title text-primary">Price : Php <?php echo $row['price']; ?></h5>

                        <a target="_blank" href="package_tours_modify.php?id=<?php echo $row['id']; ?>">
                          <span class="icon-edit" style="font-size: 24px;"></span>
                        </a> 
                        &nbsp; | &nbsp;
                        <a href="?id=<?php echo $row['id']; ?>&action=<?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?>">
                         <?php echo $row['action'] == "ARCHIVE"? "<span class='icon-check' style='font-size: 24px;'></span>" : "<span class='icon-archive' style='font-size: 24px;'></span>"; ?>
                        </a>
                      </span>
                    </div>
                    
                  </div><!---------------------------------->
              <?php
                  }
                }
              ?>

            </div>
          </div>
        </div>
      </div>
      
      <BR>
      <br>
      <br>
      <br>

      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">ARCHIVED PACKAGE</span>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">

              <?php
                $tour_package_query = "SELECT * FROM tour_packages WHERE action='ARCHIVE' ORDER BY package_name ASC";

                if($result = mysqli_query($con, $tour_package_query))
                {
                  while($row = mysqli_fetch_assoc($result )){
                    $package_id = $row['id'];
                    $package_destionation_query = "SElECT * FROM package_destinations WHERE tour_package_id = ".$package_id;

              ?>
                  <!---------------------------------->
                  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="service h-100" style="position:relative;">
                    
                    <div style="position:absolute; top:0px; right: 0px; color: white; font-weight:bold; background-color: rgb(0, 123, 255); padding: 10px 5px;">
                        <?php
                            echo $row['action'] == "ARCHIVE"? "ARCHIVED" : "ACTIVE";
                        ?>
                    </div>


                      <span class="icon-map-marker display-4 text-primary d-block mb-4"></span>
                      <h3><?php echo $row["package_name"] ?></h3>
                      <?php
                        $package_destionation_query = "SElECT * FROM package_destinations WHERE tour_package_id = ".$package_id." ORDER BY destination ASC";
                        if($result2 = mysqli_query($con, $package_destionation_query)){
                          while($row2 = mysqli_fetch_assoc($result2)){
                      ?>
                        <li><?php echo $row2['destination']; ?></li>
                      <?php
                          }
                        }
                      ?>
                      <br>
                      <span class="sub-title mb-2 d-block">
                        <h5 class="title text-primary">Price : Php <?php echo $row['price']; ?></h5>

                        <a target="_blank" href="package_tours_modify.php?id=<?php echo $row['id']; ?>">
                          <span class="icon-edit" style="font-size: 24px;"></span>
                        </a> 
                        &nbsp; | &nbsp;
                        <a href="?id=<?php echo $row['id']; ?>&action=<?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?>">
                         <?php echo $row['action'] == "ARCHIVE"? "<span class='icon-check' style='font-size: 24px;'></span>" : "<span class='icon-archive' style='font-size: 24px;'></span>"; ?>
                        </a>
                      </span>
                    </div>
                    
                  </div><!---------------------------------->
              <?php
                  }
                }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-section -->
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
        
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

  <script src="./gallery_assets/js/jquery-ui.js"></script>
  <script src="./gallery_assets/js/jquery.stellar.min.js"></script>
  <script src="./gallery_assets/js/jquery.countdown.min.js"></script>
  <script src="./gallery_assets/js/jquery.magnific-popup.min.js"></script>
  <script src="./gallery_assets/js/bootstrap-datepicker.min.js"></script>
     
  </body>
</html>


<!----------------------------------------------------------->
<!---------------------ADD NEW PACKAGE FORM------------------>
<!----------------------------------------------------------->
<div class="add_new_package" 
style="
    display: none;
    position: absolute; 
    top: 0; 
    left:0; 
    background-color: rgba(0,0,0,.5); 
    width: 100%; 
    height:100%; 
    z-index: 100;
    align-content:center;
">
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Package Informations</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off">
                <input type="text" name="package_name" placeholder="Package Name" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="package_price" placeholder="Price" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <Br>
                <br>
                <span style="font-size:18px; color: rgb(0,123,255); font-weight:bold;">Destinations</span>
                <input type="text" name="destination1" placeholder="Destination 1" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination2" placeholder="Destination 2" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination3" placeholder="Destination 3" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination4" placeholder="Destination 4" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination5" placeholder="Destination 5" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination6" placeholder="Destination 6" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination7" placeholder="Destination 7" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination8" placeholder="Destination 8" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination9" placeholder="Destination 9" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination10" placeholder="Destination 10" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination11" placeholder="Destination 11" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" name="destination12" placeholder="Destination 12" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <br> <br>
                <input type="submit" value="Save" name="save"/> | <button onclick="$('.add_new_package').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>
<!----------------------------------------------------------->
<!---------------------ADD NEW PACKAGE FORM------------------>
<!----------------------------------------------------------->