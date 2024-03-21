<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "car_rental";

$host = "longwellconnect.com";
$username = "u500921674_xpress";
$password = "OnGod@123";
$database = "u500921674_xpress";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
