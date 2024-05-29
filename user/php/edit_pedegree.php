<?php 
if (isset($_POST['n_bage']) &&
    isset($_POST['n_bage_father']) &&
    isset($_POST['id'])) {

    include "conix.php";

    $n_bage = $_POST['n_bage'];
    $nam_pig = $_POST['name_pigeon'];
    $gender = $_POST['genre'];
    $color = $_POST['color'];
    $loft_name = $_POST['loft_name'];
    $strains = $_POST['straines'];
    $n_father = $_POST['n_bage_father'];
    $n_mother = $_POST['n_bage_mother'];
    $ad_info = $_POST['ad_info'];
    $id = $_POST['id'];

    $img_upload_path = '';
    if (!empty($_FILES['picture']['name'])) {
        $img_name = $_FILES['picture']['name'];
        $img_size = $_FILES['picture']['size'];
        $tmp_name = $_FILES['picture']['tmp_name'];
        $error = $_FILES['picture']['error'];

        // Check if the image has a valid extension
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png"); 
        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = '../php/uploads/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
        }
    }


    if (empty($n_bage)) {
        header("Location: ../edit_pedegree.php?ms=N° Bage is required&id=$id");
        exit;
    } else {

        $sql = "UPDATE pedegree
                SET n_bage='$n_bage',nam_pig='$nam_pig', gender='$gender', color='$color',loft_name='$loft_name',strains='$strains',n_father='$n_father',n_mother='$n_mother',ad_info='$ad_info'";
        
        if (!empty($img_upload_path)) {
            $sql .= ",img_dow='$img_upload_path'";
        }
        if (!empty($img_upload_path2)) {
            $sql .= ",img_dow2='$img_upload_path2'";
        }

        $sql .= " WHERE id='$id'";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            $ms = "<h3 style=background-color:lightgray;border-radius:20px;width:300px;>Successfully Updated.</h3>";
            header("Location: ../edit_pedegree.php?ms=$ms&id=$id");
            exit;
        } else {
            $ms = "Unknown error occurred";
            header("Location: ../edit_pedegree.php?ms=$ms&id=$id");
            exit;
        }
    }
} else {
    header("Location: ../pedegree.php?ms=hello");
    exit;
}
?>
