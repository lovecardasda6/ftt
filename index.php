<?php
  require_once __DIR__."/required_files/config.php";
  
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
                
                <?php 
                  $res = mysqli_query($con, "SELECT * FROM images WHERE `type` = 'logo'");
                  if($res)
                  {
                    while($row = mysqli_fetch_assoc($res))
                    {
                ?>
                  <img src="./images/<?php echo $row['image']; ?>"style=" width: 62px;height: 62px;"/> 
                <?php
                    }
                  }
                ?>
                
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
                      require_once __DIR__."/required_files/home_navigations.php";
                    ?>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->
    
    <div class="site-blocks-cover" id="home-section" style="opacity: 100%;">
      <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">

          <?php 
            $q = "SELECT * FROM images WHERE `type` = 'slide'";
            $res = mysqli_query($con, $q);
            if($res)
            {
              while($row = mysqli_fetch_assoc($res))
              {
          ?>
          <div class="slide overlay">
            <img src="images/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">  
          </div>
          <?php
              }
            }
          ?>

        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10 align-self-center">
            <div class="intro">
              <div class="heading">
                <h1 style="font-size: 99px;">Fely's Tours & Travel</h1>
              </div>
              <div class="text">
                <p class="sub-text mb-5">Trips for Keeps</p>
                <p class="sub-text mb-5" style="background-color:rgba(0,0,0,0.5); font-size: 18px;">A DOT accredited travel and tours agency based in the "City of Friendship", Tagbilaran City, Bohol. The agency started operation last 2013 initially offering transport services under GTL Transport, both sister companies under GTL Group of Companies. With our very own line of transport buses, vans, cars and limo service we are committed to deliver cost-friendly, efficient, personalized service and customer satisfaction to our valued clients particularly those traveling to Bohol.</p>
                <!-- <p><a href="https://free-template.co/" target="_blank" class="btn btn-primary btn-md">Start a project</a></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-blocks-cover -->

    
     <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
     <div class="site-section" id="update">
        <div class="container">

          <div class="row mb-5">
            <div class="col-lg-6 section-title">
              <span class="sub-title mb-2 d-block">Latest Updates</span>
            </div>
          </div>

          <?php
                $tour_package_query = "SELECT * FROM updates WHERE action != 'ARCHIVE' ORDER BY id DESC LIMIT 0,2";

                if($result = mysqli_query($con, $tour_package_query))
                {
                  while($row = mysqli_fetch_assoc($result )){

              ?>
                  <!---------------------------------->
                  <div class="row">
                    <div class="col-lg-4 mb-4">
                      <img src="./images/updates/<?php echo $row['image']; ?>" alt="Image" class="img-fluid" class="img-fluid">
                    </div>
                    <div class="col-lg-8 ml-auto section-title">
                    
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

          <hr>
          <div style="text-align:center;">
            <a href="read_more_update.php?page=1"><span style="font-size:18px; font-weight:bold;">More update</span></a>
          </div>
        </div>
      </div> <!-- .END site-section -->







    <div class="site-section" id="services">
      <div class="container">
<!---------------------------------------------------------------------------------------------->
        <div class="row align-items-center">

          <div class="col-lg-6 mb-5">
            <div class="owl-carousel slide-one-item hero-slider">

              <?php
                 $services_query = "SELECT image FROM services WHERE action != 'ARCHIVE' AND type='AIRLINES' ORDER BY name ASC";

                if($result = mysqli_query($con, $services_query))
                {
                  while($row = mysqli_fetch_assoc($result ))
                  {
              ?>
                <div class="slide overlay">
                    <img src="./images/airlines/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">  
                  </div>
              <?php
                  }
                }
              ?>

            </div>
          </div>
          <div class="col-lg-5 ml-auto section-title">
            <span class="sub-title mb-2 d-block">SERVICES</span>
            <h2 class="title text-primary mb-3">Airlines</h2>
            <!-- <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->


            <div class="d-flex">
              <ul class="list-unstyled ul-check success mr-5">
                <?php
                  $services_query = "SELECT * FROM services WHERE action != 'ARCHIVE' AND type='AIRLINES' ORDER BY name ASC";

                  if($result = mysqli_query($con, $services_query))
                  {
                    while($row = mysqli_fetch_assoc($result ))
                    {
                ?>
                  <li> <b style="text-decoration: underline;"><?php echo $row['name']; ?></b>
                    <p> <?php echo $row['description']; ?></b></p>

                  </li>
                <?php
                    }
                  }
                ?>
              </ul>
            </div>  
          </div>
        </div>
<!---------------------------------------------------------------------------------------------->
        <div class="row align-items-center">
        <!---------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------->
          <div class="col-lg-6 mb-5">
            <div class="owl-carousel slide-one-item hero-slider">

              <?php
                $service_images_query = "SELECT image FROM services WHERE action != 'ARCHIVE' AND type='Shippings' ORDER BY name ASC";

                if($result = mysqli_query($con, $service_images_query))
                {
                  while($row = mysqli_fetch_assoc($result ))
                  {
              ?>
                <div class="slide overlay">
                    <img src="./images/shippings/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">  
                  </div>
              <?php
                  }
                }
              ?>

            </div>
          </div>
          <!---------------------------------------------------------------------------------------------->
          <!---------------------------------------------------------------------------------------------->
          <div class="col-lg-5 ml-auto section-title">
            <h2 class="title text-primary mb-3">Shippings</h2>
            <!-- <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->


            <div class="d-flex">
              <ul class="list-unstyled ul-check success mr-5">
                <?php
                  $services_query = "SELECT * FROM services WHERE action != 'ARCHIVE' AND type='Shippings' ORDER BY name ASC";

                  if($result = mysqli_query($con, $services_query))
                  {
                    while($row = mysqli_fetch_assoc($result ))
                    {
                ?>
                  <li> <b style="text-decoration: underline;"><?php echo $row['name']; ?></b>
                    <p> <?php echo $row['description']; ?></b></p>

                  </li>
                <?php
                    }
                  }
                ?>
              </ul>
            </div>
            <!-- <p><a data-fancybox data-ratio="2" href="https://vimeo.com/326176805" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p> -->
          </div>
        </div>
<!---------------------------------------------------------------------------------------------->
      </div>
    </div> <!-- .END site-section -->

<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<!-- .START site-section -->
    <div class="site-section bg-light" id="tour_package">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Tour Package</span>
            <h2 class="title text-primary">Offered Tour Package</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">

              <?php
                $tour_package_query = "SELECT * FROM tour_packages WHERE action != 'ARCHIVE' ORDER BY package_name ASC";

                if($result = mysqli_query($con, $tour_package_query))
                {
                  while($row = mysqli_fetch_assoc($result )){
                    $package_id = $row['id'];
                    $package_destionation_query = "SElECT * FROM package_destinations WHERE tour_package_id = ".$package_id;

              ?>
                  <!---------------------------------->
                  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="service h-100">
                      <span class="icon-map-marker display-4 text-primary d-block mb-4"></span>
                      <h3><?php echo $row["package_name"] ?></h3>
                      <?php
                        $package_destionation_query = "SElECT * FROM package_destinations WHERE tour_package_id = ".$package_id." ORDER BY destination ASC";
                        if($result2 = mysqli_query($con, $package_destionation_query)){
                          while($row2 = mysqli_fetch_assoc($result2)){
                      ?>
                        <li><?php echo $row2['destination']; ?></li>
                      <?php
                          }
                        }
                      ?>
                      <br>
                      <span class="sub-title mb-2 d-block">
                        <h5 class="title text-primary">Price : Php <?php echo $row['price']; ?></h5>
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

    <!------------------------------------------------------------------------------------------->
    <div class="site-section" id="destinations">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-8 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">New Destinations</span>
            <h2 class="title text-primary mb-3">Newly Added Tour Destinations</h2>
          </div>
        </div>
        <?php
          $tour_destinations_query = "SELECT * FROM tour_destinations WHERE action != 'ARCHIVE' ORDER BY destinations ASC";

          if($result = mysqli_query($con, $tour_destinations_query))
          {
            $counter = 0;
            while($row = mysqli_fetch_assoc($result ))
            {
              $counter++;
              $tour_destination_id = $row['id'];
        ?>
        <?php 
          if($counter == 1)
          { 
        ?>
        <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <?php 
              $tour_destination_image_query = "SELECT * FROM tour_destination_image WHERE tour_destination_id = ".$tour_destination_id;
              if($res2 = mysqli_query($con, $tour_destination_image_query))
              {
                while($r2 = mysqli_fetch_assoc($res2)){
            ?>
            <img src="./images/tour_destinations/<?php echo $r2['image']; ?>" alt="Image" class="img-fluid" class="img-fluid">
            <?php
                }
              }
            ?>
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3><?php echo $row['destinations']; ?></h3>
            <pre class="mb-4" style="font-family:Arial;  white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: -pre-wrap;  white-space: -o-pre-wrap; word-wrap: break-word; "><?php echo $row['description']; ?></pre>
          </div>
        </div>
        <?php 
          }
        else{
        ?>
        
        <div class="row mb-5">
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <?php 
              $tour_destination_image_query = "SELECT * FROM tour_destination_image WHERE tour_destination_id = ".$tour_destination_id;
              if($res2 = mysqli_query($con, $tour_destination_image_query))
              {
                while($r2 = mysqli_fetch_assoc($res2)){
            ?>
            <img src="./images/tour_destinations/<?php echo $r2['image']; ?>" alt="Image" class="img-fluid" class="img-fluid">
            <?php
                }
              }
            ?>
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
            <h3><?php echo $row['destinations']; ?></h3>
            <pre class="mb-4" style="font-family:Arial;  white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: -pre-wrap;  white-space: -o-pre-wrap; word-wrap: break-word; "><?php echo $row['description']; ?></pre>
          </div>
        </div>

        <?php
          $counter = 0;
             }
            }
          }
        ?>

        </div>
      </div>
    </div>









	<div class="site-section" id="other-services-offered">
      <div class="container">

          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">Other Services Offered</span>
          </div>
		  
		  <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">

              <?php
                $q = "SELECT * FROM `other_services` WHERE `action` != 'ARCHIVE'";
                if($res = mysqli_query($con, $q))
                {
                  while($row = mysqli_fetch_assoc($res))
                  {
              ?>
              <!------>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100 align-items-center" style="text-align: center;">
                  <img src="./images/other_services/<?php echo $row['image'] ?>" 
                  style="width: 150px; margin: 0px 0px 25px 0px;">
                  <h3><?php echo $row['service_name'] ?></h3>
                  <li><?php echo $row['description'] ?></li>
                  <br>
                  <p><a href="other_services.php?id=<?php echo $row['id']; ?>" class="readmore">Learn more</a></p>
                </div>
              </div>
              <!------>
              <?php
                  }
                }
              ?>

            </div>
          </div>
        </div>
          
      </div>
    </div> <!-- END .site-section -->






  
















    
    
    
    <div class="site-section" id="contact-section">
      <div class="container">
        <form action="" class="contact-form">

          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">Get In Touch</span>
            <h2 class="title text-primary">Contact Us</h2>
          </div>

          <br>
              <div class="service h-100">
                  <span class="icon-map-marker display-4 text-primary d-block mb-4" style="font-size: 22px;"> Address </span>
                    <?php
                      $q = "SELECT * FROM address WHERE `action` != 'ARCHIVE' ORDER BY address ASC";
                      if($exec = mysqli_query($con, $q))
                      {
                        while($row = mysqli_fetch_assoc($exec))
                        {
                    ?>
                    <h3><?php echo $row['address']; ?></h3>
                    <?php
                        }
                      }
                    ?>
                  <br>
                  <span class="icon-phone display-4 text-primary d-block mb-4" style="font-size: 22px;">Call Us - Telephone No.</span>
                    <?php
                      $q = "SELECT * FROM telephone_number WHERE `action` != 'ARCHIVE' ORDER BY tel_number ASC";
                      if($exec = mysqli_query($con, $q))
                      {
                    ?>
                    <?php
                        while($row = mysqli_fetch_assoc($exec))
                        {
                    ?>
                    <h3><?php echo $row['tel_number']; ?></h3>
                    <?php
                        }
                      }
                    ?>
                  <br>
                  <span class="icon-phone display-4 text-primary d-block mb-4" style="font-size: 22px;">Call Us - Mobile No.</span>
                    <?php
                      $q = "SELECT * FROM mobile_number WHERE `action` != 'ARCHIVE' ORDER BY mobile_number ASC";
                      if($exec = mysqli_query($con, $q))
                      {
                        while($row = mysqli_fetch_assoc($exec))
                        {
                    ?>
                    <h3><?php echo $row['mobile_number']; ?></h3>
                    <?php
                        }
                      }
                    ?>
                  <br>
                  <span class="icon-phone display-4 text-primary d-block mb-4" style="font-size: 22px;">Email Address</span>
                    <?php
                      $q = "SELECT * FROM email_address WHERE `action` != 'ARCHIVE' ORDER BY email_address ASC";
                      if($exec = mysqli_query($con, $q))
                      {
                        while($row = mysqli_fetch_assoc($exec))
                        {
                    ?>
                    <h3><?php echo $row['email_address']; ?></h3>
                    <?php
                        }
                      }
                    ?>
                  <br>
                  <span class="icon-thumbs-o-up display-4 text-primary d-block mb-4" style="font-size: 22px;">Follow Us</span>
                    <h3><span class="icon-facebook"></span> <a href="https://www.facebook.com/Felys-Tours-and-Travel-365299680961433/?modal=admin_todo_tour">Facebook</a> </h3>
                </div>



        </form>
      </div>
    </div> <!-- END .site-section -->
  
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">About Us</h3>
				<p>Fely's Tours and Travel (FTT) is Travel Agency located at the heart of Tagbilaran City, Bohol.</p>
                <!--p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p-->
              </div>
            </div>
            

            
          </div>
          <div class="col-lg-3 ml-auto">
           
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
              
            </div>
            
          </div>
          

          <div class="col-lg-4 mb-5 mb-lg-0">

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>


              <form method="post" class="form-subscribe">
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary px-5" type="submit">Subscribe</button>
                </div>
              </form>

            </div>

            


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
            with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          
          </div>
          
        </div>
      </div>
    </footer>
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