<?php 
    function codeonref($db, $user, $refto){
        require_once('./savecodes.php');
        require_once('./generatecode.php');
        $query = "SELECT * FROM ".$user."_ref";
        $result = mysqli_query($db, $query);
        $array_data = mysqli_fetch_all($result);
        if (count($array_data) == 5){
            $hashCode= simple_hash("$user $refto");
            $query = "INSERT INTO `".$user."_code` (codes) VALUE ('$hashCode')";
            mysqli_query($db, $query);
            mysqli_query($db, "TRUNCATE TABLE ".$user."_ref");  
        }
    }
?>