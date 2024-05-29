<?php 


include('../php/session.php');

$user_email = $_SESSION['login_user'];


$sql = "SELECT  id_pig_sq,n_bage,name_pig,strains,gander,color,n_father,img_pig,n_mother,not_info,ped_father,ped_mother FROM pigeon_squab WHERE user_email = '$user_email' and pig_squab='pigeon'";
$result = mysqli_query($connection, $sql);

