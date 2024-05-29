<?php 
	require_once("session.php");
	if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['ajouter'])) {
		// Check if email and password are set
		if (isset($_POST['email']) && isset($_POST['passwordd'])) {
			include "conix.php";
			$email = $_POST['email'];
			$password = $_POST['passwordd'];
		
			$sql = "SELECT id, type FROM user WHERE email='$email' AND passwordd='$password'";
			$result = mysqli_query($connection, $sql);
			
			if ($result) {
				// Check if a matching row is found
				if (mysqli_num_rows($result) == 1) {
					$row = mysqli_fetch_assoc($result);
					$role_session = $row['type'];
					$_SESSION['login_user'] = $email;
					
					if ($role_session == 1) {
						header("Location: ../user/squab2.php");
					} else if ($role_session == 2) {
						header("Location: ../admin/users.php");
					}
					
					exit;
				} else {
					$ms = "<h3 style=background-color:lightgray;border-radius:20px;color:red;width:400px;>Invalid email or password.</h3>";
				}
			} else {
				$ms = "Unknown error occurred.";
			}
			
			header("Location: ../login.php?ms=$ms");
			exit;
		} else {
			header("Location: index.php");
			exit;
		}
	}
?>
