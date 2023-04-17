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
                                    <input class="form-control" required="required" type="tel" id="contact" required placeholder="Enter your phone Number" name="contact" pattern="\d{10}" title="error" maxlenght="10">
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
                                    <label for="emailaddress" class="form-label">Hometown<span style="color:red;">*</span></label>
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


                                <!-- <div class="mb-3" id="country">
                                    <label for="example-select" class="form-label">Nationality<span style="color:red;">*</span></label>
                                    <select class="form-select" required="required" id="example-select" name="nationality">
                                        <option selected value="">--Select Nationality--</option>
                                        <option value="Ghanaian">Ghanaian</option>
                                        <option value="Foreigner">Foreigner</option>

                                    </select>
                                </div> -->

                                <div class="mb-3" id="country">
                                <label for="country">Nationality</label><span style="color: red !important; display: inline; float: none;">*</span>      
        
                                <select class="form-select" required="required" id="example-select" name="nationality">
                                        <option selected value="">--Select Nationality--</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
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
                                    <select class="form-select" required="required" id="des-select" name="challenge">
                                        <option selected value="">--Select Option--</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>

                                <div class="mb-3" id = "descrip" style="display:none;">
                                    <label for="emailaddress" class="form-label">Specify the challenge<span style="color:red;">*</span></label>
                                    <input class="form-control" required="required" type="text" id="occupation" required placeholder="Specify your challenge" name="descrip">
                
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