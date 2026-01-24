<?php
  require './class/atclass.php';

  if($_POST)
  {
    $bid=$_POST['bid'];
    //$vendor_name=$_POST['vendor_name'];
    $vendor_id=$_POST['vendor_id'];
    $user_id=$_POST['user_id'];
    $bdate=$_POST['bdate'];
    $bstatus=$_POST['bstatus'];
    $baddress=$_POST['baddress'];
   // $vendor_details=$_POST['vendor_details'];
    
    $query=mysqli_query($connection,"insert into tbl_booking(booking_id,vendor_id,user_id,booking_date,booking_status,booking_address) 
    values('{$bid}','{$vendor_id}','{$user_id}','{$bdate}','{$bstatus}','{$baddress}')") or die(mysqli_error($connection));

    if($query)
    {
      echo "<script> alert ('record insted')</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> Admin</title>
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery.validate.js"></script>
    <style>
      .error
      {
        color:red
      }
    </style>
    <script>
      $(document).ready(function(){
        $("#myform").validate();
      })  
    </script>  
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
    <!-- sidebar-code start -->
      <?php
       include './themes/sidebar.php';
      ?>
      <!-- sidebar-code end -->
      <div class="container-fluid page-body-wrapper">
        <!-- setting-panel start -->
          <?php 
           include './themes/header.php';
           ?>
           <!--setting-panel end -->
         <!-- navbar-start -->
        <?php
         include './themes/navbar.php';
         ?>
         <!-- navbar-end -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Booking Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Booking details </h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="booking_id"><b>Booking_id</b></label>
                        <input type="text" class="form-control" name="bid" placeholder="booking_id"/>
                      </div>
                        <div class="form-group">
                        <label for="about_me"><b> vendor id</b></label>
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
                        </div>
                        <div class="form-group">
                        <label for="about_me"><b> User id </b></label>
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
                      <div class="form-group">
                        <label for="Booking_date"><b>Booking_date</b></label>
                        <input type="date" class="form-control" name="bdate" placeholder="Booking_date" />
                      </div>
                      <div class="form-group">
                        <label for="Booking_status"><b>Booking_status</b></label>
                        <input type="text" class="form-control" name="bstatus" placeholder="Booking_status"/>
                      </div>
                      <div class="form-group">
                        <label for="Booking_address"><b>Booking_address</b></label>
                        <input type="" class="form-control" name="baddress" placeholder="Booking_address" />
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                      <button type="button" onclick="window.location='display-booking.php';" class="btn btn-primary mr-2">view</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- footer-start -->
          <?php
           include './themes/footer.php';
           ?>
           <!-- footer-end -->
        </div>
        <!-- main-panel ends -->
      </div> 
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
  </body>
</html>