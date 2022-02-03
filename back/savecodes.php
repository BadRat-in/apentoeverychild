<?php
    require_once('./generatecode.php');
    function saveCode($db, $mail, $amount, $pId){
    $codestable = $pId."_code";
    $hash = array();
    for ($i = 0; $i < $amount; $i++ ){
        $hashCode= simple_hash("$mail $i");
        array_push($hash, $hashCode);
        $query = "INSERT INTO `$codestable` (codes) VALUE ('$hashCode')";
        mysqli_query($db, $query);
    }
    $json = json_encode($hash);
    return count($hash) == $amount;
}
?>
