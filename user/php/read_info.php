<?php 


include('../php/session.php');



$sql = "SELECT * FROM user WHERE email = '$user_check'";
$result = mysqli_query($connection, $sql);

