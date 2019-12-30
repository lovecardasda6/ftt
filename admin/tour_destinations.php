
<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
  $id = @$_GET['id'];
  $action = @$_GET['action'];

  if($action == "ARCHIVE"){
    $action_query = "UPDATE tour_destinations SET action = 'ARCHIVE' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }else if($action == "ACTIVE"){
    $action_query = "UPDATE tour_destinations SET action = 'ACTIVE' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }

  if(isset($_POST['save'])){
    $destinations = mysqli_real_escape_string($con, $_POST['destinations']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $save_query = "INSERT INTO `tour_destinations` (`destinations`, `description`) VALUES ('".$destinations."', '".$description."')";
    $exec = mysqli_query($con, $save_query);
    $exec_id = mysqli_insert_id($con);

    if($exec){

        $image1_name = $_FILES["image1"]['name'];
        $image1_tmp =$_FILES['image1']['tmp_name'];

        if($image1_name != null || !empty($image1_name)){
            $image1_name = date('dmYHis').$_FILES["image1"]['name'];

            $save_query = "INSERT INTO `tour_destination_image` (`tour_destination_id`, `image`) VALUES ('".$exec_id."', '".$image1_name."')";
            $exec = mysqli_query($con, $save_query);

            $image_dir = "./../images/tour_destinations/".$image1_name;
            move_uploaded_file($image1_tmp, $image_dir);

        }

        $image2_name = $_FILES["image2"]['name'];
        $image2_tmp =$_FILES['image2']['tmp_name'];
        if($image2_name != null || !empty($image2_name)){
            $image2_name = date('dmYHis').$_FILES["image2"]['name'];

            $save_query = "INSERT INTO `tour_destination_image` (`tour_destination_id`, `image`) VALUES ('".$exec_id."', '".$image2_name."')";
            $exec = mysqli_query($con, $save_query);

            $image_dir = "./../images/tour_destinations/".$image2_name;
            move_uploaded_file($image2_tmp, $image_dir);
           
        }
        
        
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
                                <?php include_once __DIR__."/require_files/navigations.php"; ?>
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
    <div class="site-section bg-light" id="what-we-do-section" style="margin:-75px;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <h2 class="title text-primary">TOUR DESTINATIONS</h2>
            <span class="sub-title mb-2 d-block">ACTIVE DESTINATIONS</span>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" onclick="$('.add_new_destinations').css('display', 'block ');" >Add Destination</span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">

              <?php
                $tour_package_query = "SELECT * FROM tour_destinations WHERE action != 'ARCHIVE' ORDER BY destinations ASC";

                if($result = mysqli_query($con, $tour_package_query))
                {
                  while($row = mysqli_fetch_assoc($result )){
                    // $package_id = $row['id'];
                    // $package_destionation_query = "SElECT * FROM tour_destinations WHERE tour_package_id = ".$package_id;

              ?>
                  <!---------------------------------->
                  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="service h-100" style="position:relative;">
                    
                    <div style="position:absolute; top:0px; right: 0px; color: white; font-weight:bold; background-color: rgb(0, 123, 255); padding: 10px 5px;">
                        <?php
                            echo $row['action'] == "ARCHIVE"? "ARCHIVED" : "ACTIVE";
                        ?>
                    </div>


                      
                    <h3><?php echo $row["destinations"] ?></h3>
                    <li><?php echo substr($row['description'], 0, 400); ?>.....</li>
                    <p><a target="_blank" href="destinations_read.php?id=<?php echo $row['id']; ?>" class="readmore">Read more</a></p>

                    <br>
                      <span class="sub-title mb-2 d-block">
                        <a target="_blank" href="tour_destinations_modify.php?id=<?php echo $row['id']; ?>">
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
            <span class="sub-title mb-2 d-block">ARCHIVED DESTINATIONS</span>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">

              <?php
                $tour_package_query = "SELECT * FROM tour_destinations WHERE action='ARCHIVE' ORDER BY destinations ASC";

                if($result = mysqli_query($con, $tour_package_query))
                {
                  while($row = mysqli_fetch_assoc($result )){

              ?>
                  <!---------------------------------->
                  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="service h-100" style="position:relative;">
                    
                    <div style="position:absolute; top:0px; right: 0px; color: white; font-weight:bold; background-color: rgb(0, 123, 255); padding: 10px 5px;">
                        <?php
                            echo $row['action'] == "ARCHIVE"? "ARCHIVED" : "ACTIVE";
                        ?>
                    </div>


                    <h3><?php echo $row["destinations"] ?></h3>
                    <li><?php echo substr($row['description'], 0, 400); ?>.....</li>
                    <p><a target="_blank" href="destinations_read.php?id=<?php echo $row['id']; ?>" class="readmore">Read more</a></p>

                      <br>
                      <span class="sub-title mb-2 d-block">
                        <a target="_blank" href="tour_destinations_modify.php?id=<?php echo $row['id']; ?>">
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
     
  </body>
</html>


<!----------------------------------------------------------->
<!------------------ADD NEW SERVICE FORM AIRLINE------------->
<!----------------------------------------------------------->
<div class="add_new_destinations" 
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
            <div class="col-lg-12 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Destination Informations</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="avatar">Recommended image size : 450pixel x 450pixel</label>
                <Br>
                <input type="file"
                      id="avatar" name="image1"
                      accept="image/png, image/jpeg">
                <br>
                <Br>
                <input type="file"
                      id="avatar" name="image2"
                      accept="image/png, image/jpeg">
                <br><br>
                <input type="text" require name="destinations" placeholder="Destination" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:15px;" /> 
                <label>Destination Description</label>
                <textarea name="description" style="width: 100%; height: 300px; font-size: 18px; margin-bottom:5px;"> </textarea>
                <br>
                <input type="submit" style="border-radius:0px;" value="Save" name="save" class="btn btn-primary"/> 
                &nbsp; | &nbsp;  
                <button type="button" style="border-radius:0px;" onclick="$('.add_new_destinations').css('display', 'none');" class="btn btn-light">Cancel</button>
            </form>

        </div>
    </div>
</div>
<!----------------------------------------------------------->
<!------------------ADD NEW SERVICE FORM AIRLINE------------->
<!----------------------------------------------------------->