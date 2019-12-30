    
<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
    $id = @mysqli_real_escape_string($con, $_GET['id']);

    if(isset($_POST['save'])){
        $header = mysqli_real_escape_string($con, $_POST['header']);
        $description = mysqli_real_escape_string($con, $_POST['description']);
        $image = date('dmYHis').$_FILES["image"]['name'];
        $image_tmp =$_FILES['image']['tmp_name'];
        
        if($_FILES['image']['name'] != null || !empty($_FILES['image']['name']))
        {
            $image = date('dmYHis').$_FILES["image"]['name'];
            $save_query = "UPDATE `updates` SET `header` = '".$header."', `description` ='".$description."', `image` = '".$image."' WHERE `id` = ".$id;
            if($exec = mysqli_query($con, $save_query))
            {
                $image_dir = "./../images/updates/".$image;
                move_uploaded_file($image_tmp, $image_dir);
            }

        }
        else
        {
            $save_query = "UPDATE `updates` SET `header` = '".$header."', `description` ='".$description."' WHERE `id` = ".$id;
            $exec = mysqli_query($con, $save_query);
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
                    <h2 class="title text-primary">UPDATES</h2>
                </div>
            </div>
            <?php
                  $qfetch = "SELECT * FROM updates WHERE id = ".$id;
                  if($results = mysqli_query($con, $qfetch))
                  {
                    while($rows = mysqli_fetch_assoc($results))
                    {
            ?>
            <form method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12 ml-auto">


                            <img src="./../images/updates/<?php echo $rows['image']; ?>" style="margin-bottom: 10px; width: 300px;"/>
                            <br>
                            <input type="file" name="image" accept="image/png, image/jpeg">

                            <Br>
                            <Br>
                            <label>Header</label>
                            <input class="form-control"  value="<?php echo $rows['header']; ?>" style="border:1px solid rgba(0,0,0,0.2);" type="text" name="header" placeholder="Destination">


                            <label>Description</label>
                            <textarea name="description" class="form-control" style="border:1px solid rgba(0,0,0,0.2);" rows="7"><?php echo $rows['description']; ?></textarea>
                            
                            <input type="submit" class="btn btn-primary"  name="save" style="margin:25px 0px; padding: 10px 25px; border-radius:5px;" value="Update"/>
                        
                    </div>
                </div>
            </form>
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
