<?php
  $con = @mysqli_connect("localhost","root","","ftt");
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
                    <li><a href="#home-section" class="nav-link">Home</a></li>
                    <li><a href="#update" class="nav-link">Update</a></li>
                    <!-- <li><a href="#about-us-section" class="nav-link">About Us</a></li> -->
                    
                    <li><a href="#services" class="nav-link">Services</a></li>
                    
                    <li><a href="#what-we-do-section" class="nav-link">Tour Package</a></li>
                    <!-- <li><a href="#what-we-do-section" class="nav-link">What We Do</a></li> -->
                    <li><a href="#portfolio-section" class="nav-link">New Destinations</a></li>
                    <!-- <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li> -->
                    <li><a href="photos.php" class="nav-link">Photos</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    <li><a href="#other-services-offered" class="nav-link">Other Services Offered</a></li>
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
          <div class="slide overlay">
            <img src="images/1.png" alt="Image" class="img-fluid">  
          </div>
          <div class="slide overlay">
            <img src="images/2.png" alt="Image" class="img-fluid">  
          </div>
          <div class="slide overlay">
            <img src="images/3.png" alt="Image" class="img-fluid">  
          </div>
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

          <div class="row align-items-center">
            <div class="col-lg-6 mb-5">
              <img src="images/ML.jpg" alt="Image" class="img-fluid" class="img-fluid">
            </div>
            <div class="col-lg-5 ml-auto section-title">
              <span class="sub-title mb-2 d-block">Latest Update</span>
              <h2 class="title text-primary mb-3">New Payment Method</h2>
              <p class="mb-4">We now accept payment through MLHUILLIER, just go to your nearest MLHUILLIER outlet and say payment for "FELY'S TOURS AND TRAVEL".</p>
              <!-- <p><a data-fancybox data-ratio="2" href="https://vimeo.com/326176805" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p> -->
            </div>
          </div>

        </div>
      </div> <!-- .END site-section -->
      <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- <div class="site-section" id="about-us-section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 mb-5">
                <img src="images/img.png" alt="Image" class="img-fluid" class="img-fluid">
              </div>
              <div class="col-lg-5 ml-auto section-title">
                <span class="sub-title mb-2 d-block">ABOUT US</span>
                <h2 class="title text-primary mb-3">Fely's Tours and Travel Agency</h2>
                <p class="mb-4">A DOT accredited travel and tours agency based in the "City of Friendship", Tagbilaran City, Bohol. The agency started operation last 2013 initially offering transport services under GTL Transport, both sister companies under GTL Group of Companies. With our very own line of transport buses, vans, cars and limo service we are committed to deliver cost-friendly, efficient, personalized service and customer satisfaction to our valued clients particularly those traveling to Bohol.</p>
                <p><a data-fancybox data-ratio="2" href="https://vimeo.com/326176805" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
              </div>
            </div>
          </div>
        </div>  -->
        <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class="site-section" id="services">
      <div class="container">
<!---------------------------------------------------------------------------------------------->
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5">
            
            <div class="owl-carousel slide-one-item hero-slider">
              <div class="slide overlay">
                <img src="images/AirAsia.png" alt="Image" class="img-fluid">  
              </div>
              <div class="slide overlay">
                <img src="images/cebupacific.png" alt="Image" class="img-fluid">  
              </div>
              <div class="slide overlay">
                <img src="images/Philippine-Airlines-Logo.jpg" alt="Image" class="img-fluid">  
              </div>
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
                $service_images_query = "SELECT * FROM service_images WHERE type='Shippings' ORDER BY name ASC";

                if($result = mysqli_query($con, $service_images_query))
                {
                  while($row = mysqli_fetch_assoc($result ))
                  {
              ?>
                <div class="slide overlay">
                    <a href=""><?php echo $row['image']; ?></a>
                    <img src="images/cokaliong.jpg" alt="Image" class="img-fluid">  
                  </div>
              <?php
                  }
                }
              ?>
              <div class="slide overlay">
                <img src="images/cokaliong.jpg" alt="Image" class="img-fluid">  
              </div>
              
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
    <div class="site-section bg-light" id="what-we-do-section">
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
    <div class="site-section" id="portfolio-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-8 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">New Destinations</span>
            <h2 class="title text-primary mb-3">Newly Added Tour Destinations</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="images/12.png" alt="Image" class="img-fluid" class="img-fluid">
            <img src="images/13.png" alt="Image" class="img-fluid" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>Bohol Water Bike Adventure</h3>
            <p class="mb-4">
              I. Water Bike Adventure Fun Ride - 1 hour downstream ride with guide and life vest within vicinity of the port. 8:00 am-5:30 pm operational time scale.
              <br><br>
              II. Water Bike Exercise Ride - Offered to all nearby residents. 1 hour exercise ride with guide and life vest within vicinity of the port. 5:30 am-7:30 am operational time scale.
              <br><br>
              III. Water Bike Adventure Tour - Port to Ugpong Foot Bridge route/ Port to Busai Falls respectively. 2 hours maximum tour with guide and life vest and minimum of 5 persons per tour. 8:00 am-5:00 pm operational time scale.
              <br><br>
              IV. Water Bike Firefly Watching Ride- Port to Canlasid, Loboc route. 3 hours maximum ride and minimum of 2 persons per tour. 7:00 pm-10:00 pm operational time.
              <br><br>
              V. Water Bike Night Adventure Ride- 1 hour ride with guide and life vest within vicinity of the port. 6:00 pm-9:30 pm operational time scale.</p>
            <!-- <p class="mb-5"><strong class="text-black">Role:</strong> Design, Illustration, Web</p>
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi quod dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_1.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p> -->
          </div>
        </div>
