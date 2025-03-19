<?php
$host = 'sql308.infinityfree.com';
$user = 'if0_38462982';
$password = 'assignment1php';
$database = 'if0_38462982_Musicfest';

$connect = mysqli_connect($host, $user, $password, $database);

if (!$connect) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
