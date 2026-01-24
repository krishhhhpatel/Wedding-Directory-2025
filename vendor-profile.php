<?php
session_start();
require './class/atclass.php';
if ($_GET) {
  $vid = $_GET['vid'];
  $display_details = mysqli_query($con, "select * from tbl_vendor   where vendor_id='{$vid}'  ") or die(mysqli_error($con));
  $data = mysqli_fetch_array($display_details);
  $areaq = mysqli_query($con, "select * from tbl_area   where area_id ='{$data['area_id']}'  ") or die(mysqli_error($con));
  $areadata = mysqli_fetch_array($areaq);
}


if (isset($_POST['fb'])) {


  if (!isset($_SESSION['uid'])) {
    header("location:login.php");
  } else {
    $uid = $_SESSION['uid'];
    $vid = $_GET['vid'];
    $bdat = date('d-m-Y');
    $feedback = $_POST['feedback'];
    $bq = mysqli_query($con,"insert into tbl_feedback (vendor_id,user_id,feedback_date,feedback_details) values('{$vid}','{$uid}','{$bdat}','{$feedback}')");
   echo "<script>alert('Thank you for sharing your Feedback');</script>";
  }
}
if (isset($_POST['bk'])) {


  if (!isset($_SESSION['uid'])) {
    header("location:login.php");
  } else {
    $uid = $_SESSION['uid'];
    $vid = $_GET['vid'];
    $bdat = $_POST['bdate'];
    $address = $_POST['address'];
    $bq = mysqli_query($con,"insert into tbl_booking (vendor_id,user_id,booking_date,booking_status,booking_address) values('{$vid}','{$uid}','{$bdat}','Pending','{$address}')");
    header("location:thanks.php");
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
  <link href="images/favicon.ico" rel="icon" type="image/x-icon" /> <!-- favicon -->
  <!-- theme style -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> <!-- bootstrap css -->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" /> <!-- fontawesome css -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
  <link href="css/menumaker.css" rel="stylesheet" type="text/css" /> <!-- menu css -->
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" /> <!-- owl carousel css -->
  <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" /> <!-- magnify popup css -->
  <link href="css/datepicker.css" rel="stylesheet" type="text/css" /> <!-- datepicker css -->
  <link href="css/flaticon.css" rel="stylesheet" type="text/css" /> <!-- flaticon css -->
  <link href="css/style.css" rel="stylesheet" type="text/css" /> <!-- custom css -->
  <link href="css/stucture.css" rel="stylesheet" type="text/css" /> <!-- stucture css -->
  <!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->

<body>
  <!-- preloader -->
   
  <!-- end preloader -->
  <!--  top bar -->
  <?php
  include './theme-part/navbar.php';
  ?>
  <!--  end top bar -->
  <!--  navigation -->
  <!--  end navigation -->
  <!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Vendor Profile</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Vendor Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- end page banner -->
  <!-- vendor profile -->
  <section id="vendor-profile" class="vendor-profile-main-page">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="vendor-pro-block">
            <div class="vendor-pro-info">
              <div class="row">
                <div class="col-md-5">
                  <div class="vendor-profile-img">
                    <img src="<?php echo "admin/uploads/{$data['vendor_img']}"  ?>" class="img-responsive" alt="vendor-img">'
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="vendor-pro-section">
                    <h4 class="vendor-pro-heading"><?php echo $data['vendor_name']; ?></h4>
                    <ul>
                      <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $data['vendor_address']; ?>
                        <?php echo $areadata['area_name']; ?>
                        <?php echo $areadata['area_pincode']; ?>
                      </li>
                      <li>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:#"><?php echo $data['vendor_email']; ?></a>
                      </li>
                      <li>
                        <i class="fa fa-mobile-phone" aria-hidden="true"></i> <a href="tel:#">+08 985 258 7800</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- <ul class="social-btns">
              <li><a class="btn facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="btn twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a class="btn google" href="#" target="_blank"><i class="fa fa-google"></i></a></li>
              <li><a class="btn linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul> -->
            <div class="vendor-pro-dtl">
              <p><?php echo $data['about_me']; ?></p>
              <div class="blog-comments comments">
                <h3 class="blog-main-hedaing">Feedback</h3>
                <div class="media">
                  <ul>
                    <?php
                    $display_feedback = mysqli_query($con, "select * from tbl_feedback where vendor_id={$vid}") or die(mysqli_error($con));
                    while ($feedbackdata = mysqli_fetch_array($display_feedback)) { 
                      $uq = mysqli_query($con,"select * from tbl_user where user_id ='{$feedbackdata['user_id']}'");
                      $udata = mysqli_fetch_array($uq);
                      ?>
                      <li>
                        <div class="media-body">
                          <h6 class="media-heading"><?php echo $udata['user_name']; ?></h6>
                          <div class="date"><?php echo $feedbackdata['feedback_date']; ?></div>
                          <p><?php echo $feedbackdata['feedback_details']; ?></p>
                          <!-- <a href="#" class="btn btn-reply">reply</a> -->
                        </div>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
                
              </div>
              <div class="leave-reply-block">
              <h5 class="blog-main-hedaing">Share Feedback</h5>
              <div class="form-group">
                <form id="comment-form" method="post">
                  
                  <textarea class="form-control" name="feedback" rows="3" id="comment" placeholder="YOUR Feedback"></textarea>
                  <button type="submit"  name="fb" class="btn btn-pink">Post Feedback</button>
                </form>   
              </div>
            </div>
              
            </div>
          </div>

          
        </div>
        <script>
          function disablePastDates() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("myDate").setAttribute("min", today);
          }
        </script>

        </script>
        <div class="col-md-4">
          <div class="vendor-enquery-block">
            <h4 class="vendor-enquery-heading">Send Booking To Vendor</h4>
            <p class="vendor-enquery-sub-heading">Fill in your details and a venue specialist will get back to you shortly</p>
            <div class="form-group">
              <form id="vendor-profile-form" action="#" method="post">
                
                <!-- <input type="email" class="form-control" id="email" placeholder="Email Address *"/>
                <input type="text" class="form-control" id="phone" placeholder="Phone *"/> -->
                <div class="date-picker1">
                  <input type="date" class="form-control" onfocus="disablePastDates()" id="myDate" name="bdate" placeholder="Wedding Date" />
                </div>
                <div class="date-picker1">
                  <input type="text" class="form-control"     name="adress" placeholder="Address" />
                </div>

                <button type="submit" name="bk" class="btn btn-pink">Book Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end vendor profile -->
  <!-- footer -->
  <?php
  include './theme-part/footer.php';
  ?>
  <!-- end footer -->
  <!-- jquery -->
  <script type="text/javascript" src="js/jquery.min.js"></script> <!-- jquery library js -->
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

<!-- Mirrored from thegenius.co/html/weddlist/version-1/vendor-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:33:27 GMT -->

</html>