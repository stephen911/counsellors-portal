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



function resetpass($email)
{
    include 'starter.php';

    if($_POST['email'])
{
    // include "db.php";
        // include 'mail.php';

    // require '/PHPMailer/src/Exception.php';
    // require '/PHPMailer/src/PHPMailer.php';
    // require '/PHPMailer/src/SMTP.php';

    // use PHPMailer\PHPMailer\PHPMailer;
    //  use PHPMailer\PHPMailer\SMTP;

    // $m = new Mail();
    
     
    $emailId = $_POST['email'];
 
    $result = mysqli_query($conn,"SELECT * FROM members WHERE email='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($conn,"UPDATE members set reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
    $link = "<a href='https://gnaccportal.com/reset-page.php?key=".$emailId."&token=".$token."'>Password reset link</a>";
 
    // require_once('phpmail/PHPMailerAutoload.php');
 
    // $mail = new PHPMailer();
 
    // $mail->CharSet =  "utf-8";
    // $mail->IsSMTP();
    // // enable SMTP authentication
    // $mail->SMTPAuth = true;                  
    // // GMAIL username
    // $mail->Username = "your_email_id@gmail.com";
    // // GMAIL password
    // $mail->Password = "your_gmail_password";
    // $mail->SMTPSecure = "ssl";  
    // // sets GMAIL as the SMTP server
    // $mail->Host = "smtp.gmail.com";
    // // set the SMTP port for the GMAIL server
    // $mail->Port = "465";
    // $mail->From='your_gmail_id@gmail.com';
    // $mail->FromName='your_name';
    // $mail->AddAddress('reciever_email_id', 'reciever_name');
    // $mail->Subject  =  'Reset Password';
    // $mail->IsHTML(true);
    // $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    $name = $row['name'];
    $subject = 'Reset Password';
            $body = '<!DOCTYPE html>
            <html>
            
            <head>
                <meta charset="UTF-8">
                <title>Reset Your Password</title>
            </head>
            
            <body>
                <div style="font-family: Arial, sans-serif; padding: 20px;">
                    <h2>Reset Your Password</h2>
                    <p>Dear '.$name.',</p>
                    <p>We have received a request to reset the password for your account. To proceed with the password reset process, please follow the instructions below:</p>
                    <ol>
                        <li>Click on the following link to access the password reset page: '.$link.'</li>
                        <li>Once you have clicked on the link, you will be directed to a secure page where you can enter your new password.</li>
                        <li>Choose a strong password that contains a combination of uppercase and lowercase letters, numbers, and special characters. It is important to select a unique password that you have not used for any other accounts.</li>
                    </ol>
                    <p>If you did not initiate this password reset request, please ignore this email and take the necessary steps to secure your account.</p>
                    <p>If you have any questions or need further assistance, please do not hesitate to contact our support team at <a href="mailto:info@gnaccportal.com">info@gnaccportal.com</a>. We are here to help you.</p>
                    <br>
                    <p>Best regards,</p>
                    <p>GNACC</p>
                    
                </div>
            </body>
            
            </html>
            ';
            // yolk mailer
            // $mym = [$email];
            $from = ['GNACC', 'GNACC@gnaccportal.com'];
            $headers = 'MIME-Version: 1.0'."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            $headers .= 'From: '.$from[1];
            // mail($email, 'TUCEE '.$subject, $body, $headers);
    if(mail($email, 'GNACC '.$subject, $body, $headers))
    {
      echo "resetsent";
    }


    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address";
  }
}


}


// cheking to see if user qualify to reset password

function CheckIfcanresetpassword($data){

    include 'starter.php';

    // 
    if(!isset($data['key']) || !isset($data['token']) ){

        echo ' <script>
        swal({
            title: "Attention!",
            text: "No key or token found",
            type: "warning",
            padding: "2em",
          });


          setTimeout(function(){
            window.location="index.php";
          },1000);  
        </script>';
    }
    else{

        checkIftokenforuser($data);

    }

    


}

// check if token  is  for the right user 

