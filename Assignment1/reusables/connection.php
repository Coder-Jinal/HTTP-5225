<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'musicfest';

$connect = mysqli_connect($host, $user, $password, $database);

if (!$connect) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
