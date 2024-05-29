<?php 

if (isset($fakeTok) && $fakeTok = "562random") {
	include "conix.php";
	$sql = "SELECT * FROM cantact ORDER BY id_cantact ";
	$result = mysqli_query($connection, $sql);
}else {
	echo "404!";
	exit;
}
