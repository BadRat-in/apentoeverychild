<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

$mailer = new PHPMailer();
$mailer2 = new PHPMailer();

$mail = $_POST['mail'];
$name = $_POST['name'];
$query = $_POST['query'];
$mailer->isSMTP();
$mailer->Host = 'smtp.hostinger.com';
$mailer->SMTPAuth = true;
$mailer->Username = 'example@mail.com'; //Email username
$mailer->Password = 'password'; //Email password
$mailer->SMTPSecure = 'ssl';
$mailer->Port = 465;
$mailer->setFrom('example@mail.com', 'A Pen to Every Child');
$mailer->addAddress($mail, $name);
$mailer->Subject = 'Support: A Pen to Every Child';
$mailer->isHTML(true);
$mailer->Body = "<div>
<h3>Dear $name</h3>
<p style='margin-bottom: 25px;'>
&ensp;&ensp;&ensp;This is system generated mail.<br>Our Team working on your query. We'll contact you sortly.
</p>
<p>Contact Us feel free to any query <a href='mailto:example@mail.com'>click</a></p>
<center>
<p><br> Regards 🙏<br>Team A Pen to Every Child <br>&copy; All rights reserved 2022</p>
</center>
</div>";
$response = false;
try {
  global $response;
  $response = $mailer->send();
} catch (Exception $e) {
  echo $mailer->ErrorInfo;
}

$mailer2->isSMTP();
$mailer2->Host = 'smtp.hostinger.com';
$mailer2->SMTPAuth = true;
$mailer2->Username = 'example@mail.com'; //Email username
$mailer2->Password = 'password'; //Email password
$mailer2->SMTPSecure = 'ssl';
$mailer2->Port = 465;
$mailer2->setFrom('example@mail.com', 'A Pen to Every Child');
$mailer2->addAddress("reciever@mail.com", "Name");
$mailer2->Subject = 'Query form a user';
$mailer2->isHTML(true);
$mailer2->Body = "<h3>Dear $name</h3><p>Email: $mail</p><p>Query: $query</p>";

try {
  global $response;
  $response = $mailer2->send();
} catch (Exception $e) {
  echo $mailer->ErrorInfo;
}


if ($response){
header("location: ../reply.php");
}else{
  echo false;
}
