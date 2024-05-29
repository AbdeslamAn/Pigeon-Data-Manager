<?php
$searchTerm = isset($_GET['search']) ? $_GET['search'] : "";
$result = null;

if (!empty($searchTerm)) {
    // Perform the search and assign the result to the $result variable
    include "php/conix.php"; // Include the database connection file

    $query = "SELECT * FROM pigeon_squab WHERE pig_squab='squab' and (n_bage LIKE '%{$searchTerm}%' OR user_email LIKE '%{$searchTerm}%')";
    $result = mysqli_query($connection, $query);

    // Close the database connection
    mysqli_close($connection);
}
?>

<style>
    img{
        max-width: 200px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>CRUD | Squabs</title>
    <link rel="stylesheet" type="text/css" href="../admin/style12.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script>
        function confirmDelete(userId, firstName, lastName) {
            if (confirm("Are you sure you want to delete squab: " + firstName + " " +  "?")) {
                window.location.href = "php/delete_squab.php?id_pig_sq=" + userId;
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
        <a href="squabs.php" style="margin-left:5%;margin-top:20px"><img src="../images/retour.png" width="50px" height="50px" style="margin-top:20px;margin-bottom: 10px;"></a>

        <div style="float:right;margin-top:15px">
            <form method="GET" action="">
                <table>
                    <tr>
                        <td width="320px"><input type="text" name="search" placeholder="Search with N° Bage or User Email" value="<?php echo htmlentities($searchTerm); ?>" style="width:100%"></td>
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
                if ($result) {
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
