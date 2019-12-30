<?php
  $con = @mysqli_connect("localhost","root","","ftt");
  $page = @$_GET['page'];
  $limit = 5 * $page;
  $start = 0;
  if($page == 1){
    $start = 0;
  }else{
    $start = $limit - 5;
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
                  $q = "SELECT * FROM images WHERE `type` = 'logo'";
                  $res = mysqli_query($con, $q);
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

    
     <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
     <div class="site-section" id="update">
        <div class="container">

          <div class="row mb-5">
            <div class="col-lg-10 section-title">
              <span class="sub-title mb-2 d-block">Latest Updates</span>
            </div>
            <div class="col-lg-2 section-title">
                <a href="read_more_update.php?page=<?php echo $page != 1?$page - 1 : 1;?>"><span style="font-size:15px; font-weight:bold;">< Previous</span></a>
                &nbsp; | &nbsp;
                <a  href="read_more_update.php?page=<?php echo $page + 1; ?>"><span style="font-size:15px; font-weight:bold;">Next ></span></a>
            </div>
          </div>

          <?php
            
                $tour_package_query = "SELECT * FROM updates WHERE action != 'ARCHIVE' ORDER BY id ASC LIMIT ".$start.", 5";

                if($result = mysqli_query($con, $tour_package_query))
                {
                  while($row = mysqli_fetch_assoc($result )){

              ?>
                  <!---------------------------------->
                  <div class="row">
                    <div class="col-lg-4 mb-4">
                      <img src="./../images/updates/<?php echo $row['image']; ?>" alt="Image" class="img-fluid" class="img-fluid">
                    </div>
                    <div class="col-lg-8 ml-auto section-title">
                    
                      <h2 class="title text-primary mb-3" style="line-height: 15px;"><?php echo $row['id']; ?></h2>
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
            <a href="read_more_update.php?page=<?php echo $page + 1; ?>"><span style="font-size:18px; font-weight:bold;">More update</span></a>
          </div>
        </div>
      </div> <!-- .END site-section -->



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