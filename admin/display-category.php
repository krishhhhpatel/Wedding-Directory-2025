<?php
  require './class/atclass.php';

   $selectq=mysqli_query($connection, "select * from tbl_category")or die(mysqli_error($connection));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> category</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller"> 
      <!-- sidebar-start -->
       <?php
         include './themes/sidebar.php';
         ?>
         <!-- sidebar-end -->
      <div class="container-fluid page-body-wrapper">
        <!-- setting-panel start -->
        <?php 
           include './themes/header.php';
           ?>
           <!-- setting-panel end -->
         <!-- navbar-start -->
         <?php
         include './themes/navbar.php';
         ?>
         <!-- navbar-end -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">category Tables</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">  tables </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">category details</h4>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>category_id</th>
                            <th>category_name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($_GET['did']))
                        {
                          $did=$_GET['did'];
                          $deleteq=mysqli_query($connection,"delete from tbl_category where category_id='{$did}'") or die(mysqli_error($connection));
                          if($deleteq)
                          {
                            echo "<script>alert{'Record deleted'}</script>";
                          }
                        }

                          $selectq=mysqli_query($connection, "select * from tbl_category")or die(mysqli_error($connection));
                          $count=mysqli_num_rows($selectq);
                          echo $count . "-Record found";
                          while($vendorrow=mysqli_fetch_array($selectq))
                          {
                            echo "<tr>";
                            echo "<td>{$vendorrow['category_id']}</td>";
                            echo "<td>{$vendorrow['category_name']}</td>";
                            echo "<td> <a href='edit-category.php?eid={$vendorrow['category_id']}'>Edit</a> | <a href='display-category.php?did={$vendorrow['category_id']}'>Delete</a>  </td>";
                            echo "</tr>";
                          }
                        ?>
                        </tbody>
                      </table>
                    </div>
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
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
  </body>
</html>