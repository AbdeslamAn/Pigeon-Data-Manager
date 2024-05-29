
<?php
if (isset($_POST['full-name']) &&
	isset($_POST['email'])&&
	isset($_POST['message'])) {

	include "conix.php";

	$full_name = $_POST['full-name'];

	$message = $_POST['message'];
	$email = $_POST['email'];




    $sql = "INSERT INTO cantact(fullname,email,message)
    VALUES('$full_name', '$email', '$message')";
$result = mysqli_query($connection, $sql);



if ($result) {
$ms = "<h4 style=color:black;width:fit:content;font-size:25px>Your Message Send</4>";
header("Location: ../index.php?ms=$ms");

exit;
}else {
$ms = "Unknown error occurred";
header("Location: ../index.php?ms=$ms");
exit;
}



}
