<?php
require_once("./db.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@session_start();
$count = $_POST['type'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$clg = $_POST['clg'];
$_SESSION['name'] = $name;
$_SESSION['number'] = $number;
$_SESSION['mail'] = $mail;
$_SESSION['clg'] = $clg;
$_SESSION['type'] = $count;

$txnid = md5($mail);
try {
    $ref = ($_GET['ref'] != null && $_GET['ref']) ? $_GET['ref'] : "";
} catch (Exception $error) {
    $ref = "";
}

if ($count == 1) {
    $amount = 100;
} else
    if ($count == 4) {
    $amount = 300;
} else
    if ($count == 10) {
    $amount = 600;
}
$amount = 2;
// You will find your secret key and salt here: https://dashboard.payu.in/merchant/api/account/index/
$hashSequence = "L****P|$txnid|$amount|E-Book|$name|$mail|||||||||||salt_value"; // Reaplce first value with Serect Key and last value with salt value
$hash = strtolower(hash('sha512', $hashSequence));
$isExist = "true";
$query = "SELECT mail FROM users WHERE mail LIKE '$mail'";
$result = mysqli_query($db, $query) or die("error: $query");
$data = mysqli_fetch_array($result);
if ($data != null) {
    $isExist = "true";
    header("location: ../alreadysubmitted.php");
} else {
    $isExist = "false";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>

<body onload="sendform(form)">

    <form action='' id="form" method='post'>
        <input type="hidden" name="key" value="L****P" /> <!-- Replace with your Secret Key -->
        <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
        <input type="hidden" name="productinfo" value="E-Book" />
        <input type="hidden" name="amount" value="<?php echo $amount ?>" />
        <input type="hidden" name="email" value="<?php echo $mail ?>" />
        <input type="hidden" name="firstname" value="<?php echo $name ?>" />
        <input type="hidden" name="lastname" value="" />
        <input type="hidden" name="surl" value="https://www.apentoeverychild.online/back/register.php?ref=<?php echo $ref; ?>" />
        <input type="hidden" name="furl" value="https://www.apentoeverychild.online" />
        <!-- <input type="hidden" name="furl" value="http://localhost/crowdfunding/">
        <input type="hidden" name="surl" value="./register.php?ref=<?php echo $ref; ?>"> -->
        <input type="hidden" name="phone" value="<?php echo $number ?>" />
        <input type="hidden" name="hash" value="<?php echo $hash ?>" />
    </form>
</body>
<script>
    let isExist = <?php echo $isExist ?>;
    let sendform = (form) => {
        if (!isExist) {
            form.action = "https://secure.payu.in/_payment";
            form.submit();
            // window.location.assign(form.surl.value);
        } else {
            form.action = "../alreadysubmitted.php?len=&already=1";
            form.submit();
        }
    }

</script>

</html>