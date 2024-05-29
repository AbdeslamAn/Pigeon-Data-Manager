<?php 

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}



    if (isset($_GET['id'])) {
    	$id = $_GET['id'];

    	$fakeTok = "562random";
        include "php/read-single.php";

        if (mysqli_num_rows($result) > 0) {
        	$user = mysqli_fetch_assoc($result);

          

?>


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

        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/bootstrap-icons.css" rel="stylesheet">

        <link href="../css/templatemo-tiya-golf-club.css" rel="stylesheet">
    
    
     
  
        
</head>
<body style="background-color: lightgrey;">


    <div class="col-lg-5 col-12 mx-auto" style="margin-top: 0.5%;height:100px;">
   
            <form action="php/edit_search.php" method="post" class="custom-form membership-form shadow-lg" >
            <a href="users.php"><img src="../images/retour.png" width="50px" height="50px"></a>
            <center><mark  style="background-color: #3D405B;">
				<?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
                 
			</mark>  
           </center>
          
            <center><h2 class="text-white mb-4">Change Information</h2></center>
            
			<input type="text" 
			       name="id" 
			       value="<?=$user['id']?>"
			       hidden>

                    <div class="form-floating">
                        <input type="text" name="nom" id="full-name" class="form-control" placeholder="First Name" value="<?=$user['nom']?>" style="color:black; font-size:20px;" >
                        
                        <label for="floatingInput" style="color:black; font-size:20px;"> First Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="prenom" id="full-name" class="form-control" placeholder="Last Name" value="<?=$user['prenom']?>" style="color:black; font-size:20px;">
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">Last Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="nember" name="tel" id="tel"  class="form-control" placeholder="tel" value="<?=$user['tel']?>"style="color:black; font-size:20px;" >
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">tel</label>
                    </div>
                    <div class="form-floating">
                        <input type="nember" name="type" id="tel"  class="form-control" placeholder="type" value="<?=$user['type']?>" style="color:black; font-size:20px;">
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">Type</label>
                    </div>


                    <div class="form-floating">
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" value="<?=$user['email']?>" required="" style="color:black; font-size:20px;">
                        
                        <label for="floatingInput" style="color:black; font-size:20px;">Email </label>
                    </div>
                    <div class="form-floating" style=".password-container input[type=password],.password-container input[type=text]{width: 100%; padding: 12px 36px 12px 12px; box-sizing: border-box;}">



                        <input type="text" name="passwordd" id="password" autocomplete="current-password" class="form-control" value="<?=$user['passwordd']?>"   placeholder="Password" title="Au moins 8 caractères, un chiffre, une lettre majuscule et une minuscule" style="color:black; font-size:20px;">
 
                     

                        <label for="floatingInput" style="color:black; font-size:20px;">Password </label>
                    </div> 
                    
                   
                   <center><label class="class1">Male</label>
                    <input type="radio" name="genre" value="male"   <?php echo ($user['genre'] == "male")?"checked":"" ?> >
                   <label  class="class1">&nbsp; &nbsp; &nbsp; &nbsp; Female</label> 
                    <input type="radio" name="genre" value="female"  <?php echo ($user['genre'] == "female")?"checked":"" ?> >
                </center><br>

                  

                    <button type="submit" class="form-control" name="ajouter">Update</button>
                </div>
            </form>
        </div>
      
    
</body>
</html>
<?php 
	}else {
	    header("Location: users.php");
	    exit;
	} 

}else {
    header("Location: users.php");
    exit;
} 
?>