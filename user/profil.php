<?php 
$fakeTok = "562random";
include "php/read_info.php";
include "menu_user.php";




 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="">
	<title>CRUD | Ptofil</title>
	<!-- <style>
		table, tr, th, td {
			border: 1px solid #aaa;
			border-collapse: collapse;
			padding: 5px;
		}
		th {background: #eee}
	</style> -->
	
	<link rel="stylesheet" type="text/css" href="../admin/style12.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


<style>
	b{
		font-size:20px;
	}
</style>







</head>
<body  style="background-color: lightgrey;">
	<div class="content read" style="margin-top:70px; background-color:#3D405B;">	
	
	


		
		<br>
		<center>
		<?php if (isset($_GET['ms'])): ?>
            <p><?php echo $_GET['ms']; ?></p>
            <?php endif ?>
		</center>
	<table >
		
	<thead>
	
		<tr>
			
			<td><b>Name</b></td>
			<td><b> Prenom</b></td>
			<td><b>Gender</b></td>
			<td><b>Tele</b></td>
			<td><b>Email</b></td>
			<td><b>Action</b></td>
		</tr>
		</thead>
		<tbody>
		<tbody>
			<?php
			$i = 0;
			while ($users = mysqli_fetch_assoc($result)) {
				$i++;
			?>
			<tr>
				
				<td><b style="color:white"><?= $users['nom'] ?></b></td>
				<td><b style="color:white"><?= $users['prenom'] ?></b></td>
				<td><b style="color:white"><?= $users['genre'] ?></b></td>
				<td><b style="color:white"><?= $users['tel'] ?></b></td>
				<td><b style="color:white"><?= $users['email'] ?></b></td>
				<td class="actions">
					<center><a href="edit_profil.php?id=<?= $users['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a></center>
				</td>
			</tr>
			<?php } ?>
		</tbody>


	</table>
	
	
	

	<!-- <h1>Empty!</h1>
	<a href="index.php">Create</a> -->
</div>
<br>
<br>
<br>

</body>
</html>
