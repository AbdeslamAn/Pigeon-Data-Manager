<?php 
	$password=$_POST['password'];
	$passwordd=$_POST['passwordd'];

	if ($password==$passwordd) {

if ($_SERVER["REQUEST_METHOD"]=='POST' && isset($_POST['ajouter'])) {
	# code...


if (isset($_POST['nom']) &&
	isset($_POST['prenom'])) {

	include "conix.php";

	$name = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$password = $_POST['passwordd'];
	$genre = $_POST['genre'];

	// Vérifier si le n_bage existe déjà dans la base de données
$query_check = "SELECT email FROM user WHERE email = '$email'";
$result_check = mysqli_query($connection, $query_check);

if (!$result_check) {
    // If the query execution resulted in an error, handle the error
    $error_message = mysqli_error($connection);
    die("Database query error: " . $error_message);
}
if (mysqli_num_rows($result_check) > 0) {
    // Le n_bage existe déjà dans la base de données, afficher un message d'erreur
    $ms = "	<h5 style='color:red;background-color:gray;border-radius:20px;width:max-content;font-size:25px'>The Email already exists . You are already in account .</h5>	";
    header("Location: ../singup.php?ms=$ms");
    exit();
}

        $sql = "INSERT INTO user(nom,prenom,tel,email,passwordd,genre)
                VALUES('$name', '$prenom', '$tel','$email','$password','$genre')";
        $result = mysqli_query($connection, $sql);

	

        if ($result) {
        	$ms = "<h4 style=background-color:lightgray;border-radius:20px;color:black;width:fit:content;font-size:25px>Your account has been created successfully</4>";
        	header("Location: ../login.php?ms=$ms");
			
	        exit;
        }else {
        	$ms = "Unknown error occurred";
        	header("Location: ../singup.php?ms=$ms");
	        exit;
        }
	
	

	}
	
}

else {
	header("Location: ../singup.php");
	exit;
}

}

else {
	
	header("Location: ../singup.php?ms=Your confirmation Password is not the same");
	exit;
}