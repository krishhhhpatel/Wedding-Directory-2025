
<?php
session_start();
require './class/atclass.php';
?>
<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2017 .
**********************************************************************************************************  -->
<!-- 
Template Name: Weddlist — Wedding Vendor Directory HTML Template
Version: 1.0.0
Author: udayraj
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->

<!-- Mirrored from thegenius.co/html/weddlist/version-1/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:33:35 GMT -->
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
<!--  end top bar -->
<!--  navigation -->
 
<!--  end navigation -->
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Contact Us</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact Us</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- contact us -->
  <section class="main-container">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading"> Contact Details</h3>
        <p class="section-sub-heading">Feel Free to Contact</p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="contact-us-block">
            <div class="contact-us-icon"> 
              <img src="images/contact-us/contact-icon-1.png" class="img-responsive" alt="contact-icon">
            </div>
            <div class="contact-us-dtl text-center">
              <h6 class="contact-heading">Our Address</h6>
              <div class="contact-sub-heading">Ahmedabad</div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="contact-us-block">
            <div class="contact-us-icon"> 
              <img src="images/contact-us/contact-icon-2.png" class="img-responsive" alt="contact-icon">
            </div>
            <div class="contact-us-dtl text-center">
              <h6 class="contact-heading">Call Us</h6>
              <a href="tel:#">+91 6356 182 319</a>
             </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="contact-us-block">
            <div class="contact-us-icon"> 
              <img src="images/contact-us/contact-icon-3.png" class="img-responsive" alt="contact-icon">
            </div>
            <div class="contact-us-dtl text-center">
              <h6 class="contact-heading">Mail Us</h6>
              <a href="mailto:#">inf@mybooking.com</a>
             </div>
          </div>
        </div>
      </div>
      <div class="mt100">
        <div class="section text-center">
          <h3 class="section-heading">Feel Free To Contact Us</h3>
         </div>
        <div class="contact-form form-group">
          <form id="contact-us-form" action="#" method="post"  >
            <div class="row">
              <div class="col-sm-6">
                <input type="text" class="form-control" name="yourname" id="name" placeholder="YOUR NAME *" required/>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="YOUR PHONE" required/>
              </div>
              <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="YOUR EMAIL ADDRESS *" required/>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="SUBJECT"/>
              </div>
            </div>
            <textarea name="message" id="message" class="form-control" placeholder="YOUR MESSAGE *"></textarea>
            <div class="message-button text-center">
              <button type="submit" class="btn btn-pink">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- end contact us -->
<!-- footer -->
<?php
 include 'theme-part/footer.php'
 ?>
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
<script src="js/jquery.validate.js"></script>
<script>
  $(document).ready(function(){
    $("#contact-us-form").validate()
  })
</script>
<style>
  .error{
    color:red;
  }
</style>
</html>