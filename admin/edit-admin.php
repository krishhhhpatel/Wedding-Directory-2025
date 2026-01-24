<?php
  require './class/atclass.php';

  $editid=$_GET['eid'];
    if(!isset($_GET['eid'])||empty($_GET['eid']))
    {
      header("location:display-admin.php");
    }
    $selectq=mysqli_query($connection,"select * from tbl_admin where admin_id='{$editid}'") or die(mysqli_error($connection));
   $selectrow=mysqli_fetch_array($selectq);
  //print_r($selectrow); 
  if($_POST)
  {
    $id=$_POST['id'];
    $aid=$_POST['aid'];
    $aname=$_POST['aname'];
    $aemail=$_POST['aemail'];
    $apassword=$_POST['apassword'];
    
    $query=mysqli_query($connection,"update tbl_admin set admin_name='{$aname}',admin_email='{$aemail}',
    admin_password='{$apassword}' where admin_id='{$id}'") or die(mysqli_error($connection));

    if($query)
    { 
      echo "<script> alert('record update');window.location='display-admin.php';</script>";
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
              <h3 class="page-title">Admin Form </h3>
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
                    <h4 class="card-title">Admin details </h4>
                    <h4> Edit admin information: </h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $selectrow['admin_id']?>">
                    <div class="form-group">
                        <label for="admin_id"><b>admin_id</b></label>
                        <input type="text" class="form-control" name="aid" placeholder="admin_id"/>
                      </div>
                      <div class="form-group">
                        <label for="admin_name"><b>admin_name</b></label>
                        <input type="text" class="form-control" value="<?php echo $selectrow['admin_name']?>" name="aname" placeholder="admin_name" required/>
                      </div>
                      <div class="form-group">
                        <label for="admin_email"><b>admin_email</b></label>
                        <input type="email" class="form-control" value="<?php echo $selectrow['admin_email']?>" name="aemail" placeholder="admin_email" required/>
                      </div>
                      <div class="form-group">
                        <label for="admin_password"><b>admin_password</b></label>
                        <input type="password" class="form-control" value="<?php echo $selectrow['admin_password']?>" name="apassword" placeholder="admin_password" required/>
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                      <button type="button" onclick="window.location='display-admin.php';" class="btn btn-primary mr-2">view</button>
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