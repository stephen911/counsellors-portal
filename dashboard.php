
<?php
include 'functions.php';
// include 'yolkpay.php';
// $yolk = new YolkPay();

checker();
$user = members();
//  var_dump($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:05 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Profile | GNACC - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Theme Config Js -->
        <script src="assets/js/hyper-config.js"></script>

        <!-- Icons css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <?php include "navbar.php" ?>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Logo Light -->
                <a href="dashboard.php" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo.png" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="dashboard.php" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="dark logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo.png" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <button type="button" class="bg-transparent button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </button>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="#">
                            <img src="uploads/<?php echo $user['passport'] ; ?>" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name"><strong><?php echo $user['name'] ; ?></strong></span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <?php include "sidebar.php" ?>

                    <!-- Help Box -->
                    <!-- <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-soft-dark btn-sm">Upgrade</a>
                    </div> -->
                    <!-- end Help Box -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->

            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">GNACC</a></li>
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Profile -->
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-lg">
                                                            <img src="uploads/<?php echo $user['passport'] ; ?>" alt="" class="rounded-circle img-thumbnail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <h4 class="mt-1 mb-1 text-white"><?php echo $user['name'] ; ?></h4>
                                                            <p class="font-13 text-white-50"> <?php echo $user['counsellingArea'] ; ?></p>
    
                                                            <ul class="mb-0 list-inline text-light">
                                                                <li class="list-inline-item me-3">
                                                                    <h5 class="mb-1 text-white"><?php echo $user['tdate'] ; ?></h5>
                                                                    <p class="mb-0 font-13 text-white-50">Training Date</p>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <h5 class="mb-1 text-white"><?php echo $user['membership'] ; ?> Counsellor</h5>
                                                                    <p class="mb-0 font-13 text-white-50">Membership Type</p>
                                                                </li>
                                                                
                                                                
                                                                <li class="list-inline-item">
                                                                    <h5 class="mb-1 text-white"><?php echo $user['expiry'] ; ?></h5>
                                                                    <p class="mb-0 font-13 text-white-50">Certificate Expiry Date</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                                    <a href="edit.php" class="btn btn-light">
                                                        <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                                    </a>
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Nationality</h6>
                                                <h2 class="m-b-20"><?php echo $user['nationality'] ; ?></h2>
                                                <!-- <span class="badge bg-primary"> +11% </span> <span class="text-muted">From previous period</span> -->
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="ri-archive-line float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Region</h6>
                                                <h3 class="m-b-20"><span><?php echo $user['region'] ; ?></span></h3>
                                                <!-- <span class="badge bg-danger"> -29% </span> <span class="text-muted">From previous period</span> -->
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="ri-vip-diamond-line float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Occupation</h6>
                                                <h2 class="m-b-20"><?php echo $user['occupation'] ; ?></h2>
                                                <!-- <span class="badge bg-primary"> +89% </span> <span class="text-muted">Last year</span> -->
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Personal-Information -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Profile</h4>
                                        <p class="text-muted font-13">
                                            Hey, I’m <?php echo $user['name'] ; ?> residing at <?php echo $user['gpsAddress'] ; ?>. I'm a <?php echo $user['maritalStatus'] ; ?> <?php echo $user['counsellingArea'] ; ?> counsellor. I prefer a T-Shirt with a(an) <?php echo $user['color'] ; ?> colour of size <?php echo $user['size'] ; ?>. I heard about this association from <?php echo $user['heard'] ; ?>.
                                        </p>

                                        <hr/>

                                        <div class="text-start">
                                            <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2"><?php echo $user['name'] ; ?></span></p>

                                            <p class="text-muted"><strong>Mobile :</strong><span class="ms-2"><?php echo $user['contact'] ; ?></span></p>

                                            <p class="text-muted"><strong>Email :</strong> <span class="ms-2"><?php echo $user['email'] ; ?></span></p>

                                            <p class="text-muted"><strong>Location :</strong> <span class="ms-2"><?php echo $user['gpsAddress'] ; ?></span></p>
                                            <p class="text-muted"><strong>Membership Type :</strong> <span class="ms-2"><?php echo $user['membership'] ; ?> Counsellor</span></p>

                                            <!-- <p class="text-muted"><strong>Languages :</strong>
                                                <span class="ms-2"> English, German, Spanish </span>
                                            </p> -->
                                            <!-- <p class="text-muted mb-0" id="tooltip-container"><strong>Elsewhere :</strong>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Twitter"><i class="mdi mdi-twitter"></i></a>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Skype"><i class="mdi mdi-skype"></i></a>
                                            </p> -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Personal-Information -->

                                <!-- Toll free number box-->
                                <div class="card text-white bg-info overflow-hidden">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h4> <i class="mdi mdi-deskphone"></i> Contact US: +233 24 499 6991</h4>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                                <!-- End Toll free number box-->

                                <!-- Messages-->
                                <!-- <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Messages</h4>

                                        <div class="inbox-widget">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Tomaslau</p>
                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Kurafire</p>
                                                <p class="inbox-item-text">Nice to meet you</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>

                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Shahedk</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Adhamdannaway</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>
                                        </div>  end inbox-widget 
                                    </div>  end card-body
                                </div> end card -->

                            </div> <!-- end col-->

                            <div class="col-xl-8">

                                <!-- Chart-->
                                <!-- <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Orders & Revenue</h4>
                                        <div dir="ltr">
                                            <div style="height: 260px;" class="chartjs-chart">
                                                <canvas id="high-performing-product"></canvas>
                                            </div>
                                        </div>        
                                    </div>
                                </div> -->
                                <!-- End Chart-->

                                
                                <!-- end row -->


                               <!-- <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">My Products</h4>

                                        <div class="table-responsive">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Stock</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ASOS Ridley High Waist</td>
                                                        <td>$79.49</td>
                                                        <td><span class="badge bg-primary">82 Pcs</span></td>
                                                        <td>$6,518.18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marco Lightweight Shirt</td>
                                                        <td>$128.50</td>
                                                        <td><span class="badge bg-primary">37 Pcs</span></td>
                                                        <td>$4,754.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Half Sleeve Shirt</td>
                                                        <td>$39.99</td>
                                                        <td><span class="badge bg-primary">64 Pcs</span></td>
                                                        <td>$2,559.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lightweight Jacket</td>
                                                        <td>$20.00</td>
                                                        <td><span class="badge bg-primary">184 Pcs</span></td>
                                                        <td>$3,680.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marco Shoes</td>
                                                        <td>$28.49</td>
                                                        <td><span class="badge bg-primary">69 Pcs</span></td>
                                                        <td>$1,965.81</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>  end table responsive
                                    </div>  end col
                                </div> end row -->

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include "footer.php"?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                <h5 class="text-white m-0">Theme Settings</h5>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="card mb-0 p-3">
                        <h5 class="mt-0 font-16 fw-bold mb-3">Choose Layout</h5>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Vertical</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 align-items-center border-bottom">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span class="d-block border border-3 ms-auto"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Horizontal</h5>
                            </div>
                        </div>

                        <h5 class="my-3 font-16 fw-bold">Color Scheme</h5>

                        <div class="colorscheme-cardradio">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-theme" id="layout-color-light"
                                            value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-color-light">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-theme" id="layout-color-dark"
                                            value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100 bg-black" for="layout-color-dark">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light-lighten d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light-lighten d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h5 class="my-3 font-16 fw-bold">Layout Mode</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                            id="layout-mode-fluid" value="fluid">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-fluid">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                                </div>
                                <div class="col-4" id="layout-boxed">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                            id="layout-mode-boxed" value="boxed">
                                        <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-mode-boxed">
                                            <span class="d-flex h-100 border-start border-end">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end flex-column p-1">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                                </div>

                                <div class="col-4" id="layout-detached">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-mode"
                                            id="data-layout-detached" value="detached">
                                        <label class="form-check-label p-0 avatar-md w-100" for="data-layout-detached">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-flex p-1 align-items-center border-bottom">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span class="d-block border border-3 ms-auto"></span>
                                                    <span class="d-block border border-3 ms-1"></span>
                                                    <span class="d-block border border-3 ms-1"></span>
                                                    <span class="d-block border border-3 ms-1"></span>
                                                </span>
                                                <span class="d-flex h-100 p-1 px-2">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                            <span class="d-block border border-3 w-100 mb-1"></span>
                                                            <span class="d-block border border-3 w-100 mb-1"></span>
                                                            <span class="d-block border border-3 w-100"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                            </span>

                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Detached</h5>
                                </div>
                            </div>
                        </div>

                        <h5 class="my-3 font-16 fw-bold">Topbar Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                        id="topbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark"
                                        value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-dark d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>

                        <div id="sidebar-color">
                            <h5 class="my-3 font-16 fw-bold">Sidebar Color</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-color"
                                            id="leftbar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-light">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-color"
                                            id="leftbar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-dark">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-dark d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-color"
                                            id="leftbar-color-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-default">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-primary bg-gradient d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                        <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h5 class="my-3 font-16 fw-bold">Sidebar Size</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                            id="leftbar-size-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-default">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                            id="leftbar-size-compact" value="compact">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-compact">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                            id="leftbar-size-small" value="condensed">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column">
                                                        <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                                            id="leftbar-size-small-hover" value="sm-hover">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small-hover">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 border-end  flex-column">
                                                        <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Hover View</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                        <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-full">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="d-flex h-100 border-end  flex-column">
                                                        <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h5 class="my-3 font-16 fw-bold">Layout Position</h5>

                            <div class="btn-group radio" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>

                        <div id="sidebar-user">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <label class="font-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check">
                                </div>  
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Chart.js -->
        <script src="assets/vendor/chart.js/chart.min.js"></script>

        <!-- Profile Demo App js -->
        <script src="assets/js/pages/demo.profile.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:07 GMT -->
</html>