function checkIftokenforuser($data){

    include 'starter.php';
    $key  = $data['key'];
    $token = $data['token'];
    $query = mysqli_query($conn, "SELECT * FROM members WHERE email='$key' AND reset_link_token= '$token'");
    $row = mysqli_fetch_array($query);
    $exp = $row['exp_date'];
    if(mysqli_num_rows($query) > 0){


        // checking if  token is expired
        if($exp < date('Y-m-d H:i:s')){

            echo '<script>
            swal({
                title: "Attention!",
                text: : "Token Expired",
                type: "warning",
                padding: "2em",
              });
    
    
              setTimeout(function(){
                window.location="index.php";
              },1000);  
            </script>';
        }

    }
        else{
            echo '<script>
            swal({
                title: "Attention!",
                text: : "Invalid Key",
                type: "warning",
                padding: "2em",
              });
    
    
              setTimeout(function(){
                window.location="index.php";
              },1000);  
            </script>';
        }
        

    


}


function updatepassword($password){
    
if(isset($_POST['password']) && $_POST['reset_link_token'] && $_POST['email'])
{
include "starter.php";
$emailId = $_POST['email'];
$token = $_POST['reset_link_token'];
$password = md5($_POST['password']);
$query = mysqli_query($conn,"SELECT * FROM members WHERE `reset_link_token`='".$token."' and `email`='".$emailId."'");
$row = mysqli_num_rows($query);
if($row){
mysqli_query($conn,"UPDATE users set  password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE email='" . $emailId . "'");
echo '<p>Congratulations! Your password has been updated successfully.</p>';
}else{
   echo "<p>Something goes wrong. Please try again</p>";
}
}


}







function ureset($password,$email){
    

    include "starter.php";

    // die($email);
    $password = md5($password);
    $expFormat = mktime(
        date("H"), date("i"), date("s"), date("m") ,date("d")-1, date("Y")
        );
    
       $expDate = date("Y-m-d H:i:s",$expFormat);
    
       $token = rand(100, 9999);
    $query = mysqli_query($conn, "UPDATE members set  password='$password', reset_link_token='$token', exp_date='$expDate' WHERE email='$email'");
    
    if($query){
        echo 'changepasssuccess';
    }

}



function checker()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>
        swal({
            title: "Attention!",
            text: "You are not logged in",
            type: "warning",
            padding: "2em",
          });


          setTimeout(function(){
            window.location="index.php";
          },1000);  
        </script>';
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

