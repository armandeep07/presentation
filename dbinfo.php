<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "presentation0";

$con = new mysqli($host, $username, $password, $db);

if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}

?>

