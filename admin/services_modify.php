
<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
  $id = mysqli_real_escape_string($con, @$_GET['id']);
  $type= mysqli_real_escape_string($con, @$_GET['type']);

  if(isset($_POST['save'])){
    $service_name = mysqli_real_escape_string($con, $_POST['service_name']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $image_name = $_FILES["image"]['name'];
    $image_tmp =$_FILES['image']['tmp_name'];

    if($image_name != null || !empty($image_name)){
        if($type == "Airlines")
        {
            $image_name = date('dmYHis').$_FILES["image"]['name'];
            $update_query = "UPDATE `services` SET `name`='".$service_name."', `description`='".$description."', `image` = '".$image_name."' WHERE id = ".$id;
            if($exec = mysqli_query($con, $update_query))
            {
                $image_dir = "./../images/airlines/".$image_name;
                move_uploaded_file($image_tmp, $image_dir);
            }
        }
        else
        {
            $image_name = date('dmYHis').$_FILES["image"]['name'];
            $update_query = "UPDATE `services` SET `name`='".$service_name."', `description`='".$description."', `image` = '".$image_name."' WHERE id = ".$id;
            if($exec = mysqli_query($con, $update_query))
            {
                $image_dir = "./../images/shippings/".$image_name;
                move_uploaded_file($image_tmp, $image_dir);
            }
        }
    }
    else
    {
        $update_query = "UPDATE `services` SET `name`='".$service_name."', `description`='".$description."' WHERE id = ".$id;
        $exec = mysqli_query($con, $update_query);
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
    <div class="site-section bg-light" style="margin-top: -75px;">
        <div class="container">
            <div class="row mb-5">
            <div class="col-lg-6 section-title">
                <h2 class="title text-primary">SERVICES</h2>
                <span class="sub-title mb-2 d-block">Modify Service</span>
            </div>
            </div>

            <div style="width: 50%; margin:auto;">  
                <div class="service h-100">
                    <div class="col-lg-12 section-title">
                        <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Service Informations</span>
                    </div>
                    <Br>
                        <?php
                            $q = "SElECT * FROM services WHERE id = ".$id;
                            if($res = mysqli_query($con, $q))
                            {
                                while($row = mysqli_fetch_assoc($res))
                                {
                            ?>
                                    <img src="./../images/<?php echo $type == "Airlines"? "airlines" : "shippings"; ?>/<?php echo $row["image"]; ?>" 
                                        style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;">

                                    <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off" enctype="multipart/form-data">
                                        <label for="avatar">Recommended image size : 450pixel x 450pixel</label>
                                        <Br>
                                        <input type="file"
                                            id="avatar" name="image"
                                            accept="image/png, image/jpeg">
                                        <br><br>
                                        <input type="text" require name="service_name" value="<?php echo $row['name']; ?>" placeholder="Service Name" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:15px;" /> 
                                        <label>Service Description</label>
                                        <textarea name="description" style="width: 100%; height: 300px; font-size: 18px; margin-bottom:5px;"> <?php echo $row['description']; ?></textarea>
                                        <br>
                                        <input type="submit" value="Update" name="save" class="btn btn-primary" style="border-radius:0px;"/>
                                    </form>
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
