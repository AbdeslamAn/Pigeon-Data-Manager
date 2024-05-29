<?php require_once('php/menu.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
    
    
        <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var passwordFieldd = document.getElementById("passwordd");
            if (passwordField.type === "password" && passwordFieldd.type === "password") {
                passwordField.type = "text";
                passwordFieldd.type = "text";

            } else {
                passwordField.type = "password";
                passwordFieldd.type = "password";

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


    <div class="col-lg-5 col-12 mx-auto" style="margin-top:150px ;height:100px;">
   
            <form action="php/sing_up.php" method="post" class="custom-form membership-form shadow-lg" role="form">
            <center><?php if (isset($_GET['ms'])): ?>
            <p><?php echo $_GET['ms']; ?></p>
            <?php endif ?>
                 
           </center>
            <h2 class="text-white mb-4">Sign up</h2>

                    <div class="form-floating">
                        <input  type="text" name="nom" id="full-name" class="form-control" placeholder="First Name" required="" style="color:black; font-size:20px;" >
                        
                        <label for="floatingInput" style="color:black; font-size:20px;"> First Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="prenom" id="full-name" class="form-control" placeholder="Last Name" required="" style="color:black; font-size:20px;">
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">Last Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="nember" name="tel" id="tel"  class="form-control" placeholder="tel" required="" style="color:black; font-size:20px;">
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">tel</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required="" style="color:black; font-size:20px;">
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">Email </label>
                    </div>
                    <div class="form-floating">
    <input type="password" name="passwordd" id="password" autocomplete="current-password" class="form-control" 
           placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$"
           title="Au moins 8 caractères, un chiffre, une lettre majuscule et une minuscule" 
           required style="color:black; font-size:20px;">
    <label for="floatingInput" style="color:black; font-size:20px;">Password</label>
</div>
                    <div class="form-floating">
                        <input type="password" name="password" id="passwordd"  class="form-control" placeholder="Confirm Password" required="" style="color:black; font-size:20px;"> 
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">Confirm Password </label>
                    </div>
                    
                    <input type="checkbox" onclick="togglePassword()" /> <label class="class1" style=" font-size:20px;">Show Password</label> 
                    <br>
                   
                   <center><label class="class1" style=" font-size:20px;">Male</label> <input type="radio" name="genre" value="male" checked><label  class="class1" style=" font-size:20px;">&nbsp; &nbsp; &nbsp; &nbsp; Female</label>  <input type="radio" name="genre" value="female"></center><br>

                  

                    <button type="submit" class="form-control" name="ajouter" style=" font-size:20px;">Create</button>
                    <br>
                    <a class="nav-link" href="login.php" style=" font-size:20px;">You have an acount?</a>
                </div>
            </form>
        </div>
      
    
</body>
</html>
