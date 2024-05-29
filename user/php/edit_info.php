

<?php 

if (isset($_POST['nom']) &&
	isset($_POST['prenom'])&&
    isset($_POST['id'])) {

		include "conix.php";

	$name = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$genre = $_POST['genre'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$password = $_POST['passwordd'];
	// $re_password=$_POST['password'];
	$id=$_POST['id'];

	// if($password!=$re_password) {
	// 	$ms = "<p background-color:yellow;color:lime>The confirmation password  does not match</p>";
	// 	header("Location: ../edit_profil.php?ms=$ms");
	// 	exit;
	// }

	if (empty($name)) {
		header("Location: ../edit_profil.php?ms=Name is required&id=$id");
	    exit;
	}else {
		

        $sql = "UPDATE user
                SET nom='$name',prenom='$prenom', genre='$genre', tel='$tel',email='$email',passwordd='$password'
                WHERE id='$id'";
        $result = mysqli_query($connection, $sql);

        if ($result) {
        	$ms = "<h3 style=background-color:lightgray;border-radius:20px;width:300px;>Successfully Updated.</h3>";
        	header("Location: ../edit_profil.php?ms=$ms&id=$id");
	        exit;
        }else {
        	$ms = "Unknown error occurred";
        	header("Location: ../edit_profil.php?ms=$ms&id=$id");
	        exit;
        }

	}
}else {
	header("Location: ../profil.php");
	exit;
}
?>