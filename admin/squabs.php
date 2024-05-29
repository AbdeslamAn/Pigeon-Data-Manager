<?php 

include "../php/session.php";

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

$fakeTok = "562random";
include "php/read_squab.php";
include "menu_admin.php";




 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="">
	<title>CRUD | Squab</title>
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
    function confirmDelete(userId, firstName) {
        if (confirm("Are you sure you want to delete the user: " + firstName + " " + "?")) {
            window.location.href = "php/delete_squab.php?id_pig_sq=" + userId;
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
	<div class="content read" style="margin-top:70px; background-color:#3D405B;width:99%;">	

    <a href="create_squab.php?email=<?php echo $user_check; ?>" class="create-contact" style="font-size:20px;">Create Info Squab</a>

	
	<div style="float:right;margin-top:20px">

<form method="GET" action="search_squab.php" >
	<table>
		<tr>
			<td width="320px">	<input type="text" name="search" placeholder="Search With N° Bage or Email User " style="width:100%"></td>
			<td>	<input type="submit" value="Search"></td>
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
	<table style=" width: 100%;" >
		
	<thead>
	
		<tr align="center">
			<td><b>#</b></td>
			<td stle="width=max-content"><b>N° Bage</b></td>
			<td><b> Date of Birth</b></td>
			<td><b>Straines</b></td>
			<td><b>N° Bage Father</b></td>
			<td><b>N° Bage Mother </b></td>
			<td><b>Note </b></td>
			<td><b>pedigree of father</b></td>
			<td><b>pedigree of Mother</b></td>
			<td > <b>User Email</b></td>
			<td style="width:max-content;"><b>Actions</b></td>
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
           <td style="width:max-content;"><b><?=$users['n_bage']?></b></td>
           <td ><b><?=$users['date_naiss']?></b></td>
           <td><b><?=$users['strains']?></b></td>
           <td><b><?=$users['n_father']?></b></td>
           <td><b><?=$users['n_mother']?></b></td>
           <td><b><?=$users['not_info']?></b></td>
		   <td>
        <a href="#" onclick="showImageInNewPage('../user/php/<?=$users['ped_father']?>')">
            <img src="../user/php/<?=$users['ped_father']?>" alt="Pedigree of Father" style="max-width: 200px;">
        </a>
    </td>
    <td>
        <a href="#" onclick="showImageInNewPage('../user/php/<?=$users['ped_mother']?>')">
            <img src="../user/php/<?=$users['ped_mother']?>" alt="Pedigree of Mother" style="max-width: 200px;">
        </a>
    </td>
	
    <td ><b><?=$users['user_email']?></b></td>


		   <td class="actions" align="center" style="width:max-content">
		   <a href="edit_squab.php?id_pig_sq=<?=$users['id_pig_sq']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
					<a href="javascript:void(0);" onclick="confirmDelete(<?=$users['id_pig_sq']?>,'<?=$users['n_bage']?>');" class="trash"><i class="fas fa-trash fa-xs"></i></a>


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
<!-- Add this JavaScript at the end of the <body> section -->
<script>
    // Function to open the image in a new page
    function showImageInNewPage(imageUrl) {
        window.open(imageUrl, '_blank');
    }
</script>

</body>
</html>
