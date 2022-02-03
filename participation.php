<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('./back/db.php');
require_once("./back/sendMail.php");
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$mailer = new PHPMailer();
$user = $_GET['user']."_code";
$query = "SELECT * FROM $user";
$result = mysqli_query($db, $query);
$array_data = mysqli_fetch_all($result);
$result = mysqli_query($db, "SELECT * from users WHERE codestable = '$user'");
$userData = mysqli_fetch_row($result);
$codes = "";
$join = "exaple.com";
$ref = "https://www.apentoeverychild.online/index.php?ref=$userData[1]";
foreach ($array_data as $value) {
    $codes .= $value[0] . " ";
}
sendMail($db, $userData[3], $user, $userData[2], $userData[1], $mailer);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./statics/CSS/participate.css" type="text/CSS">
    <link rel="stylesheet" href="./statics/CSS/color.css" type="text/CSS">
    <script src="./statics/JS/participate.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./statics/CSS/fonts.css" type="text/CSS">
    <link rel="shortcut icon" href="./statics/image/fav.ico" type="image/x-icon">
    <title>Successfull</title>
</head>

<body>
    <div class="text">
        <h1>your secret h-code</h1>
        <p><b>write down and keep safely</b></p>
    </div>
    <div class="card-div">
        <div class="card">
            <div>
                <p>
                    <b>
                        <?php
                        $counter = 0;
                        $code = "";
                        foreach ($array_data as $value) {
                            if ($counter == 6 || $counter == 11) {
                                $code .= "<br><br>" . $value[0];
                            } else
                            if ($counter == 0) {
                                $code .= $value[0];
                            } else {
                                $code .= "&nbsp;&nbsp;" . $value[0];
                            }
                            $counter += 1;
                        }
                        echo $code;
                        ?></b>
                </p>
            </div>
        </div>
    </div>
    <div class="ref">
        <p><b><?php echo $ref ?>&nbsp;<i class="far fa-clipboard" onclick='copylink(ref_link)'></i></b></P>
        <input type='hidden' id='ref_link' value='<?php echo $ref ?>'>
        <p><b>This is your referral link. Copy the link and </b></p>
        <p><b>send with your friends and family, get an extra H-Code for every 5 successful referrals.</b></p>
        <div class="links">
            <div class="insta">
                <img src="./statics/image/insta.ico" alt="">
            </div>
            <div class="tg">
                <img id="test" src="./statics/image/t_logo.svg" alt="">
            </div>
            <svg class="wa">
                <path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z"></path>
                <path fill="#FFF" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"></path>
            </svg>
            <div class="fb">
                <img src="./statics/image/fb.png" alt="">
            </div>
        </div>
    </div>
    <p class='note'>Note: when you have successfully done 5 referrals you will get H-code via email and message.</p>
</body>

</html>