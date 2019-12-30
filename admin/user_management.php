
<?php
  require_once __DIR__."/require_files/config.php";
  require_once __DIR__."/require_files/auth.php";
  
  $id = @$_GET['id'];
  $action = @$_GET['action'];

  if($action == "REMOVE"){
    $action_query = "DELETE FROM users WHERE id=".$id;
    $exec = mysqli_query($con, $action_query);
  }


  $mismath_password = false;

  if(isset($_POST['saveUser']))
  {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    
    if($password == $confirm_password)
    {
      $q = "INSERT INTO users (`name`, `username`, `password`) VALUES ('".$name."', '".$username."', '".$password."')";
      $exec = mysqli_query($con, $q);
      if($exec){
        echo "<script>alert('User successfully added.')</script>";
      }
    }
    else
    {
      $mismath_password = true;
    }
    

  }

  if(isset($_POST['updateUser']))
  {
    $uid = mysqli_real_escape_string($con, $_POST['uid']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    
    if($password == $confirm_password)
    {
      $q = "UPDATE users SET `name` = '".$name."', `username` = '".$username."',`password` = '".$password."' WHERE `id` = ".$uid;
      $exec = mysqli_query($con, $q);
      if($exec){
        echo "<script>alert('User successfully update.')</script>";
      }
    }
    else
    {
      $mismath_password = true;
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
            <h2 class="title text-primary">USER MANAGEMENT</h2>
          </div>
        </div>
      </div>
      <!-- END container -->

      <!-- .START container -->
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">USERS</span>
          </div>
          <div class="col-lg-6 section-title" style="text-align:right;">
            <a href="#">
                <span class="icon-add" style="font-size:24px;" onclick="$('.add_user').css('display', 'block ');" >Register User</span>
            </a>
          </div>
        </div>
        <!-- .START table -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Last Active</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
              $q = "SELECT * FROM users";
              if($exec = mysqli_query($con, $q))
              {
                while($row = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['last_active']; ?></td>
              <td><?php echo $row['status'] != 'ARCHIVE'? 'Active' : 'Archived'; ?></td>
              <td>
                <span class="sub-title mb-2 d-block">
                  <a href="?modify=user&id=<?php echo $row['id']; ?>">
                    <span class="icon-edit" style="font-size: 24px;"></span>
                  </a> 
                  &nbsp; | &nbsp;
                  <a href="?id=<?php echo $row['id']; ?>&action=REMOVE">
                    <span class='icon-trash' style='font-size: 24px; color:red;'></span>
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
<div class="add_user" 
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
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Register User</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" method="POST" autocomplete="off">
                <input type="text" name="name" placeholder="Name" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <input type="text" name="username" placeholder="Username" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <input type="text" name="password" placeholder="Password" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <input type="text" name="confirm_password" placeholder="Confirm Password" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Save" class="btn btn-primary" style="border-radius:0px;" name="saveUser"/> 
                &nbsp; | &nbsp; 
                <button type="button" class="btn btn-light" style="border-radius:0px;" onclick="$('.add_user').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>


<!----------------------------------------------------------->
<!--------------------------EDIT USERS----------------------->
<!----------------------------------------------------------->
<?php
  $id = @$_GET['id'];
  $modify = @$_GET['modify'];

  if($modify != NULL && $modify == "user" && $id != null)
  {
    $exec = mysqli_query($con, "SELECT * FROM users WHERE `id` = ".$id);
    $fetch_data = mysqli_fetch_assoc($exec);
?>
<div class="update_user" 
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
                <span style="font-size:24px; color: rgb(0,123,255); font-weight:bold;">Update user account</span>
            </div>

            <form style="padding: 10px; margin-top:8px;" action="?" method="POST" autocomplete="off">
                <input type="hidden" name="uid" value="<?php echo $id; ?>">
                <input type="text" value="<?php echo $fetch_data['name']; ?>" name="name" placeholder="Name" style="width: 100%; padding-left: 10px; font-size: 18px;    margin-bottom:5px;" />
                <input type="text" value="<?php echo $fetch_data['username']; ?>" name="username" placeholder="Username" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <input type="password" value="<?php echo $fetch_data['password']; ?>" name="password" placeholder="Password" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <input type="password" value="<?php echo $fetch_data['password']; ?>" name="confirm_password" placeholder="Confirm Password" style="width: 100%; padding-left: 10px; font-size: 18px; margin-bottom:5px;" />
                <Br>
                <br>
                <input type="submit" value="Update" class="btn btn-primary" style="border-radius:0px;" name="updateUser"/> 
                &nbsp; | &nbsp; 
                <button type="button" class="btn btn-light" style="border-radius:0px;" onclick="$('.update_user').css('display', 'none');">Cancel</button>
            </form>

        </div>
    </div>
</div>

<?php
  }
?>
