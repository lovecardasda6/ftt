<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
  
  $id =  @mysqli_real_escape_string($con, $_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Shutter &mdash; Colorlib Website Template</title>
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
          <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 2){ ?>
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 3){ ?>
          <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 4){ ?>
          <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 5){ ?>
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 6){ ?>
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 7){ ?>
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 8){ ?>
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 9){ ?>
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="./../photos/<?php echo $row['image']; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="./../photos/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>

          <?php }else if($count == 10){ ?>
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
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