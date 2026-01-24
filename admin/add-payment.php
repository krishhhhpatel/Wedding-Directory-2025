<?php
  require './class/atclass.php';

  if($_POST)
  {
    $pid=$_POST['pid'];
    $booking_id=$_POST['booking_id'];
    $user_id=$_POST['user_id'];
    $Amount=$_POST['Amount'];
    $Method=$_POST['Method'];
    $Date=$_POST['Date'];
    $details=$_POST['details'];
    

    $query=mysqli_query($connection,"insert into tbl_payment(Payment_id,booking_id,user_id,amount,payment_method,payment_date,payment_details) 
    values('{$pid}','{$booking_id}','{$user_id}','{$Amount}','{$Method}','{$Date}','{$details}')") or die(mysqli_error($connection));

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
              <h3 class="page-title">Payment Form </h3>
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
                    <h4 class="card-title">Payment details </h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="payment id"><b>Payment id</b></label>
                        <input type="text" class="form-control" name="pid" placeholder="payment id" />
                      </div>
                        <div class="form-group">
                        <label for="about_me"><b> Booking id </b></label>
                        <?php
                        $q = mysqli_query($connection,"select * from tbl_booking");
                        echo "<select name='booking_id' required>";
                        echo "<option value=''> select booking id </option>";
                        while($row=mysqli_fetch_array($q))
                        {
                          echo "<option value='{$row['booking_id']}'> {$row['vendor_name']}</option>";
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
                        <label for="user_email"><b>Amount</b></label>
                        <input type="text" class="form-control" name="Amount" placeholder="Amount" required/>
                      </div>
                      <div class="form-group">
                        <label for="user_password"><b>Method</b></label>
                        <input type="text" class="form-control" name="Method" placeholder="Method" required/>
                      </div>
                      <div class="form-group">
                        <label for="user_mobile"><b>Date</b></label>
                        <input type="date" class="form-control" name="Date" placeholder="Date" required/>
                      </div>
                      <div class="form-group">
                        <label for="user_address"><b>Details</b></label>
                       <!-- <input type="text" class="form-control" id="Vendor_address" placeholder="Vendor_address" /> -->
                        <div>
                          <textarea class="form-control" name="details" placeholder="enter your Details" ></textarea>
                          </div>  
                    </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                      <button type="button" onclick="window.location='display-payment.php';" class="btn btn-primary mr-2">view</button>
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