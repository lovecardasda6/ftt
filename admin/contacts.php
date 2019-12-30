
<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
  $id = @$_GET['id'];
  $action = @$_GET['action'];
  $contact = @$_GET['contact'];

  if($contact == "address")
  {
    if($action == "ARCHIVE"){
      $action_query = "UPDATE address SET action = 'ARCHIVE' WHERE id=".$id;
      $exec = mysqli_query($con, $action_query);
    }else if($action == "ACTIVE"){
      $action_query = "UPDATE address SET action = 'ACTIVE' WHERE id=".$id;
      $exec = mysqli_query($con, $action_query);
    }
  }
  else if($contact == "telephone_number")
  {
    if($action == "ARCHIVE"){
      $action_query = "UPDATE telephone_number SET action = 'ARCHIVE' WHERE id=".$id;
      $exec = mysqli_query($con, $action_query);
    }else if($action == "ACTIVE"){
      $action_query = "UPDATE telephone_number SET action = 'ACTIVE' WHERE id=".$id;
      $exec = mysqli_query($con, $action_query);
    }
  }
  else if($contact == "mobile_number")
  {
    if($action == "ARCHIVE"){
      $action_query = "UPDATE mobile_number SET action = 'ARCHIVE' WHERE id=".$id;
      $exec = mysqli_query($con, $action_query);
    }else if($action == "ACTIVE"){
      $action_query = "UPDATE mobile_number SET action = 'ACTIVE' WHERE id=".$id;
      $exec = mysqli_query($con, $action_query);
    }
  }
  else if($contact == "email_address")
  {
    if($action == "ARCHIVE"){
      $action_query = "UPDATE email_address SET action = 'ARCHIVE' WHERE id=".$id;
      $exec = mysqli_query($con, $action_query);
    }else if($action == "ACTIVE"){
      $action_query = "UPDATE email_address SET action = 'ACTIVE' WHERE id=".$id;
      $exec = mysqli_query($con, $action_query);
    }
  }



  if(isset($_POST['saveAddress']))
  {
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $q = "INSERT INTO address SET `address` = '".$address."'";
    $exec = mysqli_query($con, $q);
    if($exec){
      echo "<script>alert('Address successfully added.')</script>";
    }

  }
  else if(isset($_POST['saveTelNumber']))
  {
    $telephone_number = mysqli_real_escape_string($con, $_POST['telephone_number']);
    $q = "INSERT INTO telephone_number SET `tel_number` = '".$telephone_number."'";
    $exec = mysqli_query($con, $q);
    if($exec){
      echo "<script>alert('Telephone Number successfully added.')</script>";
    }

  }
  else if(isset($_POST['saveMobNumber']))
  {
    $mobile_number = mysqli_real_escape_string($con, $_POST['mobile_number']);
    $q = "INSERT INTO mobile_number SET `mobile_number` = '".$mobile_number."'";
    $exec = mysqli_query($con, $q);
    if($exec){
      echo "<script>alert('Mobile Number successfully added.')</script>";
    }

  }
  else if(isset($_POST['saveEmail']))
  {
    $email_address = mysqli_real_escape_string($con, $_POST['email_address']);
    $q = "INSERT INTO email_address SET `email_address` = '".$email_address."'";
    $exec = mysqli_query($con, $q);
    if($exec){
      echo "<script>alert('Email address successfully added.')</script>";
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
      <!-- .START container -->
      <div class="container" style="margin-bottom: -30px;">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <h2 class="title text-primary">CONTACT INFORMATIONS</h2>
          </div>
        </div>
      </div>
      <!-- END container -->

      <!-- .START container -->
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Address</span>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" onclick="$('.add_address').css('display', 'block ');" >Add Address</span>
            </a>
          </div>
        </div>
        <!-- .START table -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Address</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $q = "SELECT * FROM address";
              if($exec = mysqli_query($con, $q))
              {
                while($row = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
              <th scope="row"><?php echo $row['id']; ?></th>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['action'] != 'ARCHIVE'? 'Active' : 'Archived'; ?></td>
              <td>
                <span class="sub-title mb-2 d-block">
                  <a href="?modify=address&id=<?php echo $row['id']; ?>&contact=<?php echo $row['address']; ?>">
                    <span class="icon-edit" style="font-size: 24px;"></span>
                  </a> 
                  &nbsp; | &nbsp;
                  <a href="?id=<?php echo $row['id']; ?>&contact=address&action=<?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?>">
                    <?php echo $row['action'] == "ARCHIVE"? "<span class='icon-check' style='font-size: 24px;'></span>" : "<span class='icon-archive' style='font-size: 24px;'></span>"; ?>
                  </a>
                </span>
              </td>
            </tr>
            <?php
                }
              }
            ?>
          </tbody>
        </table>
        <!-- .END table -->
      </div>
      <!-- END container -->
      <br>
      <!-- .START container -->
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Telephone Number</span>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" onclick="$('.add_telephone').css('display', 'block ');" >Add Telephone Number</span>
            </a>
          </div>
        </div>
        <!-- .START table -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tel. Number</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $q = "SELECT * FROM telephone_number";
              if($exec = mysqli_query($con, $q))
              {
                while($row = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
              <th scope="row"><?php echo $row['id']; ?></th>
              <td><?php echo $row['tel_number']; ?></td>
              <td><?php echo $row['action'] != 'ARCHIVE'? 'Active' : 'Archived'; ?></td>
              <td>
                <span class="sub-title mb-2 d-block">
                  <a href="?modify=telephone&id=<?php echo $row['id']; ?>&contact=<?php echo $row['tel_number']; ?>">
                    <span class="icon-edit" style="font-size: 24px;"></span>
                  </a> 
                  &nbsp; | &nbsp;
                  <a href="?id=<?php echo $row['id']; ?>&contact=telephone_number&action=<?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?>">
                    <?php echo $row['action'] == "ARCHIVE"? "<span class='icon-check' style='font-size: 24px;'></span>" : "<span class='icon-archive' style='font-size: 24px;'></span>"; ?>
                  </a>
                </span>
              </td>
            </tr>
            <?php
                }
              }
            ?>
          </tbody>
        </table>
        <!-- .END table -->
      </div>
      <!-- END container -->
      <br><
      <!-- .START container -->
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Mobile Number</span>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" onclick="$('.add_mobile').css('display', 'block ');" >Add Mobile Number</span>
            </a>
          </div>
        </div>
        <!-- .START table -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Mobile Number</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $q = "SELECT * FROM mobile_number";
              if($exec = mysqli_query($con, $q))
              {
                while($row = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
              <th scope="row"><?php echo $row['id']; ?></th>
              <td><?php echo $row['mobile_number']; ?></td>
              <td><?php echo $row['action'] != 'ARCHIVE'? 'Active' : 'Archived'; ?></td>
              <td>
                <span class="sub-title mb-2 d-block">
                  <a href="?modify=mobile&id=<?php echo $row['id']; ?>&contact=<?php echo $row['mobile_number']; ?>">
                    <span class="icon-edit" style="font-size: 24px;"></span>
                  </a> 
                  &nbsp; | &nbsp;
                  <a href="?id=<?php echo $row['id']; ?>&contact=mobile_number&action=<?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?>">
                    <?php echo $row['action'] == "ARCHIVE"? "<span class='icon-check' style='font-size: 24px;'></span>" : "<span class='icon-archive' style='font-size: 24px;'></span>"; ?>
                  </a>
                </span>
              </td>
            </tr>
            <?php
                }
              }
            ?>
          </tbody>
        </table>
        <!-- .END table -->
      </div>
      <!-- END container -->
      <br>
      <!-- .START container -->
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Email Address</span>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" onclick="$('.add_email').css('display', 'block ');" >Add Email Address</span>
            </a>
          </div>
        </div>
        <!-- .START table -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Email Address</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $q = "SELECT * FROM email_address";
              if($exec = mysqli_query($con, $q))
              {
                while($row = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
              <th scope="row"><?php echo $row['id']; ?></th>
              <td><?php echo $row['email_address']; ?></td>
              <td><?php echo $row['action'] != 'ARCHIVE'? 'Active' : 'Archived'; ?></td>
              <td>
                <span class="sub-title mb-2 d-block">
                <a href="?modify=email&id=<?php echo $row['id']; ?>&contact=<?php echo $row['email_address']; ?>">
                    <span class="icon-edit" style="font-size: 24px;"></span>
                  </a> 
                  &nbsp; | &nbsp;
                  <a href="?id=<?php echo $row['id']; ?>&contact=email_address&action=<?php echo $row['action'] == "ARCHIVE"? "ACTIVE" : "ARCHIVE"; ?>">
                    <?php echo $row['action'] == "ARCHIVE"? "<span class='icon-check' style='font-size: 24px;'></span>" : "<span class='icon-archive' style='font-size: 24px;'></span>"; ?>
                  </a>
                </span>
              </td>
            </tr>
            <?php
                }
              }
            ?>
          </tbody>
        </table>
        <!-- .END table -->
      </div>
      <!-- END container -->
      
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
<!--------------------------ADD ADDRESS---------------------->
<!----------------------------------------------------------->
<div class="add_address" 
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
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Address</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off">
                <input type="text" name="address" placeholder="Address" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Save" class="btn btn-primary" style="border-radius:0px;" name="saveAddress"/> 
                &nbsp; | &nbsp; 
                <button type="button" class="btn btn-light" style="border-radius:0px;" onclick="$('.add_address').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<!----------------------------------------------------------->
<!---------------------ADD TELEPHONE NUMBER------------------>
<!----------------------------------------------------------->
<div class="add_telephone" 
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
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Telephone Number</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off">
                <input type="text" name="telephone_number" placeholder="Telephone Number" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Save" class="btn btn-primary" style="border-radius:0px;" name="saveTelNumber"/> 
                &nbsp; | &nbsp; 
                <button type="button" class="btn btn-light" style="border-radius:0px;" onclick="$('.add_telephone').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<!----------------------------------------------------------->
<!----------------------ADD MOBILE NUMBER-------------------->
<!----------------------------------------------------------->
<div class="add_mobile" 
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
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Mobile Number</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off">
                <input type="text" name="mobile_number" placeholder="Mobile Number" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Save" class="btn btn-primary" style="border-radius:0px;" name="saveMobNumber"/> 
                &nbsp; | &nbsp; 
                <button type="button" class="btn btn-light" style="border-radius:0px;" onclick="$('.add_mobile').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<!----------------------------------------------------------->
<!---------------------ADD EMAIL ADDRESS--------------------->
<!----------------------------------------------------------->
<div class="add_email" 
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
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Email Address</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off">
                <input type="text" name="email_address" placeholder="Email Address" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Save" class="btn btn-primary" style="border-radius:0px;" name="saveEmail"/> 
                &nbsp; | &nbsp; 
                <button type="button" class="btn btn-light" style="border-radius:0px;" onclick="$('.add_email').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<!----------------------------------------------------------------------------------------->
<!----------------------------------------------------------->
<!-------------------------EDIT ADDRESS---------------------->
<!----------------------------------------------------------->
<?php
  $modify = @$_GET['modify'];
  $id = @$_GET['id'];
  $contact = @$_GET['contact'];

  if($modify != NULL && $modify == "address" && $id != null && $contact != null)
  {
?>
<div class="update_address" 
style="
    position: absolute; 
    top: 0; 
    left:0; 
    background-color: rgba(0,0,0,.5); 
    width: 100%; 
    height:100%; 
    z-index: 100;
    align-content:center;
">
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Address</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" action="update_contacts.php" autocomplete="off">
                <input type="hidden" value="<?php echo $id; ?>" name="id"/>
                <input type="text" value="<?php echo $contact; ?>" name="contact" placeholder="Address" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Update" class="btn btn-primary" style="border-radius:0px;" name="updateAddress"/> 
                &nbsp; | &nbsp; 
                <button class="btn btn-light" type="button" style="border-radius:0px;" onclick="$('.update_address').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<?php
  }
?>

<!----------------------------------------------------------->
<!------------------------EDIT TELEPHONE--------------------->
<!----------------------------------------------------------->
<?php
  $modify = @$_GET['modify'];
  $id = @$_GET['id'];
  $contact = @$_GET['contact'];

  if($modify != NULL && $modify == "telephone" && $id != null && $contact != null)
  {
?>
<div class="update_telephone" 
style="
    position: absolute; 
    top: 0; 
    left:0; 
    background-color: rgba(0,0,0,.5); 
    width: 100%; 
    height:100%; 
    z-index: 100;
    align-content:center;
">
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Telephone Number</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" action="update_contacts.php" autocomplete="off">
                <input type="hidden" value="<?php echo $id; ?>" name="id"/>
                <input type="text" value="<?php echo $contact; ?>" name="contact" placeholder="Telephone Number" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Update" class="btn btn-primary" style="border-radius:0px;" name="updateTelephone"/> 
                &nbsp; | &nbsp; 
                <button class="btn btn-light" type="button" style="border-radius:0px;" onclick="$('.update_telephone').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<?php
  }
?>


<!----------------------------------------------------------->
<!------------------------EDIT MOBILE NUM-------------------->
<!----------------------------------------------------------->
<?php
  $modify = @$_GET['modify'];
  $id = @$_GET['id'];
  $contact = @$_GET['contact'];

  if($modify != NULL && $modify == "mobile" && $id != null && $contact != null)
  {
?>
<div class="update_mobile" 
style="
    position: absolute; 
    top: 0; 
    left:0; 
    background-color: rgba(0,0,0,.5); 
    width: 100%; 
    height:100%; 
    z-index: 100;
    align-content:center;
">
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Mobile Number</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" action="update_contacts.php" autocomplete="off">
                <input type="hidden" value="<?php echo $id; ?>" name="id"/>
                <input type="text" value="<?php echo $contact; ?>" name="contact" placeholder="Mobile Number" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Update" class="btn btn-primary" style="border-radius:0px;" name="updateMobile"/> 
                &nbsp; | &nbsp; 
                <button class="btn btn-light" type="button" style="border-radius:0px;" onclick="$('.update_mobile').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<?php
  }
?>


<!----------------------------------------------------------->
<!------------------------EDIT EMAIL ADD--------------------->
<!----------------------------------------------------------->
<?php
  $modify = @$_GET['modify'];
  $id = @$_GET['id'];
  $contact = @$_GET['contact'];

  if($modify != NULL && $modify == "email" && $id != null && $contact != null)
  {
?>
<div class="update_email" 
style="
    position: absolute; 
    top: 0; 
    left:0; 
    background-color: rgba(0,0,0,.5); 
    width: 100%; 
    height:100%; 
    z-index: 100;
    align-content:center;
">
  <Br>
    <div style="width: 50%; margin:auto;">  
        <div class="service h-100">
            <div class="col-lg-6 section-title">
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Email Address</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" action="update_contacts.php" autocomplete="off">
                <input type="hidden" value="<?php echo $id; ?>" name="id"/>
                <input type="text" value="<?php echo $contact; ?>" name="contact" placeholder="Email Address" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Update" class="btn btn-primary" style="border-radius:0px;" name="updateEmail"/> 
                &nbsp; | &nbsp; 
                <button class="btn btn-light" type="button" style="border-radius:0px;" onclick="$('.update_email').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<?php
  }
?>