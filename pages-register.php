<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:19:09 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Register | GNACC </title>
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
                        <!-- Logo-->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="dashboard.php">
                                <span><img src="assets/images/logo.png" alt="logo" height="40"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 fw-bold">GNACC Membership Registration</h4>
                                <p class="text-muted mb-4">Don't have an account? Create your account, it takes a few minutes </p>
                            </div>

                            <form action="dashboard.php" novalidate method="get" class="register" enctype='multipart/form-data'>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Title</label>
                                    <select class="form-select" id="example-select" name="title" required="required">
                                        <option selected value = "">--Select title--</option>
                                        <option>Rev.</option>
                                        <option>Mr.</option>
                                        <option>Mrs.</option>
                                        <option>Miss</option>
                                        <option>Dr.</option>
                                        <option>Sis.</option>
                                        <option>Fr.</option>
                                        <option>Ps.</option>
                                        <option>Others</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="fullname" class="form-label">First Name<span style="color:red;">*</span></label>
                                    <input class="form-control" required="required" type="text" id="fullname" placeholder="Enter your First Name" required name="fname">
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Last Name<span style="color:red;">*</span></label>
                                    <input class="form-control" required="required" type="text" id="fullname" placeholder="Enter your Last Name" required name="lname">
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Other Names</label>
                                    <input class="form-control" required="required" type="text" id="fullname" placeholder="Other Name" required name="oname">
                                </div>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Gender<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="gender">
                                        <option selected value="">--Select Gender--</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Preffered not to say</option>


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Marital Status<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="mstatus">
                                        <option selected value="">--Select Marital Status</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Divorced</option>
                                        <option>Widow</option>
                                        <option>Widower</option>
                                        <option>Rev. Sis</option>
                                        <option>Rev. Brother</option>
                                        <option>Rev. Father</option>


                                    </select>
                                </div>
                                <div class="mb-3">
                                    
                                    <label for="example-date" class="form-label">Date of Birth<span style="color:red;">*</span></label>
                                    <input class="form-control" required="required" id="example-date"  type="date"  max="<?php echo date("Y")-20; ?>-<?php echo date("m"); ?>-<?php echo date("d"); ?>" name="tdate">
                                    <small><span style="color:green;">Minimum age required to join GNACC is 20 years</span></small>
                                </div>



                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Contact Number<span style="color:red;">*</span></label>
                                    <input class="form-control" required="required" type="text" id="contact" required placeholder="Enter your phone Number" name="contact">
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">WhatsApp Number<span style="color:red;">*</span></label>
                                    <input class="form-control" required="required" type="text" id="whatsapp" required placeholder="Enter your WhatsApp Number" name="wnumber">
                                </div>

                                <div class="mb-3">
                                    <label for="Emergency Contact Number" class="form-label">Emergency Contact Number</label>
                                    <input class="form-control" required="required" type="text" id="emergency" required placeholder="Enter your Emergency contact Number" name="enumber">
                                </div>

                                <div class="mb-3">
                                    <label for="Emergency Contact Number" class="form-label">Residential Digital Address<span style="color:red;">*</span></label>
                                    <input class="form-control" required="required" type="text" id="emergency" required placeholder="Enter your GPS Address" name="address">
                                </div>

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Occupation<span style="color:red;">*</span></label>
                                    <input class="form-control" required="required" type="text" id="occupation" required placeholder="Enter your Occupation" name="occupation">
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">GNACC No.</label>
                                    <input class="form-control" type="text" id="occupation" required placeholder="GNACC No." name="gnaccno">

                                </div>

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">GPC No.</label>
                                    <input class="form-control"  type="text" id="occupation" required placeholder="GPC No." name="gpcno">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Workplace</label>
                                    <input class="form-control" required="required" type="text" id="occupation" required placeholder="Workplace" name="workplace">
                                    
                                </div>
                                
                               

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Region of Residence<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="regionofresidence">
                                        <option selected value="">--Select Region--
                                        </option>

                                        <option value="Greater Accra">Greater Accra</option>
                                        <option value="Ashanti Region">Ashanti Region</option>
                                        <option value="Ahafo Region">Ahafo Region</option>
                                        <option value="Bono Region">Bono Region</option>
                                        <option value="Bono East Region">Bono East Region</option>
                                        <option value="Central Region">Central Region</option>
                                        <option value="Eastern Region">Eastern Region</option>
                                        <option value="Northern Region">Northern Region</option>
                                        <option value="North East Region">North East Region</option>
                                        <option value="Oti Region">Oti Region</option>
                                        <option value="Savannah Region">Savannah Region</option>
                                        <option value="Upper East Region">Upper East Region</option>
                                        <option value="Upper West Region">Upper West Region</option>
                                        <option value="Volta Region">Volta Region</option>
                                        <option value="Western Region">Western Region</option>
                                        <option value="Western North Region">Western North Region</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Hometown</label>
                                    <input class="form-control" required="required" type="text" id="occupation" required placeholder="Your Hometown" name="hometown">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Region of Hometown<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="region">
                                        <option selected value="">--Select Region--
                                        </option>

                                        <option value="Greater Accra">Greater Accra</option>
                                        <option value="Ashanti Region">Ashanti Region</option>
                                        <option value="Ahafo Region">Ahafo Region</option>
                                        <option value="Bono Region">Bono Region</option>
                                        <option value="Bono East Region">Bono East Region</option>
                                        <option value="Central Region">Central Region</option>
                                        <option value="Eastern Region">Eastern Region</option>
                                        <option value="Northern Region">Northern Region</option>
                                        <option value="North East Region">North East Region</option>
                                        <option value="Oti Region">Oti Region</option>
                                        <option value="Savannah Region">Savannah Region</option>
                                        <option value="Upper East Region">Upper East Region</option>
                                        <option value="Upper West Region">Upper West Region</option>
                                        <option value="Volta Region">Volta Region</option>
                                        <option value="Western Region">Western Region</option>
                                        <option value="Western North Region">Western North Region</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Nationality<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="nationality">
                                        <option selected value="">--Select Nationality--</option>
                                        <option value="Ghanaian">Ghanaian</option>
                                        <option value="Foreigner">Foreigner</option>

                                    </select>
                                </div>


                                
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Counsellor Membership Type<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="student-select" name="membership">
                                        <option selected value="">--Select Membership type--</option>
                                        <option value="Certificated">Certificated Counsellor</option>
                                        <option value="Associate">Associate Counsellor</option>


                                        <option value="Student">Student - Counsellor</option>



                                    </select>
                                    <div id="cer" style="display: none;">
                                <small>Certificated Counsellor</small>
                                </div>
                                <div id="ass" style="display: none;">
                                <small>Associate Counsellor</small>
                                </div>
                                <div id="stu" style="display: none;">
                                <small>Student - Counsellor</small>
                                </div>
                                    
                                </div>





                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">Passport Size Picture<span style="color:red;">*</span></label>
                                    <input type="file" required="required" id="example-fileinput" class="form-control" name="passport">
                                </div>

                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">National ID / Ghana Card<span style="color:red;">*</span></label>
                                    <input type="file" required="required" id="example-fileinput" class="form-control" name="ghanacard">
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Educational Level<span style="color:red;">*</span></label>
                                    <select class="form-select"  required="required" id="example-select" name="edulevel">
                                        <option selected value="">--Select Education Level--</option>
                                        <option>Senior High Certificate</option>
                                        <option>Diploma Certificate</option>
                                        <option value="Bachelors Degree">Bachelor's Degree</option>
                                        <option value="Masters Degree">Master's Degree</option>
                                        <option>Doctorate Degree</option>
                                        <option>Others</option>

                                    </select>
                                </div>



                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Specialised Area Of Counselling<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="area">
                                        <option selected value="">--Select Specialised Counselling Area--</option>
                                        <option>Marriage and Family</option>
                                        <option>Guidance and Career</option>


                                        <option>Rehabilitaion</option>
                                        <option>Mental Health</option>
                                        <option>Substance Abuse</option>


                                        <option>School and Careets</option>
                                        <option>Others</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Do you have any Physical Challenge(s)?<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="challenge">
                                        <option selected value="">--Select Option--</option>
                                        <option>Yes</option>
                                        <option>No</option>


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Religious Affliation<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="religion">
                                        <option selected value="">--Select Religion--</option>
                                        <option>Christianity</option>
                                        <option>Islam</option>
                                        <!-- <option>Traditionalist</option> -->
                                        <option>Others</option>
                                    </select>
                                </div>
                          

                                <div id="student" style="display: none;">
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Name of Institution / School<span style="color:red;">*</span></label>
                                        <input class="form-control" required="required" type="text" id="school" required placeholder="Enter the Name of your Institution" name="school">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Programme Of Study<span style="color:red;">*</span></label>
                                        <input class="form-control" required="required" type="text" id="programme" required placeholder="Enter your programme of study" name="programme">
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="datepicker-preview">
                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative" id="datepicker6">
                                                    <label class="form-label">Year Of Entry<span style="color:red;">*</span></label>
                                                    <input type="text" required="required" class="form-control" data-provide="datepicker" data-date-min-view-mode="2" data-date-container="#datepicker6" name="year">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Upload Student ID Card<span style="color:red;">*</span></label>
                                        <input type="file" required="required" id="example-fileinput" class="form-control" name="idcard">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">How did you hear/Know of this association</label>
                                    <select class="form-select" required="required" id="example-select" name="heard">
                                        <option selected value="">--Select Option--</option>
                                        <option>GNACC Website</option>
                                        <option>Facebook</option>
                                        <option>WhatsApp</option>
                                        <option>Instagram</option>
                                        <option>Friend</option>
                                        <option>News Papers</option>
                                        <option>TUCEE Institute of Counselling and Technology Website</option>


                                    </select>
                                </div>









                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address<span style="color:red;">*</span></label>
                                    <input type="email" required="required" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                    <small id="emailHelp" class="form-text text-muted">Please make sure you remember the password to the email you are providing</small>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password<span style="color:red;">*</span></label>
                                    <div class="input-group input-group-merge">
                                        <input type="password"  required="required"id="password" class="form-control" placeholder="Enter your password" name="password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Confirm Password<span style="color:red;">*</span></label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" required="required" id="password" class="form-control" placeholder="Enter your password" name="repass">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                        <label class="form-check-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div> -->

                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary" type="submit"> Register </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have account? <a href="index.php" class="text-muted ms-1"><b>Log In</b></a></p>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

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

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>

    <script src="processor.js"></script>
    <script src="assets/js/view.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:19:09 GMT -->

</html>