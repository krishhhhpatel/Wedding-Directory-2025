<?php
session_start();
require './class/atclass.php';





?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title>Weddlist — Wedding Vendor Directory HTML Template</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="description" content="Weddlist" />
  <meta name="keywords"
    content="wedding, wedding vendor, wedding vendor directory, HTML template, html theme, wedding html template, wedding html theme, weddlist, weddlist html, weddlist html template">
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
  <?php include './theme-part/navbar.php'; ?>

  <!--  end navigation -->
  <!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading"> Vendor List</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">  Listing</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- end page banner -->
  <!-- category listing -->
  <section class="main-container">
    <div class="container">
      <div class="refine-search">
        <h4 class="refine-search-heading">Filter Data</h4>
        <form >
          <div class="form-group">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="select-category-dropdown dropdown">
                <?php 

$display_service = mysqli_query($con,"select * from tbl_category") ;
$display_area = mysqli_query($con,"select * from tbl_area") ;
                ?>
                     <select  class="btn dropdown-toggle" name="service">
                    <?php while($service_data = mysqli_fetch_array($display_service))
                    {
                      echo "<option  value='{$service_data['category_id']}'>{$service_data['category_name']}</option>";
                    } ?>
                    </select>
                 </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="select-city-dropdown dropdown">
                <select  class="btn dropdown-toggle" name="area">
                    <?php while($area_data = mysqli_fetch_array($display_area))
                    {
                      echo "<option value='{$area_data['area_id']}'>{$area_data['area_name']}</option>";
                    } ?>
                    </select>
                   
                </div>
              </div>
              
              <div class="col-md-3 col-sm-6">
                <div class="search-btn">
                  <button type="submit" class="btn btn-pink">Filter</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="category-listing-block">
        <div class="row">

          <?php

if(isset($_GET['sid']))
{
  $sid = $_GET['sid'];
  $qq="SELECT
    `tbl_vendor`.`vendor_id`
    , `tbl_vendor`.`vendor_name`
     , `tbl_vendor`.`vendor_img`
    , `tbl_vendor`.`vendor_address`
    , `tbl_vendor`.`vendor_name`
   
FROM
    `tbl_category`
    INNER JOIN `tbl_vendor` 
        ON (`tbl_category`.`category_id` = `tbl_vendor`.`category_id`) where `tbl_category`.`category_id` ='{$sid}' ";
}if(isset($_GET['service']) && isset($_GET['area']))
{
  $service = $_GET['service'];
  $area = $_GET['area'];
  $qq="SELECT
    `tbl_vendor`.`vendor_id`
    , `tbl_vendor`.`vendor_name`
    
    , `tbl_vendor`.`vendor_img`
    , `tbl_vendor`.`vendor_address`
     , `tbl_category`.`category_name`
    , `tbl_category`.`category_id`
FROM
    `tbl_category`
    INNER JOIN `tbl_vendor` 
        ON (`tbl_category`.`category_id` = `tbl_vendor`.`category_id`) where `tbl_vendor`.`category_id` ='{$service}' and `tbl_vendor`.`area_id` ='{$area}' ";
}else{
          $qq="SELECT
    `tbl_vendor`.`vendor_id`
    , `tbl_vendor`.`vendor_name`
    
    , `tbl_vendor`.`vendor_img`
    , `tbl_vendor`.`vendor_address`
       , `tbl_category`.`category_name`
    , `tbl_category`.`category_id`
FROM
    `tbl_category`
    INNER JOIN `tbl_vendor` 
        ON (`tbl_category`.`category_id` = `tbl_vendor`.`category_id`);";
}
          $data=mysqli_query($con,$qq);
          while ( $dd = mysqli_fetch_array($data))  { 
            echo "<a href='vendor-profile.php?vid={$dd['vendor_id']}'>";
            ?>
            <div class="col-md-4 col-sm-6">
              <div class="category-listing-section">
                <div class="category-listing-dtl">
                  <div class="category-listing-img">
                    <img src="<?php echo "admin/uploads/{$dd['vendor_img']}"  ?>" class="img-responsive try"
                        alt="category-img">
                  </div>
                  <div class="category-info">
                    <!-- <h6 class="category-dtl-heading"> // echo "{$dd["category_name"]}"; ?></h6> -->
                    <div class="category-dtl-address"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo "{$dd["vendor_address"]}" ?></div>
                  </div>
                </div>
                <div class="category-listing-text">
                  <div class="row">
                    <div class="col-md-10">
                      <div class="category-text-heading">
                        <h4><?php echo "{$dd["vendor_name"]}"; ?></h4>
                        <?php echo "{$dd["category_name"]}"; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            echo "</a>";
          }
          ?>

          <!-- <div class="col-md-4 col-sm-6">
            <div class="category-listing-section">
              <div class="category-listing-dtl">
                <div class="category-listing-img">
                  <a href="#"><img src="images/category-listing/category-list-1.jpg" class="img-responsive"
                      alt="category-img"></a>
                </div>
                <div class="category-info">
                  <h6 class="category-dtl-heading"><a href="#">wedding dresses</a></h6>
                  <div class="category-dtl-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Street Address,
                    Name Of Town, 12345, Country.</div>
                </div>
              </div>
              <div class="category-listing-text">
                <div class="row">
                  <div class="col-md-6">
                    <div class="category-text-heading">
                      <a href="#">Venue Vendor</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="category-price text-right">$120-$500</div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
     
    </div>
  </section>
  <!-- end category listing -->
  <!-- footer -->
  <?php include './theme-part/footer.php'; ?>

  <!-- end footer -->
  <!-- jquery -->
  <script type="text/javascript" src="js/jquery.min.js"></script> <!-- jquery library js -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
  <script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
  <script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
  <script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
  <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
  <script type="text/javascript" src="js/waypoints.min.js"></script>
  <!-- facts count js required for jquery.counterup.js file -->
  <script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
  <script type="text/javascript" src="js/menumaker.js"></script> <!-- menu js-->
  <script type="text/javascript" src="js/jquery.share-tooltip.js"></script> <!-- share tooltip js-->
  <script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script> <!-- datepicker js-->
  <script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->
  <!-- end jquery -->
</body>
<!--body end -->

<!-- Mirrored from thegenius.co/html/weddlist/version-1/category-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:31:38 GMT -->

</html>