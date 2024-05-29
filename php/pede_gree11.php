<?php
	include "conix.php";
	session_start();
	// Retrieve the uploaded image information
	$img_name = $_FILES['picture']['name'];
	$img_size = $_FILES['picture']['size'];
	$tmp_name = $_FILES['picture']['tmp_name'];
	$error = $_FILES['picture']['error'];

	// Check if the image has a valid extension
	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
	$img_ex_lc = strtolower($img_ex);
	$allowed_exs = array("jpg", "jpeg", "png"); 
	if (in_array($img_ex_lc, $allowed_exs)) {
		$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
		$img_upload_path = 'uploads/'.$new_img_name;
		move_uploaded_file($tmp_name, $img_upload_path);
	}


	$n_bage =  $_POST['n_bage'];
	$name_pigeon = $_POST['name_pigeon'];
	$genre =  $_POST['genre'];
	$color =  $_POST['color'];
	$loft_name = $_POST['loft_name'];
	$straines =  $_POST['straines'];
	$bage_father =  $_POST['n_bage_father'];
	$bage_mother =  $_POST['n_bage_mother'];
	$ad_info = $_POST['ad_info'];
	$user_email = $_SESSION['login_user'];

	if (empty($n_bage)) {
		header("Location: ../pedegree.php?error=<h5 style=color:red;background-color:gray;width:40%>N° Bage is required</h5>");
	    exit();
	} else if (empty($color)) {
        header("Location: ../pedegree.php?errorr=<h5 style=color:red;background-color:gray;width:40%>Color is required</h5>");
	    exit();
	} else if (empty($loft_name)) {
        header("Location: ../pedegree.php?errorr=<h5 style=color:red;background-color:gray;width:40%>Loft name is required</h5>");
	    exit();
	} else if (empty($straines)) {
        header("Location: ../pedegree.php?errorr=<h5 style=color:red;background-color:gray;width:40%>Straines is required</h5>");
	    exit();
	} else if (empty($bage_father)) {
        header("Location: ../pedegree.php?errorr=<h5 style=color:red;background-color:gray;width:40%>N° Bage Father is required</h5>");
	    exit();
	} else if (empty($bage_mother)) {
        header("Location: ../pedegree.php?errorr=<h5 style=color:red;background-color:gray;width:40%>N° Bage Mother is required</h5>");
	    exit();
	}
// Vérifier si le n_bage existe déjà dans la base de données
$query_check = "SELECT n_bage FROM pedegree WHERE n_bage = '$n_bage'";
$result_check = mysqli_query($connection, $query_check);

if (mysqli_num_rows($result_check) > 0) {
    // Le n_bage existe déjà dans la base de données, afficher un message d'erreur
    $ms = "	<h5 style='color:red;background-color:gray;width:max-content;'>The N° Bage already exists . Please use another N° Bage.</h5>	";
    header("Location: ../pedegree.php?ms=$ms");
    exit();
}


	$sql = "INSERT INTO pedegree (n_bage, nam_pig, gender, color, loft_name, strains, n_father, n_mother, ad_info, img_dow, user_email)
        VALUES ('$n_bage', '$name_pigeon', '$genre', '$color', '$loft_name', '$straines', '$bage_father', '$bage_mother', '$ad_info', '$img_upload_path', '$user_email')";

	$result = mysqli_query($connection, $sql);

	if ($result) {

		$query = "SELECT n_bage, nam_pig, n_father, n_mother, ad_info, img_dow FROM pedegree WHERE id = LAST_INSERT_ID()";
		$result = mysqli_query($connection, $query);

		if ($result && mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			

			header("Location: ../pedegree2.php");
			exit();
		} else {
			$ms = "Unknown error occurred";
			header("Location: ../pedegree.php?ms=$ms");
			exit();
		}
	}


// ...


// Le n_bage est unique, procéder à l'insertion des données
$sql = "INSERT INTO pedegree (n_bage, nam_pig, gender, color, loft_name, strains, n_father, n_mother, ad_info, img_dow, user_email)
        VALUES ('$n_bage', '$name_pigeon', '$genre', '$color', '$loft_name', '$straines', '$bage_father', '$bage_mother', '$ad_info', '$img_upload_path', '$user_email')";

$result = mysqli_query($connection, $sql);

if ($result) {
    // Le pigeonnage a été inséré avec succès, rediriger vers la page de succès
    header("Location: ../pedegree_success.php");
    exit();
} else {
    // Une erreur s'est produite lors de l'insertion
    $ms = "Une erreur inconnue s'est produite lors de l'inscription.";
    header("Location: ../pedegree.php?ms=$ms");
    exit();
}

// ...
