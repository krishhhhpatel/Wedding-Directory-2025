<section class="top-nav-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="top-text">Welcome to Wedding Planner</div>
        </div>
        <div class="col-sm-6">
          <div class="top-detail text-right">
            <ul>
              <li><a href="help.html">Help</a></li>
              <li><a href="pricing-plan.html">Pricing</a></li> 
              <!-- <li><a href=".../logout.php" data-toggle="modal" data-target="#login-model">Logout</a></li> -->
              <li class="search-btn search-icon text-center">
                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- search -->
      <div class="search">
        <div class="container">
          <input type="search" class="search-box" placeholder="Search"/>
          <a href="#" class="fa fa-times search-close"></a>
        </div>
      </div>
      <!-- end search -->
      <!-- login popup -->
      <div class="modal fade login-model" id="login-model" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Login</h5>
            </div>
            <div class="modal-body login-model-body text-center">
              <form id="login-form" action="#">
                <div class="form-group">
                  <input type="email" class="form-control" id="login_email" placeholder="Enter Your Email"/>
                  <input type="password" class="form-control" id="login_password" placeholder="Enter Your Password"/>
                </div>
                <button type="submit" class="btn btn-default">Login</button>
              </form>
            </div>            
          </div>
        </div>
      </div>
      <!-- end login popup -->
      <!-- register popup -->
      <div class="modal fade register-model" id="register-model" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Register</h5>
            </div>
            <div class="modal-body request-model-body text-center">
              <form id="register-form" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" id="reg_name" placeholder="Enter Your Name"/>
                  <input type="email" class="form-control" id="reg_email" placeholder="Enter Your Email"/>
                  <input type="password" class="form-control" id="reg_password" placeholder="Enter Your Password"/>
                  <input type="password" class="form-control" id="reg_confirm-password" placeholder="Confirm Your Password"/>
                </div>
                <button type="submit" class="btn btn-default">Register</button>
              </form>
            </div>            
          </div>
        </div>
      </div>
      <!-- end register popup -->
    </div>
  </section>
<!--  end top bar -->
<!--  navigation -->
  <header id="nav-bar" class="nav-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3">
          <div class="wedding-logo">
            <a href="index.php"><img src="./images/logo.png" class="img-responsive" alt="logo"></a>
          </div>
        </div>
        <div class="col-md-10 col-sm-9">
          <div class="navigation">
            <div id="cssmenu">
              <ul class="css-menu">
              <li ><a href="index.php">Home</a></li>   
              <li ><a href="vendor-listing.php">Vendors</a></li>   
                                
               
                <li><a href="#">Service<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <?php 
$sq = mysqli_query($con,"select * from tbl_category");
while($sdata = mysqli_fetch_array($sq)){
  echo " <li><a href='vendor-listing.php?sid={$sdata['category_id']}' >{$sdata['category_name']}</a></li>";
}
                    ?>
                   </ul>
                </li>        
                
               
                
                <li><a href="about.php">About </a></li>
                <li><a href="contact.php">Contact </a></li>

                <?php
                if(isset($_SESSION['uid'])){
                ?>
                <li><a href="#">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                  <li><a href="view-booking.php">My Booking</a></li>

                  <li><a href="view-feedback.php">My Feedback</a></li>

                    <li><a href="change-password.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
                <?php 
                }else{
                ?>
                <li><a href="login.php">Login </a></li>
                <?php 
                }
                ?>
              </ul>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </header> 