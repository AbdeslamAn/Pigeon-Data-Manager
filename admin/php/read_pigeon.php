<?php 

include "conix.php";

$sql = "SELECT  id_pig_sq,n_bage,name_pig,strains,gander,color,pig_squab,n_father,img_pig,n_mother,not_info,ped_father,ped_mother ,user_email FROM pigeon_squab WHERE  pig_squab='pigeon'";
$result = mysqli_query($connection, $sql);

