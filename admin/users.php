<?php 

include "../php/session.php";

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}


$fakeTok = "562random";
include "php/read_users.php";
include "menu_admin.php";



?>


 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="">
	<title>CRUD | Users</title>
	<!-- <style>
		table, tr, th, td {
			border: 1px solid #aaa;
			border-collapse: collapse;
			padding: 5px;
		}
		th {background: #eee}
	</style> -->
	
	<link rel="stylesheet" type="text/css" href="style12.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

	<script>
    function confirmDelete(userId, firstName, lastName) {
        if (confirm("Are you sure you want to delete the user: " + firstName + " " + lastName + "?")) {
            window.location.href = "php/delete.php?id=" + userId;
        }
    }
</script>
<style>
	b{
		font-size:20px;
	}
</style>







</head>
<body  style="background-color: lightgrey;">
	<div class="content read" style="margin-top:70px; background-color:#3D405B;width:90%">	
	<a href="creat.php" class="create-contact" style="font-size:20px;">Create Contact</a>
	
	<div style="float:right;margin-top:20px">

<form method="GET" action="se_arch.php" >
	<table>
		<tr>
			<td width="400px">	<b><input type="text" name="search" placeholder="Search With Name, Last Name or e-mail" style="width:105%"></td>
			<td>	<b><input type="submit" value="Search"></b></td>
		</tr>
	</table>
</form>
</div>
<br>
		
		<br>
		<center>
		<?php if (isset($_GET['ms'])): ?>
            <p><?php echo $_GET['ms']; ?></p>
            <?php endif ?>
		</center>
	<table >
		
	<thead>
	
		<tr>
			<td><b>#</b></td>
			<td><b>Name</b></td>
			<td><b> Last Name</b></td>
			<td><b>Gender</b></td>
			<td><b>type</b></td>
			<td><b>Tele</b></td>
			<td><b>Email</b></td>
			<td><b>Password</b></td>
			<td><b>Action</b></td>
		</tr>
		</thead>
		<tbody>
		<?php 
            $i = 0;
            while ($users = mysqli_fetch_assoc($result)) {
            $i++;
		 ?>
		<tr>
           <td><b><?=$i?></b></td>
           <td><b><?=$users['nom']?></b></td>
           <td><b><?=$users['prenom']?></b></td>
           <td><b><?=$users['genre']?></b></td>
           <td><b><?=$users['type']?></b></td>
           <td><b><?=$users['tel']?></b></td>
           <td><b><?=$users['email']?></b></td>
           <td><b><?=$users['passwordd']?></b></td>
		   <td class="actions">
                    <a href="edit.php?id=<?=$users['id']?>" class="edit" ><i class="fas fa-pen fa-xs"></i></a>
                    
					<a href="javascript:void(0);" onclick="confirmDelete(<?=$users['id']?>, '<?=$users['nom']?>', '<?=$users['prenom']?>');" class="trash"><i class="fas fa-trash fa-xs"></i></a>


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
