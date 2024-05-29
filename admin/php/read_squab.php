<?php 



include "conix.php";

$sql = "SELECT  id_pig_sq,n_bage,date_naiss,strains,n_father,n_mother,not_info,ped_father,ped_mother,user_email FROM pigeon_squab WHERE pig_squab='squab'";
$result = mysqli_query($connection, $sql);

