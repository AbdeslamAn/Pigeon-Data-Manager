<?php
include "../php/conix.php";
    
    session_start(); // Start the PHP session (must be called before any output)



	$name_pigeon = $_POST['name_pigeon'];

	$color =  $_POST['color'];
	$loft_name = $_POST['loft_name'];
	$straines =  $_POST['straines'];
	$bage_father =  $_POST['n_bage_father'];
	$bage_mother =  $_POST['n_bage_mother'];
	$ad_info = $_POST['ad_info'];
	// $user_email = $_SESSION['login_user'];

	 if (empty($color)) {
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

    // Insert pigeon pedigree information into the database
    $sql = "INSERT INTO pedegree ( nam_pig, color, loft_name, strains, n_father, n_mother, ad_info)
            VALUES ( '$name_pigeon',  '$color', '$loft_name', '$straines', '$bage_father', '$bage_mother', '$ad_info')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        // Fetch the recently inserted data
        $query = "SELECT  nam_pig, n_father, n_mother, ad_info FROM pedegree WHERE id = LAST_INSERT_ID()";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $label4 = $row['n_bage'];
            $label5 = $row['n_father'];
            $label6 = $row['n_mother'];
            $ad_info1 = $row['ad_info'];
            $nam_pig1 = $row['nam_pig'];

            // Store pigeon's information in PHP session variables
            $_SESSION['pigeon_label4'] = $label4;
            $_SESSION['pigeon_label5'] = $label5;
            $_SESSION['pigeon_label6'] = $label6;
            $_SESSION['pigeon_ad_info'] = $ad_info1;
            $_SESSION['pigeon_nam_pig'] = $nam_pig1;

            // Redirect to the next page
                    header("Location: ../pedegree2.php");
            exit();
        } else {
            $ms = "Unknown error occurred";
            header("Location: ../pedegree.php?ms=$ms");
            exit();
        }
    }
?>
