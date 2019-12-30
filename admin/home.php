
<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
  $id = @mysqli_real_escape_string($con, $_GET['id']);
  $action = @mysqli_real_escape_string($con, $_GET['action']);
  $contact = @mysqli_real_escape_string($con, $_GET['contact']);

  if($action == "delete"){
    $action_query = "DELETE FROM images WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }else if($action == "add_slide"){
    $action_query = "UPDATE images SET type = 'slide' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }
  else if($action == "update_logo"){
    $q = "SELECT * FROM `images` WHERE `type`='logo'";
    $exec = mysqli_query($con, $q);
    $lastId = mysqli_fetch_assoc($exec);

    $q = "UPDATE `images` SET type=NULL WHERE `id` = ".$lastId['id'];
    $exec = mysqli_query($con,$q);

    $q = "UPDATE images SET type = 'logo' WHERE id=".$id;
    $exec = mysqli_query($con, $q);
  }
  else if($action == "remove_slide"){
    $action_query = "UPDATE images SET type = NULL WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }

  if(isset($_POST['upload']))
  {
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    if($image != null || !empty($image)){

        $image = date('dmYHis').$_FILES["image"]['name'];
        $q = "INSERT INTO images SET `image` = '".$image."'";
        $exec = mysqli_query($con, $q);
        if($exec){
            $image_dir = "./../images/".$image;
            move_uploaded_file($tmp_name, $image_dir);
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
    <div class="site-section bg-light" id="what-we-do-section">
      <!-- .START container -->
      <div class="container" style="margin-bottom: -30px;">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <h2 class="title text-primary">HOME</h2>
          </div>
        </div>
      </div>
      <!-- END container -->




      <!-- .START container -->
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Carousel - Image Slide</span>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" onclick="$('.add_image').css('display', 'block ');" >Upload Image</span>
            </a>
          </div>
        </div>


        <!-- .START IMAGES -->
        <div class="row">

          <?php 
            $q = "SELECT * FROM images";
            $res = mysqli_query($con, $q);
            if($res)
            {
              while($row = mysqli_fetch_assoc($res))
              {
          ?>
          <!-- .START IMAGE -->
          <div class="col-2 col-md-2 col-lg-2" style="border:1px solid rgba(0,0,0,0.3); padding:10px; margin-bottom: 10px;">
            
            <img src = "./../images/<?php echo $row['image']; ?>" style="width: 100%;"/>

            <div style="margin: 15px 0px; z-index: 100;">
              <?php
                if($row['type'] != "logo")
                {
              ?>
              <a href="?action=update_logo&id=<?php echo $row['id']; ?>">
                <span class="icon-check" style="font-size:21px;"></span>
                <span for="">Set as Logo</span>
              </a>
              <?php
                
              ?>
              <Br>
              <?php
                if($row['type'] != "slide")
                {
              ?>
              <a href="?action=add_slide&id=<?php echo $row['id']; ?>">
                <span class="icon-check" style="font-size:21px;"></span>
                <span for="">Add to Slide</span>
              </a>
              <?php
                }
                else
                {
              ?>
                <a href="?action=remove_slide&id=<?php echo $row['id']; ?>">
                  <span class="icon-check" style="font-size:21px;"></span>
                  <span for="">Remove to Slide</span>
                </a>
               <?php
                }
              }
              ?>
              <Br>
                <a href="?action=delete&id=<?php echo $row['id']; ?>">
                  <span class="icon-trash" style="font-size:21px;"></span>
                  <span for="">Delete</span>
                </a>
            </div>

          </div>
          <!-- .START IMAGE -->
          <?php
              }
            }
          ?>

        </div>
        <!-- .END IMAGES -->



      </div>
      <!-- END container -->
      



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

<div class="add_image" 
style="
    display:none;
    position: absolute; 
    top: 0; 
    left:0; 
    background-color: rgba(0,0,0,.5); 
    width: 100%; 
    height:100%; 
    z-index: 100;
    align-content:center;
">
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Select Image</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" enctype="multipart/form-data">
                <input type="file"
                      id="avatar" name="image"
                      accept="image/png, image/jpeg">
                <br><br>
                <input style="border-radius:0px;" type="submit" value="Upload" name="upload" class="btn btn-primary"/> 
                &nbsp; | &nbsp;  
                <button class="btn btn-light" type="button" style="border-radius:0px;" onclick="$('.add_image').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>
