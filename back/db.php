<?php
    $host = "127.0.0.1";
    $port = 3306;
    $username = "root";// database useranme
    $password = "";// database password
    $database = "crowdfunding";// database name
    $db = mysqli_connect($host, $username, $password, $database, $port);
    if(!$db){
        die('Could not Connect My Sql:'.mysqli_error($db));
    }
?>