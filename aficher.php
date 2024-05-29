<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    // Use the password as needed
    // ...
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Show Password Example</title>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</head>
<body>
    <form method="POST" action="">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" />

        <br/>

        <input type="checkbox" onclick="togglePassword()" /> Show Password

        <br/>

        <input type="submit" value="Submit" />
    </form>
</body>
</html>