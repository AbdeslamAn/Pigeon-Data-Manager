<?php 

if (isset($fakeTok) && $fakeTok = "562random") {
	include "conix.php";
	$sql = "SELECT id_pig_sq,n_bage, strains, pig_squab, color, name_pig, gander, n_father, n_mother, img_pig, ped_father, ped_mother, not_info FROM pigeon_squab where id_pig_sq='$id_pig_sq' ";
	$result = mysqli_query($connection, $sql);
}else {
	echo "404!";
	exit;
}