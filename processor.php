<?php

// require '../loader/autoloader.php';
require 'functions.php';
 if (isset($_GET['action'])) {
     switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);
            
            // updateuser($id, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $membership, $challenge, $color, $size, $school, $programme, $year);
            updateuser($id, $contact,  $wnumber, $enumber, $address, $occupation, $mstatus, $edulevel, $area, $challenge,);

            break;
        


        case 'enrolluser':
            extract($_POST);
            // extract($_POST);
            enrolluser($id, $enroll);
            

            break;      

        case 'login':
            extract($_POST);
            login($email, $password);
            break;


        case 'resett':
            extract($_POST);
            resetpass($email,);
            break;

        case 'updatepass':
            extract($_POST);
            updatepassword($password);
            break;


        case 'ureset':
            extract($_POST);
            if ($password != $cpassword) {
                echo 'Password do not match';
            }else{

                ureset($password, $email);
            }
            break;

        case 'register':
            extract($_POST);
            $data = $_POST;
            if ($oname == '') {
                $name = $title.' '.$fname.' '.$lname;
            } else {
                $name = $title.' '.$fname.' '.$oname.' '.$lname;
            }
                if ($password != $repass) {
                    echo 'Password do not match';
                } elseif ($fname == '' || $lname == '' || $gender == '' || $mstatus == '' || $hometown == '' || $tdate == '' || $contact == '' || $wnumber == ''|| $address == '' || $occupation == '' || $regionofresidence == '' || $nationality == '' || $membership == '' || $edulevel == '' || $area == '' || $challenge== '' || $religion == '' || $email == '') {
                    echo 'All Required fields must be filled';
                } else {
                //    register($data);
                    register($name, $title, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $gnaccno, $gpcno, $workplace, $hometown, $religion, $regionofresidence, $nationality, $edulevel, $area, $membership, $challenge, $school, $programme, $year, $heard, $password, $descrip);
                }

            break;

        case 'changepass':

            extract($_POST);
            if ($newpass != $repass) {
                echo 'Password do not match';
            } else {
                changepass($id, $password, $newpass);
            }
                break;

        default:

        break;
    }
 }



 ?>