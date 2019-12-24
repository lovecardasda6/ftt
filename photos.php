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
                                <li><a href="index.php#home-section" class="nav-link">Home</a></li>
								<li><a href="index.php#update" class="nav-link">Update</a></li>
								<!-- <li><a href="#about-us-section" class="nav-link">About Us</a></li> -->
								
								<li><a href="index.php#services" class="nav-link">Services</a></li>
								
								<li><a href="index.php#what-we-do-section" class="nav-link">Tour Package</a></li>
								<!-- <li><a href="#what-we-do-section" class="nav-link">What We Do</a></li> -->
								<li><a href="index.php#portfolio-section" class="nav-link">New Destinations</a></li>
								<!-- <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li> -->
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

        <!-------------------------------------------------------------------------->
            
        <div class="main-content">
				<div class="container" style="position: relative;">
                  <div class="row mb-5" style="justify-content:center; border:0px solid;" >
                    <div class="col-lg-6 section-title" style="border:0px solid;">
                      <span class="sub-title mb-2 d-block" style="text-align:center;">Photos</span>
                      <h2 class="title text-primary"  style="text-align:center;">Travellers Photos</h2>
                    </div>
					
					<div class="col-lg-3 section-title blockade">
						<img src="./images/email.png" style="width: 60px; height: 38px;" />
						<p style="margin: 5px 8px;">Email your experience with us.</p>
					</div>
					
                  </div>
                </div>
				
                <div class="container-fluid photos">
                    <div class="row align-items-stretch">
                        
                        <?php 
                           $con = @mysqli_connect("localhost","root","","ftt");
                           if (mysqli_connect_errno()) {
                            echo "<div style='text-align:center;'>Failed to connect to the Server. Please contact the administrator</div>";
                            exit();
                          }
                          else
                          {

                            $query = "select albums.id, albums.title from albums";
                            if($result = mysqli_query($con, $query)){
                                while ($row = mysqli_fetch_row($result)) {
                                    $q2 = "select count(id) as `photos`, destination from images where album_id = ".$row[0];
                                    if($r2 = mysqli_query($con, $q2)){
                                        $data = mysqli_fetch_row($r2);
                        ?>
                            <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                                <a href="single.php?id=<?php echo $row[0]; ?>" class="d-block photo-item" style="position:relative;">
                                    <img src="<?php echo "./photos/".$data[1] ?>" alt="Image" class="img-fluid">
                                    <div class="photo-text-more">
                                        <div class="photo-text-more">
                                            <h3 class="heading"><?php echo $row[1]; ?></h3>
                                            <span class="meta"><?php echo $data[0]." Photos"; ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php 
                                    }
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
                </div>
        </main> 
        
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