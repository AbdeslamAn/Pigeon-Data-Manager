<?php 
    if (isset($_GET['id_pig_sq'])) {
    	$id_pig_sq = $_GET['id_pig_sq'];

    	$fakeTok = "562random";
        include "php/read_squab_1.php";

        if (mysqli_num_rows($result) > 0) {
        	$user = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pedigree</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/bootstrap-icons.css" rel="stylesheet">

        <link href="../css/templatemo-tiya-golf-club.css" rel="stylesheet">
    
       
        <style>
        
    
        .form-floating{
            margin:5px;
        }
        
       
        
            </style>
  
        
</head>
<body style="background-color: lightgrey;">


    <div class="col-lg-5 col-12 mx-auto" style="margin-top: 0.5%;width:60%;background-color: #3D405B; border-radius: 20px;margin-bottom:10% ;margin-top:10% ;">
   
            <form action="php/edit_squab.php" method="post" class="" >
            <a href="squabs.php" style="margin-top:10px;margin-left:10px;"><img src="../images/retour.png" width="50px" height="50px"></a>
            <center><?php if (isset($_GET['ms'])): ?>
            <p><?php echo $_GET['ms']; ?></p>
            <?php endif ?> 
           </center>
           <center>
          <div style="width:60%;">
            <h2 class="text-white mb-4">Change Info Squab</h2>
            
			<input type="text" 
			       name="id_pig_sq" 
			       value="<?=$user['id_pig_sq']?>"
			       hidden>

                
                    

           <div class="form-floating">
               <input type="text" name="n_bage" id="full-name" class="form-control" value="<?=$user['n_bage']?>" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}"  title="Please enter the input in the format: [letters]-[numbers]-[2 digits]" placeholder="MAC-0000-17"  required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage</label>
           </div>
           <div class="form-floating">
               <input type="text" name="date_naiss" id="full-name" class="form-control" value="<?=$user['date_naiss']?>" placeholder="Date of Birth" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Date of Birth</label>
           </div> 
           <div class="form-floating">
               <input type="text" name="straines" id="full-name" class="form-control" value="<?=$user['strains']?>" placeholder="Straines" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Straines</label>
           </div>
           
          
           <div class="form-floating">
               <input type="text" name="n_bage_father" id="full-name" class="form-control" value="<?=$user['n_father']?>" placeholder="N° Bage Father" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage Father</label>
           </div>
           <div class="form-floating">
               <input type="text" name="n_bage_mother" id="full-name" class="form-control" value="<?=$user['n_mother']?>" placeholder="N° Bage Mother" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage Mother</label>
           </div>
           <div class="form-floating">
               <input type="text" name="user_email" id="full-name" class="form-control" value="<?=$user['user_email']?>" placeholder="User Email" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">User Email</label>
           </div>
           
          
         
               <label for="" style="color:white; font-size:25px;"><h4>Upload pedigree of father:</h4></label>
            <br>
            <div class="form-floating">
          
            <input type="file" name="picture" onchange="previewPicture(this)"   >
                    <img src="../user/php/<?php echo $user['ped_father']?>"  alt="" id="imagePreview"  name="my_image" style="max-width: 500px; margin-top: 20px;" >

           </div>
         
          <br>
         
           <label for="" style="color:white; font-size:22px;"><h4>Upload pedigree of Mother:</h4></label>
            <br>
            <div class="form-floating">
            <input type="file" name="picture2" onchange="previewPicture(this)"   >
                    <img src="../user/php/<?php echo $user['ped_mother']?>" id="image1Preview"  alt=""  name="my_image" style="max-width: 500px; margin-top: 20px;" >

           </div>

           <center>
           
           <label style="color:white;font-weight: bold;">Note :</label><br><br>
         <textarea id="ad-info" name="note" style="background: ;" cols="40" rows="10"><?php echo $user['not_info']; ?></textarea>

         <br>
        <br>
      
        
                    <div class="custom-form membership-form shadow-lg">
            
                    <button style="--clr:#F3bc06;" type="submit"  class="form-control" ><span><b>Update</b> </span><i class="i1"></i></button>
<br>
                   </div>
       </div></center>
    </form>
            </div>
            <script type="text/javascript">
    var imagePreview = document.getElementById("imagePreview");
    var image1Preview = document.getElementById("image1Preview");

    function previewPicture(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function() {
                var imageUrl = reader.result;
                // Determine which image to update based on the file input name
                if (event.target.name === "picture") {
                    imagePreview.src = imageUrl;
                } else if (event.target.name === "picture2") {
                    image1Preview.src = imageUrl;
                }
            };
            reader.readAsDataURL(file);
        }
    }
</script>
                   
               

                  

                </div>
            
        
      
    
</body>
</html>
<?php 
	}else {
	    header("Location: squab2.php?$ms=wahassan2");
	    exit;
	} 

}
else {
    header("Location: squab2.php?$ms=wahassan");
    exit;
} 
?>