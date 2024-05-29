<?php 

if (isset($_POST['n_bage']) &&
	isset($_POST['n_bage_father'])&&
    isset($_POST['id_pig_sq'])) {
		

		include "conix.php";

		$id_pig_sq = $_POST['id_pig_sq'];

		// Check if the pigeon exists in the database
		$sql = "SELECT id_pig_sq FROM pigeon_squab WHERE id_pig_sq='$id_pig_sq'";
		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) <= 0) {
			header("Location: ../squab2.php?ms=Pigeon not found");
			exit;
		}

		$n_bage =  $_POST['n_bage'];
		$date_naiss = $_POST['date_naiss'];
		$straines =  $_POST['straines'];
		$bage_father =  $_POST['n_bage_father'];
		$bage_mother =  $_POST['n_bage_mother'];
		$note = $_POST['note'];
		$user_email = $_SESSION['login_user'];

		// Check if the images are updated
		if (isset($_FILES['picture']['name']) && !empty($_FILES['picture']['name'])) {
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

				// Update the father's pedigree image path
				$sql = "UPDATE pigeon_squab SET ped_father='$img_upload_path' WHERE id_pig_sq='$id_pig_sq'";
				mysqli_query($connection, $sql);
			}
		}

		if (isset($_FILES['picture2']['name']) && !empty($_FILES['picture2']['name'])) {
			$img_name2 = $_FILES['picture2']['name'];
			$img_size2 = $_FILES['picture2']['size'];
			$tmp_name2 = $_FILES['picture2']['tmp_name'];
			$error = $_FILES['picture2']['error'];

			// Check if the image has a valid extension
			$img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
			$img_ex_lc2 = strtolower($img_ex2);
			$allowed_exs2 = array("jpg", "jpeg", "png"); 
			if (in_array($img_ex_lc2, $allowed_exs2)) {
				$new_img_name2 = uniqid("IMG-", true).'.'.$img_ex_lc2;
				$img_upload_path2 = 'uploads/'.$new_img_name2;
				move_uploaded_file($tmp_name2, $img_upload_path2);

				// Update the mother's pedigree image path
				$sql = "UPDATE pigeon_squab SET ped_mother='$img_upload_path2' WHERE id_pig_sq='$id_pig_sq'";
				mysqli_query($connection, $sql);
			}
		}

		// Update other pigeon information
		$sql = "UPDATE pigeon_squab SET n_bage='$n_bage', date_naiss='$date_naiss', strains='$straines', n_father='$bage_father', n_mother='$bage_mother', not_info='$note' WHERE id_pig_sq='$id_pig_sq'";
		$result = mysqli_query($connection, $sql);

		if ($result) {
			$ms = "<h3 style='background-color:lightgray;border-radius:20px;width:300px;'>Successfully Updated.</h3>";
			header("Location: ../edit_squab.php?ms=$ms&id_pig_sq=$id_pig_sq");
			exit;
		} else {
			$ms = "Unknown error occurred";
			header("Location: ../edit_squab.php?ms=$ms&id_pig_sq=$id_pig_sq");
			exit;
		}
	} else {
		header("Location: ../squab.php?ms=hello");
		exit;
	}
?>
