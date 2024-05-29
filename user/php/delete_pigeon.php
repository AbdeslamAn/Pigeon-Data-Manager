<?php
// delete.php

if (isset($_GET['id_pig_sq'])) {
	include "conix.php";
    // Retrieve the user ID from the query parameter
    $userId = $_GET['id_pig_sq'];

    // Perform the deletion operation (e.g., execute a database query)
    // Replace this with your actual deletion logic
    $sql = "DELETE FROM pigeon_squab WHERE id_pig_sq = $userId";

    // Execute the deletion query
    // Replace the database connection and query execution with your own code
 
    $result = mysqli_query($connection, $sql);

    // Check if the deletion was successful
    if ($result) {
        // Deletion was successful
        $message = "<h3 style=background-color:lightgray;border-radius:20px;width:300px;>Squab deleted successfully.</h3>";
    } else {
        // Deletion failed
        $message = "<h3 style=background-color:lightgray;border-radius:20px;width:300px;>Failed to delete Squab.</h3>";
    }

    // Redirect back to the main page with a message
    header("Location: ../my_pigeon.php?ms=" . urlencode($message));
    exit();
} else {
    // No user ID specified
    $message = "Invalid request.";
    header("Location:  ../my_pigeon.php?ms=" . urlencode($message));
    exit();
}
?>
