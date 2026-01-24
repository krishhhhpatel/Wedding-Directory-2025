<?php
session_start();
 require './class/atclass.php';
 if(!isset($_GET['vid']))
 {
    header("location:vendor-category.php");
 }
 $id=$_GET['vid'];
 $pq=mysqli_query($connection,"select * from tbl_vendor where vendor_id = '{$id}'");
 $pdata=mysqli_fetch_array($pq);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>List Single Page Template- RealWed</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!--jquery-ui  -->
    <link href="css/jquery-ui.css" rel="stylesheet">
    <!--jquery-rateyo  -->
    <link href="css/jquery.rateyo.css" rel="stylesheet">
    <!-- Template magnific popup gallery -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
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
    <div class="venue-pageheader">
        <div class="container">
            <div class="row align-items-end page-section">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="">
                        <h1 class="vendor-heading">Vendor Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header -->
    <!-- page-header -->
    <div class="vendor-content-wrapper">
        <div class="container">
            <div class="row">
              <?php
                $q=mysqli_query($connection,"select * from tbl_vendor");
                while($data=mysqli_fetch_array($q))
                {
              ?>
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                        <div class="mt20">
                            <!-- /.review-block -->
                            <div class="card border card-shadow-none ">
                                <!-- review-user -->
                                <div class="card-header bg-white mb0">
                                    <div class="review-user">
                                        <div class="user-img"> <img src="/project (admin)/uploads/<?php echo $pdata['vendor_img']; ?>" alt="star rating jquery" class="rounded-circle"></div>
                                            <h5 class="user-name mb-0"> <h2> <?php echo $pdata['vendor_name']; ?></h2></h5>
                                            <div class="given-review">
                                                <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far  fa-star"></i> <i class="far  fa-star"></i></span></div>
                                        </div>
                                </div>
                                <!-- /.review-user -->
                                <div class="card-body">
                                    <!-- review-descripttions -->
                                    <h4> Vendor details:<?php echo $pdata['vendor_details']; ?></h4>
                                    <h4> price: <?php echo $pdata['amount']; ?></h4>
                                    <h4> Address: <?php echo $pdata['vendor_address']; ?></h4>
                                    <h4> Email-id: <?php echo $pdata['vendor_email']; ?></h4>
                                    <h4> Phone no.: <?php echo $pdata['vendor_mobile']; ?></h4>
                                    <h4> About me: <?php echo $pdata['about_me']; ?></h4>
                                    <!-- /.review-descripttions -->
                                </div>
                            </div>
                            <br>
                        </div>
                </div>
                <!-- list-sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="sidebar-venue" >
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="bookingprocess.php">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h3 class="mb20">Vendor-Booking Form</h3>
                                        </div>
                                        <!-- Text input-->
                                            <div class="form-group">
                                                <label for="about_me"><b> vendor id</b></label>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <?php
                                                    $q = mysqli_query($connection,"select * from tbl_vendor");
                                                    echo "<select name='vendor_id' required>";
                                                    echo "<option value=''> select vendor id </option>";
                                                    while($row=mysqli_fetch_array($q))
                                                    {
                                                    echo "<option value='{$row['vendor_id']}'> {$row['vendor_id']}</option>";
                                                    }
                                                    echo "</select>";
                                                    ?>
                                                </div><br>
                                            </div><br><br>
                                        <!-- Text input-->
                                        <div class="form-group">
                                                <label for="about_me"><b> User id </b></label>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <?php
                                                    $q = mysqli_query($connection,"select * from tbl_user");
                                                    echo "<select name='user_id' required>";
                                                    echo "<option value=''> select user id </option>";
                                                    while($row=mysqli_fetch_array($q))
                                                    {
                                                    echo "<option value='{$row['user_id']}'> {$row['user_id']}</option>";
                                                    }
                                                    echo "</select>";
                                                ?> 
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="Booking_date"><b>Booking_date</b></label>
                                                <input type="date" class="form-control" name="bdate" placeholder="Booking_date" required/>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                                <label for="Booking_status"><b>Booking_status</b></label>
                                                <input type="text" class="form-control" name="bstatus" placeholder="Booking_status" required/>
                                            </div>
                                        </div>
                                        <!-- Textarea -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"> 
                                            <div class="form-group">
                                                <label for="Booking_address"><b>Booking_address</b></label>
                                                <textarea type="" class="form-control" name="baddress" placeholder="Booking_address" required></textarea>
                                            </div>
                                        </div>
                                       <?php
                                       if(isset($_SESSION['uid']))
                                       {
                                         ?>
                                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default btn-block">Submit Quote</button>
                                            </div>
                                         </div>
                                         <?php
                                       }
                                       else
                                       {
                                          ?>
                                          <a href="login.php">Login is Required</a>
                                          <?php
                                       }
                                       ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
              }
            ?>  
            <!-- /.list-sidebar -->
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
   
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <!-- popup gallery -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/custom-script.js"></script>
    <script>
    function initMap() {
        var uluru = {
            lat: 23.0732195,
            lng: 72.5646902
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map-pin.png'
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
    </script>
    <script src="js/jquery.rateyo.min.js"></script>
    <script>
    $(function() {

        $("#rateYo1, #rateYo2, #rateYo3, #rateYo4, #rateYo5 ").rateYo({
            rating: 3.6
        });

    });
    </script>
    <script src="js/return-to-top.js"></script>
</body>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:52 GMT -->
</html>