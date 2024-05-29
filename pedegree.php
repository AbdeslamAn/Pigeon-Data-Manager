<?php

require_once('php/menu_user.php');

?>
<?php include "php/conix.php"; 
// $inserted_n_bage = mysqli_insert_id($connection);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedegrée</title>

 


    <style>
        
    

.button1{
  margin-right:30px;
}


/*css button*/



.button1 {
  position: relative;
  float:right;
  background: #444;
  color: black;
  text-decoration: none;
  text-transform: uppercase;
  border: none;
  letter-spacing: 0.1rem;
  font-size: 1rem;
  padding: 1rem 3rem;
  transition: 0.2s;
}

.button1:hover {
  letter-spacing: 0.2rem;
  padding: 1.1rem 3.1rem;
  background: var(--clr);
  color: var(--clr);
  /* box-shadow: 0 0 35px var(--clr); */
  animation: box 3s infinite;
}

.button1::before {
  content: "";
  position: absolute;
  inset: 2px;
  background: lightgray;
}

.button1 span {
  position: relative;
  z-index: 1;
}
.button1 .i1 {
  position: absolute;
  inset: 0;
  display: block;
}

.button1 .i1::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  left: 80%;
  top: -2px;
  border: 2px solid var(--clr);
  background: #3D405B;
  transition: 0.2s;
}

.button1:hover .i1::before {
  width: 15px;
  left: 20%;
  animation: move 3s infinite;
}

.button1 .i1::after {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  left: 20%;
  bottom: -2px;
  border: 2px solid var(--clr);
  background: #3D405B;
  transition: 0.2s;
}

.button1:hover .i1::after {
  width: 15px;
  left: 80%;
  animation: move 3s infinite;
}

@keyframes move {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(5px);
  }
  100% {
    transform: translateX(0);
  }
}

@keyframes box {
  0% {
    box-shadow: #27272c;
  }
  50% {
    box-shadow: 0 0 25px var(--clr);
  }
  100% {
    box-shadow: #27272c;
  }
}

.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
    .form-floating{
      margin-top:10px;
    }
        

    </style>
</head>
<body style="background-color: lightgrey;">
    

    
    <center>
    <div id="pc"  style="width: 60%;height: max-content;
    
    border: 1px ;
    border-radius: 10px;
    margin: 20%;
   
    background-color: #3D405B;
    " >
  <center>
<div style="width:50%;">


        

    <form action="php/pede_gree11.php" method="post" enctype="multipart/form-data">


 
   
      <center>
          <?php if (isset($_GET['ms'])): ?>
            <p><?php echo $_GET['ms']; ?></p>
            <?php endif ?>
            <div></div>
            <?php if (isset($_GET['error'])): ?>
         <p><?php echo $_GET['error']; ?></p>
         <?php endif ?>
         <?php if (isset($_GET['errorr'])): ?>
         <p><?php echo $_GET['errorr']; ?></p>
         <?php endif ?>
<input type="text" 
			       name="id" 
			       value="<?=$user['id']?>"
			       hidden>

			
           </center><br><br>
          
           <div class="form-floating">
               <input type="text" name="n_bage" id="" class="form-control" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}"  title="Please enter the input in the format: [letters]-[numbers]-[2 digits]" placeholder="MAC-0000-17"  style="color:black; font-size:20px;margin-top:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage</label>
           </div>
           <div class="form-floating">
               <input type="text" name="name_pigeon" id="full-name" class="form-control" placeholder="Name Pigeon" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Name Pigeon</label>
           </div><br>
           <div class=""><center>
           <input type="radio" required name="genre" value="male" checked><label for=""style="color:black;font-weight: bold;">Male</label>
        <input type="radio" required name="genre" value="female" ><label for=""style="color:black;font-weight: bold;">Female</label> 
        <input type="radio" required name="genre" value="yaung" ><label for=""style="color:black;font-weight: bold;">Yaung</label></center>
           </div><br>

           <div class="form-floating">
               <input type="text" name="color" id="full-name" class="form-control" placeholder="Color" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Color</label>
           </div>
           <div class="form-floating">
               <input type="text" name="loft_name" id="full-name" class="form-control" placeholder="loft name" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">loft name</label>
           </div>
           <div class="form-floating">
               <input type="text" name="straines" id="full-name" class="form-control" placeholder="Straines" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Straines</label>
           </div>
           <div class="form-floating">
          
               <input type="text" name="n_bage_father" id="full-name" class="form-control" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}" title="Please enter the input in the format: [letters]-[numbers]-[2 digits]" placeholder="N° Bage Father" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage Father</label>
           </div>
           <div class="form-floating">
               <input type="text" name="n_bage_mother" id="full-name" class="form-control" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}" placeholder="N° Bage Mother" title="Please enter the input in the format: [letters]-[numbers]-[2 digits] exampel(MAC-0000-23)" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">N° Bage Mother</label>

           </div><br>
           <center>
           
           <label style="color:black;font-weight: bold; font-size:20px;">Addtional Information  :</label><br>
         <textarea  id="" cols="40" rows="10"  name="ad_info"  style="background: ;"></textarea>
        <br>
        <br>
        <label style="color:black;font-weight: bold; font-size:20px;">Upload image of pigeon  :</label>
        <br>
        <br>
        <input type="file" name="picture" onchange="previewPicture(this)"  >
                    <img src="#" alt="" id="image" name="my_image" style="max-width: 500px; margin-top: 20px;" >
        </center>
          <br><br>
                    
       </div>
       <button style="--clr:#F3bc06;" type="submit" class="button1" ><span><b>Next</b> </span><i class="i1"></i></button>
                   <br><br><br>
