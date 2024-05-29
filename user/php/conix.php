<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'fly_higher2';

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
