<?php
require './class/atclass.php';
if($_POST)
{
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['con-password'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  $areaid=$_POST['areaid'];

  if($password==$cpassword)
  {
    $i=mysqli_query($con,"insert into tbl_user(user_name,user_gender,user_email,user_password,user_mobile,user_address,area_id) values('{$name}','{$gender}','{$email}','{$password}','{$mobile}','{$address}','{$areaid}')") or die(mysqli_error($con));
    if($i)
    {
      echo"<script>alert('Register Successful!!');</script>";
    }
  }
  else{
    echo"<script>alert('password and confirm paasword must be same');</script>";
  }
  
  


}
?>


<!DOCTYPE html>

<html lang="en">
<head>
<title>Weddlist — Wedding Vendor Directory HTML Template</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Weddlist" />
<meta name="keywords" content="wedding, wedding vendor, wedding vendor directory, HTML template, html theme, wedding html template, wedding html theme, weddlist, weddlist html, weddlist html template">
<meta name="author" content="udayraj" />
<meta name="MobileOptimized" content="320" />
<link href="images/favicon.ico" rel="icon" type="image/x-icon"/> <!-- favicon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
 
<!--  top bar -->
<?php include './theme-part/navbar.php'; ?>

<!--  end navigation -->
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Register</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Register</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- register page -->
  <section id="register-page" class="register-main-block">
    <div class="container"> <div class="col-lg-3"></div>
    <div class="col-lg-6">
          <div class="register-block">
            <h4 class="register-heading text-center">Register Here.</h4>
            <div class="form-group">
              <form action="" method="post" id="myform">
                <input type="text" name="name" class="form-control" placeholder="USERNAME" required/>
                <label for="">Gender :</label><br>
                <input type="radio" class="formc-" name="gender">Male
                <input type="radio" name="gender">Female
                 <input type="email" name="email" class="form-control" placeholder="EMAIL ADDRESS" required/>
                <input type="number" name="mobile" class="form-control" placeholder="MOBILE" required/>
                <input type="text" name="address" class="form-control" placeholder="ADDRESS" required/>
                <?php
                $data=mysqli_query($con,"select * from tbl_area") or die(mysqli_error($con));
                echo "<select name='areaid' class='form-control' required>";
                echo "<option value=''>Select Area Name</option>";
                while($q=mysqli_fetch_array($data))
                {
                  echo "<option value='{$q['area_id']}'>{$q['area_name']}</option>";
                }
                echo "</select>";
                echo "<br>";
                ?>
                <input type="password" name="password" class="form-control" placeholder="PASSWORD" required/>
                <input type="password" name="con-password" class="form-control" placeholder="CONFIRM PASSWORD" required/>
                <!-- <div class="checkbox-dtl">
                  <input type="checkbox" value="None" id="checkbox" name="check" />
                  <label for="checkbox"></label>
                  <div class="terms-conditions">I agree to all <a href="#">terms &amp; Conditions</a></div>
                </div> -->
                <button type="submit" class="btn btn-pink">Register Now</button>
                </form>
              <p class="sign-in text-center">
                Already have an account? <a href="login.php">Sign In</a>
              </p>
            </div>
          </div>
        </div>
    </div>
  </section>
<!-- end register page -->
<!-- footer -->
<?php include './theme-part/footer.php'; ?>

<!-- end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>  <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="js/jquery.share-tooltip.js"></script> <!-- share tooltip js--> 
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script> <!-- datepicker js--> 
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
</body>

<script src="js/jquery.validate.js"></script>
<script>
  $(document).ready(function(){
    $("#myform").validate()
  })
</script>
<style>
  .error{
    color:red;
  }
</style>
</html>