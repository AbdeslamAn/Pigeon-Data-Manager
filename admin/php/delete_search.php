<?php
// delete.php

if (isset($_GET['id'])) {
	include "conix.php";
    // Retrieve the user ID from the query parameter
    $userId = $_GET['id'];

    // Perform the deletion operation (e.g., execute a database query)
    // Replace this with your actual deletion logic
    $sql = "DELETE FROM user WHERE id = $userId";

    // Execute the deletion query
    // Replace the database connection and query execution with your own code
 
    $result = mysqli_query($connection, $sql);

    // Check if the deletion was successful
    if ($result) {
        // Deletion was successful
        $message = "<h3 style=background-color:yellow;width:fit-content;height: fit-content;>User deleted successfully.</h3>";
    } else {
        // Deletion failed
        $message = "<h3 style=background-color:yellow;width:fit-content;height: fit-content;>Failed to delete user..</h3>";
    }

    // Redirect back to the main page with a message
    header("Location: ../se_arch.php?ms=" . urlencode($message));
    exit();
} else {
    // No user ID specified
    $message = "Invalid request.";
    header("Location:  ../se_arch.php?ms=" . urlencode($message));
    exit();
}
?>
