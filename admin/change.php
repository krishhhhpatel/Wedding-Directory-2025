<?php
  // require './class/atclass.php';
  session_start();
  require './class/atclass.php';
  if(!isset($_SESSION['id']))
  {
      echo "<script>alert('Login Required');window.location='login.php';</script>";
  }

  if($_POST)
  {
    $opass=$_POST['opass'];
    $npass=$_POST['npass'];
    $cpass=$_POST['cpass'];
    $uid=$_SESSION['id'];
    $oq=mysqli_query($connection,"select * from tbl_vendor where vendor_id='{$uid}'");
    $odata=mysqli_fetch_array($oq);
    if($odata['vendor_password']==$opass)
    {
        if($npass==$cpass)
        {
            if($opass==$npass)
            {
                echo "<script>alert('New password can not be same as old password');</script>";
            }
            else
            {
                $uq=mysqli_query($connection,"update tbl_vendor set vendor_password='{$npass}' where vendor_id='{$uid}'");
                echo "<script>alert('password update');</script>";
            }
        }
        else
        {
            echo "<script>alert('New password and confirm password need to be same');</script>";
        }
    }
    else
    {
        echo "<script>alert('old password not matches');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> Admin </title>
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
              <h3 class="page-title">change password  Form </h3>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="opass"><b>Old password</b></label>
                        <input type="password" class="form-control" name="opass" placeholder="Enter a old password" required/>
                      </div>
                      <div class="form-group">
                        <label for="npass"><b>New password</b></label>
                        <input type="password" class="form-control" name="npass" placeholder="Enter a new password" required/>
                      </div>
                      <div class="form-group">
                        <label for="cpass"><b>confirm password</b></label>
                        <input type="password" class="form-control" name="cpass" placeholder="Enter a confirm password" required/>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
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