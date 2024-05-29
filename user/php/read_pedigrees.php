<?php
include('../php/session.php');

$user_email = $_SESSION['login_user'];

$sql = "SELECT * FROM pedegree  WHERE user_email = '$user_email'";
$result = mysqli_query($connection, $sql);

