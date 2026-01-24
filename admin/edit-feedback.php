<?php
  require './class/atclass.php';

  $editid=$_GET['eid'];
  if(!isset($_GET['eid'])||empty($_GET['eid']))
  {
    header("location:display-feedback.php");
  }
  $selectq=mysqli_query($connection,"select * from tbl_feedback where feedback_id='{$editid}'") or die(mysqli_error($connection));
 $selectrow=mysqli_fetch_array($selectq);
  if($_POST)
  {
    $id=$_POST['id'];
    $fid=$_POST['fid'];
    $user_id=$_POST['user_id'];
    $fdetails=$_POST['fdetails'];
    $fdate=$_POST['fdate'];
    $vendor_id=$_POST['vendor_id'];

    $query=mysqli_query($connection,"update tbl_feedback set user_id='{$user_id}',feedback_details='{$fdetails}',
    feedback_date='{$fdate}',vendor_id='{$vendor_id}' where feedback_id='{$id}'") or die(mysqli_error($connection));

    if($query)
    { 
      echo "<script> alert('record update');window.location='display-feedback.php';</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Feedback </title>
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
              <h3 class="page-title">Feedback  Form </h3>
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
                    <h4 class="card-title">Feedback  details </h4>
                    <h4> Edit feedback information: </h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $selectrow['feedback_id']?>">
                    <div class="form-group">
                        <label for="user_mobile"><b>Feedback id</b></label>
                        <input type="text" class="form-control" name="fid" placeholder="Feedback id"/>
                      </div>
                    <div class="form-group">
                        <label for="about_me"><b> User Name </b></label>
                        <?php
                        $q = mysqli_query($connection,"select * from tbl_user");
                        echo "<select name='user_name' required>";
                        echo "<option value=''> select User Name </option>";
                        while($row=mysqli_fetch_array($q))
                        {
                          echo "<option value='{$row['user_name']}'> {$row['user_name']}</option>";
                        }
                        echo "</select>";
                        ?> 
                        </div>
                        <div class="form-group">
                        <label for="user_address"><b>Details</b></label>
                       <!-- <input type="text" class="form-control" id="Vendor_address" placeholder="Vendor_address" /> -->
                        <div>
                          <textarea class="form-control" value="<?php echo $selectrow['feedback_details']?>" name="fdetails" placeholder="enter your Details" ></textarea>
                          </div>  
                    </div>
                      <div class="form-group">
                        <label for="user_mobile"><b>Date</b></label>
                        <input type="date" class="form-control" value="<?php echo $selectrow['feedback_date']?>" name="fdate" placeholder="Date" required/>
                      </div>
                    <div class="form-group">
                        <label for="about_me"><b> Vendor id </b></label>
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
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                      <button type="button" onclick="window.location='display-feedback.php';" class="btn btn-primary mr-2">view</button>
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