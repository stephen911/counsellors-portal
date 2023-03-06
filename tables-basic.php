<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper_2/modern/tables-basic.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:20:02 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Basic Tables | GNACC - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon2.ico">

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
            <div class="navbar-custom topnav-navbar">
                <div class="container-fluid detached-nav">

                    <!-- Topbar Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index-2.php" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo" height="22">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index-2.php" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-search-line noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12"> 
                                <span class="align-middle d-none d-lg-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-notification-3-line noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-3" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->
                        
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-apps-2-line noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>

                            </div>
                        </li>

                        <li class="notification-list d-none d-sm-inline-block">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                <i class="ri-settings-3-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="notification-list d-none d-sm-inline-block">
                            <a class="nav-link" href="javascript:void(0)" id="light-dark-mode">
                                <i class="ri-moon-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="notification-list d-none d-md-inline-block">
                            <a class="nav-link" href="#" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Dominic Keller</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Logo Light -->
                <a href="index-2.php" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index-2.php" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
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
                        <a href="pages-profile.php">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                                aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">5</span>
                                <span> Dashboards </span>
                            </a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="dashboard-analytics.php">Analytics</a>
                                    </li>
                                    <li>
                                        <a href="index-2.php">Ecommerce</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-projects.php">Projects</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-crm.php">CRM</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-wallet.php">E-Wallet</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title side-nav-item">Apps</li>

                        <li class="side-nav-item">
                            <a href="apps-calendar.php" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Calendar </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-chat.php" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Chat </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm"
                                class="side-nav-link">
                                <i class="uil uil-tachometer-fast"></i>
                                <span class="badge bg-danger text-white float-end">New</span>
                                <span> CRM </span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="crm-projects.php">Project</a>
                                    </li>
                                    <li>
                                        <a href="crm-orders-list.php">Orders List</a>
                                    </li>
                                    <li>
                                        <a href="crm-clients.php">Clients</a>
                                    </li>
                                    <li>
                                        <a href="crm-management.php">Management</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                                aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Ecommerce </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-ecommerce-products.php">Products</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-products-details.php">Products Details</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-orders.php">Orders</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-orders-details.php">Order Details</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-customers.php">Customers</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-shopping-cart.php">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-checkout.php">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-sellers.php">Sellers</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                                class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-email-inbox.php">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.php">Read Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                                aria-controls="sidebarProjects" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> Projects </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarProjects">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-projects-list.php">List</a>
                                    </li>
                                    <li>
                                        <a href="apps-projects-details.php">Details</a>
                                    </li>
                                    <li>
                                        <a href="apps-projects-gantt.php">Gantt <span
                                                class="badge rounded-pill bg-light text-dark font-10 float-end">New</span></a>
                                    </li>
                                    <li>
                                        <a href="apps-projects-add.php">Create Project</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-social-feed.php" class="side-nav-link">
                                <i class="uil-rss"></i>
                                <span> Social Feed </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
                                class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Tasks </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTasks">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-tasks.php">List</a>
                                    </li>
                                    <li>
                                        <a href="apps-tasks-details.php">Details</a>
                                    </li>
                                    <li>
                                        <a href="apps-kanban.php">Kanban Board</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-file-manager.php" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> File Manager </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Custom</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                                class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="pages-profile.php">Profile</a>
                                    </li>
                                    <li>
                                        <a href="pages-profile-2.php">Profile 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.php">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="pages-faq.php">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="pages-pricing.php">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="pages-maintenance.php">Maintenance</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                                            aria-controls="sidebarPagesAuth">
                                            <span> Authentication </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarPagesAuth">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="pages-login.php">Login</a>
                                                </li>
                                                <li>
                                                    <a href="pages-login-2.php">Login 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-register.php">Register</a>
                                                </li>
                                                <li>
                                                    <a href="pages-register-2.php">Register 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-logout.php">Logout</a>
                                                </li>
                                                <li>
                                                    <a href="pages-logout-2.php">Logout 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-recoverpw.php">Recover Password</a>
                                                </li>
                                                <li>
                                                    <a href="pages-recoverpw-2.php">Recover Password 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-lock-screen.php">Lock Screen</a>
                                                </li>
                                                <li>
                                                    <a href="pages-lock-screen-2.php">Lock Screen 2</a>
                                                </li>
                                                <li>
                                                    <a href="pages-confirm-mail.php">Confirm Mail</a>
                                                </li>
                                                <li>
                                                    <a href="pages-confirm-mail-2.php">Confirm Mail 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false"
                                            aria-controls="sidebarPagesError">
                                            <span> Error </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarPagesError">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="pages-404.php">Error 404</a>
                                                </li>
                                                <li>
                                                    <a href="pages-404-alt.php">Error 404-alt</a>
                                                </li>
                                                <li>
                                                    <a href="pages-500.php">Error 500</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="pages-starter.php">Starter Page</a>
                                    </li>
                                    <li>
                                        <a href="pages-preloader.php">With Preloader</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.php">Timeline</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="landing.php" target="_blank" class="side-nav-link">
                                <i class="uil-globe"></i>
                                <span class="badge bg-secondary text-light float-end">New</span>
                                <span> Landing </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts"
                                class="side-nav-link">
                                <i class="uil-window"></i>
                                <span> Layouts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="layouts-horizontal.php" target="_blank">Horizontal</a>
                                    </li>
                                    <li>
                                        <a href="layouts-vertical.php" target="_blank">Vertical</a>
                                    </li>
                                    <li>
                                        <a href="layouts-full.php" target="_blank">Full View</a>
                                    </li>
                                    <li>
                                        <a href="layouts-hover.php" target="_blank">Hover Menu</a>
                                    </li>
                                    <li>
                                        <a href="layouts-compact.php" target="_blank">Compact</a>
                                    </li>
                                    <li>
                                        <a href="layouts-icon-view.php" target="_blank">Icon View</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title side-nav-item mt-1">Components</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI"
                                class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> Base UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="ui-accordions.php">Accordions</a>
                                    </li>
                                    <li>
                                        <a href="ui-alerts.php">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="ui-avatars.php">Avatars</a>
                                    </li>
                                    <li>
                                        <a href="ui-badges.php">Badges</a>
                                    </li>
                                    <li>
                                        <a href="ui-breadcrumb.php">Breadcrumb</a>
                                    </li>
                                    <li>
                                        <a href="ui-buttons.php">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="ui-cards.php">Cards</a>
                                    </li>
                                    <li>
                                        <a href="ui-carousel.php">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="ui-dropdowns.php">Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="ui-embed-video.php">Embed Video</a>
                                    </li>
                                    <li>
                                        <a href="ui-grid.php">Grid</a>
                                    </li>
                                    <li>
                                        <a href="ui-list-group.php">List Group</a>
                                    </li>
                                    <li>
                                        <a href="ui-modals.php">Modals</a>
                                    </li>
                                    <li>
                                        <a href="ui-notifications.php">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="ui-offcanvas.php">Offcanvas</a>
                                    </li>
                                    <li>
                                        <a href="ui-placeholders.php">Placeholders</a>
                                    </li>
                                    <li>
                                        <a href="ui-pagination.php">Pagination</a>
                                    </li>
                                    <li>
                                        <a href="ui-popovers.php">Popovers</a>
                                    </li>
                                    <li>
                                        <a href="ui-progress.php">Progress</a>
                                    </li>
                                    <li>
                                        <a href="ui-ribbons.php">Ribbons</a>
                                    </li>
                                    <li>
                                        <a href="ui-spinners.php">Spinners</a>
                                    </li>
                                    <li>
                                        <a href="ui-tabs.php">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="ui-tooltips.php">Tooltips</a>
                                    </li>
                                   <li>
                                        <a href="ui-typography.php">Typography</a>
                                    </li>
                                    <li>
                                        <a href="ui-utilities.php">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false"
                                aria-controls="sidebarExtendedUI" class="side-nav-link">
                                <i class="uil-package"></i>
                                <span> Extended UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExtendedUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="extended-dragula.php">Dragula</a>
                                    </li>
                                    <li>
                                        <a href="extended-range-slider.php">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="extended-ratings.php">Ratings</a>
                                    </li>
                                    <li>
                                        <a href="extended-scrollbar.php">Scrollbar</a>
                                    </li>
                                    <li>
                                        <a href="extended-scrollspy.php">Scrollspy</a>
                                    </li>
                                    <li>
                                        <a href="extended-treeview.php">Treeview</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="widgets.php" class="side-nav-link">
                                <i class="uil-layer-group"></i>
                                <span> Widgets </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons"
                                class="side-nav-link">
                                <i class="uil-streering"></i>
                                <span> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarIcons">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="icons-remixicons.php">Remix Icons</a>
                                    </li>
                                    <li>
                                        <a href="icons-mdi.php">Material Design</a>
                                    </li>
                                    <li>
                                        <a href="icons-unicons.php">Unicons</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts"
                                class="side-nav-link">
                                <i class="uil-chart"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false"
                                            aria-controls="sidebarApexCharts">
                                            <span> Apex Charts </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarApexCharts">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="charts-apex-area.php">Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-bar.php">Bar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-bubble.php">Bubble</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-candlestick.php">Candlestick</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-column.php">Column</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-heatmap.php">Heatmap</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-line.php">Line</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-mixed.php">Mixed</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-timeline.php">Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-boxplot.php">Boxplot</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-treemap.php">Treemap</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-pie.php">Pie</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-radar.php">Radar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-radialbar.php">RadialBar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-scatter.php">Scatter</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-polar-area.php">Polar Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-sparklines.php">Sparklines</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarChartJSCharts" aria-expanded="false"
                                            aria-controls="sidebarChartJSCharts">
                                            <span> ChartJS </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarChartJSCharts">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="charts-chartjs-area.php">Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-bar.php">Bar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-line.php">Line</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-other.php">Other</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="charts-brite.php">Britecharts</a>
                                    </li>
                                    <li>
                                        <a href="charts-sparkline.php">Sparklines</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms"
                                class="side-nav-link">
                                <i class="uil-document-layout-center"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="form-elements.php">Basic Elements</a>
                                    </li>
                                    <li>
                                        <a href="form-advanced.php">Form Advanced</a>
                                    </li>
                                    <li>
                                        <a href="form-validation.php">Validation</a>
                                    </li>
                                    <li>
                                        <a href="form-wizard.php">Wizard</a>
                                    </li>
                                    <li>
                                        <a href="form-fileuploads.php">File Uploads</a>
                                    </li>
                                    <li>
                                        <a href="form-editors.php">Editors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables"
                                class="side-nav-link">
                                <i class="uil-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="tables-basic.php">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatable.php">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps"
                                class="side-nav-link">
                                <i class="uil-location-point"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="maps-google.php">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.php">Vector Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"
                                aria-controls="sidebarMultiLevel" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultiLevel">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
                                            aria-controls="sidebarSecondLevel">
                                            <span> Second Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarSecondLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                            <span> Third Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarThirdLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                        <span> Item 2 </span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="sidebarFourthLevel">
                                                        <ul class="side-nav-forth-level">
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2.1</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2.2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!--- End Sidemenu -->

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-soft-dark btn-sm">Upgrade</a>
                    </div>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">GNACC</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Basic Tables</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Basic Tables</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Basic example</h4>
                                        <p class="text-muted font-14">
                                            For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#basic-example-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basic-example-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-example-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Phone Number</th>
                                                                <th>Date of Birth</th>
                                                                <th>Active?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Risa D. Pearson</td>
                                                                <td>336-508-2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch01" checked data-switch="success"/>
                                                                        <label for="switch01" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ann C. Thompson</td>
                                                                <td>646-473-2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch02" checked data-switch="success"/>
                                                                        <label for="switch02" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paul J. Friend</td>
                                                                <td>281-308-0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch03" data-switch="success"/>
                                                                        <label for="switch03" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Linda G. Smith</td>
                                                                <td>606-253-1207</td>
                                                                <td>May 3, 1962</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch04" data-switch="success"/>
                                                                        <label for="switch04" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="basic-example-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-centered mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Name&lt;/th&gt;
                                                                    &lt;th&gt;Phone Number&lt;/th&gt;
                                                                    &lt;th&gt;Date of Birth&lt;/th&gt;
                                                                    &lt;th&gt;Active?&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Risa D. Pearson&lt;/td&gt;
                                                                    &lt;td&gt;336-508-2157&lt;/td&gt;
                                                                    &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch01&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch01&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Ann C. Thompson&lt;/td&gt;
                                                                    &lt;td&gt;646-473-2057&lt;/td&gt;
                                                                    &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch02&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch02&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Paul J. Friend&lt;/td&gt;
                                                                    &lt;td&gt;281-308-0793&lt;/td&gt;
                                                                    &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch03&quot; data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch03&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Linda G. Smith&lt;/td&gt;
                                                                    &lt;td&gt;606-253-1207&lt;/td&gt;
                                                                    &lt;td&gt;May 3, 1962&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch04&quot; data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch04&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Inverse table</h4>
                                        <p class="text-muted font-14">
                                            You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#inverse-table-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#inverse-table-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="inverse-table-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-dark mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Phone Number</th>
                                                                <th>Date of Birth</th>
                                                                <th>Active?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Risa D. Pearson</td>
                                                                <td>336-508-2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch6" data-switch="success"/>
                                                                        <label for="switch6" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ann C. Thompson</td>
                                                                <td>646-473-2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch7" checked data-switch="success"/>
                                                                        <label for="switch7" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paul J. Friend</td>
                                                                <td>281-308-0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch8" data-switch="success"/>
                                                                        <label for="switch8" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sean C. Nguyen</td>
                                                                <td>269-714-6825</td>
                                                                <td>February 5, 1994</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch10" checked data-switch="success"/>
                                                                        <label for="switch10" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="inverse-table-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-dark mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Name&lt;/th&gt;
                                                                    &lt;th&gt;Phone Number&lt;/th&gt;
                                                                    &lt;th&gt;Date of Birth&lt;/th&gt;
                                                                    &lt;th&gt;Active?&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Risa D. Pearson&lt;/td&gt;
                                                                    &lt;td&gt;336-508-2157&lt;/td&gt;
                                                                    &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch6&quot; data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch6&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Ann C. Thompson&lt;/td&gt;
                                                                    &lt;td&gt;646-473-2057&lt;/td&gt;
                                                                    &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch7&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch7&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Paul J. Friend&lt;/td&gt;
                                                                    &lt;td&gt;281-308-0793&lt;/td&gt;
                                                                    &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch8&quot; data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch8&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Sean C. Nguyen&lt;/td&gt;
                                                                    &lt;td&gt;269-714-6825&lt;/td&gt;
                                                                    &lt;td&gt;February 5, 1994&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch10&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch10&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Striped rows</h4>
                                        <p class="text-muted font-14">
                                            Use <code>.table-striped</code> to add zebra-striping to any table row
                                            within the <code>&lt;tbody&gt;</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#striped-rows-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#striped-rows-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="striped-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-striped table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>User</th>
                                                                <th>Account No.</th>
                                                                <th>Balance</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Risa D. Pearson
                                                                </td>
                                                                <td>AC336 508 2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td class="table-action">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Ann C. Thompson
                                                                </td>
                                                                <td>SB646 473 2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td class="table-action">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Paul J. Friend
                                                                </td>
                                                                <td>DL281 308 0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td class="table-action">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Sean C. Nguyen
                                                                </td>
                                                                <td>CA269 714 6825</td>
                                                                <td>February 5, 1994</td>
                                                                <td class="table-action">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="striped-rows-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-striped table-centered mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;User&lt;/th&gt;
                                                                    &lt;th&gt;Account No.&lt;/th&gt;
                                                                    &lt;th&gt;Balance&lt;/th&gt;
                                                                    &lt;th&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Risa D. Pearson
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;AC336 508 2157&lt;/td&gt;
                                                                    &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-pencil&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Ann C. Thompson
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;SB646 473 2057&lt;/td&gt;
                                                                    &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-pencil&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-4.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Paul J. Friend
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;DL281 308 0793&lt;/td&gt;
                                                                    &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-pencil&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-5.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Sean C. Nguyen
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;CA269 714 6825&lt;/td&gt;
                                                                    &lt;td&gt;February 5, 1994&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-pencil&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Table head options</h4>
                                        <p class="text-muted font-14">
                                            Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#table-head-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#table-head-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="table-head-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered mb-0">
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Courier</th>
                                                                <th>Process</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>ASOS Ridley High Waist</td>
                                                                <td>FedEx</td>
                                                                <td>
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td><i class="mdi mdi-circle text-success"></i> Delivered</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Marco Lightweight Shirt</td>
                                                                <td>DHL</td>
                                                                <td>
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar progress-lg bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td><i class="mdi mdi-circle text-warning"></i> Shipped</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Half Sleeve Shirt</td>
                                                                <td>Bright</td>
                                                                <td>
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td><i class="mdi mdi-circle text-info"></i> Order Received</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lightweight Jacket</td>
                                                                <td>FedEx</td>
                                                                <td>
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td><i class="mdi mdi-circle text-success"></i> Delivered</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="table-head-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-centered mb-0&quot;&gt;
                                                            &lt;thead class=&quot;table-dark&quot;&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Product&lt;/th&gt;
                                                                    &lt;th&gt;Courier&lt;/th&gt;
                                                                    &lt;th&gt;Process&lt;/th&gt;
                                                                    &lt;th&gt;Status&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;ASOS Ridley High Waist&lt;/td&gt;
                                                                    &lt;td&gt;FedEx&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;div class=&quot;progress progress-sm&quot;&gt;
                                                                            &lt;div class=&quot;progress-bar progress-lg bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;&lt;i class=&quot;mdi mdi-circle text-success&quot;&gt;&lt;/i&gt; Delivered&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Marco Lightweight Shirt&lt;/td&gt;
                                                                    &lt;td&gt;DHL&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;div class=&quot;progress progress-sm&quot;&gt;
                                                                            &lt;div class=&quot;progress-bar progress-lg bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;&lt;i class=&quot;mdi mdi-circle text-warning&quot;&gt;&lt;/i&gt; Shipped&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Half Sleeve Shirt&lt;/td&gt;
                                                                    &lt;td&gt;Bright&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;div class=&quot;progress progress-sm&quot;&gt;
                                                                            &lt;div class=&quot;progress-bar progress-lg bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;&lt;i class=&quot;mdi mdi-circle text-info&quot;&gt;&lt;/i&gt; Order Received&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Lightweight Jacket&lt;/td&gt;
                                                                    &lt;td&gt;FedEx&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;div class=&quot;progress progress-sm&quot;&gt;
                                                                            &lt;div class=&quot;progress-bar progress-lg bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;&lt;i class=&quot;mdi mdi-circle text-success&quot;&gt;&lt;/i&gt; Delivered&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Hoverable rows</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#hoverable-rows-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#hoverable-rows-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>
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
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="hoverable-rows-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-hover table-centered mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Product&lt;/th&gt;
                                                                    &lt;th&gt;Price&lt;/th&gt;
                                                                    &lt;th&gt;Quantity&lt;/th&gt;
                                                                    &lt;th&gt;Amount&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;ASOS Ridley High Waist&lt;/td&gt;
                                                                    &lt;td&gt;$79.49&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;82 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$6,518.18&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Marco Lightweight Shirt&lt;/td&gt;
                                                                    &lt;td&gt;$128.50&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;37 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$4,754.50&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Half Sleeve Shirt&lt;/td&gt;
                                                                    &lt;td&gt;$39.99&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;64 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$2,559.36&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Lightweight Jacket&lt;/td&gt;
                                                                    &lt;td&gt;$20.00&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;184 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$3,680.00&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Small table</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#small-table-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#small-table-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="small-table-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-sm table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>
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
                                                            <tr>
                                                                <td>ASOS Ridley High Waist</td>
                                                                <td>$79.49</td>
                                                                <td><span class="badge bg-primary">82 Pcs</span></td>
                                                                <td>$6,518.18</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="small-table-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-sm table-centered mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Product&lt;/th&gt;
                                                                    &lt;th&gt;Price&lt;/th&gt;
                                                                    &lt;th&gt;Quantity&lt;/th&gt;
                                                                    &lt;th&gt;Amount&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;ASOS Ridley High Waist&lt;/td&gt;
                                                                    &lt;td&gt;$79.49&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;82 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$6,518.18&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Marco Lightweight Shirt&lt;/td&gt;
                                                                    &lt;td&gt;$128.50&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;37 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$4,754.50&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Half Sleeve Shirt&lt;/td&gt;
                                                                    &lt;td&gt;$39.99&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;64 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$2,559.36&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Lightweight Jacket&lt;/td&gt;
                                                                    &lt;td&gt;$20.00&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;184 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$3,680.00&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Marco Shoes&lt;/td&gt;
                                                                    &lt;td&gt;$28.49&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;69 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$1,965.81&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;ASOS Ridley High Waist&lt;/td&gt;
                                                                    &lt;td&gt;$79.49&lt;/td&gt;
                                                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary&quot;&gt;82 Pcs&lt;/span&gt;&lt;/td&gt;
                                                                    &lt;td&gt;$6,518.18&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bordered table</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#bordered-table-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#bordered-table-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bordered-table-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-bordered table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>User</th>
                                                                <th>Account No.</th>
                                                                <th>Balance</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Risa D. Pearson
                                                                </td>
                                                                <td>AC336 508 2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td class="table-action text-center">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Ann C. Thompson
                                                                </td>
                                                                <td>SB646 473 2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td class="table-action text-center">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-8.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Paul J. Friend
                                                                </td>
                                                                <td>DL281 308 0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td class="table-action text-center">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-9.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Sean C. Nguyen
                                                                </td>
                                                                <td>CA269 714 6825</td>
                                                                <td>February 5, 1994</td>
                                                                <td class="table-action text-center">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="bordered-table-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-bordered table-centered mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;User&lt;/th&gt;
                                                                    &lt;th&gt;Account No.&lt;/th&gt;
                                                                    &lt;th&gt;Balance&lt;/th&gt;
                                                                    &lt;th class=&quot;text-center&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-6.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Risa D. Pearson
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;AC336 508 2157&lt;/td&gt;
                                                                    &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action text-center&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-7.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Ann C. Thompson
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;SB646 473 2057&lt;/td&gt;
                                                                    &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action text-center&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-8.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Paul J. Friend
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;DL281 308 0793&lt;/td&gt;
                                                                    &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action text-center&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-9.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Sean C. Nguyen
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;CA269 714 6825&lt;/td&gt;
                                                                    &lt;td&gt;February 5, 1994&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action text-center&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bordered color table</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.table-bordered</code> & <code>.border-primary</code> can be added to change colors.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#bordered-color-table-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#bordered-color-table-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bordered-color-table-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-bordered border-primary table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>User</th>
                                                                <th>Account No.</th>
                                                                <th>Balance</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Risa D. Pearson
                                                                </td>
                                                                <td>AC336 508 2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td class="table-action text-center">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Ann C. Thompson
                                                                </td>
                                                                <td>SB646 473 2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td class="table-action text-center">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-8.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Paul J. Friend
                                                                </td>
                                                                <td>DL281 308 0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td class="table-action text-center">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-9.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Sean C. Nguyen
                                                                </td>
                                                                <td>CA269 714 6825</td>
                                                                <td>February 5, 1994</td>
                                                                <td class="table-action text-center">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="bordered-color-table-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-bordered border-primary table-centered mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;User&lt;/th&gt;
                                                                    &lt;th&gt;Account No.&lt;/th&gt;
                                                                    &lt;th&gt;Balance&lt;/th&gt;
                                                                    &lt;th class=&quot;text-center&quot;&gt;Action&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-6.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Risa D. Pearson
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;AC336 508 2157&lt;/td&gt;
                                                                    &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action text-center&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-7.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Ann C. Thompson
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;SB646 473 2057&lt;/td&gt;
                                                                    &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action text-center&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-8.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Paul J. Friend
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;DL281 308 0793&lt;/td&gt;
                                                                    &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action text-center&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td class=&quot;table-user&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/users/avatar-9.jpg&quot; alt=&quot;table-user&quot; class=&quot;me-2 rounded-circle&quot; /&gt;
                                                                        Sean C. Nguyen
                                                                    &lt;/td&gt;
                                                                    &lt;td&gt;CA269 714 6825&lt;/td&gt;
                                                                    &lt;td&gt;February 5, 1994&lt;/td&gt;
                                                                    &lt;td class=&quot;table-action text-center&quot;&gt;
                                                                        &lt;a href=&quot;javascript: void(0);&quot; class=&quot;action-icon&quot;&gt; &lt;i class=&quot;mdi mdi-delete&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Always responsive</h4>
                                        <p class="text-muted font-14">
                                            Across every breakpoint, use
                                            <code>.table-responsive</code> for horizontally scrolling tables. Use
                                            <code>.table-responsive{-sm|-md|-lg|-xl}</code> as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave
                                            normally and not scroll horizontally.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#responsive-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#responsive-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="responsive-preview">
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                                <th scope="col">Heading</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                                <td>Cell</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="responsive-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                    &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                    &lt;td&gt;Cell&lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Basic Borderless Example</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.table-borderless</code> for a table without borders.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#basic-borderless-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basic-borderless-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-borderless-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered table-borderless mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Phone Number</th>
                                                                <th>Date of Birth</th>
                                                                <th>Active?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Risa D. Pearson</td>
                                                                <td>336-508-2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch21" checked data-switch="success"/>
                                                                        <label for="switch21" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ann C. Thompson</td>
                                                                <td>646-473-2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch22" checked data-switch="success"/>
                                                                        <label for="switch22" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paul J. Friend</td>
                                                                <td>281-308-0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch23" data-switch="success"/>
                                                                        <label for="switch23" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Linda G. Smith</td>
                                                                <td>606-253-1207</td>
                                                                <td>May 3, 1962</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch24" data-switch="success"/>
                                                                        <label for="switch24" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="basic-borderless-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-centered table-borderless mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Name&lt;/th&gt;
                                                                    &lt;th&gt;Phone Number&lt;/th&gt;
                                                                    &lt;th&gt;Date of Birth&lt;/th&gt;
                                                                    &lt;th&gt;Active?&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Risa D. Pearson&lt;/td&gt;
                                                                    &lt;td&gt;336-508-2157&lt;/td&gt;
                                                                    &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch21&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch21&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Ann C. Thompson&lt;/td&gt;
                                                                    &lt;td&gt;646-473-2057&lt;/td&gt;
                                                                    &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch22&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch22&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Paul J. Friend&lt;/td&gt;
                                                                    &lt;td&gt;281-308-0793&lt;/td&gt;
                                                                    &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch23&quot; data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch23&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Linda G. Smith&lt;/td&gt;
                                                                    &lt;td&gt;606-253-1207&lt;/td&gt;
                                                                    &lt;td&gt;May 3, 1962&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch24&quot; data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch24&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Inverse Borderless table</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.table-borderless</code> for a table without borders.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#inverse-borderless-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#inverse-borderless-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="inverse-borderless-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-dark table-borderless mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Phone Number</th>
                                                                <th>Date of Birth</th>
                                                                <th>Active?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Risa D. Pearson</td>
                                                                <td>336-508-2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch25" data-switch="success"/>
                                                                        <label for="switch25" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ann C. Thompson</td>
                                                                <td>646-473-2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch26" checked data-switch="success"/>
                                                                        <label for="switch26" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paul J. Friend</td>
                                                                <td>281-308-0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch27" data-switch="success"/>
                                                                        <label for="switch27" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sean C. Nguyen</td>
                                                                <td>269-714-6825</td>
                                                                <td>February 5, 1994</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch28" checked data-switch="success"/>
                                                                        <label for="switch28" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="inverse-borderless-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;table class=&quot;table table-dark table-borderless mb-0&quot;&gt;
                                                            &lt;thead&gt;
                                                                &lt;tr&gt;
                                                                    &lt;th&gt;Name&lt;/th&gt;
                                                                    &lt;th&gt;Phone Number&lt;/th&gt;
                                                                    &lt;th&gt;Date of Birth&lt;/th&gt;
                                                                    &lt;th&gt;Active?&lt;/th&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/thead&gt;
                                                            &lt;tbody&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Risa D. Pearson&lt;/td&gt;
                                                                    &lt;td&gt;336-508-2157&lt;/td&gt;
                                                                    &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch25&quot; data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch25&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Ann C. Thompson&lt;/td&gt;
                                                                    &lt;td&gt;646-473-2057&lt;/td&gt;
                                                                    &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch26&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch26&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Paul J. Friend&lt;/td&gt;
                                                                    &lt;td&gt;281-308-0793&lt;/td&gt;
                                                                    &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch27&quot; data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch27&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                                &lt;tr&gt;
                                                                    &lt;td&gt;Sean C. Nguyen&lt;/td&gt;
                                                                    &lt;td&gt;269-714-6825&lt;/td&gt;
                                                                    &lt;td&gt;February 5, 1994&lt;/td&gt;
                                                                    &lt;td&gt;
                                                                        &lt;!-- Switch--&gt;
                                                                        &lt;div&gt;
                                                                            &lt;input type=&quot;checkbox&quot; id=&quot;switch28&quot; checked data-switch=&quot;success&quot;/&gt;
                                                                            &lt;label for=&quot;switch28&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/td&gt;
                                                                &lt;/tr&gt;
                                                            &lt;/tbody&gt;
                                                        &lt;/table&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Active tables</h4>
                                        <p class="text-muted font-14">
                                            Highlight a table row or cell by adding a <code>.table-active</code> class.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#active-tables-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#active-tables-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="active-tables-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Phone Number</th>
                                                                <th>Date of Birth</th>
                                                                <th>Active?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="table-active">
                                                                <td>Risa D. Pearson</td>
                                                                <td>336-508-2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch29" checked data-switch="success" />
                                                                        <label for="switch29" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ann C. Thompson</td>
                                                                <td>646-473-2057</td>
                                                                <td>January 25, 1959</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch30" checked data-switch="success" />
                                                                        <label for="switch30" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paul J. Friend</td>
                                                                <td>281-308-0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch31" data-switch="success" />
                                                                        <label for="switch31" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row">Linda G. Smith</td>
                                                                <td colspan="2" class="table-active">606-253-1207</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch32" data-switch="success" />
                                                                        <label for="switch32" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paul J. Friend</td>
                                                                <td>281-308-0793</td>
                                                                <td>September 1, 1939</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch33" checked data-switch="success" />
                                                                        <label for="switch33" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- end table-responsive-->   
                                            </div>

                                            <div class="tab-pane" id="active-tables-code">
                                                <div class="table-responsive-sm">
                                                    <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;table class=&quot;table mb-0&quot;&gt;
                                                                &lt;thead&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;th&gt;Name&lt;/th&gt;
                                                                        &lt;th&gt;Phone Number&lt;/th&gt;
                                                                        &lt;th&gt;Date of Birth&lt;/th&gt;
                                                                        &lt;th&gt;Active?&lt;/th&gt;
                                                                    &lt;/tr&gt;
                                                                &lt;/thead&gt;
                                                                &lt;tbody&gt;
                                                                    &lt;tr class=&quot;table-active&quot;&gt;
                                                                        &lt;td&gt;Risa D. Pearson&lt;/td&gt;
                                                                        &lt;td&gt;336-508-2157&lt;/td&gt;
                                                                        &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                        &lt;td&gt;
                                                                            &lt;!-- Switch--&gt;
                                                                            &lt;div&gt;
                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch29&quot; checked data-switch=&quot;success&quot; /&gt;
                                                                                &lt;label for=&quot;switch29&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/td&gt;
                                                                    &lt;/tr&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;td&gt;Ann C. Thompson&lt;/td&gt;
                                                                        &lt;td&gt;646-473-2057&lt;/td&gt;
                                                                        &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                        &lt;td&gt;
                                                                            &lt;!-- Switch--&gt;
                                                                            &lt;div&gt;
                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch30&quot; checked data-switch=&quot;success&quot; /&gt;
                                                                                &lt;label for=&quot;switch30&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/td&gt;
                                                                    &lt;/tr&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;td&gt;Paul J. Friend&lt;/td&gt;
                                                                        &lt;td&gt;281-308-0793&lt;/td&gt;
                                                                        &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                        &lt;td&gt;
                                                                            &lt;!-- Switch--&gt;
                                                                            &lt;div&gt;
                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch31&quot; data-switch=&quot;success&quot; /&gt;
                                                                                &lt;label for=&quot;switch31&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/td&gt;
                                                                    &lt;/tr&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;td scope=&quot;row&quot;&gt;Linda G. Smith&lt;/td&gt;
                                                                        &lt;td colspan=&quot;2&quot; class=&quot;table-active&quot;&gt;606-253-1207&lt;/td&gt;
                                                                        &lt;td&gt;
                                                                            &lt;!-- Switch--&gt;
                                                                            &lt;div&gt;
                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch32&quot; data-switch=&quot;success&quot; /&gt;
                                                                                &lt;label for=&quot;switch32&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/td&gt;
                                                                    &lt;/tr&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;td&gt;Paul J. Friend&lt;/td&gt;
                                                                        &lt;td&gt;281-308-0793&lt;/td&gt;
                                                                        &lt;td&gt;September 1, 1939&lt;/td&gt;
                                                                        &lt;td&gt;
                                                                            &lt;!-- Switch--&gt;
                                                                            &lt;div&gt;
                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch33&quot; checked data-switch=&quot;success&quot; /&gt;
                                                                                &lt;label for=&quot;switch33&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/td&gt;
                                                                    &lt;/tr&gt;
                                                                &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                        </span>
                                                    </pre>
                                                </div><!-- end table-responsive-->   
                                            </div>
                                        </div><!-- end tab-content-->
                                    </div><!-- end card body-->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Nesting</h4>
                                        <p class="text-muted font-14">
                                            Border styles, active styles, and table variants are not inherited by nested tables.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#Nesting-tables-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#Nesting-tables-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="Nesting-tables-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-striped mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Phone Number</th>
                                                                <th>Date of Birth</th>
                                                                <th>Active?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Risa D. Pearson</td>
                                                                <td>336-508-2157</td>
                                                                <td>July 24, 1950</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch34" checked data-switch="success" />
                                                                        <label for="switch34" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <table class="table mb-0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <th>Phone Number</th>
                                                                                <th>Date of Birth</th>
                                                                                <th>Active?</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Risa D. Pearson</td>
                                                                                <td>336-508-2157</td>
                                                                                <td>July 24, 1950</td>
                                                                                <td>
                                                                                    <!-- Switch-->
                                                                                    <div>
                                                                                        <input type="checkbox" id="switch35" checked data-switch="success" />
                                                                                        <label for="switch35" data-on-label="Yes" data-off-label="No"
                                                                                            class="mb-0 d-block"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Ann C. Thompson</td>
                                                                                <td>646-473-2057</td>
                                                                                <td>January 25, 1959</td>
                                                                                <td>
                                                                                    <!-- Switch-->
                                                                                    <div>
                                                                                        <input type="checkbox" id="switch36" data-switch="success" />
                                                                                        <label for="switch36" data-on-label="Yes" data-off-label="No"
                                                                                            class="mb-0 d-block"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Linda G. Smith</td>
                                                                <td>606-253-1207</td>
                                                                <td>September 2, 1939</td>
                                                                <td>
                                                                    <!-- Switch-->
                                                                    <div>
                                                                        <input type="checkbox" id="switch37" data-switch="success" />
                                                                        <label for="switch37" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="Nesting-tables-code">
                                                <div class="table-responsive-sm">
                                                    <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;table class=&quot;table table-striped mb-0&quot;&gt;
                                                                &lt;thead&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;th&gt;Name&lt;/th&gt;
                                                                        &lt;th&gt;Phone Number&lt;/th&gt;
                                                                        &lt;th&gt;Date of Birth&lt;/th&gt;
                                                                        &lt;th&gt;Active?&lt;/th&gt;
                                                                    &lt;/tr&gt;
                                                                &lt;/thead&gt;
                                                                &lt;tbody&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;td&gt;Risa D. Pearson&lt;/td&gt;
                                                                        &lt;td&gt;336-508-2157&lt;/td&gt;
                                                                        &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                        &lt;td&gt;
                                                                            &lt;!-- Switch--&gt;
                                                                            &lt;div&gt;
                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch34&quot; checked data-switch=&quot;success&quot; /&gt;
                                                                                &lt;label for=&quot;switch34&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/td&gt;
                                                                    &lt;/tr&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;td colspan=&quot;4&quot;&gt;
                                                                            &lt;table class=&quot;table mb-0&quot;&gt;
                                                                                &lt;thead&gt;
                                                                                    &lt;tr&gt;
                                                                                        &lt;th&gt;Name&lt;/th&gt;
                                                                                        &lt;th&gt;Phone Number&lt;/th&gt;
                                                                                        &lt;th&gt;Date of Birth&lt;/th&gt;
                                                                                        &lt;th&gt;Active?&lt;/th&gt;
                                                                                    &lt;/tr&gt;
                                                                                &lt;/thead&gt;
                                                                                &lt;tbody&gt;
                                                                                    &lt;tr&gt;
                                                                                        &lt;td&gt;Risa D. Pearson&lt;/td&gt;
                                                                                        &lt;td&gt;336-508-2157&lt;/td&gt;
                                                                                        &lt;td&gt;July 24, 1950&lt;/td&gt;
                                                                                        &lt;td&gt;
                                                                                            &lt;!-- Switch--&gt;
                                                                                            &lt;div&gt;
                                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch35&quot; checked data-switch=&quot;success&quot; /&gt;
                                                                                                &lt;label for=&quot;switch35&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot;
                                                                                                    class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/td&gt;
                                                                                    &lt;/tr&gt;
                                                                                    &lt;tr&gt;
                                                                                        &lt;td&gt;Ann C. Thompson&lt;/td&gt;
                                                                                        &lt;td&gt;646-473-2057&lt;/td&gt;
                                                                                        &lt;td&gt;January 25, 1959&lt;/td&gt;
                                                                                        &lt;td&gt;
                                                                                            &lt;!-- Switch--&gt;
                                                                                            &lt;div&gt;
                                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch36&quot; data-switch=&quot;success&quot; /&gt;
                                                                                                &lt;label for=&quot;switch36&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot;
                                                                                                    class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/td&gt;
                                                                                    &lt;/tr&gt;
                                                                                &lt;/tbody&gt;
                                                                            &lt;/table&gt;
                                                                        &lt;/td&gt;
                                                                    &lt;/tr&gt;
                                                                    &lt;tr&gt;
                                                                        &lt;td&gt;Linda G. Smith&lt;/td&gt;
                                                                        &lt;td&gt;606-253-1207&lt;/td&gt;
                                                                        &lt;td&gt;September 2, 1939&lt;/td&gt;
                                                                        &lt;td&gt;
                                                                            &lt;!-- Switch--&gt;
                                                                            &lt;div&gt;
                                                                                &lt;input type=&quot;checkbox&quot; id=&quot;switch37&quot; data-switch=&quot;success&quot; /&gt;
                                                                                &lt;label for=&quot;switch37&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot; class=&quot;mb-0 d-block&quot;&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/td&gt;
                                                                    &lt;/tr&gt;
                                                                &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                        </span>
                                                    </pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body-->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © GNACC - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
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

        <!-- Code Highlight js -->
        <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
        <script src="assets/js/hyper-syntax.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/tables-basic.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:20:03 GMT -->
</html>
