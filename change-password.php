<?php
session_start();
require './class/atclass.php';

if(!isset($_SESSION['uid']))
{
  header("location:login.php");
}
if($_POST)
{
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    $uid = $_SESSION['uid'];

    $q = mysqli_query($con, "select * from tbl_user where user_id = '{$uid}' ") or die(mysqli_error($con));
    $op = mysqli_fetch_array($q);

    if ($op['user_password'] == $opass) {
        if ($npass == $cpass) {
            if ($opass == $npass) {
                echo "<script>alert('New Password And Old Password Must Be Different')</script>";

            } else {
                //update

                $uq = mysqli_query($con, "update tbl_user set user_password = '{$npass}' where user_id = '{$uid}' ") or die(mysqli_error($con));
                echo "<script>alert('Password Updated')</script>";

            }
        }
        else
        {
            echo "<script>alert('New Password And Confirm Password Must Be Same')</script>";
        }
    }
    else
    {
        echo "<script>alert('Old Password Must Be Same')</script>";
    }
}

?>




<!DOCTYPE html>

<html lang="en">
<head>
<title>Weddlist — Wedding Vendor Directory HTML Template</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Weddlist" />
<meta name="keywords" content="wedding, wedding vendor, wedding vendor directory, HTML template, html theme, wedding html template, wedding html theme, weddlist, weddlist html, weddlist html template">
<meta name="author" content="udayraj" />
<meta name="MobileOptimized" content="320" />
<link href="images/favicon.ico" rel="icon" type="image/x-icon"/> <!-- favicon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
 
<!--  top bar -->
<?php include './theme-part/navbar.php'; ?>

<!--  end navigation -->
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Change Password</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Change Password</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- register page -->
  <section id="register-page" class="register-main-block">
    <div class="container">
      <div class="row"> <div class="col-lg-3"></div>
      <div class="col-lg-6">
          <div class="register-block">
            <h4 class="register-heading text-center">Change Password</h4>
            <div class="form-group">
              <form method="post" id="myform">
              <input type="password" name="opass" class="form-control" placeholder="Enter Old Password" required/>
              <input type="password" name="npass" class="form-control" placeholder="Enter Password" required />
              <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required/>
                <button type="submit" class="btn btn-pink">Update Password</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end register page -->
<!-- footer -->
<?php include './theme-part/footer.php'; ?>

<!-- end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>  <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="js/jquery.share-tooltip.js"></script> <!-- share tooltip js--> 
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script> <!-- datepicker js--> 
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
<!-- end jquery -->
</body>
<!--body end -->

<!-- Mirrored from thegenius.co/html/weddlist/version-1/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:30:47 GMT -->
 
<script src="js/jquery.validate.js"></script>
<script>
  $(document).ready(function(){
    $("#myform").validate()
  })
</script>
<style>
  .error{
    color:red;
  }
</style>
</html>