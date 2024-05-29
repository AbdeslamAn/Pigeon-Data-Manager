<?php 


include "../php/session.php";

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}



$fakeTok = "562random";
include "php/read_pigeon.php";
include "menu_admin.php";


$result = mysqli_query($connection, $sql);
if (!$result) {
    die('Query Execution Failed: ' . mysqli_error($connection));
}


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
        if (confirm("Are you sure you want to delete the pigeon: " + firstName + " " + "?")) {
            window.location.href = "php/delete_pigeon.php?id_pig_sq=" + userId;
        }
    }
</script>
<style>
	b{
		font-size:20px;
		
	}
	b{
		
	}
</style>







</head>
<body  style="background-color: lightgrey;">
	<div class="content read" style="margin-top:70px; background-color:#3D405B;width:99%;">	

    <a href="create_pigeon.php?email=<?php echo $user_check; ?>" class="create-contact" style="font-size:20px;">Create Info Pigeon</a>

	
	<div style="float:right;margin-top:20px">

<form method="GET" action="search_pigeon.php" >
	<table>
		<tr>
			<td width="320px">	<input type="text" name="search" placeholder="Serch With N° Bage " style="width:100%"></td>
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
	<table style="width: 100%;" >
		
	<thead>
		<tr align="center">
			<td><b>#</b></td>
			<td stle="width=max-content;"><b>N° Bage</b></td>
			<td><b>Straines</b></td>
            <td><b> Color</b></td>
            <td><b> Name Pigeon</b></td>
            <td><b> Gander</b></td>
			<td><b>N° Bage Father</b></td>
			<td><b>N° Bage Mother </b></td>
            <td style="width:150px;"> <b>Note </b></td>
			<td><b>Image of Piegon </b></td>
			<td align="center"><b> pedigrees </b></td>
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
           <td><b><?=$users['strains']?></b></td>
           <td ><b><?=$users['color']?></b></td>
           <td ><b><?=$users['name_pig']?></b></td>
           <td ><b><?=$users['gander']?></b></td>
           <td><b><?=$users['n_father']?></b></td>
           <td><b><?=$users['n_mother']?></b></td>
           <td width="150px"><b><?=$users['not_info']?></b></td>
           
           <td>
           
		   <a href="#" onclick="showImageInNewPage('../user/php/<?=$users['img_pig']?>')">
            <img src="../user/php/<?=$users['img_pig']?>" alt="image of pigeon" style="max-width: 100px;">
	</td>
		   <td align="center">
            <b >pedigree of father</b>
        <a href="#" onclick="showImageInNewPage('../user/php/<?=$users['ped_father']?>')">
            <img src="../user/php/<?=$users['ped_father']?>" alt="Pedigree of Father" style="max-width: 150px;">
        </a>
    <br>
    <b>pedigree of Mother</b>
        <a href="#" onclick="showImageInNewPage('../user/php/<?=$users['ped_mother']?>')">
            <img src="../user/php/<?=$users['ped_mother']?>" alt="Pedigree of Mother" style="max-width:150px;">
        </a>
    </td>
    <td ><b><?=$users['user_email']?></b></td>

		   <td class="actions" align="center" style="width:"><center>
		   <a href="edit_pigeon.php?id_pig_sq=<?=$users['id_pig_sq']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
					<a href="javascript:void(0);" onclick="confirmDelete(<?=$users['id_pig_sq']?>,'<?=$users['n_bage']?>');" class="trash"><i class="fas fa-trash fa-xs"></i></a>
</center>

                </td>	
		</tr>
		
	<?php } ?>
</tbody>
	</table>
	
	
	

	<!-- <h1>Empty!</h1>
	<a href="index.php">Create</a> -->
</div>
<script>
    // Function to open the image in a new page
    function showImageInNewPage(imageUrl) {
        window.open(imageUrl, '_blank');
    }
</script>

<br>
<br>
<br>

</body>
</html>
