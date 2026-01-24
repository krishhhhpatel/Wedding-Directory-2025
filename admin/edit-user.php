<?php
  require './class/atclass.php';

  $editid=$_GET['eid'];
  if(!isset($_GET['eid'])||empty($_GET['eid']))
  {
    header("location:display-user.php");
  }
  $selectq=mysqli_query($connection,"select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($connection));
 $selectrow=mysqli_fetch_array($selectq);

  if($_POST)
  {
    $id=$_POST['id'];
    $uid=$_POST['uid'];
    $uname=$_POST['uname'];
    $ugender=$_POST['ugender'];
    $uemail=$_POST['uemail'];
    $upassword=$_POST['upassword'];
    $umobile=$_POST['umobile'];
    $uaddress=$_POST['uaddress'];
    
    $query=mysqli_query($connection,"update tbl_user set user_name='{$uname}',user_gender='{$ugender}',
    user_email='{$uemail}',user_password='{$upassword}',user_mobile='{$umobile}',user_address='{$uaddress}' where user_id='{$id}'") or die(mysqli_error($connection));

    if($query)
    { 
      echo "<script> alert('record update');window.location='display-user.php';</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> User </title>
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
              <h3 class="page-title">User Form </h3>
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
                    <h4 class="card-title">User details </h4>
                    <h4> Edit User information: </h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $selectrow['user_id']?>">
                    <div class="form-group">
                        <label for="user_id"><b>user_id</b></label>
                        <input type="text" class="form-control" name="uid" placeholder="user_id"/>
                      </div>
                      <div class="form-group">
                        <label for="User_name"><b>user_name</b></label>
                        <input type="text" class="form-control" value="<?php echo $selectrow['user_name']?>" name="uname" placeholder="User_name" required/>
                      </div>
                      <div class="form-group">
                        <label for="user_gender"><b>user_gender</b></label>
                        <input type="" class="form-control" value="<?php echo $selectrow['user_gender']?>" name="ugender" placeholder="user_gender" required/>
                      </div>
                      <div class="form-group">
                        <label for="user_email"><b>user_email</b></label>
                        <input type="email" class="form-control" value="<?php echo $selectrow['user_email']?>" name="uemail" placeholder="user_email" required/>
                      </div>
                      <div class="form-group">
                        <label for="user_password"><b>user_password</b></label>
                        <input type="password" class="form-control"  value="<?php echo $selectrow['user_password']?>" name="upassword" placeholder="user_password" required/>
                      </div>
                      <div class="form-group">
                        <label for="user_mobile"><b>user_mobile</b></label>
                        <input type="number" class="form-control" value="<?php echo $selectrow['user_mobile']?>" name="umobile" placeholder="user_mobile" required/>
                      </div>
                      <div class="form-group">
                        <label for="user_address"><b>user_address</b></label>
                       <!-- <input type="text" class="form-control" id="Vendor_address" placeholder="Vendor_address" /> -->
                        <div>
                          <textarea class="form-control" value="<?php echo $selectrow['user_address']?>" name="uaddress" placeholder="enter your address" require></textarea>
                          </div>  
                    </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                      <button type="button" onclick="window.location='display-user.php';" class="btn btn-primary mr-2">view</button>
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