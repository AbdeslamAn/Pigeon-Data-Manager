<?php 

//if (isset) {
	include "conix.php";
	$sql = "SELECT img_dow FROM pedegree";
	$result = mysqli_query($connection, $sql);
    echo $result;
	
//}else {
	//echo "404!";
	//exit;
//}