function updateuser($id, $contact, $wnumber, $enumber, $address, $occupation, $mstatus, $edulevel, $area, $challenge,)
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
    // $olddate = $tdate;
    // $tdate = date('jS F, Y', strtotime($olddate));

    include 'starter.php';
    // $gg = mysqli_query($conn, "SELECT * FROM members WHERE id = '$id'");
    // $rg = mysqli_fetch_array($gg);
    // $admin = 'New user has registered for ntc programme. name - '.$name.' , contact - '.$contact.'';
    // if (mysqli_query($conn, "UPDATE members SET gender = '$gender', email='$email', contact= '$contact', whatsapp='$wnumber', tdate = '$tdate', emergency = '$enumber', gpsAddress = '$address', occupation='$occupation',maritalStatus = '$mstatus', region = '$region', nationality = '$nationality', eduLevel = '$edulevel', counsellingArea = '$area', membership = '$membership', phyChallenge='$challenge', color='$color',size='$size',school='$school',programme='$programme',year='$year', tdate='$tdate'  WHERE id='$id'  ")) {

        if (mysqli_query($conn, "UPDATE members SET contact= '$contact', whatsapp='$wnumber', emergency = '$enumber', gpsAddress = '$address', occupation='$occupation',maritalStatus = '$mstatus',  eduLevel = '$edulevel', counsellingArea = '$area', phyChallenge='$challenge'  WHERE id='$id'  ")) {

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

function register($name, $title, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $gnaccno, $gpcno, $workplace, $hometown, $religion, $regionofresidence, $nationality, $edulevel, $area, $membership, $challenge, $school, $programme, $year, $heard, $password, $descrip) 
{
    include 'starter.php';
    $password = md5($password);
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

        
        $filenamegh = $_FILES['ghanacard']["name"];

        $tempnamegh = $_FILES['ghanacard']["tmp_name"];


        $filenameid = $_FILES['idcard']["name"];

        $tempnameid = $_FILES['idcard']["tmp_name"];







        if (!empty($_FILES['idcard']['name'])) {

            // $filenameid = $_FILES['idcard']["name"];

            // $tempnameid = $_FILES['idcard']["tmp_name"];



            $folder = "uploads/" . $filename;
            $folder1 = "uploadid/" . $filenameid;
            $folder2 = "uploadgh/" . $filenamegh;



            if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempnameid, $folder1) &&  move_uploaded_file($tempnamegh, $folder2)) {

                $dd = date('jS F, Y');
                $end = "N/A";//date('jS F, Y', strtotime('+1 years'));



                $old = $tdate;

                $tdate = date('jS F, Y', strtotime($old));
                $existing = "no";



                if($regionofresidence == "Greater Accra" || $regionofresidence == "Eastern Region" || $regionofresidence == "Volta Region" || $regionofresidence == "Oti Region" ){
                    $zone = "VEGA";

                }else if ($regionofresidence == "North East Region" ||$regionofresidence == "Northern Region" || $regionofresidence == "Upper East Region" || $regionofresidence == "Upper West Region"|| $regionofresidence == "Savannah Region" ){
                    $zone = "NUEW";


                }else if($regionofresidence == "Bono East Region" || $regionofresidence == "Bono Region"  || $regionofresidence == "Ahafo Region"  || $regionofresidence == "Ashanti Region"){
                    $zone = "BAASH";


                }else if($regionofresidence == "Western Region" || $regionofresidence == "Western North Region" || $regionofresidence == "Central Region"){
                    $zone = "WESTRAL";

                }

                    
                    




             

                $ins = mysqli_query($conn, "INSERT INTO members (title,name,gender,tdate,contact,whatsapp,emergency,gpsAddress,occupation,maritalStatus,region,nationality,passport,eduLevel,counsellingArea,membership,phyChallenge,school,programme,year,iDCard,heard,email,password,expiry,existing,dateadded,hometown,workplace,gpcno,religion,regionResidence,gnaccid,zone,natid,challengeDescription) VALUES('$title','$name','$gender','$tdate','$contact','$wnumber','$enumber','$address','$occupation','$mstatus','$region','$nationality','$filename','$edulevel','$area','$membership','$challenge','$school','$programme','$year', '$filenameid', '$heard','$email','$password','$end','$existing','$dd', '$hometown', '$workplace', '$gpcno', '$religion', '$regionofresidence','$gnaccno','$zone','$filenamegh','$descrip' ) ");

                if ($ins) {
                    $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND password='$password'");
                    $row = mysqli_fetch_array($sel);



                    if($gnaccno == ""){

                        $year = strval(date('y'));
                        $gnaccid = $year . "-0" . $row['id'] ;
                        if (intval($row['id']) > 99 && intval($row['id']) < 1000) {
                            $gnaccid = $year . '-0' . $row['id'];
                        } else if (intval($row['id']) < 100) {
                            $gnaccid = $year . '-00' . $row['id'];
                        } else {
                            $gnaccid = $year . '-' . $row['id'];
                        }
                        // $gnaccid = $year . '-00' . $row['id'];
    
                        $idw =  $row['id'];
    
    
                        // $sql = "INSERT INTO transactions (uid) VALUES ('$gnaccid')";
                        $sqlid = "UPDATE members SET gnaccid = '$gnaccid'WHERE id = '$idw'";
    
    
                        //Execute query
    
                        mysqli_query($conn, $sqlid);
                        // session_start();
                        // die($idw);

                        // $_SESSION['id'] = $idw;

                    }

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

            
       
            $folder2 = "uploadgh/" . $filenamegh;

            // $sql = "INSERT INTO members (passport) VALUES ('$filename')";
            // // $sqlid = "INSERT INTO image (idCard) VALUES ('$filenameid')";


            // // Execute query

            // mysqli_query($conn, $sql);

            // Now let's move the uploaded image into the folder: image

            if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempnamegh, $folder2)) {

                $dd = date('jS F, Y');
                $end = "N/A";//date('jS F, Y', strtotime('+1 years'));

                $old = $tdate;
        
                $tdate = date('jS F, Y', strtotime($old));
                $existing = "no";


                
                if($regionofresidence == "Greater Accra" || $regionofresidence == "Eastern Region" || $regionofresidence == "Volta Region" || $regionofresidence == "Oti Region" ){
                    $zone = "VEGA";

                }else if ($regionofresidence == "North East Region" ||$regionofresidence == "Northern Region" || $regionofresidence == "Upper East Region" || $regionofresidence == "Upper West Region"|| $regionofresidence == "Savvannah Region" ){
                    $zone = "NUEW";


                }else if($regionofresidence == "Bono East Region" || $regionofresidence == "Bono Region"  || $regionofresidence == "Ahafo Region"  || $regionofresidence == "Ashanti Region"){
                    $zone = "BAASH";


                }else if($regionofresidence == "Western Region" || $regionofresidence == "Western North Region" || $regionofresidence == "Central Region"){
                    $zone = "WESTRAL";

                }
        
        
        
                
        
        
                $ins = mysqli_query($conn, "INSERT INTO members (title,name,gender,tdate,contact,whatsapp,emergency,gpsAddress,occupation,maritalStatus,region,nationality,passport,eduLevel,counsellingArea,membership,phyChallenge,school,programme,year,heard,email,password,expiry,existing,dateadded,zone,natid,hometown,workplace,gpcno,religion,regionResidence,gnaccid,challengeDescription) VALUES('$title','$name','$gender','$tdate','$contact','$wnumber','$enumber','$address','$occupation','$mstatus','$region','$nationality','$filename','$edulevel','$area','$membership','$challenge','$school','$programme','$year','$heard','$email','$password','$end','$existing','$dd','$zone','$filenamegh','$hometown','$workplace','$gpcno','$religion','$regionofresidence','$gnaccno','$descrip' ) ");
        
                if ($ins) {
                    $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND password='$password'");
                    $row = mysqli_fetch_array($sel);
                    if($gnaccno == ""){

                        $year = strval(date('y'));
                        $gnaccid = $year . "-0" . $row['id'] ;
                        if (intval($row['id']) > 99 && intval($row['id']) < 1000) {
                            $gnaccid = $year . '-0' . $row['id'];
                        } else if (intval($row['id']) < 100) {
                            $gnaccid = $year . '-00' . $row['id'];
                        } else {
                            $gnaccid = $year . '-' . $row['id'];
                        }
                        // $gnaccid = $year . '-00' . $row['id'];
    
                        $idw =  $row['id'];
    
    
                        // $sql = "INSERT INTO transactions (uid) VALUES ('$gnaccid')";
                        $sqlid = "UPDATE members SET gnaccid = '$gnaccid'WHERE id = '$idw'";
    
    
                        //Execute query
    
                        mysqli_query($conn, $sqlid);
                        
                    }
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

    $exdate = mysqli_query($conn, "SELECT * FROM members WHERE id ='$uid'");
    while($row = mysqli_fetch_array($exdate)){
        $d = $row['expiry'];
        
        
    }  

    if($d == "N/A"){
         $end = date('Y-10-31', strtotime('+1 years'));   
    }else{

        // $date = "2022-02-01";
        $end = date('Y-m-d', strtotime($d. ' + 1 years'));
        // $end = date(strval($d), strtotime('+1 years'));
    }


    $dateadded = date('jS F,Y');
   

    $ins = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$uid','$ref','$amount','$dateadded')");
    $up = mysqli_query($conn, "UPDATE members SET paystatus ='paid', existing = 'yes', expiry = '$end' WHERE id ='$uid'");

    if ($uid == "") {
        $goo = "Empty uid: " . $uid;
        mail('stephendappah1@gmail.com', 'Empty Uid', $goo, "Stedap Cooperation");
    }

    if ($ins || $up) {
        // mail('stephendappah1@gmail.com', 'TUCEE NTC REGISTRATION', "", $headers);
        echo 'donepay';
    } else {
        $fail = mysqli_query($conn, "SELECT name FROM members WHERE id ='$uid'");

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
