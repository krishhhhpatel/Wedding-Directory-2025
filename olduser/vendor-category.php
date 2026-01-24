<?php
session_start();
  require './class/atclass.php'
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Wedding Vendor & Supplier Directory HTML Template - Vendor By Category</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
  <!-- header-start -->
         <?php
           include './themes/header-vendor.php';
           ?>
     <!-- header-end -->
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">Vendor </h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Vendor </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <div class="content">
        <div class="container">
            <div class="row">
            <?php 
                 //require './class/atclass.php';
                 if(isset($_GET['categoryid']))
                 {
                    $cid=$_GET['categoryid'];
                    $q=mysqli_query($connection,"select * from tbl_vendor where category_id='{$cid}'");
                 }
                 else
                 {
                    $q=mysqli_query($connection,"select * from tbl_vendor");
                 }
                 while($data = mysqli_fetch_array($q)){
               ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card-category">
                        <div class="category-image zoomimg"><a href="details.php?vid=<?php echo $data['vendor_id']?>"><img width="150" src="/project (admin)/uploads/<?php echo $data['vendor_img'];?>" alt=""></a></div>
                            <a href="details.php?vid=<?php echo $data['vendor_id']?>"><p>Vendor Name:<?php echo $data['vendor_name'];?> </p>
                       <!-- <div class="category-content">-->
                             <h5>Amount:<?php echo $data['amount'];?></h5>
                        <!--</div>-->
                    </div>
                </div>
                <?php
                 }
                ?>
            </div>
        </div>
    </div>
    <!-- footer-start -->
          <?php
           include './themes/footer.php';
           ?>
     <!-- footer-end -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
</body>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:59 GMT -->
</html>