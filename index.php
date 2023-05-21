<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:19:09 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Log In | GNACC </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon2.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- sweetalert -->
    <link type="text/css" href="assets/css/sweetalert2.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
</head>

<body class="authentication-bg">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="#">
                                <span><img src="assets/images/logo.png" alt="logo" height="80"></span>
                                
                            </a>
                        </div>

                        <div class="card-body p-4">
                        <p class="text-muted">We maintain physical, electronic, and procedural safegaurds to protect the confidentiality and security of your personal user data and other information.</p>

                        <div class="mb-3 mb-0 text-center">
                                    <a href="pages-register.php" class="btn btn-primary" type="submit"> Register </a>
                                </div>

                            <!-- <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                <p class="text-muted mb-4">Enter your email address and password to Login.</p>
                            </div> -->

                            <form action="" novalidate method="post" class="login">

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email">
                                </div>

                                <div class="mb-3">
                                    <!-- <a href="pages-recoverpw.php" class="text-muted float-end"><small>Forgot your password?</small></a> -->
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="mb-3 mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div> -->

                                <div class="mb-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->

                    </div>

                    
                    
                    <!-- end card -->

                    <div class="row mt-1">
                        <div class="col-12 text-center">
                        <p class="text-muted mb-0" id="tooltip-container"><strong></strong>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Twitter"><i class="mdi mdi-twitter"></i></a>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="#" title="Skype"><i class="mdi mdi-skype"></i></a>
                                            </p>
                            <!-- <p class="text-muted">Don't have an account? <a href="pages-register.php" class="text-muted ms-1"><b>Sign Up</b></a></p> -->
                        </div> <!-- end col -->


                    </div>

                    <div class="row mt-1">
                        <div class="col-12 text-center">
                            
                        <a href="tel:+">HQ Front Desk</a> &nbsp; | &nbsp; <a href="tel:+">Zonal Head</a>
        <!-- <a href="tel:+">Zonal Head</a> -->

                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        
        2021 - <script>
            document.write(new Date().getFullYear())
        </script> © GNACC
    </footer>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>

    <script src="processor.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:19:09 GMT -->

</html>