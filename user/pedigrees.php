<?php 
$fakeTok = "562random";
include "php/read_pedigrees.php";
include "menu_user.php";




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
	
	<link rel="stylesheet" type="text/css" href="../admin/style12.css">
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
		font-size:15px;
	}
</style>







</head>
<body  style="background-color: lightgrey;">
	<div class="content read" style="margin-top:70px; background-color:#3D405B;width:98%;">	

    <a href="../pedegree.php?email=<?php echo $user_check; ?>" class="create-contact">Create Pedigree</a>

	
	<div style="float:right;margin-top:20px">

<form method="GET" action="se_arch.php" >
	<table>
		<tr>
			<td width="320px">	<input type="text" name="search" placeholder="Rechercher par prénom, nom ou e-mail" style="width:100%"></td>
			<td>	<input type="submit" value="Rechercher"></td>
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
			<td style="width:max-content;" ><b>N° Bage</b></td>
			<td><b> Name Pigeon</b></td>
			<td><b>Gender</b></td>
			<td><b>Color</b></td>
			<td><b>loft name </b></td>
			<td><b>Straines</b></td>
			<td><b>N° Bage Father</b></td>
			<td><b>N° Bage Mother</b></td>
			<td><b>Addtional Information</b></td>
			<td><b>Image of Pigeon</b></td>
			<td><b>Actions</b></td>
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
           <td style="width:150px;"><b><?=$users['n_bage']?></b></td>
           <td ><b><?=$users['nam_pig']?></b></td>
           <td><b><?=$users['gender']?></b></td>
           <td><b><?=$users['color']?></b></td>
           <td><b><?=$users['loft_name']?></b></td>
           <td><b><?=$users['strains']?></b></td>
           <td style="width:150px;"><b><?=$users['n_father']?></b></td>
           <td style="width:150px;"><b><?=$users['n_mother']?></b></td>
           <td><b><?=$users['ad_info']?></b></td>
           <td><b><img src="../php/<?=$users['img_dow']?>" alt="Image of Pigeon" ></b></td>

		   <td class="actions" align="center" style="width:100px;">
		   <a href="edit_pedegree.php?id=<?=$users['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
					<a href="javascript:void(0);" onclick="confirmDelete(<?=$users['id']?>, '<?=$users['n_bage']?>', '<?=$users['nam_pig']?>');" class="trash"><i class="fas fa-trash fa-xs"></i></a>


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
