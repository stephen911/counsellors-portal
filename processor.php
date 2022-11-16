<?php

// require '../loader/autoloader.php';
require 'functions.php';
 if (isset($_GET['action'])) {
     switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);
            
            updateuser($id, $gender, $email, $contact, $telegram, $lincesed, $regnumber, $modality, $ntcemail, $region, $district, $tdate);

            break;
        
        case 'cfuser':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirmation);
            

            break;
        
        case 'ticket':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirmation);
            

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

        case 'register':
            extract($_POST);
            if ($oname == '') {
                $name = $title.' '.$fname.' '.$lname;
            } else {
                $name = $title.' '.$fname.' '.$oname.' '.$lname;
            }
                if ($password != $repass) {
                    echo 'Password do not match';
                } elseif ($fname == '' || $lname == '' ) {
                    echo ' All field must be filled';
                } else {
                    register($name, $title, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $challenge, $color, $size, $student, $school, $programme, $year, $heard, $password);
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
