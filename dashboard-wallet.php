<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper_2/modern/dashboard-wallet.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:12 GMT -->
<head>
        <meta charset="utf-8" />
        <title>E-Wallet Dashboard | GNACC - Responsive Bootstrap 5 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">E-Wallet</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">E-Wallet</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-cached me-1"></i>Refresh</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-delete-outline me-1"></i>Remove</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-primary-lighten h3 my-0 text-primary rounded">
                                                                <i class="mdi mdi-currency-btc"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="mt-0 mb-1 font-20">$12,500</h4>
                                                        <p class="mb-0 text-muted"><i class="mdi mdi-arrow-up-bold text-success"></i> 45% This Week</p>
                                                    </div>
                                                </div>
        
                                                <div class="row align-items-end justify-content-between mt-3">
                                                    <div class="col-sm-6">
                                                        <h4 class="mt-0 text-muted fw-semibold mb-1">Rate</h4>
                                                        <p class="text-muted mb-0">1.00 BTC = $48,781.20</p>
                                                        
                                                    </div> <!-- end col -->
        
                                                    <div class="col-sm-5">
                                                        <div class="text-end">
                                                            <div id="currency-btc-chart" data-colors="#727cf5"></div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                            </div> <!-- end card-body -->
                                        </div> <!-- end card -->
                                    </div> <!-- end col -->
        
                                    <div class="col-xl-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-cached me-1"></i>Refresh</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-delete-outline me-1"></i>Remove</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-primary-lighten h3 my-0 text-primary rounded">
                                                                <i class="mdi mdi-currency-cny"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="mt-0 mb-1 font-20">$9,250</h4>
                                                        <p class="mb-0 text-muted"><i class="mdi mdi-arrow-up-bold text-success"></i> 32% This Week</p>
                                                    </div>
                                                </div>
        
                                                <div class="row align-items-end justify-content-between mt-3">
                                                    <div class="col-sm-6">
                                                        <h4 class="mt-0 text-muted fw-semibold mb-1">Rate</h4>
                                                        <p class="text-muted mb-0">1.00 CNY = $0.6</p>
                                                        
                                                    </div> <!-- end col -->
        
                                                    <div class="col-sm-5">
                                                        <div class="text-end">
                                                            <div id="currency-cny-chart" data-colors="#727cf5"></div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                            </div> <!-- end card-body -->
                                        </div> <!-- end card -->
                                    </div> <!-- end col -->
        
                                    <div class="col-xl-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-cached me-1"></i>Refresh</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-delete-outline me-1"></i>Remove</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-primary-lighten h3 my-0 text-primary rounded">
                                                                <i class="mdi mdi-currency-eth"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="mt-0 mb-1 font-20">$12,500</h4>
                                                        <p class="mb-0 text-muted"><i class="mdi mdi-arrow-up-bold text-success"></i> 60% This Week</p>
                                                    </div>
                                                </div>
        
                                                <div class="row align-items-end justify-content-between mt-3">
                                                    <div class="col-sm-6">
                                                        <h4 class="mt-0 text-muted fw-semibold mb-1">Rate</h4>
                                                        <p class="text-muted mb-0">1.00 ETH = $3,783.68</p>
                                                        
                                                    </div> <!-- end col -->
        
                                                    <div class="col-sm-5">
                                                        <div class="text-end">
                                                            <div id="currency-eth-chart" data-colors="#727cf5"></div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                            </div> <!-- end card-body -->
                                        </div> <!-- end card -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-sm-flex justify-content-sm-between">
                                                <h4 class="header-title mb-0">Balance Status</h4>

                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a href="#day-status" data-bs-toggle="tab" aria-expanded="false" class="nav-link py-1 active">
                                                            <span class="">Day</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a href="#week-status" data-bs-toggle="tab" aria-expanded="false" class="nav-link py-1">
                                                            <span class="">Week</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a href="#month-status" data-bs-toggle="tab" aria-expanded="false" class="nav-link py-1">
                                                            <span class="">Month</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a href="#year-status" data-bs-toggle="tab" aria-expanded="false" class="nav-link py-1">
                                                            <span class="">Year</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="day-status" role="tabpanel" aria-labelledby="day-status-tab">
                                                        <div dir="ltr">
                                                            <div id="day-balance-chart" class="apex-charts" data-colors="#10c469"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="week-status" role="tabpanel" aria-labelledby="week-status-tab">
                                                        <div dir="ltr">
                                                            <div id="week-balance-chart" class="apex-charts" data-colors="#10c469"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="month-status" role="tabpanel" aria-labelledby="month-status-tab">
                                                        <div dir="ltr">
                                                            <div id="month-balance-chart" class="apex-charts" data-colors="#10c469"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="year-status" role="tabpanel" aria-labelledby="year-status-tab">
                                                        <div dir="ltr">
                                                            <div id="year-balance-chart" class="apex-charts" data-colors="#10c469"></div>
                                                        </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-xxl-3">
                                <div class="row">
                                    <div class="col-md-6 col-xxl-12">
                                        <div class="card bg-primary card-bg-img" style="background-image: url(assets/images/bg-pattern.png);">
                                            <div class="card-body">
                                                <span class="float-end text-white-50 display-5 mt-n1"><i class="mdi mdi-contactless-payment"></i></span>
                                                <h4 class="text-white">Dominic Keller</h4>
        
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-3 text-white font-12">
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                    </div>
                                                    <div class="col-3 text-white font-12">
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                    </div>
                                                    <div class="col-3 text-white font-12">
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                        <i class="mdi mdi-circle"></i>
                                                    </div>
                                                    <div class="col-3 text-white font-16 fw-bold">
                                                        <span>1</span>
                                                        <span>2</span>
                                                        <span>3</span>
                                                        <span>4</span>
                                                    </div>
                                                </div>
        
                                                <div class="row mt-4">
                                                    <div class="col-4">
                                                        <p class="text-white-50 font-16 mb-1">Expiry Date</p>
                                                        <h4 class="text-white my-0">10/26</h4>
                                                    </div>
        
                                                    <div class="col-4">
                                                        <p class="text-white-50 font-16 mb-1">CCV</p>
                                                        <h4 class="text-white my-0">000</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="text-end">
                                                            <span class="avatar-sm bg-white opacity-25 rounded-circle d-inline-block"></span>
                                                            <span class="avatar-sm bg-white opacity-25 rounded-circle d-inline-block ms-n3"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xxl-12">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h4 class="header-title">My Watchlist</h4>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-cached me-1"></i>Refresh</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-delete-outline me-1"></i>Remove</a>
                                                    </div>
                                                </div>
                                            </div>
        
                                            
                                            <div class="card-body pt-0 mb-2" data-simplebar style="max-height: 319px;">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-warning-lighten text-warning border border-warning rounded-circle h3 my-0">
                                                                <i class="mdi mdi-currency-btc"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h4 class="mt-0 mb-1 font-16 fw-semibold">Bitcoin (BTC)</h4>
                                                        <p class="mb-0 text-muted">$48,665.80</p>
                                                    </div>
                                                    <p class="mb-0 text-success"><i class="mdi mdi-trending-up me-1"></i>10%</p>
                                                </div>
    
                                                <hr>
    
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-success-lighten text-success border border-success rounded-circle h3 my-0">
                                                                <i class="mdi mdi-currency-ngn"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h4 class="mt-0 mb-1 font-16 fw-semibold">Nigerian naira (NGN)</h4>
                                                        <p class="mb-0 text-muted">$0.0024</p>
                                                    </div>
                                                    <p class="mb-0 text-danger"><i class="mdi mdi-trending-down me-1"></i>12%</p>
                                                </div>
    
                                                <hr>
    
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-danger-lighten text-danger border border-danger rounded-circle h3 my-0">
                                                                <i class="mdi mdi-currency-gbp"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h4 class="mt-0 mb-1 font-16 fw-semibold">Pound sterling (GBP)</h4>
                                                        <p class="mb-0 text-muted">$1.33</p>
                                                    </div>
                                                    <p class="mb-0 text-success"><i class="mdi mdi-trending-up me-1"></i>15%</p>
                                                </div>
    
                                                <hr>
    
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-primary-lighten text-primary border border-primary rounded-circle h3 my-0">
                                                                <i class="mdi mdi-currency-ils"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h4 class="mt-0 mb-1 font-16 fw-semibold">Israeli shekels (ILS)</h4>
                                                        <p class="mb-0 text-muted">$0.32</p>
                                                    </div>
                                                    <p class="mb-0 text-success"><i class="mdi mdi-trending-up me-1"></i>11%</p>
                                                </div>
    
                                                <hr>
    
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-info-lighten text-info border border-info rounded-circle h3 my-0">
                                                                <i class="mdi mdi-currency-kzt"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h4 class="mt-0 mb-1 font-16 fw-semibold">Kazakhstani tenge (KZT)</h4>
                                                        <p class="mb-0 text-muted">$0.0023</p>
                                                    </div>
                                                    <p class="mb-0 text-danger"><i class="mdi mdi-trending-down me-1"></i>10%</p>
                                                </div>
    
                                                <hr>
    
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm rounded">
                                                            <span class="avatar-title bg-secondary-lighten text-secondary border border-secondary rounded-circle h3 my-0">
                                                                <i class="mdi mdi-currency-rub"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h4 class="mt-0 mb-1 font-16 fw-semibold">Russian ruble (RUB)</h4>
                                                        <p class="mb-0 text-muted">$0.014</p>
                                                    </div>
                                                    <p class="mb-0 text-success"><i class="mdi mdi-trending-up me-1"></i>18%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6 col-xxl-3">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="header-title">Money History</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-cached me-1"></i>Refresh</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-delete-outline me-1"></i>Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body pt-0">
                                        <div class="border border-light p-3 rounded mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="font-18 mb-1">Income</p>
                                                    <h3 class="text-primary my-0">$2,76,548</h3>
                                                </div>  
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-primary rounded-circle h3 my-0">
                                                        <i class="mdi mdi-arrow-up-bold-outline"></i>
                                                    </span>
                                                </div>                                      
                                            </div>
                                        </div>

                                        <div class="border border-light p-3 rounded mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="font-18 mb-1">Expenses</p>
                                                    <h3 class="text-danger my-0">$50,216</h3>
                                                </div>  
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-danger rounded-circle h3 my-0">
                                                        <i class="mdi mdi-arrow-down-bold-outline"></i>
                                                    </span>
                                                </div>                                      
                                            </div>
                                        </div>

                                        <div class="border border-light p-3 rounded">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="font-18 mb-1">Transfar</p>
                                                    <h3 class="text-success my-0">$98,100</h3>
                                                </div>  
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-success rounded-circle h3 my-0">
                                                        <i class="mdi mdi-swap-horizontal"></i>
                                                    </span>
                                                </div>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xxl-3">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="header-title mb-0">Merchant list</h4>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light">
                                            <i class="mdi mdi-plus"></i>
                                        </a>
                                    </div>

                                    <div class="card-body py-0 mb-2" data-simplebar style="max-height: 388px;">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm rounded">
                                                    <span class="avatar-title bg-transparent border border-light text-danger rounded">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dribbble" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8zm5.284 3.688a6.802 6.802 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A6.95 6.95 0 0 1 8 1.18zm-2.907.642A43.123 43.123 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.865 6.865 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.817 6.817 0 0 1-1.752-4.564zM8 14.837a6.785 6.785 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.246 28.246 0 0 1 1.457 5.18A6.722 6.722 0 0 1 8 14.837zm3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.774 6.774 0 0 1-2.924 4.573z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="h4 my-0 fw-semibold text-secondary">Dribbble <i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
                                            </div>
                                            <a href="javascript:void(0);" class="font-16 text-muted"><i class="uil uil-angle-right-b"></i></a>
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm rounded">
                                                    <span class="avatar-title bg-transparent border border-light text-info rounded h3 my-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                                                            <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="h4 my-0 fw-semibold text-secondary">Behance <i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
                                            </div>
                                            <a href="javascript:void(0);" class="font-16 text-muted"><i class="uil uil-angle-right-b"></i></a>
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm rounded">
                                                    <span class="avatar-title bg-transparent border border-light text-primary rounded h3 my-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="h4 my-0 fw-semibold text-secondary">Facebook <i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
                                            </div>
                                            <a href="javascript:void(0);" class="font-16 text-muted"><i class="uil uil-angle-right-b"></i></a>
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm rounded">
                                                    <span class="avatar-title bg-transparent border border-light text-danger rounded h3 my-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="h4 my-0 fw-semibold text-secondary">Instagram <i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
                                            </div>
                                            <a href="javascript:void(0);" class="font-16 text-muted"><i class="uil uil-angle-right-b"></i></a>
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm rounded">
                                                    <span class="avatar-title bg-transparent border border-light text-dark rounded h3 my-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="h4 my-0 fw-semibold text-secondary">Github <i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
                                            </div>
                                            <a href="javascript:void(0);" class="font-16 text-muted"><i class="uil uil-angle-right-b"></i></a>
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm rounded">
                                                    <span class="avatar-title bg-transparent border border-light text-success rounded h3 my-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="h4 my-0 fw-semibold text-secondary">Google <i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
                                            </div>
                                            <a href="javascript:void(0);" class="font-16 text-muted"><i class="uil uil-angle-right-b"></i></a>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm rounded">
                                                    <span class="avatar-title bg-transparent border border-light text-danger rounded h3 my-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                                                            <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="h4 my-0 fw-semibold text-secondary">Pinterest <i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
                                            </div>
                                            <a href="javascript:void(0);" class="font-16 text-muted"><i class="uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="header-title mb-0">Transaction List</h4>
                                        <div>
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected>Today</option>
                                                <option value="1">Yesterday</option>
                                                <option value="2">Tomorrow</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col" class="text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="assets/images/users/avatar-1.jpg" alt="Avtar image" width="33">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Adam Baldwin
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><i class="uil uil-calender me-1"></i>Jan 01, 2022</td>
                                                        <td>
                                                            <span class="badge bg-success-lighten text-success">Incoming</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-success fw-semibold">+ $2,586.60</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Avtar image" width="33">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Peter Wallace
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><i class="uil uil-calender me-1"></i>Jan 18, 2022</td>
                                                        <td>
                                                            <span class="badge bg-danger-lighten text-danger">Outgoing</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-danger fw-semibold">- $1,250.48</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="assets/images/users/avatar-3.jpg" alt="Avtar image" width="33">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Jacob Dunn
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><i class="uil uil-calender me-1"></i>Feb 05, 2022</td>
                                                        <td>
                                                            <span class="badge bg-success-lighten text-success">Incoming</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-success fw-semibold">+ $18,400.00</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="assets/images/users/avatar-4.jpg" alt="Avtar image" width="33">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Terry Adams
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><i class="uil uil-calender me-1"></i>Feb 13, 2022</td>
                                                        <td>
                                                            <span class="badge bg-warning-lighten text-warning">In Progress</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-warning fw-semibold">+ $9,646.20</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Avtar image" width="33">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Jason Stovall
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><i class="uil uil-calender me-1"></i>Mar 02, 2022</td>
                                                        <td>
                                                            <span class="badge bg-danger-lighten text-danger">Outgoing</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-danger fw-semibold">+ $10,285.80</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
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

        <!-- Apex Chart js -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

        <!-- Apex Chart Candlestick Demo js -->
        <script src="../../../apexcharts.com/samples/assets/stock-prices.js"></script>
        <script src="../../../apexcharts.com/samples/assets/series1000.js"></script>
        <script src="../../../apexcharts.com/samples/assets/github-data.js"></script>
        <script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>

        <!-- Wallet Dashboard js -->
        <script src="assets/js/pages/demo.dashboard-wallet.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/dashboard-wallet.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:20 GMT -->
</html>
