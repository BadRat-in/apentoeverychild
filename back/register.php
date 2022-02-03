<?php
session_start();
require_once("./db.php");
require_once('./savecodes.php');
require_once('./savecodeonref.php');
require_once('./sendMail.php');
require "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;

$mailer = new PHPMailer();
$email = $_SESSION['mail'];
$clg = $_SESSION['clg'];
$ref = $_GET['ref'];
$number = $_SESSION['number'];
$name = $_SESSION['name'];
$amount = $_SESSION['type'];
$pId = strtolower(date("mdHis"));
var_dump($_SESSION);
if (strlen($email) > 15) {
    $query = "SELECT mail FROM users WHERE mail LIKE '$email' AND number LIKE '$number'";
    $result = mysqli_query($db, $query) or die("error: $query");
    $data = mysqli_fetch_array($result);
    if ($data != null) {
        header("location: ../alreadysubmitted.php");
    } else {

        $query = "INSERT INTO users (pId, name, number, mail, refuser, codestable, collage) VALUES ('$pId', '$name', '$number', '$email', '".$pId."_ref', '".$pId."_code', '$clg')";
        $result = mysqli_query($db, $query) or die("error: $query");
        if ($result) {
            $create_table = "CREATE TABLE `crowdfunding`.`".$pId."_ref` ( 
            `refto` VARCHAR(150) NULL
            )";
            $check = mysqli_query($db, $create_table);
            $create_table = "CREATE TABLE `crowdfunding`.`".$pId."_code` ( 
            `codes` VARCHAR(5) NULL
            )";
            $check2 = mysqli_query($db, $create_table);
            $result = saveCode($db, $email, $amount, $pId);
            $query = "INSERT INTO " . $ref . "(`refto`) VALUE ('$pId')";
            sendMail($db, $email, $pId."_code", $name, $pId, $mailer);
            if ($ref != null && $ref != "_ref") {
                mysqli_query($db, $query); 
                $user = preg_split("/[_]/", $ref);
                codeonref($db, $user[0], $email);
            }
            if ($result) {
                header("location: ../participation.php?user=$pId");
            }
        } else {
            header("location: ../sorry.php?user=$email");
        }
    }
} else {
    $len = strlen($email);
    echo "mail length is not valid. $len";
}
?>
