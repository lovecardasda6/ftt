
<?php
  $con = @mysqli_connect("localhost","root","","ftt");
  $id = @$_GET['id'];
  $action = @$_GET['action'];

  if($action == "ARCHIVE"){
    $action_query = "UPDATE services SET action = 'ARCHIVE' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }else if($action == "ACTIVE"){
    $action_query = "UPDATE services SET action = 'ACTIVE' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }

  /***************************************************/
  if(isset($_POST['saveAirLines'])){
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];
    $image_name = $_FILES["image"]['name'];
    $image_tmp =$_FILES['image']['tmp_name'];

    if($image_name != null || !empty($image_name)){
      $image_name = date('dmYHis').$_FILES["image"]['name'];
      $q = "INSERT INTO services (`name`, `description`, `type`, `image`) VALUES ('".$service_name."', '".$description."', 'Airlines', '".$image_name."')";

      if( $exec = mysqli_query($con, $q)){
        $image_dir = "./../images/airlines/".$image_name;
        move_uploaded_file($image_tmp, $image_dir);
      }
    }else{
      $q = "INSERT INTO services (`name`, `description`, `type`) VALUES ('".$service_name."', '".$description."', 'Airlines')";
      $exec = mysqli_query($con, $q);
    }
  }

/***************************************************/
  if(isset($_POST['saveShippings'])){
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];
    $image_name = $_FILES["image"]['name'];
    $image_tmp =$_FILES['image']['tmp_name'];

    if($image_name != null || !empty($image_name)){
      $image_name = date('dmYHis').$_FILES["image"]['name'];
      $q = "INSERT INTO services (`name`, `description`, `type`, `image`) VALUES ('".$service_name."', '".$description."', 'Shippings', '".$image_name."')";

      if( $exec = mysqli_query($con, $q)){
        $image_dir = "./../images/shippings/".$image_name;
        move_uploaded_file($image_tmp, $image_dir);
      }
    }else{
      $q = "INSERT INTO services (`name`, `description`, `type`) VALUES ('".$service_name."', '".$description."', 'Shippings')";
      $exec = mysqli_query($con, $q);
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

      <div class="site-section bg-light" id="what-we-do-section" style="margin: -75px;">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-6 section-title">
              <h2 class="title text-primary">SERVICES</h2>
            </div>
          </div>

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#airlines" role="tab" aria-controls="airlines" aria-selected="true">Airlines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#shippings" role="tab" aria-controls="shippings" aria-selected="false">Shippings</a>
            </li>
          </ul>

          

        </div>
      </div>
        
          
    <div class="tab-content">
      <!---------------------------------------AIRLINES------------------------------------------------------->
      <div class="tab-pane active" id="airlines" role="tabpanel" aria-labelledby="airlines-tab">
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
    <!------ACTIVE---------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
        <div class="container">
          <div class="row mb-5"><!-- .START site-section -->
            <div class="col-lg-6 section-title"><!-- .START site-section -->
              <span class="sub-title mb-2 d-block">ACTIVE SERVICE</span>
            </div>
            <div class="col-lg-6 section-title" style="text-align:right;">
              <a href="#">
                <span class="icon-add" style="font-size:21px;" onclick="$('.add_new_airlines').css('display', 'block ');" >Add Airline Service</span>
              </a>
            </div>
          </div>
          <div class="row"><!-- .START site-section -->
              <div class="col-lg-12 ml-auto">
                <div class="row">

                  <?php
                    $tour_package_query = "SELECT * FROM services WHERE action != 'ARCHIVE' AND type = 'Airlines' ORDER BY name ASC";

                    if($result = mysqli_query($con, $tour_package_query))
                    {
                      while($row = mysqli_fetch_assoc($result )){

                  ?>
                      <!---------------------------------->
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100" style="position:relative; text-align: center;">
                        
                        <div style="position:absolute; top:0px; right: 0px; color: white; font-weight:bold; background-color: rgb(0, 123, 255); padding: 10px 5px;">
                            <?php
                                echo $row['action'] == "ARCHIVE"? "ARCHIVE" : "ACTIVE";
                            ?>
                        </div>  
                        <img src="./../images/airlines/<?php echo $row["image"]; ?>" 
                      style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;">
                          <h3><?php echo $row["name"]; ?></h3>
                          <li><?php echo $row['description']; ?></li>
                          <br>
                          <span class="sub-title mb-2 d-block">
                          <a target="_blank" href="services_modify.php?id=<?php echo $row['id']; ?>&type=Airlines">
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


        <bR>
        <BR>
        <bR>
        <bR>
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
    <!----------------ARCHIVED---------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
        <div class="container">
          <div class="row mb-5">
              <div class="col-lg-6 section-title">
                <span class="sub-title mb-2 d-block">ARCHIVED SERVICE</span>
              </div>
            </div>
          <div class="row">
              <div class="col-lg-12 ml-auto">
                <div class="row">

                  <?php
                    $tour_package_query = "SELECT * FROM services WHERE action = 'ARCHIVE' AND type = 'Airlines' ORDER BY name ASC";

                    if($result = mysqli_query($con, $tour_package_query))
                    {
                      while($row = mysqli_fetch_assoc($result )){
                        // $package_id = $row['id'];
                        // $package_destionation_query = "SElECT * FROM package_destinations WHERE tour_package_id = ".$package_id;

                  ?>
                      <!---------------------------------->
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100" style="position:relative; text-align: center;">
                        
                        <div style="position:absolute; top:0px; right: 0px; color: white; font-weight:bold; background-color: rgb(0, 123, 255); padding: 10px 5px;">
                            <?php
                                echo $row['action'] == "ARCHIVE"? "ARCHIVE" : "ACTIVE";
                            ?>
                        </div>  
                        <img src="./../images/airlines/<?php echo $row["image"]; ?>" 
                      style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;">
                          <h3><?php echo $row["name"]; ?></h3>
                          <li><?php echo $row['description']; ?></li>
                          <br>
                          <span class="sub-title mb-2 d-block">
                          <a target="_blank" href="services_modify.php?id=<?php echo $row['id']; ?>&type=Airlines">
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
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
      </div><!---------------------------------------AIRLINES-------------------------------------------------------> 


      <!---------------------------------------SHIPPINGS------------------------------------------------------->
      <div class="tab-pane" id="shippings" role="tabpanel" aria-labelledby="shippings-tab">
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
    <!------ACTIVE---------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
        <div class="container">
          <div class="row mb-5"><!-- .START site-section -->
            <div class="col-lg-6 section-title"><!-- .START site-section -->
              <span class="sub-title mb-2 d-block">ACTIVE SERVICE</span>
            </div>
            <div class="col-lg-6 section-title" style="text-align:right;">
              <a href="#">
                <span class="icon-add" style="font-size:21px;" onclick="$('.add_new_shippings').css('display', 'block ');" >Add Shipping Service</span>
              </a>
            </div>
          </div>
          <div class="row"><!-- .START site-section -->
              <div class="col-lg-12 ml-auto">
                <div class="row">

                  <?php
                    $tour_package_query = "SELECT * FROM services WHERE action != 'ARCHIVE' AND type = 'Shippings' ORDER BY name ASC";

                    if($result = mysqli_query($con, $tour_package_query))
                    {
                      while($row = mysqli_fetch_assoc($result )){

                  ?>
                      <!---------------------------------->
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100" style="position:relative; text-align: center;">
                        
                        <div style="position:absolute; top:0px; right: 0px; color: white; font-weight:bold; background-color: rgb(0, 123, 255); padding: 10px 5px;">
                            <?php
                                echo $row['action'] == "ARCHIVE"? "ARCHIVE" : "ACTIVE";
                            ?>
                        </div>  
                        <img src="./../images/shippings/<?php echo $row["image"]; ?>" 
                      style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;">
                          <h3><?php echo $row["name"]; ?></h3>
                          <li><?php echo $row['description']; ?></li>
                          <br>
                          <span class="sub-title mb-2 d-block">
                          <a target="_blank" href="services_modify.php?id=<?php echo $row['id']; ?>&type=Shippings">
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


        <bR>
        <BR>
        <bR>
        <bR>
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
    <!----------------ARCHIVED---------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
        <div class="container">
          <div class="row mb-5">
              <div class="col-lg-6 section-title">
                <span class="sub-title mb-2 d-block">ARCHIVED SERVICE</span>
              </div>
            </div>
          <div class="row">
              <div class="col-lg-12 ml-auto">
                <div class="row">

                  <?php
                    $tour_package_query = "SELECT * FROM services WHERE action = 'ARCHIVE' AND type = 'Shippings' ORDER BY name ASC";

                    if($result = mysqli_query($con, $tour_package_query))
                    {
                      while($row = mysqli_fetch_assoc($result )){
                        // $package_id = $row['id'];
                        // $package_destionation_query = "SElECT * FROM package_destinations WHERE tour_package_id = ".$package_id;

                  ?>
                      <!---------------------------------->
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100" style="position:relative; text-align: center;">
                        
                        <div style="position:absolute; top:0px; right: 0px; color: white; font-weight:bold; background-color: rgb(0, 123, 255); padding: 10px 5px;">
                            <?php
                                echo $row['action'] == "ARCHIVE"? "ARCHIVE" : "ACTIVE";
                            ?>
                        </div>  
                        <img src="./../images/shippings/<?php echo $row["image"]; ?>" 
                      style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;">
                          <h3><?php echo $row["name"]; ?></h3>
                          <li><?php echo $row['description']; ?></li>
                          <br>
                          <span class="sub-title mb-2 d-block">
                          <a target="_blank" href="services_modify.php?id=<?php echo $row['id']; ?>&type=Shippings">
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
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
      </div><!---------------------------------------SHIPPINGS-------------------------------------------------------> 
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
  <script>
    // $(function () {
    //   $('#myTab li:last-child a').tab('show')
    // })
  </script>
  </body>
</html>

<!----------------------------------------------------------->
<!------------------ADD NEW SERVICE FORM AIRLINE------------->
<!----------------------------------------------------------->
<div class="add_new_airlines" 
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
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Service Informations</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="avatar">Recommended image size : 450pixel x 450pixel</label>
                <Br>
                <input type="file"
                      id="avatar" name="image"
                      accept="image/png, image/jpeg">
                <br><br>
                <input type="text" require name="service_name" placeholder="Service Name" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:15px;" /> 
                <label>Service Description</label>
                <textarea name="description" style="width: 100%; height: 300px; font-size: 18px; margin-bottom:5px;"> </textarea>
                <br>
                <input type="submit" value="Save" name="saveAirLines" class="btn btn-primary"/> | <button onclick="$('.add_new_package').css('display', 'none');" class="btn btn-light">Cancel</button>
            </form>

        </div>
    </div>
</div>
<!----------------------------------------------------------->
<!------------------ADD NEW SERVICE FORM AIRLINE------------->
<!----------------------------------------------------------->

<!----------------------------------------------------------->
<!-----------------ADD NEW SERVICE FORM SHIPPING------------->
<!----------------------------------------------------------->
<div class="add_new_shippings" 
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
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Service Informations</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="avatar">Recommended image size : 450pixel x 450pixel</label>
                <Br>
                <input type="file"
                      id="avatar" name="image"
                      accept="image/png, image/jpeg">
                <br><br>
                <input type="text" require name="service_name" placeholder="Service Name" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:15px;" /> 
                <label>Service Description</label>
                <textarea name="description" style="width: 100%; height: 300px; font-size: 18px; margin-bottom:5px;"> </textarea>
                <br>
                <input type="submit" value="Save" name="saveShippings" class="btn btn-primary"/> | <button onclick="$('.add_new_package').css('display', 'none');" class="btn btn-light">Cancel</button>
            </form>

        </div>
    </div>
</div>
<!----------------------------------------------------------->
<!-----------------ADD NEW SERVICE FORM SHIPPING------------->
<!----------------------------------------------------------->
