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
    $img_name2 = $_FILES['picture2']['name'];
	$img_size2 = $_FILES['picture2']['size'];
	$tmp_name2 = $_FILES['picture2']['tmp_name'];
	$error2 = $_FILES['picture2']['error'];

	// Check if the image has a valid extension
	$img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
	$img_ex_lc2 = strtolower($img_ex2);
	$allowed_exs2 = array("jpg", "jpeg", "png"); 
	if (in_array($img_ex_lc2, $allowed_exs2)) {
		$new_img_name2 = uniqid("IMG-", true).'.'.$img_ex_lc2;
		$img_upload_path2 = 'uploads/'.$new_img_name2;
		move_uploaded_file($tmp_name2, $img_upload_path2);
	}


	$n_bage =  $_POST['n_bage'];
	$date_naiss = $_POST['date_naiss'];
	$type =  $_POST['pig_squab'];
	$straines =  $_POST['straines'];
	$bage_father =  $_POST['n_bage_father'];
	$bage_mother =  $_POST['n_bage_mother'];
	$note = $_POST['note'];
	$user_email = $_SESSION['login_user'];
$id_pig_sq=$_POST['id_pig_sq'];


	if (empty($n_bage)) {
		header("Location: ../create_squab.php?error=<h5 style=color:red;background-color:gray;width:40%>N° Bage is required</h5>");
	    exit();
		

	} 
	if (!preg_match("/^[a-zA-Z]+-[0-9]+-[0-9]{2}$/", $n_bage)) {
		header("Location: ../create_squab.php?errorr=<h5 style='color:red;background-color:gray;width:max-content;'>Invalid 'N° Bage' format.<br> Please use the format: [letters]-[numbers]-[2 digits]</h5>");
		exit();
	} if (empty($date_naiss)) {
        header("Location: ../create_squab.php?errorr=<h5 style=color:red;background-color:gray;width:40%>date of birth is required</h5>");
	    exit();
	} 
	  if (empty($straines)) {
        header("Location: ../create_squab.php?errorr=<h5 style=color:red;background-color:gray;width:40%>Straines is required</h5>");
	    exit();
	}  if (empty($bage_father)) {
        header("Location: ../create_squab.php?errorr=<h5 style=color:red;background-color:gray;width:40%>N° Bage Father is required</h5>");
	    exit();
	}  
	if (!preg_match("/^[a-zA-Z]+-[0-9]+-[0-9]{2}$/", $bage_father)) {
		header("Location: ../create_squab.php?errorr=<h5 style='color:red;background-color:gray;width:max-content;'>Invalid 'N° Bage Father' format. Please use the format: [letters]-[numbers]-[2 digits]</h5>");
		exit();
	}if (empty($bage_mother)) {
        header("Location: ../create_squab.php?errorr=<h5 style=color:red;background-color:gray;width:40%>N° Bage Mother is required</h5>");
	    exit();
	}
	
	
	if (!preg_match("/^[a-zA-Z]+-[0-9]+-[0-9]{2}$/", $bage_mother)) {
		header("Location: ../create_squab.php?errorr=<h5 style='color:red;background-color:gray;width:max-content;'>Invalid 'N° Bage Mother' format. Please use the format: [letters]-[numbers]-[2 digits]</h5>");
		exit();
	}
   
// ...

// Vérifier si le n_bage existe déjà dans la base de données
$query_check = "SELECT n_bage FROM pigeon_squab WHERE n_bage = '$n_bage'";
$result_check = mysqli_query($connection, $query_check);

if (!$result_check) {
    // If the query execution resulted in an error, handle the error
    $error_message = mysqli_error($connection);
    die("Database query error: " . $error_message);
}

if (mysqli_num_rows($result_check) > 0) {
    // Le n_bage existe déjà dans la base de données, afficher un message d'erreur
    $ms = "	<h5 style='color:red;background-color:gray;width:max-content;'>The N° Bage already exists . Please use another N° Bage.</h5>	";
    header("Location: ../create_squab.php?ms=$ms");
    exit();
}

// ...

// Continue with the rest of the code for inserting the squab information into the database

// ...



	$sql = "INSERT INTO pigeon_squab (n_bage, date_naiss, pig_squab, strains, n_father, n_mother, ped_father, ped_mother, not_info,user_email)
        VALUES ('$n_bage', '$date_naiss', '$type', '$straines', '$bage_father', '$bage_mother',  '$img_upload_path','$img_upload_path2','$note', '$user_email')";

	$result = mysqli_query($connection, $sql);

	if ($result) {

		
        $ms = "<h4 style=background-color:lightgray;border-radius:20px;color:black;width:90%;font-size:25px>Your information squab has been created successfully</4>";
		
			header("Location: ../create_squab.php?ms=$ms");
			exit();
		}
	 else {
			$ms = "Unknown error occurred";
			header("Location: ../create_squab.php?ms=$ms");
			exit();
		}


// ...



// ...
