<?php 

if (isset($fakeTok) && $fakeTok = "562random") {
	include "conix.php";
	$sql = "SELECT * FROM user ORDER BY id ";
	$result = mysqli_query($connection, $sql);
}else {
	echo "404!";
	exit;
}
