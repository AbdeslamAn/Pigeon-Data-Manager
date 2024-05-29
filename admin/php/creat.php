<?php 

if (isset($_POST['nom']) &&
	isset($_POST['prenom'])) {

	include "conix.php";

    $name = $_POST['nom'];
	$prenom = $_POST['prenom'];
	
	$tel = $_POST['tel'];
	// $type = $_POST['type'];
	$email = $_POST['email'];
	$password = $_POST['passwordd'];
    $genre = $_POST['genre'];

	 $sql = "INSERT INTO user(nom,prenom,tel,email,passwordd,genre)
        VALUES('$name', '$prenom', '$tel','$email','$password','$genre')";
        $result = mysqli_query($connection, $sql);
   
    
		
       


        if ($result) {
        	$ms = " <h4 style=background-color:lightgray;width:fit-content;height: fit-content;border-radius:20px;>Successfully created.</h4>";
        	header("Location: ../creat.php?ms=$ms");
	        exit;
        }else {
        	$ms = " <h4 style=background-color:lightgray;width:fit-content;height: fit-content;border-radius:20px;>Unknown error occurred.</h4>";
        	header("Location: ../creat.php?ms=$ms");
	        exit;
        }

	}
else {
	header("Location: ../creat.php");
	exit;
}

