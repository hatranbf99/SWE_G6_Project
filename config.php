<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "winedraft";

try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed :" . $e->getMessage();
}



?>