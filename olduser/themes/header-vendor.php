<?php
$connection = mysqli_connect("localhost","root","","db_project");
?>
<div class="header">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                        <div class="header-text">
                            <p class="wlecome-text">Welcome to Wedding Directory.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                        <div class="header-text text-right">
                            <p>Are You Vendor?<a href="vendor-form.php" class="text-white">Click here!  </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.header-top -->
        <!-- navigation start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg navbar-classic">
                        <a class="navbar-brand" href="index.html"> <img src="images/logo.png" alt=""></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-classic">
                          <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="homepage.php" id="menu-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Homepage
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-1">
                                        <li><a class="dropdown-item" href="about-us.php">
                                                About-us  <span class="badge badge-success"></span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="contact-us.php">
                                                contact-us  <span class="badge badge-success"></span></a>
                                        </li>
                                    </ul>
                                </li> 
                               <li class="nav-item dropdown"> 
                                     <a class="nav-link dropdown-toggle" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Vendors
                                    </a> 
                                  <ul class="dropdown-menu" aria-labelledby="menu-2">
                                        <li><a class="dropdown-item" href="vendor-category.php">
                                                All Category</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Supplier
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-3">
                                    <?php
                                    $categoryq = mysqli_query($connection,"select * from tbl_category");
                                    while($cdata = mysqli_fetch_array($categoryq))
                                    {
                                        echo "<li><a class='dropdown-item' href='vendor-category.php?categoryid={$cdata['category_id']}' title=''>{$cdata['category_name']}</a></li>";
                                    }
                                    ?>
                                    </ul> 
                                </li>
                                <?php
                                 if(isset($_SESSION['uid']))
                                 {
                                    ?>
                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hii <?php echo $_SESSION['uname']; ?> 
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-3">
                                        <li><a href='change-password.php'>Change Password</a></li>
                                        <li><a href='logout.php'>Logout</a></li>
                                    </ul> 
                                </li>
                                    <?php
                                 }
                                 else
                                 {
                                    echo "<li><a href='login.php'>Login</a></li>";
                                 }
                                ?>
                                    </ul>
                                </li> 
                            </ul> 
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- navigation close -->
    </div>