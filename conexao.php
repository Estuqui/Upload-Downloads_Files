<?php 
$host = "localhost";
$user = "jessica";
$password = "123456";
$database = "upload";

$mysqli = new mysqli($host, $user, $password, $database);

if($mysqli->connect_errno){
    echo "Connect Failed" . $mysqli->connect_error;
    exit();
}

?>