<?php
session_start();
  require './class/atclass.php';

  if($_POST)
  {
    $vid=$_POST['vid'];
    $vname=$_POST['vname'];
    $vdetails=$_POST['vdetails'];
    $vemail=$_POST['vemail'];
    $vmobile=$_POST['vmobile'];
    $vpassword=$_POST['vpassword'];
    $vaddress=$_POST['vaddress'];
    $vamount=$_POST['vamount'];
    $vaboutme=$_POST['vaboutme'];
     $filename = $_FILES['file123']['name'];
    $filepath = $_FILES['file123']['tmp_name'];
    move_uploaded_file($filepath,'uploads/'.$filename);
    $category_id = $_POST['category_id'];

    $query=mysqli_query($connection,"insert into tbl_vendor(vendor_name,vendor_details,vendor_email,vendor_mobile,vendor_password,vendor_address,amount,about_me,vendor_img,category_id) 
    values('{$vname}','{$vdetails}','{$vemail}','{$vmobile}','{$vpassword}','{$vaddress}','{$vamount}','{$vaboutme}','{$filename}','{$category_id}')") or die(mysqli_error($connection));

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
              <h3 class="page-title">Vendor Form </h3>
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
                    <h4 class="card-title">Vendor information </h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="vendor_id"><b>vendor_id</b></label>
                        <input type="text" class="form-control" name="vid" placeholder="vendor_id"/>
                      </div>
                      <div class="form-group">
                        <label for="Vendor_name"><b>Vendor Name</b></label>
                        <input type="text" class="form-control" name="vname" placeholder="enter name" required/>
                      </div>
                      <div class="form-group">
                        <label for="Vendor_details"><b>Vendor Details</b></label>
                        <input type="text" class="form-control" id="Vendor_details"  name="vdetails" placeholder="Vendor_details" />
                      </div>
                      <div class="form-group">
                        <label for="Vendor_email"><b>Vendor Email</b></label>
                        <input type="email" class="form-control" name="vemail" placeholder="Vendor_email" required/>
                      </div>
                      <div class="form-group">
                        <label for="Vendor_mobile"><b>Vendor_mobile</b></label>
                        <input type="number" class="form-control" name="vmobile" placeholder="Vendor_mobile" required/>
                      </div>
                      <div class="form-group">
                        <label for="Vendor_Password"><b>Vendor_Password</b></label>
                        <input type="password" class="form-control" name="vpassword" placeholder="Vendor_Password" required/>
                      </div>
                      <div class="form-group">
                        <label for="Vendor_address"><b>Vendor_address</b></label>
                        <input type="text" class="form-control" id="Vendor_address"  name="vaddress" placeholder="Vendor_address" /> 
                        
                    </div>
                      <div class="form-group">
                        <label for="amount"><b>amount</b></label>
                        <input type="text" class="form-control" name="vamount" placeholder="amount" required/>
                      </div>
                      <div class="form-group">
                        <label for="about_me"><b>about_me</b></label>
                        <input type="text" class="form-control" name="vaboutme" placeholder="about_me" required/>
                      </div>
                      <div class="form-group">
                         <label for="exampleInputEmail1"> Image </label>
                          <input type="file" class="form-control" id="exampleInputEmail1"  name="file123" placeholder="Image">
                     </div>
                      <div class="form-group">
                        <label for="about_me"><b> Category </b></label>
                        <?php
                        $q = mysqli_query($connection,"select * from tbl_category");
                        echo "<select name='category_id' required>";
                        echo "<option value=''> select category </option>";
                        while($row=mysqli_fetch_array($q))
                        {
                          echo "<option value='{$row['category_id']}'> {$row['category_name']}</option>";
                        }
                        echo "</select>";
                        ?>
                        </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                      <button type="button" onclick="window.location='display-vendor.php';" class="btn btn-primary mr-2">view</button>
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