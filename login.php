<?php 
   session_start();
   
   
   if (!isset($_SESSION['email']) && !isset($_SESSION['id'])) {   
   	require_once('php/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
    
    
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
    	<style>
        .nav-link:hover{
            color: #F3bc06;
        }
        .nav-link{
            text-decoration: none;
            color: #F3bc06;
        }
    	</style>
  
        
</head>
<body style="background-color: lightgrey;">


    <div class="col-lg-5 col-12 mx-auto" style="margin-top: 50px;height:100px;">
   	<br><br><br><br>
            <form action="php/log_in.php" method="post" class="custom-form membership-form shadow-lg" role="form">
            <center><?php if (isset($_GET['ms'])): ?>
            <p><?php echo $_GET['ms']; ?></p>
            <?php endif ?>
                 
			
           </center>
            <h2 class="text-white mb-4">Login</h2>
                    <div class="form-floating">
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required="" style="color:black; font-size:20px;">
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">Email </label>
                    </div>
                    <div class="form-floating" style=".password-container input[type=password],.password-container input[type=text]{width: 100%; padding: 12px 36px 12px 12px; box-sizing: border-box;}">



                        <input type="password" name="passwordd" id="password" autocomplete="current-password" class="form-control" placeholder="Password" title="Au moins 8 caractères, un chiffre, une lettre majuscule et une minuscule" style="color:black; font-size:20px;">
 
                     

                        <label for="floatingInput" style="color:black; font-size:20px;"> Password </label>
                    </div> 
                    
                    <input type="checkbox" onclick="togglePassword()" /> <label class="class1" style=" font-size:20px;">Show Password</label> 
                    <br><br>

                    <button type="submit" class="form-control" name="ajouter" style=" font-size:20px;">Login</button>
                    <br>
                    <a class="nav-link" href="singup.php" style="font-size:20px;">You don't have an acount?</a>
                    
                </div>
            </form>
            
        </div>
        <br>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>
