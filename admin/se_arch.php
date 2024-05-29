<?php


session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}



$searchTerm = isset($_GET['search']) ? $_GET['search'] : "";
$result = null;


if (!empty($searchTerm)) {
    // Perform the search and assign the result to the $result variable
    include "php/conix.php"; // Include the database connection file

    $query = "SELECT * FROM user WHERE nom LIKE '%{$searchTerm}%' OR prenom LIKE '%{$searchTerm}%' OR email LIKE '%{$searchTerm}%'";
    $result = mysqli_query($connection, $query);

    // Close the database connection
    mysqli_close($connection);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>CRUD | Users</title>
    <link rel="stylesheet" type="text/css" href="style12.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script>
        function confirmDelete(userId, firstName, lastName) {
            if (confirm("Are you sure you want to delete the user: " + firstName + " " + lastName + "?")) {
                window.location.href = "php/delete_search.php?id=" + userId;
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
    <div class="content read" style="margin-top:200px; background-color:#3D405B;">  
        <a href="users.php" style="margin-left:5%;margin-top:20px"><img src="../images/retour.png" width="50px" height="50px" style="margin-top:20px;margin-bottom: 10px;"></a>

        <div style="float:right;margin-top:15px">
            <form method="GET" action="">
                <table>
                    <tr>
                        <td width="320px"><input type="text" name="search" placeholder="Search by name or email" value="<?php echo htmlentities($searchTerm); ?>" style="width:100%"></td>
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
                <tr>
                    <td><b>#</b></td>
                    <td><b>Name</b></td>
                    <td><b>Prenom</b></td>
                    <td><b>Gender</b></td>
                    <td><b>Type</b></td>
                    <td><b>Tele</b></td>
                    <td><b>Email</b></td>
                    <td><b>Password</b></td>
                    <td><b>Action</b></td>
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
                            <td><b><?=$users['nom']?></b></td>
                            <td><b><?=$users['prenom']?></b></td>
                            <td><b><?=$users['genre']?></b></td>
                            <td><b><?=$users['type']?></b></td>
                            <td><b><?=$users['tel']?></b></td>
                            <td><b><?=$users['email']?></b></td>
                            <td><b><?=$users['passwordd']?></b></td>
                            <td class="actions">
                                <a href="edit_search.php?id=<?=$users['id']?>&search=<?=$searchTerm?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?=$users['id']?>, '<?=$users['nom']?>', '<?=$users['prenom']?>');" class="trash"><i class="fas fa-trash fa-xs"></i></a>
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
