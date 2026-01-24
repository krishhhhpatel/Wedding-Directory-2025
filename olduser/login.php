<?php
session_start();
  require './class/atclass.php';

  if($_POST)
{
    $email = $_POST['email'];
   // $password = $_POST['password'];

    $q=mysqli_query($connection,"select * from tbl_user where user_email='{$email}' ");
    $data=mysqli_fetch_array($q);
    $count=mysqli_num_rows($q);
    if($count==1)
    {
        $_SESSION['uid'] = $data['user_id'];
        $_SESSION['uname'] = $data['user_name'];
        header("location:vendor-category.php");
    }
    else
    {
        echo "<script>alert('Login Failed');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Wedding Vendor & Supplier Directory HTML Template - Vendor Form</title>
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
<!-- vendor-form -->
<body class="vendor-bg-image">
     <!-- header-start -->
     <?php
           include './themes/header-vendor.php';
           ?>
     <!-- header-end -->
    <!-- sign up -->
    <div class=" vendor-form">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                    <!-- vendor head -->
                    <!--<div class="vendor-head">
                        <a href="index.html"><img src="images/logo.png" alt="Wedding Vendor & Supplier Directory "></a>
                    </div>-->
                    <!-- /.vendor head -->
                    <div class="st-tab">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- vendor title -->
                                    <div class="vendor-form-title">
                                        <h3 class="mb-2"><b>Login</b></h3>
                                    </div>
                                    <!-- /.vendor title -->
                                    <form method="post">
                                        <div class="login-form">
                                            <div class="form-group">
                                                <label class="control-label" for="email"><b>Email</b></label>
                                                <input  type="email" name="email" placeholder="Email" class="form-control" required>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="control-label" for="Password">Password</label>
                                                <input  type="Password" name="Password" placeholder="Password" class="form-control" required>
                                            </div>-->
                                            <button type="submit" name="singlebutton" class="btn btn-default btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.vendor-form -->
      <!-- footer-start -->
      <?php
           include './themes/footer.php';
           ?>
     <!-- footer-end -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
   <script src="js/custom-script.js"></script> 
</body>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:35 GMT -->
</html>