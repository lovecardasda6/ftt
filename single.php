<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shutter &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="./gallery_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./gallery_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./gallery_assets/css/jquery-ui.css">
    <link rel="stylesheet" href="./gallery_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./gallery_assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="./gallery_assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="./gallery_assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="./gallery_assets/css/aos.css">
    <link rel="stylesheet" href="./gallery_assets/css/fancybox.min.css">

    <link rel="stylesheet" href="./gallery_assets/css/style.css">
    
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
  

<div class="site-wrap">

<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> <!-- .site-mobile-menu -->
      
      
      <div class="site-navbar-wrap">
        
        <div class="site-navbar site-navbar-target js-sticky-header" style="margin-top: 15px;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-10 col-md-10" style="padding:0px; margin:0px;">
                <h1>
                  <img src="./images/img.png"style=" width: 62px;height: 62px;"/>
                  <a href="index.php">Fely's Tours & Travel<span class="text-primary">.</span> </a>
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
                    <?php
                      require_once __DIR__."/required_files/page_navigations.php";
                    ?>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- END .site-navbar-wrap -->


 
<!------------------------------style="border: 1px solid;"---------------------------------------------->
  <main class="main-content col-lg-12 mb-12" style="width: 100%;">
  
    <div class="row pt-4 mb-5 text-center"><!-- START .site-navbar-wrap -->
		    <div class="col-12 col-md-12 blockade2">
            <a href="photos.php" class="nav-link" style="margin: 15px 0px;"><h4>< <span style="text-decoration:underline;">Back<span></h4></a>
        </div>
        <div class="col-12 col-md-12">
          <?php
            $conn = mysqli_connect("localhost", "root", "", "ftt");

            $q = "SELECT * FROM albums WHERE id = ".$_GET['id'];
            $res = mysqli_query($conn, $q);
            $row = mysqli_fetch_assoc($res);

          ?>
            <h2><?php echo $row["title"]; ?></h2>
			      <p><?php echo date_format(date_create($row["posted"]),"F d, Y"); ?></p>
            
        </div>
        <div class="container">
          <p>
            <?php echo $row["description"]; ?>
          </p>
        </div>
    </div><!-- END .site-navbar-wrap -->
	
	
    <div class="container-fluid photos"><!-- START .site-navbar-wrap -->
      <div class="row align-items-stretch">

          <?php
            $query = "SELECT * FROM images WHERE album_id = ".$_GET['id'];
            if($result = mysqli_query($conn ,$query)){

              $count = 0;
              while($row = mysqli_fetch_row($result)){   
          ?>

          <?php if($count == 0){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

        <?php if($count == 1){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

        <?php if($count == 2){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

          <?php if($count == 3){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

          <?php if($count == 4){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

          <?php if($count == 5){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

          <?php if($count == 6){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

          <?php if($count == 7){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

          <?php if($count == 8){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>

          <?php if($count == 9){ ?>
          <!-- START .site-navbar-wrap -->
          <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="<?php echo "./photos/".$row[2]; ?>" class="d-block photo-item" data-fancybox="gallery">
              <img src="<?php echo "./photos/".$row[2]; ?>" alt="Image" class="img-fluid">
              <div class="photo-text-more">
                <span class="icon icon-search"></span>
              </div>
            </a>
          </div>
          <?php
            }
          ?>
          

              <?php
              $count++;

              if($count == 10){
                $count = 0;
              }
              }
            }
              ?>

        

      </div>


      <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
          <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
        </div>
      </div>
    </div><!-- END .site-navbar-wrap -->
  </main>

</div> <!-- .site-wrap -->

  <script src="./gallery_assets/js/jquery-3.3.1.min.js"></script>
  <script src="./gallery_assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./gallery_assets/js/jquery-ui.js"></script>
  <script src="./gallery_assets/js/popper.min.js"></script>
  <script src="./gallery_assets/js/bootstrap.min.js"></script>
  <script src="./gallery_assets/js/owl.carousel.min.js"></script>
  <script src="./gallery_assets/js/jquery.stellar.min.js"></script>
  <script src="./gallery_assets/js/jquery.countdown.min.js"></script>
  <script src="./gallery_assets/js/jquery.magnific-popup.min.js"></script>
  <script src="./gallery_assets/js/bootstrap-datepicker.min.js"></script>
  <script src="./gallery_assets/js/aos.js"></script>

  <script src="./gallery_assets/js/jquery.fancybox.min.js"></script>

  <script src="./gallery_assets/js/main.js"></script>
    
  </body>
</html>