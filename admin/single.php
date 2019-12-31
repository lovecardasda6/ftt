<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
  
  $id =  @mysqli_real_escape_string($con, $_GET['id']);


  if($_GET['action'] != null && $_GET['delete_id'] != null)
  {
    $delete_id = $_GET['delete_id'];
    $q = "DELETE FROM photos WHERE id = ".$delete_id;
    $exec = mysqli_query($con, $q);
  }
 
  if(isset($_POST['upload']))
  {
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];
    $image4 = $_FILES['image4']['name'];
    $image5 = $_FILES['image5']['name'];
    $image6 = $_FILES['image6']['name'];
    $image7 = $_FILES['image7']['name'];

    $tmp_name_image1 = $_FILES['image1']['tmp_name'];
    $tmp_name_image2 = $_FILES['image2']['tmp_name'];
    $tmp_name_image3 = $_FILES['image3']['tmp_name'];
    $tmp_name_image4 = $_FILES['image4']['tmp_name'];
    $tmp_name_image5 = $_FILES['image5']['tmp_name'];
    $tmp_name_image6 = $_FILES['image6']['tmp_name'];
    $tmp_name_image7 = $_FILES['image7']['tmp_name'];

    if($image1 != null || !empty($image1))
    {
      $image1 = date('dmYHis').$_FILES["image1"]['name'];
      $q = "INSERT INTO `photos` (`album_id`, `image`) VALUES ('".$id."', '".$image1."')";
      $exec = mysqli_query($con, $q);

      $image_dir = "./../photos/".$image1;
      move_uploaded_file($tmp_name_image1, $image_dir);
    }

    if($image2 != null || !empty($image2))
    {
      $image2 = date('dmYHis').$_FILES["image2"]['name'];
      $q = "INSERT INTO `photos` (`album_id`, `image`) VALUES ('".$id."', '".$image2."')";
      $exec = mysqli_query($con, $q);
      $image_dir = "./../photos/".$image2;
      move_uploaded_file($tmp_name_image2, $image_dir);
    }

    if($image3 != null || !empty($image3))
    {
      $image3 = date('dmYHis').$_FILES["image3"]['name'];
      $q = "INSERT INTO `photos` (`album_id`, `image`) VALUES ('".$id."', '".$image3."')";
      $exec = mysqli_query($con, $q);
      $image_dir = "./../photos/".$image3;
      move_uploaded_file($tmp_name_image3, $image_dir);
    }

    if($image4 != null || !empty($image4))
    {
      $image4 = date('dmYHis').$_FILES["image4"]['name'];
      $q = "INSERT INTO `photos` (`album_id`, `image`) VALUES ('".$id."', '".$image4."')";
      $exec = mysqli_query($con, $q);

      $image_dir = "./../photos/".$image4;
      move_uploaded_file($tmp_name_image4, $image_dir);
    }

    if($image5 != null || !empty($image5))
    {
      $image5 = date('dmYHis').$_FILES["image5"]['name'];
      $q = "INSERT INTO `photos` (`album_id`, `image`) VALUES ('".$id."', '".$image5."')";
      $exec = mysqli_query($con, $q);

      $image_dir = "./../photos/".$image5;
      move_uploaded_file($tmp_name_image5, $image_dir);
    }

    if($image6 != null || !empty($image6))
    {
      $image6 = date('dmYHis').$_FILES["image6"]['name'];
      $q = "INSERT INTO `photos` (`album_id`, `image`) VALUES ('".$id."', '".$image6."')";
      $exec = mysqli_query($con, $q);

      $image_dir = "./../photos/".$image6;
      move_uploaded_file($tmp_name_image6, $image_dir);
    }

    if($image7 != null || !empty($image7))
    {
      $image7 = date('dmYHis').$_FILES["image7"]['name'];
      $q = "INSERT INTO `photos` (`album_id`, `image`) VALUES ('".$id."', '".$image7."')";
      $exec = mysqli_query($con, $q);
        
      $image_dir = "./../photos/".$image7;
      move_uploaded_file($tmp_name_image7, $image_dir);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fely's Tours and Travel - Trips for Keeps</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
      <link rel="stylesheet" href="./gallery/fonts/icomoon/style.css">

      <link rel="stylesheet" href="./gallery/css/bootstrap.min.css">
      <link rel="stylesheet" href="./gallery/css/magnific-popup.css">
      <link rel="stylesheet" href="./gallery/css/jquery-ui.css">
      <link rel="stylesheet" href="./gallery/css/owl.carousel.min.css">
      <link rel="stylesheet" href="./gallery/css/owl.theme.default.min.css">

      <link rel="stylesheet" href="./gallery/css/bootstrap-datepicker.css">

      <link rel="stylesheet" href="./gallery/fonts/flaticon/font/flaticon.css">

      <link rel="stylesheet" href="./gallery/css/aos.css">
      <link rel="stylesheet" href="./gallery/css/fancybox.min.css">

      <link rel="stylesheet" href="./gallery/css/style.css">
      
  </head>
  <body style="background-color: white;">
  

  <div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>





  <!----------------------------NAVIGATION--------------------------------------->
  <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap" style='padding: 15px;'>
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-10 col-md-10" style="padding:0px; margin:0px;">
              <h1 class="my-0 site-logo">
                
                <?php 
                  $res = mysqli_query($con, "SELECT * FROM images WHERE `type` = 'logo'");
                  if($res)
                  {
                    while($row = mysqli_fetch_assoc($res))
                    {
                ?>
                  <img src="./../images/<?php echo $row['image']; ?>"style=" width: 62px;height: 62px;"/> 
                <?php
                    }
                  }
                ?>
                
                <a href="./../index.php" style='font-family:Arial; color:black; font-weight: bold;'>Fely's Tours & Travel. </a>
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
<!----------------------------NAVIGATION--------------------------------------->




        <div class="container">
          <div class="row mb-5"><!-- .START site-section -->
            <div class="col-lg-12 section-title" style="text-align:right;">
              <a href="#">
                <span class="icon-add" style="font-size:21px;" onclick="$('.upload_image').css('display', 'block ');" >Upload photos</span>
              </a>
            </div>
          </div>
        </div>  






  <div style="margin:auto; width: 90%; ">
    <main class="main-content" style=" width: 100%; ">
      <div class="container-fluid photos">
      
<!----------------------------START--------------------------------------->
      <?php
        $res = mysqli_query($con, "SELECT * FROM albums WHERE id = ".$id);
        if($res)
        {
          while($row = mysqli_fetch_assoc($res))
          {
      ?>

        <div class="row pt-4 mb-5 text-center">
          <div class="col-12">
            <h2 class="mb-4"><?php echo $row['title']; ?></h2>
              <p><?php echo $row['description']; ?> </p>
          </div>
        </div>

        <?php
          }
        }
        ?>
<!--------------------------END-------------------------------------------->



<!----------------------------START--------------------------------------->
        <div class="row align-items-stretch">
<!----------------------------START--------------------------------------->
      <?php
        $res = mysqli_query($con, "SELECT * FROM photos WHERE album_id = ". $id);
        if($res)
        {
          $count = 0;
          while($row = mysqli_fetch_assoc($res))
          {
            $count += 1;
      ?>

          <?php if($count == 1){ ?>
          <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>  
          
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery" >
            
            

              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 2){ ?>
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 3){ ?>
          <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 4){ ?>
          <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 5){ ?>
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 6){ ?>
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 7){ ?>
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 8){ ?>
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 9){ ?>
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 10){ ?>
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200" style="position:relative;">
          <a href="?id=<?php echo $id; ?>&delete_id=<?php echo $row['id']; ?>&action=remove"><span class="icon-trash" style="position: absolute; top: 0px; left: 0px; color: red; font-size:24px;">Delete</span></a>
          <Br>
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php $count = 0; } ?>

<?php
          }
        }
?>

<!--------------------------END-------------------------------------------->
        </div>
<!--------------------------END-------------------------------------------->


        <div class="row justify-content-center">
          <div class="col-md-12 text-center py-5">
            <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
          </div>
        </div>
      </div>
    </main>
  <div style="margin:auto; width: 90%; ">

</div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>

<!----------------------------------------------------------->
<!-----------------ADD NEW SERVICE FORM SHIPPING------------->
<!----------------------------------------------------------->
<div class="upload_image" 
style="
    display: none;
    position: absolute; 
    top: 0; 
    left:0; 
    background-color: rgba(0,0,0,.5); 
    width: 100%; 
    height:100%; 
    z-index: 2000;
    align-content:center;
">
<Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100" style='background-color:white; z-index: 2000;'>
            <div class="col-lg-6 section-title" style='padding: 25px;'>
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Choose Image</span>
            </div>

            <form style="padding: 10px 25px; margin-top:8px;" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="avatar">Upload 7 photos at a time.</label>
                <Br>
                <input type="file"
                      id="avatar" name="image1"
                      accept="image/png, image/jpeg">
                      <Br><Br>
                <input type="file"
                      id="avatar" name="image2"
                      accept="image/png, image/jpeg">
                      <Br><Br>
                <input type="file"
                      id="avatar" name="image3"
                      accept="image/png, image/jpeg">
                      <Br><Br>
                <input type="file"
                      id="avatar" name="image4"
                      accept="image/png, image/jpeg">
                      <Br><Br>
                <input type="file"
                      id="avatar" name="image5"
                      accept="image/png, image/jpeg">
                      <Br><Br>
                <input type="file"
                      id="avatar" name="image6"
                      accept="image/png, image/jpeg">
                      <Br><Br>
                <input type="file"
                      id="avatar" name="image7"
                      accept="image/png, image/jpeg">
                      <Br><Br>
                <input type="submit" style="border-radius:0px" value="Save" name="upload" class="btn btn-primary"/> 
                &nbsp; | &nbsp;
                <button type="button" style="border-radius:0px" onclick="$('.upload_album').css('display', 'none');" class="btn btn-light">Cancel</button>
            </form>

        </div>
    </div>
</div>
<!----------------------------------------------------------->
<!-----------------UPLOAD ALBUM END------------->
<!----------------------------------------------------------->