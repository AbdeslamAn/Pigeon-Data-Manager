<?php 
    if (isset($_GET['id'])) {
    	$id = $_GET['id'];

    	$fakeTok = "562random";
        include "php/read_pedegree.php";

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
   
            <form action="php/edit_pedegree.php" method="post" class="" >
            <a href="pedigrees.php" style="margin-top:10px;margin-left:10px;"><img src="../images/retour.png" width="50px" height="50px"></a>
            <center><?php if (isset($_GET['ms'])): ?>
            <p><?php echo $_GET['ms']; ?></p>
            <?php endif ?> 
           </center>
           <center>
          <div style="width:60%;">
            <h2 class="text-white mb-4">Change Your Pedigree</h2>
            
			<input type="text" 
			       name="id" 
			       value="<?=$user['id']?>"
			       hidden>

                
                    

           <div class="form-floating">
               <input type="text" name="n_bage" id="full-name" class="form-control" value="<?=$user['n_bage']?>" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}"  title="Please enter the input in the format: [letters]-[numbers]-[2 digits]" placeholder="MAC-0000-17"  required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage</label>
           </div>
           <div class="form-floating">
               <input type="text" name="name_pigeon" id="full-name" class="form-control" value="<?=$user['nam_pig']?>" placeholder="Name Pigeon" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Name Pigeon</label>
           </div>
           <div class=""><center>
           
           <input type="radio" required name="genre" value="male"    <?php echo ($user['gender'] == "male")?"checked":"" ?> ><label for=""style="color:black;font-weight: bold;">Male</label>
        <input type="radio" required name="genre" value="female"    <?php echo ($user['gender'] == "female")?"checked":"" ?> ><label for=""style="color:black;font-weight: bold;">Female</label> 
        <input type="radio" required name="genre" value="yaung"    <?php echo ($user['gender'] == "yaung")?"checked":"" ?> ><label for=""style="color:black;font-weight: bold;">Yaung</label></center>
           </div>

           <div class="form-floating">
               <input type="text" name="color" id="full-name" class="form-control" value="<?=$user['color']?>" placeholder="Color" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Color</label>
           </div>
           <div class="form-floating">
               <input type="text" name="loft_name" id="full-name" class="form-control" value="<?=$user['loft_name']?>" placeholder="loft name" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">loft name</label>
           </div>
           <div class="form-floating">
               <input type="text" name="straines" id="full-name" class="form-control" value="<?=$user['strains']?>" placeholder="Straines" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Straines</label>
           </div>
           <div class="form-floating">
          
               <input type="text" name="n_bage_father" id="full-name" class="form-control" value="<?=$user['n_father']?>" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}" title="Please enter the input in the format: [letters]-[numbers]-[2 digits]" placeholder="N° Bage Father" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage Father</label>
           </div>
           <div class="form-floating">
               <input type="text" name="n_bage_mother" id="full-name" class="form-control" value="<?=$user['n_mother']?>" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}" placeholder="N° Bage Mother" title="Please enter the input in the format: [letters]-[numbers]-[2 digits] exampel(MAC-0000-23)" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage Mother</label>

           </div>
           <center>
           
           <label style="color:black;font-weight: bold;">Addtional Information  :</label><br><br>
         <textarea id="ad-info" name="ad_info" style="background: ;" cols="40" rows="10"><?php echo $user['ad_info']; ?></textarea>

         <br>
        <br>
        <label style="color:black;font-weight: bold; font-size:20px;">Upload image of pigeon  :</label>
        <br>
        <br>
        <input type="file" name="picture" onchange="previewPicture(this)"  src="../php/<?php echo $user['img_dow']?>" >
                    <img src="../php/<?php echo $user['img_dow']?>" alt="" id="image" name="my_image" style="max-width: 500px; margin-top: 20px;" >

                </center>
          <br><br>
        
                    <div class="custom-form membership-form shadow-lg">
            
                    <button style="--clr:#F3bc06;" type="submit" class="form-control"  ><span><b>Update</b> </span><i class="i1"></i></button>
<br><br>
                   </div>
       </div></center>
    </form>
            </div>
    <script type="text/javascript" >
        // L'image img#image
        var image = document.getElementById("image");
        
        // La fonction previewPicture
        var previewPicture  = function (e) {

            // e.files contient un objet FileList
            const [picture] = e.files

            // "picture" est un objet File
            if (picture) {
                // On change l'URL de l'image
                image.src = URL.createObjectURL(picture)
            }
        } 
    </script>
                   
               

                  

                </div>
            
        
      
    
</body>
</html>
<?php 
	}else {
	    header("Location: pedigrees.php?$ms=wahassan2");
	    exit;
	} 

}
else {
    header("Location: profil.php?$ms=wahassan");
    exit;
} 
?>