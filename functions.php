<?php


function db()
{
    return  'starter.php';
}

function login($email, $password)
{
    include 'starter.php';


    // extract($_POST);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $passwordc = $password;
    $password = md5($password);
    $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email'");
    $sel2 = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND password = '$password'");
    $sel3 = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND contact = '$passwordc'");


    if (mysqli_num_rows($sel) >= 1) {
        if (mysqli_num_rows($sel2) >= 1) {
            $row = mysqli_fetch_array($sel2);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo 'loginsuccess';
        } elseif (mysqli_num_rows($sel3) >= 1) {
            $row = mysqli_fetch_array($sel3);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo 'loginsuccess';
        } else {
            echo 'Login details not correct';
        }
    } else {
        echo 'loginfailed';
    }
}

function logout()
{
    session_start();
    // session_destroy();
    unset($_SESSION['id']);
    echo '<script>window.location="index.php"</script>';
}

function checker()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>
        alert("You need to login first");
        window.location="index.php"</script>';
    }
}

function members()
{
    include 'starter.php';
    // session_start();
    $id = $_SESSION['id'];
    $d = mysqli_query($conn, "SELECT * FROM members WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}

function confirmuser($id, $confirmation)
{
    include 'starter.php';
    // $id = $_SESSION['id'];
    if ($confirmation == "No") {

        $conf = mysqli_query($conn, "UPDATE members SET confirm ='$confirmation' WHERE id='$id'  ");
        if ($conf) {
            echo 'no';
        } else {
            echo 'Failed to update record . Try again';
        }
    } else {
        $conf = mysqli_query($conn, "UPDATE members SET confirm ='$confirmation' WHERE id='$id'  ");
        if ($conf) {
            echo 'yes';
        } else {
            echo 'Failed to update record . Try again';
        }
    }

    // if ($conf) {
    //     echo 'confirmed';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function enrolluser($id, $enroll)
{
    include 'starter.php';
    // $id = $_SESSION['id'];
    $confn = mysqli_query($conn, "UPDATE members SET enroll ='$enroll' WHERE id='$id'  ");
    if ($confn) {
        echo 'enrolled';
    } else {
        echo 'Failed to update record . Try again';
    }
}

function updateuser($id, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $membership, $challenge, $color, $size, $school, $programme, $year)
{
    // include 'mail.php';

    // require '/PHPMailer/src/Exception.php';
    // require '/PHPMailer/src/PHPMailer.php';
    // require '/PHPMailer/src/SMTP.php';

    // use PHPMailer\PHPMailer\PHPMailer;
    //  use PHPMailer\PHPMailer\SMTP;

    // $m = new Mail();
    include 'yolksms.php';
    include 'sms.php';
    // $sms = new sms();
    // $send = new Yolksms();
    $olddate = $tdate;
    $tdate = date('jS F, Y', strtotime($olddate));

    include 'starter.php';
    // $gg = mysqli_query($conn, "SELECT * FROM members WHERE id = '$id'");
    // $rg = mysqli_fetch_array($gg);
    // $admin = 'New user has registered for ntc programme. name - '.$name.' , contact - '.$contact.'';
    if (mysqli_query($conn, "UPDATE members SET gender = '$gender', email='$email', contact= '$contact', whatsapp='$wnumber', tdate = '$tdate', emergency = '$enumber', gpsAddress = '$address', occupation='$occupation',maritalStatus = '$mstatus', region = '$region', nationality = '$nationality', eduLevel = '$edulevel', counsellingArea = '$area', membership = '$membership', phyChallenge='$challenge', color='$color',size='$size',school='$school',programme='$programme',year='$year', tdate='$tdate'  WHERE id='$id'  ")) {
        echo 'updatesuccess';
        // mail('stephendappah1@gmail.com', 'TUCEE '.$subject, $admin.' Duplicate', $headers);
        // mail('kpin463@gmail.com', 'TUCEE '.$subject, $admin.'Duplicate', $headers);
    } else {
        echo 'Failed to update record . Try again';
    }

    // if ($rg['contact'] == '') {
    //     if (mysqli_query($conn, "UPDATE members SET title='$title', name= '$name', gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed ='$lincesed', nameofschool='$nameofschool', region ='$region', district ='$district', foodpref='$foodpref',  heard ='$heard', tdate='$tdate', confirm='$confirm' WHERE id='$id'  ")) {
    //         echo 'Updated Successfully';
    //         // mail($email, 'TUCEE Institute of Counselling and Technology', '');
    //         $subject = 'NTC REGISTRATION';
    //         $body = '<html> 
    //         <head> 
    //             <title>TUCEE Institute of Counselling and Technology</title> 
    //         </head> 
    //         <body> 
    //             <h4>Registration Successful</h4> 
    //             <b> <span style="color: green;">Congratulations</span>, you are duly registered for the Counselling training. Proceed to make <span style="color: green;">Payment</span> to Confirm your Particiation. Call <span style="color: green;">+233(0)54 1369 429</span> for any assistance. Thanks</b>
    //         </body> 
    //         </html>';
    //         // yolk mailer
    //         // $mym = [$email];
    //         $from = ['Tucee', 'TUCEEHUB@tuceehub.org'];
    //         $headers = 'MIME-Version: 1.0'."\r\n";
    //         $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    //         $headers .= 'From: '.$from[1];
    //         mail($email, 'TUCEE NTC REGISTRATION', $body, $headers);

    //         $send->sms('Tucee hub', $contact, 'Congratulations, you are duly registered for the Counselling training. Proceed to make payment  to confirm your participation  Call 0541 369 429 for any assistance. Thanks');

    //         // $sel = mysqli_query($conn, "SELECT * FROM members WHERE id = '$uid'");
    //         // $row = mysqli_fetch_array($sel);

    //         $sms->sms('Tucee hub', '0208496496,0244996991', $admin);
    //         mail('stephendappah1@gmail.com', 'TUCEE NTC REGISTRATION', $admin, $headers);
    //     // mail('kpin463@gmail.com', 'TUCEE NTC REGISTRATION', $admin, $headers);
    //     // $admin = 'New user has registered for ntc programme. name - '.$name.' , contact - '.$contact.'';
    //     } else {
    //         echo 'Failed to update record . Try again';
    //     }
    // } else {
    //     if (mysqli_query($conn, "UPDATE members SET title='$title', name= '$name', gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed ='$lincesed', nameofschool='$nameofschool', region ='$region', district ='$district', foodpref='$foodpref',  heard ='$heard', tdate='$tdate' WHERE id='$id'  ")) {
    //         echo 'updatesuccess';
    //         // mail('stephendappah1@gmail.com', 'TUCEE '.$subject, $admin.' Duplicate', $headers);
    //     // mail('kpin463@gmail.com', 'TUCEE '.$subject, $admin.'Duplicate', $headers);
    //     } else {
    //         echo 'Failed to update record . Try again';
    //     }
    // }
}

function register($name, $title, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $membership, $challenge, $color, $size, $school, $programme, $year, $heard, $password)
{
    $password = md5($password);
    include 'starter.php';
    // include 'yolksms.php';
    // include 'sms.php';
    // $sms = new sms();
    // $send = new Yolksms();

    $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email'");
    if (mysqli_num_rows($sel) >= 1) {
        echo 'Sorry User account exist';
    } else {






        $filename = $_FILES['passport']["name"];

        $tempname = $_FILES['passport']["tmp_name"];





        if (!isset($_FILES['idcard']['name'])) {

            $filenameid = $_FILES['idcard']["name"];

            $tempnameid = $_FILES['idcard']["tmp_name"];

            $folder = "uploads/" . $filename;
            $folder1 = "uploads/" . $filenameid;







            // $sql = "INSERT INTO members (passport,iDCard) VALUES ('$filename', '$filenameid')";
            // // $sqlid = "INSERT INTO image (idCard) VALUES ('$filenameid')";


            // // Execute query

            // mysqli_query($conn, $sql);

            // Now let's move the uploaded image into the folder: image

            if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempnameid, $folder1)) {

                $dd = date('jS F, Y');
                $end = "N/A";//date('jS F, Y', strtotime('+1 years'));



                $old = $tdate;

                $tdate = date('jS F, Y', strtotime($old));
                $existing = "no";






                $ins = mysqli_query($conn, "INSERT INTO members (title,name,gender,tdate,contact,whatsapp,emergency,gpsAddress,occupation,maritalStatus,region,nationality,passport,eduLevel,counsellingArea,membership,phyChallenge,color,size,school,programme,year,iDCard,heard,email,password,expiry,existing,dateadded) VALUES('$title','$name','$gender','$tdate','$contact','$wnumber','$enumber','$address','$occupation','$mstatus','$region','$nationality','$filename','$edulevel','$area','$membership','$challenge','$color','$size','$school','$programme','$year', '$filenameid', '$heard','$email','$password','$end','$existing','$dd' ) ");

                if ($ins) {
                    $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND password='$password'");
                    $row = mysqli_fetch_array($sel);

                    $year = strval(date('y'));
                    // $gnaccid = $year . "-0" . $row['id'] ;
                    if (intval($row['id']) > 99 && intval($row['id']) < 1000) {
                        $gnaccid = $year . "-0" . $row['id'];
                    } else if (intval($row['id']) < 100) {
                        $gnaccid = $year . "-00" . $row['id'];
                    } else {
                        $gnaccid = $year . "-" . $row['id'];
                    }

                    $idw =  $row['id'];


                    // $sql = "INSERT INTO transactions (uid) VALUES ('$gnaccid')";
                    $sqlid = "UPDATE members SET gnaccid = $gnaccid WHERE id = $idw";


                    //Execute query

                    mysqli_query($conn, $sqlid);
                    session_start();
                    $_SESSION['id'] = $row['id'];

                    echo 'registered';
                } else {


                }
            } else {

                echo "<h3>  Failed to upload image passport!</h3>";
            }
        } else {

            $folder = "uploads/" . $filename;

            // $sql = "INSERT INTO members (passport) VALUES ('$filename')";
            // // $sqlid = "INSERT INTO image (idCard) VALUES ('$filenameid')";


            // // Execute query

            // mysqli_query($conn, $sql);

            // Now let's move the uploaded image into the folder: image

            if (move_uploaded_file($tempname, $folder)) {

                $dd = date('jS F, Y');
                $end = date('jS F, Y', strtotime('+1 years'));
        
        
        
                $old = $tdate;
        
                $tdate = date('jS F, Y', strtotime($old));
                $existing = "no";
        
        
        
        
        
        
                $ins = mysqli_query($conn, "INSERT INTO members (title,name,gender,tdate,contact,whatsapp,emergency,gpsAddress,occupation,maritalStatus,region,nationality,passport,eduLevel,counsellingArea,membership,phyChallenge,color,size,school,programme,year,heard,email,password,expiry,existing,dateadded) VALUES('$title','$name','$gender','$tdate','$contact','$wnumber','$enumber','$address','$occupation','$mstatus','$region','$nationality','$filename','$edulevel','$area','$membership','$challenge','$color','$size','$school','$programme','$year','$heard','$email','$password','$end','$existing','$dd' ) ");
        
                if ($ins) {
                    $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND password='$password'");
                    $row = mysqli_fetch_array($sel);
        
                    $year = strval(date('y'));
                    // $gnaccid = $year . "-0" . $row['id'] ;
                    if (intval($row['id']) > 99 && intval($row['id']) < 1000) {
                        $gnaccid = $year . "-0" . $row['id'];
                    } else if (intval($row['id']) <= 99) {
                        $gnaccid = $year . "-00" . $row['id'];
                    } else {
                        $gnaccid = $year . "-" . $row['id'];
                    }
        
                    $idw =  $row['id'];
        
        
                    // $sql = "INSERT INTO transactions (uid) VALUES ('$gnaccid')";
                    $sqlid = "UPDATE members SET gnaccid = $gnaccid WHERE id = $idw";

                    // $sql = "INSERT INTO members (passport) VALUES ('$filename')";
            // // $sqlid = "INSERT INTO image (idCard) VALUES ('$filenameid')";


            // // Execute query

            // mysqli_query($conn, $sql);
        
        
                    //Execute query
        
                    mysqli_query($conn, $sqlid);
                    session_start();
                    $_SESSION['id'] = $row['id'];
        
                    echo 'registered';
                } else {
                }
            } else {

                echo "<h3>  Failed to upload image id!</h3>";
            }
        }







       


        // if (isset($_POST['submit']) && isset($_FILES[$passport] ) && isset($_FILES[$idcard])) {


        //     echo "<pre>";
        //     print_r($_FILES[$passport]);
        //     print_r($_FILES[$idcard]);
        //     echo "</pre>";

        //     $img_name = $_FILES[$passport]['name'];
        //     $img_size = $_FILES[$passport]['size'];
        //     $tmp_name = $_FILES[$passport]['tmp_name'];
        //     $error = $_FILES[$passport]['error'];


        //     $img_nameid = $_FILES[$idcard]['name'];
        //     $img_sizeid = $_FILES[$idcard]['size'];
        //     $tmp_nameid = $_FILES[$idcard]['tmp_name'];
        //     $errorid = $_FILES[$idcard]['error'];

        //     if ($error === 0 && $errorid === 0) {
        //         if ($img_size > 125000 && $img_sizeid > 125000) {
        //             $em = "Sorry, your file is too large.";
        //             header("Location: index.php?error=$em");
        //         } else {
        //             $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        //             $img_ex_lc = strtolower($img_ex);

        //             $img_exid = pathinfo($img_nameid, PATHINFO_EXTENSION);
        //             $img_ex_lcid = strtolower($img_exid);

        //             $allowed_exs = array("jpg", "jpeg", "png");

        //             if (in_array($img_ex_lc, $allowed_exs)&&in_array($img_ex_lcid, $allowed_exs)) {
        //                 $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        //                 $new_img_nameid = uniqid("IMG-", true) . '.' . $img_ex_lcid;
        //                 $img_upload_path = 'uploads/' . $new_img_name;
        //                 move_uploaded_file($tmp_name, $img_upload_path);
        //                 $img_upload_pathid = 'uploads/' . $new_img_nameid;
        //                 move_uploaded_file($tmp_nameid, $img_upload_pathid);
        //                 $dd = date('jS F, Y');
        //                 $oneYearOn = date('Y-m-d',strtotime(date("Y-m-d", $dd) . " + 365 day"));
        //                 $year = strtok($date, '-');
        //                 $gnaccid = uniqid($year, true);
        //                 $old = $tdate;

        //                 $tdate = date('jS F, Y', strtotime($old));


        //                 $ins = mysqli_query($conn, "INSERT INTO members (title,name,gender,tdate,contact,whatsapp,emergency,gpsAddress,occupation,maritalStatus,region,nationality,passport,eduLevel,counsellingArea,phyChallenge,color,size,student,school,programme,year,iDCard,heard,email,password,gnaccid,expiry,dateadded) VALUES('$title','$name', '$gender', '$tdate', '$contact','$wnumber','$enumber','$address','$occupation','$mstatus','$region','$nationality','$new_img_name','$edulevel','$area','$challenge','$color','$size','$student','$school','$programme','$year','$new_img_nameid ','$heard','$email','$password','$gnaccid','$oneYearOn','$dd' ) ");

        //                 if ($ins) {
        //                     $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND password='$password'");
        //                     $row = mysqli_fetch_array($sel);
        //                     session_start();
        //                     $_SESSION['id'] = $row['id'];

        //                     echo 'registered';
        //                 } else {
        //                 }
        //                 // Insert into Database
        //                 $sql = "INSERT INTO images(image_url) 
        //                     VALUES('$new_img_name')";
        //                 mysqli_query($conn, $sql);
        //                 header("Location: dashboard.php");
        //             } else {
        //                 $em = "You can't upload files of this type";
        //                 header("Location: index.php?error=$em");
        //             }
        //         }
        //     } else {
        //         $em = "unknown error occurred!";
        //         header("Location: index.php?error=$em");
        //     }
        // } else {
        //     header("Location: index.php");
        // }
    }

    // $dd = date('jS F, Y');
    // $old = $tdate;
    // $tdate = date('jS F, Y', strtotime($old));


    // $ins = mysqli_query($conn, "INSERT INTO members (title,name,gender,tdate,contact,whatsapp,emergency,gpsAddress,occupation,maritalStatus,region,nationality,passport,eduLevel,counsellingArea,phyChallenge,color,size,student,school,programme,year,iDCard,heard,email,password,dateadded) VALUES('$title','$name', '$gender', '$tdate', '$contact','$wnumber','$enumber','$address','$occupation','$mstatus','$region','$nationality','$passport','$edulevel','$area','$challenge','$color','$size','$student','$school','$programme','$year','$idcard','$heard','$email','$password','$dd' ) ");

    // if ($ins) {
    //     $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND password='$password'");
    //     $row = mysqli_fetch_array($sel);
    //     session_start();
    //     $_SESSION['id'] = $row['id'];

    //     echo 'registered';
    // $subject = 'NTC REGISTRATION';
    // $admin = 'New user has registered for ntc programme. name - ' . $name . ' , contact - ' . $contact . '';
    // $body = '<html> 
    // <head> 
    //     <title>TUCEE Institute of Counselling and Technology</title> 
    // </head> 
    // <body> 
    //     <h4>Registration Successful</h4> 
    //     <b> <span style="color: green;">Congratulations</span>, you are duly registered for the Counselling training. Proceed to make <span style="color: green;">Payment</span> to Confirm your Participation. Call <span style="color: green;">+233(0)54 1369 429</span> for any assistance. Thanks</b>
    // </body> 
    // </html>';
    // yolk mailer
    // $mym = [$email];
    // $from = ['Tucee', 'TUCEEHUB@tuceehub.org'];
    // $headers = 'MIME-Version: 1.0' . "\r\n";
    // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    // $headers .= 'From: ' . $from[1];
    // mail($email, 'TUCEE NTC REGISTRATION', $body, $headers);

    // $send->sms('Tucee hub', $contact, 'Congratulations, you are duly registered for the Counselling training.Please continue with your Registration. Proceed to make payment  to confirm your participation  Call 0541 369 429 for any assistance. Thanks');

    // $sel = mysqli_query($conn, "SELECT * FROM members WHERE id = '$uid'");
    // $row = mysqli_fetch_array($sel);

    // $sms->sms('Tucee hub', '0208496496,0244996991', $admin);
    // mail('stephendappah1@gmail.com', 'TUCEE NTC REGISTRATION', $admin, $headers);
    // } else {
    //     echo 'Registeration failed';
    // }

}

function payment($uid, $ref, $amount)
{
    include 'starter.php';
    $dateadded = date('jS F,Y');
    $end = date('jS F, Y', strtotime('+1 years'));






    $ins = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$uid','$ref','$amount','$dateadded')");
    $up = mysqli_query($conn, "UPDATE members SET paystatus ='paid', existing = 'yes', expiry = '$end' WHERE id ='$uid'");

    if ($uid == "") {
        $goo = "Empty uid: " . $uid;
        mail('stephendappah1@gmail.com', 'Empty Uid', $goo, "Stedap Cooperation");
    }

    if ($ins || $up) {
        //mail('stephendappah1@gmail.com', 'TUCEE NTC REGISTRATION', "", $headers);
        echo 'donepay';
    } else {
        $fail = mysqli_query($conn, "SELECT name members WHERE id ='$uid'");

        if ($fail) {
            $mess = "Fail to update payment for " . $fail . " ID: " . "$uid";

            mail('stephendappah1@gmail.com', 'Payment Update Failed', $mess, "Stedap Cooperation");
        } else {
            mail('stephendappah1@gmail.com', 'Payment Update Failed', "Failed to update payment", "Stedap Cooperation");
        }
    }
}

function changepass($id, $password, $newpass)
{
    $password = md5($password);
    $newpass = md5($newpass);
    include 'starter.php';
    $check = mysqli_query($conn, "SELECT * FROM members WHERE password = '$password'");
    if (mysqli_num_rows($check) >= 1) {
        $up = mysqli_query($conn, "UPDATE members SET password = '$newpass' WHERE id ='$id'");
        if ($up) {
            echo 'changepasssuccess';
        } else {
            echo 'Failed to change password';
        }
    } else {
        echo 'Incorrect Password';
    }
}


function transactions()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';

    $u = mysqli_query($conn, 'SELECT * FROM members ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');
    $counter = 1;
    while ($row = mysqli_fetch_array($u)) {
        $y = mysqli_query($conn, "SELECT * FROM  transactions WHERE uid = '$id'");


        while ($row2 = mysqli_fetch_array($y)) {

            // echo $id;
            // echo $row2['uid'];
            // echo $row['id'];

            if ($row2['uid'] == $row['id']) {
                if ($row['existing'] == "yes" && $row2['amount'] == 150) {
                    echo '<tr>
                                                                <td>
                                                                    <b>' . $counter . '</b> <br/>
                                                                    
                                                                </td>
                                                                
                                                                <td><b>' . $row['membership'] . ' Counsellor (Renewal)</b></td> 

                                                                <td><b>' . $row2['dateadded'] . '</b> </td>

                                                                <td><b>' . $row2['transid'] . '</b> </td>
                                                                
                                                                ';



                    if (isset($row2['amount'])) {
                        echo '<td><b>₵' . $row2['amount'] . '</b></td>';
                    } else {
                        echo '<td></td>';
                    }

                    if (isset($row2['amount'])) {
                        echo '<td class="text-end"><b>₵' . $row2['amount'] . '</b></td>';
                    } else {
                        echo '<td></td>';
                    }

                    echo '
                                                                
                                                               
    
                                                                </tr>
            ';
                } else if ($row2['amount'] == 150  && $row['membership'] == "Student") {
                    echo '<tr>
                                                                <td>
                                                                    <b>' . $counter . '</b> <br/>
                                                                    
                                                                </td>
                                                                
                                                                <td><b>' . $row['membership'] . ' Counsellor</b></td> 

                                                                <td><b>' . $row2['dateadded'] . '</b> </td>

                                                                <td><b>' . $row2['transid'] . '</b> </td>
                                                                
                                                                ';



                    if (isset($row2['amount'])) {
                        echo '<td><b>₵' . $row2['amount'] . '</b></td>';
                    } else {
                        echo '<td></td>';
                    }

                    if (isset($row2['amount'])) {
                        echo '<td class="text-end"><b>₵' . $row2['amount'] . '</b></td>';
                    } else {
                        echo '<td></td>';
                    }

                    echo '
                                                                
                                                               
    
                                                                </tr>
            ';
                } else {
                    echo '<tr>
                <td>
                <b>' . $counter . '</b> <br/>
                
            </td>
                                                                
                                                                <td><b>' . $row['membership'] . ' Counsellor</b></td>
                                                                <td><b>' . $row2['dateadded'] . '</b> </td>
                                                                <td><b>' . $row2['transid'] . '</b> </td>
                                                                
                                                                ';

                    if (isset($row2['amount'])) {
                        echo '<td ><b>₵' . $row2['amount'] . '</b></td>';
                    } else {
                        echo '<td></td>';
                    }

                    if (isset($row2['amount'])) {
                        echo '<td class="text-end"><b>₵' . $row2['amount'] . '</b></td>';
                    } else {
                        echo '<td></td>';
                    }

                    echo '
                                                                </tr>
            ';
                }
                $counter++;
            }
        }




        // break;


        // code...
    }
}


function transactionstotal()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';

    $u = mysqli_query($conn, 'SELECT * FROM members ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    $amount = 0;
    while ($row = mysqli_fetch_array($u)) {
        $y = mysqli_query($conn, "SELECT * FROM  transactions WHERE uid = '$id'");


        while ($row2 = mysqli_fetch_array($y)) {

            // echo $id;
            // echo $row2['uid'];
            // echo $row['id'];

            if ($row2['uid'] == $row['id']) {

                $amount = $amount + $row2['amount'];
            }
        }
    }

    return $amount;
}

function transactionsdate()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';

    $sel = mysqli_query($conn, "SELECT * FROM  transactions WHERE uid = '$id'");
    while ($row = mysqli_fetch_array($sel)) {
        echo '
        <small class="text-uppercase js-lists-values-date">' . $row['dateadded'] . '</small>
        ';
    }
    // code...
}


function receiptId()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';


    // $oneYearOn = date('Y-m-d', strtotime(date("Y-m-d", $dd) . " + 365 day"));
    $year = strtok("2022", '-');
    $gnaccid = uniqid($year, true);

    $gnaccid = uniqid($year, true);


    echo $gnaccid;


    // code...
}
