<?php
$searchTerm = isset($_GET['search']) ? $_GET['search'] : "";
$result = null;

if (!empty($searchTerm)) {
    // Perform the search and assign the result to the $result variable
    include "php/conix.php"; // Include the database connection file

    $query = "SELECT id_pig_sq,n_bage,name_pig,strains,gander,color,pig_squab,n_father,img_pig,n_mother,not_info,ped_father,ped_mother ,user_email FROM pigeon_squab WHERE  pig_squab='pigeon' and (n_bage LIKE '%{$searchTerm}%' OR user_email LIKE '%{$searchTerm}%' )";
    $result = mysqli_query($connection, $query);

    // Close the database connection
    mysqli_close($connection);
}
?>
<style>
    img{
        max-width: 150px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>CRUD | Users</title>
    <link rel="stylesheet" type="text/css" href="../admin/style12.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script>
        function confirmDelete(userId, firstName, lastName) {
            if (confirm("Are you sure you want to delete the user: " + firstName + " " +  "?")) {
                window.location.href = "php/delete_pigeon.php?id_pig_sq=" + userId;
            }
        }
    </script>
    <style>
        b {
            font-size: 15px;
        }
    </style>
</head>
<body style="background-color: lightgrey;">
    <div class="content read" style="margin-top:200px; background-color:#3D405B;width:99%;">  
        <a href="pigeons.php" style="margin-left:5%;margin-top:20px"><img src="../images/retour.png" width="50px" height="50px" style="margin-top:20px;margin-bottom: 10px;"></a>

        <div style="float:right;margin-top:15px">
            <form method="GET" action="">
                <table>
                    <tr>
                        <td width="320px"><input type="text" name="search" placeholder="Search with N° Bage or User Email " value="<?php echo htmlentities($searchTerm); ?>" style="width:100%"></td>
                        <td><input type="submit" value="Search"></td>
                    </tr>
                </table>
            </form>
        </div>
        <br />
        <center>
            <mark>
                <?php if (isset($_GET['ms'])) {
                    echo $_GET['ms'];
                } ?>
            </mark>
        </center>
        <table>
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
                if ($result) {
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
            <b >pedigree of father</b><br><br>
        <a href="#" onclick="showImageInNewPage('../user/php/<?=$users['ped_father']?>')">
            <img src="../user/php/<?=$users['ped_father']?>" alt="Pedigree of Father" style="max-width: 150px;">
        </a>
    <br><br>
    <b>pedigree of Mother</b><br><br>
        <a href="#" onclick="showImageInNewPage('../user/php/<?=$users['ped_mother']?>')">
            <img src="../user/php/<?=$users['ped_mother']?>" alt="Pedigree of Mother" style="max-width:150px;">
        </a>
    </td>
    <td ><b><?=$users['user_email']?></b></td>
                            <td class="actions" align="center" style="width:max-content">
                            <a href="edit_pigeon.php?id_pig_sq=<?=$users['id_pig_sq']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                        <a href="javascript:void(0);" onclick="confirmDelete(<?=$users['id_pig_sq']?>,'<?=$users['n_bage']?>');" class="trash"><i class="fas fa-trash fa-xs"></i></a>


                                    </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='9'>No results found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
</body>
</html>