<!---------------------------------------------------------------->
        <div class="row mb-5">
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <img src="images/15.jpg" alt="Image" class="img-fluid" class="img-fluid">
            <img src="images/16.jpg" alt="Image" class="img-fluid" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
            <h3>Jardin Necitas</h3>
            <p class="mb-4">At Jardin Necitas, there are LED roses and tulips that light up during nightfall, the stem is made out of a steel bar that the flowers stand on. The entrance is adorned with animals such as flamingos and swans, a perfect background for selfies. This place is perfect for anyone who’s into taking pictures and having it as a setup for prenups and events. Located on a hilltop in Barangay Bagumbayan, Jardin Necitas Pilar Glowing Garden has a colorful and romantic scenery.</p>
            <!-- <p class="mb-5"><strong class="text-black">Role:</strong> Design, Illustration, Web</p>
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi quod
                dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_2.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p> -->
            
            
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="images/24.jpg" alt="Image" class="img-fluid" class="img-fluid">
            <img src="images/25.JPG" alt="Image" class="img-fluid" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>Sagbayan Peak</h3>
            <p class="mb-4">A Tourism Site overlooking a scenic valley with an observation platform and children's playground. A destination with whimsical animal sculptures, a small waterpark & swings, plus a cafe.
              </p>
            <!-- <p class="mb-5"><strong class="text-black">Role:</strong> Design, Illustration, Web</p>
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi
                quod dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_1.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p> -->
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <img src="images/17.jpg" alt="Image" class="img-fluid" class="img-fluid">
            <img src="images/18.png" alt="Image" class="img-fluid" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
            <h3>Bet N Choy Farms</h3>
            <p class="mb-4">Bet 'n Choy Farms is an attraction / resort offering a wholesome destination and perfect place for family getaway and picnic. This resort has huge pools and water slides for adult and kids. It’s a perfect getaway for family to enjoy water, pool and sun. The farm is located in Catigbian, Bohol, about 900 meters from the Catigbian PNP Station and is about an hour trip from Tagbilaran City.</p>
            <!-- <p class="mb-5"><strong class="text-black">Role:</strong> Design, Illustration, Web</p>
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi quod
                dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_2.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p> -->
            
            
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="images/22.jpg" alt="Image" class="img-fluid" class="img-fluid">
            <img src="images/23.jpg" alt="Image" class="img-fluid" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>Cabagnow Cave Pool</h3>
            <p class="mb-4"><b>Anda in Bohol</b> is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.
              <br><br>
              <b>Cabagnow Cave Pool</b> in Anda Bohol is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.
            </p>
            <!-- <p class="mb-5"><strong class="text-black">Role:</strong> Design, Illustration, Web</p>
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi
                quod dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_1.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p> -->
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <img src="images/18.jpg" alt="Image" class="img-fluid" class="img-fluid">
            <img src="images/19.jpg" alt="Image" class="img-fluid" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
            <h3>Sea of Clouds</h3>
            <p class="mb-4">Sea of Clouds in Anda Bohol is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.</p>
            <!-- <p class="mb-5"><strong class="text-black">Role:</strong> Design, Illustration, Web</p>
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi quod
                dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_2.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p>
             -->
            
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="images/20.jpg" alt="Image" class="img-fluid" class="img-fluid">
            <img src="images/21.JPG" alt="Image" class="img-fluid" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>Candijay Falls</h3>
            <p class="mb-4">Caumantad Falls a 30 minute travel from the Poblacion of Candijay and you’re going to see this amazing and stunning water fall. You will be in awe in Mother Nature’s Beauty. A 60 feet high and is said to be the tallest waterfall in Bohol. It’s clean, clear and cold water will surely entice you to enjoy swimming.
              <br> <br>
                This site is suitable for picnics and other fun activities like river trekking and swimming with your loved ones. Have a free back massage with the splash of heavy flowing water. The experience is priceless if you visit and swim to this highest falls. Aside from the waterfalls; Candijay has still a lot more to offer.</p>
            <!-- <p class="mb-5"><strong class="text-black">Role:</strong> Design, Illustration, Web</p>
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi
                quod dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_1.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p> -->
          </div>
        </div>

        


          
        </div>

      </div>
    </div>




    <!-- <div class="site-section bg-light">
      <div class="container">
         <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Testimonials</span>
            <h2 class="title text-primary mb-3">Our Client Sayings</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi quod dolore commodi.</p>
              <p  class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_1.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
          </div>
          <div class="col-lg-6 mb-4">
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi quod dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_2.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
          </div>
          
          <div class="col-lg-6 mb-4">
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi quod
                dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_1.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
          </div>
          <div class="col-lg-6 mb-4">
            <blockquote class="blockquote">
              <p>Nice Looking Website Of Ours. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam excepturi quod
                dolore commodi.</p>
              <p class="mb-0 d-flex align-items-center">
                <img class="img-fluid mr-3" src="images/person_2.jpg" alt="Image">
                <cite>&mdash; John Doe</cite>
              </p>
            </blockquote>
          </div>
          
        </div>
      </div>
    </div> -->





	<div class="site-section" id="other-services-offered">
      <div class="container">

          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">Other Services Offered</span>
          </div>
		  
		  <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100 align-items-center" style="text-align: center;">
                  <!-- <span class="icon-map-marker display-4 text-primary d-block mb-4"></span> -->
                  <img src="./images/fiesta bolanon.png" 
                  style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;">
                  <h3>Fiesta Bolanon Cuisine</h3>
                  <li>A delicious Eat All You Can Restaurant for affordable price.</li>
                  <br>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
			  
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100 align-items-center" style="text-align: center;">
                  <!-- <span class="icon-map-marker display-4 text-primary d-block mb-4"></span> -->
                  <!-- <img src="./images/fiesta bolanon.png" 
                  style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;"> -->
                  <h3>GTL Car Rental</h3>
                  <li>A delicious Eat All You Can Restaurant for affordable price.</li>
                  <br>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100 align-items-center" style="text-align: center;">
                  <!-- <span class="icon-map-marker display-4 text-primary d-block mb-4"></span> -->
                  <!-- <img src="./images/fiesta bolanon.png" 
                  style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;"> -->
                  <h3>GTL Driving School</h3>
                  <li>A delicious Eat All You Can Restaurant for affordable price.</li>
                  <br>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100 align-items-center" style="text-align: center;">
                  <!-- <span class="icon-map-marker display-4 text-primary d-block mb-4"></span> -->
                  <!-- <img src="./images/fiesta bolanon.png" 
                  style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;"> -->
                  <h3>Fely's Pension House</h3>
                  <li>A delicious Eat All You Can Restaurant for affordable price.</li>
                  <br>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100 align-items-center" style="text-align: center;">
                  <!-- <span class="icon-map-marker display-4 text-primary d-block mb-4"></span> -->
                  <!-- <img src="./images/fiesta bolanon.png" 
                  style="width: 150px; height: 150px; margin: 0px 0px 25px 0px;"> -->
                  <h3>Jojo's Tracking and Septic Tank Services</h3>
                  <li>A delicious Eat All You Can Restaurant for affordable price.</li>
                  <br>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
			  
            </div>
          </div>
        </div>
          
      </div>
    </div> <!-- END .site-section -->




