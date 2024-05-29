<?php 


include('../php/session.php');

$user_email = $_SESSION['login_user'];


$sql = "SELECT  id_pig_sq,n_bage,date_naiss,strains,n_father,n_mother,not_info,ped_father,ped_mother FROM pigeon_squab WHERE user_email = '$user_email' and pig_squab='squab'";
$result = mysqli_query($connection, $sql);

