<?php 

include "../php/session.php";

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}


$fakeTok = "562random";
include "php/read_contact.php";
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
        if (confirm("Are you sure you want to delete the delete contact: " + firstName +  "?")) {
            window.location.href = "php/delete_contact.php?id_cantact=" + userId;
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
	
	<div style="float:right;margin-top:20px">


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
            <td><b> Email</b></td>
			<td><b>Full Name</b></td>
			
			<td><b>Message</b></td>
		<center>
			<td ><b>Action</b></td>
            </center>
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
           <td><b><?=$users['email']?></b></td>
           <td><b><?=$users['fullname']?></b></td>
           
           <td><b><?=$users['message']?></b></td>
         
		   <td class="actions" >
               
                    <center>
					<a href="javascript:void(0);" onclick="confirmDelete(<?=$users['id_cantact']?>, '<?=$users['fullname']?>');" class="trash"><i class="fas fa-trash fa-xs"></i></a>

				</center>

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