`<!--
    <div class="site-section" id="contact-section">
      <div class="container"></div>

          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">Promotional</span>
            <h1 class="title text-primary" style="font-size: 52px;">IT'S MORE FUN IN BOHOL with FELY's TOURS & TRAVEL</h1>
            
            



            <div class="img-wrap">
              <div class="owl-carousel slide-one-item hero-slider">
                <div class="slide overlay">
                  <video width="80%" controls>
                    <source src="video/1.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="slide overlay">
                  <video width="80%" controls>
                    <source src="video/2.mp4" type="video/ogg">
                  </video>
                </div>
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
                  <h3>16 J.A. Clarin Street Tagbilaran City
                      near Florencio's Caltex Station</h3>
                    <br>
                  <span class="icon-phone display-4 text-primary d-block mb-4" style="font-size: 22px;">Call Us - Telephone No.</span>
                    <h3>(038) 411-4476 </h3>
                    <h3>(038) 416-1198 </h3>
                    <h3>(038) 510-1652</h3>
                    <br>
                    <span class="icon-phone display-4 text-primary d-block mb-4" style="font-size: 22px;">Call Us - Mobile No.</span>
                    <h3>0916-359-6126</h3>
                    <h3>0915-829-5095</h3>
                    <h3>0922-300-1458</h3>
                    <h3>0939-904-5521</h3>
                    <br>
                    <span class="icon-phone display-4 text-primary d-block mb-4" style="font-size: 22px;">Email Address</span>
                    <h3>felystoursandtravel@yahoo.com</h3>
                    <h3>ftt_bookings@yahoo.com</h3>
                    <br>
                    <span class="icon-thumbs-o-up display-4 text-primary d-block mb-4" style="font-size: 22px;">Follow Us</span>
                    <h3><span class="icon-facebook"></span> <a href="https://www.facebook.com/Felys-Tours-and-Travel-365299680961433/?modal=admin_todo_tour">Facebook</a> </h3>
                </div>

          <!-- <div class="row mb-4">
            <div class="col-md-6 mb-4 mb-md-0">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <input type="text" class="form-control" placeholder="Email">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-md">Send Message</button>
            </div>
          </div> -->

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