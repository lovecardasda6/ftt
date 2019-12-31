<?php
  require_once __DIR__."/required_files/config.php";
  
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

<!----------------------------NAVIGATION--------------------------------------->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap" style='padding: 15px 0px;'>
      
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
                
                <a href="index.php" style='font-family:Arial; color:black; font-weight: bold;'>Fely's Tours & Travel. </a>
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
<!----------------------------NAVIGATION--------------------------------------->

    <br>
    

    <div style="margin:auto; width: 90%; ">
        <main class="main-content" style=" width: 100%; ">
            <div class="container-fluid photos">

                <div class="row align-items-stretch">













                <?php
                    $res = mysqli_query($con, 'SELECT * FROM albums');
                    if($res)
                    {
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $res2 = mysqli_query($con, "SELECT image, count(id) as `total` FROM photos WHERE album_id = ".$row['id']);
                            if($res2)
                            {
                              while($row2 = mysqli_fetch_assoc($res2))
                              {
                                if($row2['total'] != 0)
                                {
                ?>
                <!---------------------------------------------------------------------------->
                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                        <a href="single.php?id=<?php echo $row['id']; ?>" class="d-block photo-item">
                            <img src="./photos/<?php echo $row2['image']; ?>" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                            <div class="photo-text-more">
                            <h3 class="heading"><?php echo $row['title']; ?></h3>
                            <span class="meta"><?php echo $row2['total']; ?> PHOTOS</span>
                            </div>
                            </div>
                        </a>
                    </div>
                <!---------------------------------------------------------------------------->
                <?php
                 
                                }
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

</div> <!-- .site-wrap -->

  <script src="./gallery/js/jquery-3.3.1.min.js"></script>
  <script src="./gallery/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./gallery/js/jquery-ui.js"></script>
  <script src="./gallery/js/popper.min.js"></script>
  <script src="./gallery/js/bootstrap.min.js"></script>
  <script src="./gallery/js/owl.carousel.min.js"></script>
  <script src="./gallery/js/jquery.stellar.min.js"></script>
  <script src="./gallery/js/jquery.countdown.min.js"></script>
  <script src="./gallery/js/jquery.magnific-popup.min.js"></script>
  <script src="./gallery/js/bootstrap-datepicker.min.js"></script>
  <script src="./gallery/js/aos.js"></script>

  <script src="./gallery/js/jquery.fancybox.min.js"></script>

  <script src="./gallery/js/main.js"></script>
    
  </body>
</html>