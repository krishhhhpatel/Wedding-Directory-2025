<?php
session_start();
require './class/atclass.php';
if(!isset($_SESSION['uid']))
{
  header("location:login.php");
}
?>
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

<!-- Mirrored from thegenius.co/html/weddlist/version-1/manage-item-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:32:58 GMT -->
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
        <h2 class="banner-heading">View Booking</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Manage item listing</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- manage item listing -->
  <section id="manage-item-listing" class="manage-item-listing-main-block">
    <div class="container">
     
      <div class="manage-item-listing-block">
        <table>
          <tr class="top-heading-row">
           
          <th class="title">ID</th>
            <th class="address">Date</th>
            <th class="title">Vendor</th>
             <th class="title">Status</th>
            
            
          </tr>
          <?php 
          $uid = $_SESSION['uid'];
$q = mysqli_query($con,"SELECT
    `tbl_booking`.`booking_id`
    , `tbl_vendor`.`vendor_name`
    , `tbl_booking`.`booking_date`
    , `tbl_booking`.`booking_status`
    , `tbl_booking`.`user_id`
FROM
    `tbl_vendor`
    INNER JOIN `tbl_booking` 
        ON (`tbl_vendor`.`vendor_id` = `tbl_booking`.`vendor_id`)
  where   `tbl_booking`.`user_id` = '{$uid}'");
while($data = mysqli_fetch_array($q)){
    echo " <tr>
           
            <th class=' title' >{$data['booking_id']}</th>
            <th class=' title' >{$data['booking_date']}</th>
            <th class=' title' >{$data['vendor_name']}</th>
             <td class=' address' >{$data['booking_status']}</td>
              
            </td>
          </tr>";
}
          ?>
         
        
        </table>
      </div>
    </div>
  </section>
<!-- end manage item listing -->
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

<!-- Mirrored from thegenius.co/html/weddlist/version-1/manage-item-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:32:58 GMT -->
</html>