</form>
</div>
<!-- <form action="upload_test/upload.php"
        method="post"
        enctype="multipart/form-data">
        
        

         <input type="file" 
               name="my_image" >
              
        <input type="submit" 
               name="ajouter"
               value="Upload">
    
       </form> -->
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
    </center>

    <!-- poure tele
    <div id="tele" style="width: 100%;
    
    border: 1px ;
    border-radius: 10px;
    margin: 20%;
    margin-right:200px;">

 
    <table  cellspacing="0" cellpading="0" width="40%" >
     <tr >
    <td  class="clas1"  >
        
    <div class="col-3 input-effect" style="width:60% ;margin:2% ;"  >
          <input class="effect-21" type="text" name="n_bage" placeholder="" required="">
            <label style="color:black;font-weight: bold;">N° Bage  </label>
            <span class="focus-border">
              <i></i>
            </span>
        </div>
  </td>
    </tr> 
    
    <tr ><td >
    <div class="col-3 input-effect" style="width:60% ;margin:2%"  >
          <input class="effect-21" type="text"  name="
        $sql = "INSERT INTO pedegree(n_bage,nam_pig,gender,color,loft_name,strains,n_father ,n_mother,ad_info)
                VALUES('$n_bage', '$name_pigeon', '$genre','$color','$loft_name','$straines','$bage_father','$bage_mother','$adinfo')";
        $result = mysqli_query($connection, $sql);
" placeholder="" required="">
            <label style="color:black;font-weight: bold;">Name Pigeon </label>
            <span class="focus-border">
              <i></i>
            </span>
        </div>
        </td>
      </tr >
        
    <tr>
    <td align="" class="clas1" ><div style="">
        <input type="radio" required name="radio" checked><label for=""style="color:black;font-weight: bold;">Male</label>
        <input type="radio" required name="radio" ><label for=""style="color:black;font-weight: bold;">Female</label>
        <input type="radio" required name="radio" style=" "><label for=""style="color:black;font-weight: bold;">Yaung</label>
      </div>
    </td>
    </tr>
        
    
    <tr>
    
        <td class="clas1"><div class="col-3 input-effect" style="width:60% ;margin:2%"  >
          <input class="effect-21" type="text" name="color" placeholder=""  required="">
            <label style="color:black;font-weight: bold;">Color </label>
            <span class="focus-border">
              <i></i>
            </span>
        </div></td>
    </tr>
    <tr>
        <td> <div class="col-3 input-effect" style="width:60% ;margin:2%"  >
          <input class="effect-21" type="text" name="loft_name" placeholder="" required="">
            <label style="color:black;font-weight: bold;">loft name </label>
            <span class="focus-border">
              <i></i>
            </span>
        </div></td>
    </tr> 
   
    <tr>
        <td  class="clas1">
        <div class="col-3 input-effect" style="width:60%;margin:2% "  >
          <input class="effect-21" type="text" name="straines" placeholder="" required="">
            <label style="color:black;font-weight: bold;">Straines </label>
            <span class="focus-border">
              <i></i>
            </span>
        </div>
     </tr>
      
    <tr>
        <td  class="clas1">
          
        <div class="col-3 input-effect" style="width:60% ;margin:2%"  >
          <input class="effect-21" type="text" name="n_bage_father" placeholder="" required="">
            <label style="color:black;font-weight: bold;">N° Bage Father </label>
            <span class="focus-border">
              <i></i>
            </span>
        </div>
       </td>
    </tr>
    <tr>
        <td  class="clas1">
        <div class="col-3 input-effect" style="width:60% ;margin:2%"  >
          <input class="effect-21" type="text" name="n_bage_mother" placeholder="" required="">
            <label style="color:black;font-weight: bold;">N° Bage Mother </label>
            <span class="focus-border">
              <i></i>
            </span>
        </div>
       </td>
    </tr>
    
    <tr>
        <td>
        
         <label style="color:black;font-weight: bold;">Addtional Information  </label>
      <textarea id="" cols="40" rows="10"  name="ad_info"  style="background: transparent;border-color: black;"></textarea>
        
        
        </td>
    
    </tr>
    <tr>
       
        <td class="clas1" ><label for="file" class="label-file">Choisir une image</label>
         <input id="file" class="input-file" type="file">
        </td>
    </tr>
    </table><br><br>
    <button style="--clr:#F3bc06" type="submit" class="button1" ><span><b>Next</b> </span><i class="i1"></i></button>
<br><br><br>
    </div> -->

    <script>
        var mobile=(/android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
        if (mobile) {
        document.getElementById("tele").style.display="block";
        document.getElementById("pc").style.display="none";
            
        }
        else{
        document.getElementById("tele").style.display="none";
        document.getElementById("pc").style.display="block";

        }

        let docTitle=document.title;
        window.addEventListener("blur",()=>{
            document.title="  Come back 😤 ";

        });
        window.addEventListener("focus",()=>{
            document.title="Fly-Higher ";

        })

    </script>
</body>
</html>
