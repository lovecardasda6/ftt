
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
                              <li><a href="index.php#services" class="nav-link">Services</a></li>
                              <li><a href="package_tours.php" class="nav-link">Tour Package</a></li>
                              <li><a href="tour_destinations" class="nav-link">New Destinations</a></li>
                              <li><a href="photos.php" class="nav-link">Photos</a></li>
                              <li><a href="contacts.php" class="nav-link">Contact</a></li>
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
            <h2 class="title text-primary">Tour Package</h2>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" >Add New Package</span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">

              <?php
                $tour_package_query = "SELECT * FROM tour_packages ORDER BY package_name ASC";

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
                            echo $row['action'] == "ARCHIVE"? "ARCHIVE" : "ACTIVE";
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

                        <a href="#">MODIFY</a> | <a href="?id=<?php echo $row['id']; ?>&action=<?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?>"><?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?></a>
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
<div class="add_new_package align-items-center" 
style="
    display: none;
    position: absolute; 
    top: 0; 
    left:0; 
    background-color: rgba(0,0,0,.5); 
    width: 100%; 
    height:100%; 
    z-index: 100;
">
    <div class="col-6">
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Package Informations</span>
            </div>

            <form style="padding: 10px; margin-top:8px;">
                <input type="text" placeholder="Package Name" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Price" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <Br>
                <br>
                <span style="font-size:18px; color: rgb(0,123,255); font-weight:bold;">Destinations</span>
                <input type="text" placeholder="Destination 1" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 2" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 3" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 4" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 5" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 6" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 7" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 8" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 9" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 10" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 11" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <input type="text" placeholder="Destination 12" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" /> 
                <br> <br>
                <input type="submit"/> | <input type="submit"/>
            </form>

        </div>
    </div>
</div>
<!----------------------------------------------------------->
<!---------------------ADD NEW PACKAGE FORM------------------>
<!----------------------------------------------------------->