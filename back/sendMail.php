<?php

use PHPMailer\PHPMailer\PHPMailer;

function sendMail(mysqli $db, string $mail, string $table, string $name, string $pId, PHPMailer $mailer)
// function sendMail(mysqli $db, string $mail, string $table, string $name, string $pId, $mailer)
{

    $query = "SELECT * FROM $table";
    $result = mysqli_query($db, $query);
    $array_data = mysqli_fetch_all($result);
    $form = "exaple.com";
    $ref = "https://www.apentoeverychild.online/index.php?ref=" . $pId . "_ref";
    $codes = "";
    foreach ($array_data as $value) {
        $codes .= $value[0] . " ";
    }
    $mailer->isSMTP();
    $mailer->Host = 'smtp.hostinger.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'example@gmail.com';// Replace with your email
    $mailer->Password = 'password'; // Replace with your Email password
    $mailer->SMTPSecure = 'ssl';
    $mailer->Port = 465;
    $mailer->setFrom('example@gmail.com', 'Site Name');// Replace with your email and Site Name
    $mailer->addAddress($mail, $name);
    $mailer->Subject = 'Mail title'; // Replace with your mail title
    $mailer->isHTML(true);
    $mailer->Body = "<div>
    <h3>Dear $name</h3>
    <p style='margin-bottom: 25px;'>
      &ensp;&ensp;&ensp;Thanks for participating in the event, our a single step
      can change the situation.
    </p>
    <p>Participant ID: $pId</p>
    <p><b>H-Codes:</b></p>
      <center>
        <p style='font-size: 30px; font-family: monospace;'><b>dfgdf fhfuf fhfdu fskdf</b></p>
        <p style='color: red;'>Note: Write down and keep safely</p>
      </center>
    <p style='font-size: 17px;'>Now we have a news for you ....<br>You have a chance to get more <strong>H-Code</strong>, which will increase your winning chance, so copy referral link and refer to your friends and family $ref.</p>
    <p>To join as volunteer fill below form <a href='$form'>Form</a></p>
    <p>To help our mission and participated in the event, our team has something for you, World's best selling book's PDF file.</p>
      <a href='https://www.apentoeverychild.online/statics/pdf/alchemist.pdf'>The Alchemist</a><br>
      <a href='https://www.apentoeverychild.online/statics/pdf/questions-are-the-answer.pdf'>Questions Are The Answer</a><br>
      <a href='https://www.apentoeverychild.online/statics/pdf/Rich-Dad-Poor-Dad.pdf'>Rich Dad Poor Dad</a><br>
      <a href='https://www.apentoeverychild.online/statics/pdf/The-Psychology-of-Money.pdf'>The Psychology of Money</a><br>
      <a href='https://www.apentoeverychild.online/statics/pdf/The-Magic-of-Thinking.pdf'>The Magic of Thinking</a><br><br>
      <p>Contact Us feel free to any query <a href='mailto:contact@apentoeverychild.online'>click</a></p>
    <center>
      <p><br> Regards 🙏<br>Team A Pen to Every Child <br>&copy; All rights reserved 2022</p>
    </center>
  </div>";
    $response = false;
    try {
        $response = $mailer->send();
        while(true){
          if ($response){
            return true;
          }
        }
    } catch (Exception $e) {
        echo $mailer->ErrorInfo;
    }
}
