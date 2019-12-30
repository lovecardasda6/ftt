
<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
  $id = @mysqli_real_escape_string($con, $_GET['id']);
  $action = @mysqli_real_escape_string($con, $_GET['action']);

  if($action == "ARCHIVE"){
    $action_query = "UPDATE updates SET action = 'ARCHIVE' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }else if($action == "ACTIVE"){
    $action_query = "UPDATE updates SET action = 'ACTIVE' WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }

  if(isset($_POST['save'])){
    $header = mysqli_real_escape_string($con, $_POST['header']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $image = $_FILES["image"]['name'];
    $image_tmp =$_FILES['image']['tmp_name'];

    if($image != null || !empty($image)){
      $image = date('dmYHis').$_FILES["image"]['name'];
      $q = "INSERT INTO updates (`header`, `description`, `image`) VALUES ('".$header."', '".$description."', '".$image."')";

      if( $exec = mysqli_query($con, $q)){
        $image_dir = "./../images/updates/".$image;
        move_uploaded_file($image_tmp, $image_dir);
      }
    }else{
      $q = "INSERT INTO updates (`header`, `description`) VALUES ('".$header."', '".$description."')";
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
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <h2 class="title text-primary">UPDATES</h2>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
            <span class="icon-add" style="font-size:24px;" onclick="$('.post_update').css('display', 'block ');" >Post Update</span>
            </a>
          </div>
        </div>


              <?php
                $tour_package_query = "SELECT * FROM updates ORDER BY id DESC LIMIT 0,25";

                if($result = mysqli_query($con, $tour_package_query))
                {
                  while($row = mysqli_fetch_assoc($result )){

              ?>
                  <!---------------------------------->
                  <div class="row">
                    <div class="col-lg-4 mb-4">
                      <img src="./../images/updates/<?php echo $row['image']; ?>" alt="Image" class="img-fluid" class="img-fluid">
                    </div>
                    <div class="col-lg-8 " style="position:relative;">

                      <div style="position:absolute; top: 30px; right: 30px;">
                        <a target="_blank" href="update_modify.php?id=<?php echo $row['id']; ?>">
                          <span class="icon-edit" style="font-size: 24px;"></span>
                        </a> 
                        &nbsp; | &nbsp;
                        <a href="?id=<?php echo $row['id']; ?>&action=<?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?>">
                         <?php echo $row['action'] == "ARCHIVE"? "<span class='icon-check' style='font-size: 24px;'></span>" : "<span class='icon-archive' style='font-size: 24px;'></span>"; ?>
                        </a>
                      </div>
                      <br>
                      <h2 class="title text-primary mb-3" style="line-height: 15px;"><?php echo $row['header']; ?></h2>
                      <label style="margin-top: -65px;">Posted : <?php echo $row['posted']; ?></label>
                      <br><br>
                      <p class="mb-4"><?php echo $row['description']; ?></p>
                      
                    </div>
                  </div>
                  <hr>
                  <!---------------------------------->
              <?php
                  }
                }
              ?>


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
<!-------------------------ADD NEW  FORM--------------------->
<!----------------------------------------------------------->
<div class="post_update" 
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
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Post Update</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="avatar">Choose image : </label>
                <Br>
                <input type="file"
                      id="avatar" name="image"
                      accept="image/png, image/jpeg">
                <br><br>
                <input type="text" require name="header" placeholder="Header" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:15px;" /> 
                <label>Description</label>
                <textarea name="description" style="width: 100%; height: 300px; font-size: 18px; margin-bottom:5px;"> </textarea>
                <br>
                <input type="submit" style="border-radius:0px;" value="Save" name="save" class="btn btn-primary"/> 
                &nbsp; | &nbsp;  
                <button type="button" style="border-radius:0px;" onclick="$('.post_update').css('display', 'none');" class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<!----------------------------------------------------------->
<!-------------------------ADD NEW  FORM--------------------->
<!----------------------------------------------------------->