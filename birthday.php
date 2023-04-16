<?php

include 'starter.php';
function send_birthday_email($email, $name, $message) {

    $to = $email;

    $subject = "Happy Birthday";

    $message = "

    <html>

    <head>

    <title>Happy Birthday</title>

    </head>

    <body>

    <p>Dear $name,</p>

    <p>$message</p>

    <p>Best Regards,</p>

    <p>Team Counsellor</p>

    </body>

    </html>

    ";

    // Always set content-type when sending HTML email

    $headers = "MIME-Version: 1.0" . "\r";

}


$query = "SELECT * FROM members WHERE month(current_date) = month(tdate) AND day(current_date) = day(tdate)";

$u = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($u)) {


    $email = $row['email'];
    $name = $row['name'];
    $message = "God bless you on your birthday.";

    send_birthday_email($email, $name, $message);



}

# send birthday email to members whose birthday is today




?>