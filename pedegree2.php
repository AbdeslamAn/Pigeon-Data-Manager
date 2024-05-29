
<?php

require_once('php/menu_user.php');

// if (isset($_POST["next"])) {

//     $label1 = $_GET['label1'];
//     $label2 = $_GET['label2'];
//     $label3 = $_GET['label3'];
//     $ad_info = $_GET['ad_info'];
//     $nam_pig=$_GET['nam_pig'];
//     $img_dow=$_GET['img_dow'];
//     }
     
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/bootstrap-icons.css" rel="stylesheet">

<link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
</head>

<style>
    .class1{
        border: solid;
        border: 1px;
        
    }
    form{
        margin-top:200px;
    }
    label{
        cursor:pointer;
    }
    button{
        border:none;
    }
    textarea{
       
        color:black;
    }
    .rows2{
        margin: 1.5%;
        margin-right:10px;

    }
    #imgright{
        float:left;
        margin-right:100px;
    }

    /* style popape */
    .box {

}
.button23{

  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid pink;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button23:hover {
  background: pink;
}


.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
  background-color: #3D405B;
}

.popup  {
  margin-top: 200px;

  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 80%;
  
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

.form-control{
margin:10px;

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

        
</style>
<body style="background-color: lightgrey;">
    <form style="">
    <center>
    <table border="1" cellspacing="0" cellpading="0" style="background-color:  #3D405B;width:;">
      

            <td rowspan="4">
                <center>
                <!-- <a class="navbar-brand d-flex align-items-center" href=""> -->
                    <img src="images/logo.png" style="width: 137.5px;height: 112.5px;">
                   
                </a>
                </center>
            </td>
            <td rowspan="16">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;" ><label style="color: red;font-size=22px;cursor:auto;" name="label1"> <?php echo htmlspecialchars($_POST['n_bage']); ?></label></button></center> 
                    <textarea name="textarea1" id=""  cols="25"   rows="25"    disabled style="font-size=24px;">" <?php echo htmlspecialchars($_POST['nam_pig']); ?>" <?php echo  htmlspecialchars($_POST['ad_info']); ?></textarea>
       

                </div>

            </td>
           
        </tr> 

        <tr>
            <td rowspan="8">
                <div class="class1">
                <div class="box">
                    


                    <center><a class="button" href="les_pedegree/pedegree3.php"><button type="button" style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;"name="label2"> <?php echo htmlspecialchars($_POST['n_father']); ?></label></button></a></center>
                    <textarea name="textarea2" id=""  cols="25"   rows="18"    disabled style=""></textarea>
                
                </div>
                <!-- <div id="popup" class="overlay" style="width:100%;">
                    <div class="popup" style="width:50%;height:60%;">
                        <h2>Here i am</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content" style="width:100%;height:1000px;">
                        <div class="col-lg-5 col-12 mx-auto" style="margin-top: 0.5%;width: 80%;">
   
   <form action="php/pedegree11.php" method="post" class="custom-form membership-form shadow-lg" role="form" style="">
   <center>
                 
  </center>
   
   

           <div class="form-floating">
               <input type="text" name="n_bage" id="full-name" class="form-control" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}" disabled style="" title="Please enter the input in the format: [letters]-[numbers]-[2 digits]" placeholder="MAC-0000-17"  required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;"> </label>
           </div>
           <div class="form-floating">
               <input type="text" name="name_pigeon" id="full-name" class="form-control" placeholder="Name Pigeon" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Name Pigeon</label>
           </div>
           <div class=""><center>
           <input type="radio" required name="genre" value="male" checked><label for=""style="color:black;font-weight: bold;">Male</label>
        <input type="radio" required name="genre" value="female" ><label for=""style="color:black;font-weight: bold;">Female</label> 
        <input type="radio" required name="genre" value="yaung" ><label for=""style="color:black;font-weight: bold;">Yaung</label></center>
           </div>

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

           </div>
           <center>
           
           <label style="color:black;font-weight: bold;">Addtional Information  :</label><br><br>
         <textarea  id="" cols="40" rows="10"  name="ad_info"  style="background: ;"></textarea>
        <br>
        
     
        </center> <br><br>
          
                    <button style="--clr:#F3bc06;" type="submit" class="button1" ><span><b>Next</b> </span><i class="i1"></i></button>
                   
       </div>
   </form>
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
                        </div> -->
                    </div>
                </div>

                </div>
            </td>
          
           
        </tr> 

        <tr>
            <td rowspan="4">
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">ar</label></button></center>
                        <textarea name="" id=""  cols="25"     rows="10"    disabled style=""></textarea>
           
    
                    </div>
                </center>
            </td>
          
           
        </tr> 

        <tr>
            <td rowspan="">
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;cursor:pointer;"><label style="color: red;">ae</label></button></center>
                        <textarea name="" id=""  cols="25"    rows="6"     disabled style=""></textarea>
           
    
                    </div>
                </center>
            </td>
            <td rowspan="">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">az</label></button></center>
                    <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
       

                </div>
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">nnnn</label></button></center>
                    <textarea name="" id=""  cols="25"  class="rows2"  rows="2"    disabled style=""></textarea>
       

                </div>


            </td>
           
           
        </tr> 

        <tr>
            <td rowspan="4">
                <center>
               
                </center>
            </td>
          
           
        </tr> 
        <tr>
            <td >
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">vvvv</label></button></center>
                        <textarea name="" id=""  cols="25"    rows="6"     disabled style=""></textarea>
           
    
                    </div>
                </center>
            </td>
            <td rowspan="">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">xxxx</label></button></center>
                    <textarea name="" id=""  cols="25"  class="rows2"  rows="2"    disabled style=""></textarea>
       

                </div>
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">wwww</label></button></center>
                    <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
       

                </div>

            </td>
           
        </tr> 

        <tr>
            <td rowspan="4">
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">mmm</label></button></center>
                        <textarea name="" id=""  cols="25"     rows="10"    disabled style=""></textarea>
           
    
                    </div>
                </center>
            </td>
            <td rowspan="">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">llll</label></button></center>
                    <textarea name="" id=""  cols="25"    rows="6"     disabled style=""></textarea>
       

                </div>
                
                 

            </td>
            <td>
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">kkkk</label></button></center>
                    <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
       

                </div>
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">jjjj</label></button></center>
                    <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
       

                </div>
            </td>
           
        </tr> 

        <tr>
            <td >
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">hhhh</label></button></center>
                        <textarea name="" id=""  cols="25"    rows="6"     disabled style=""></textarea>
           
    
                    </div>
                </center>
            </td>
            <td rowspan="">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">dddd</label></button></center>
                    <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
       

                </div>
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">sss</label></button></center>
                    <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
       

                </div>

            </td>
           
        </tr> 

        <tr>
            <td rowspan="4" width="">
                
                <a class="navbar-brand d-flex align-items-center" id="imgright" href="" style="margin-left:40px">
                    <img src="php/<?php echo $img_dow; ?>" style="width: 140px;height: 90px;">
                   
                </a>
                
            </td>
           
           
        </tr> 

        <tr>
            <td rowspan="8">
                <div class="class1">
                <center><a class="button23" href="#popup1" ><button type="submit" style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;"name="label3"><?php echo $label3; ?></label></button></a></center>
                    <textarea name="textarea3" id=""  cols="25"   rows="18"    disabled style=""></textarea>
       

                </div>
                <div id="popup1" class="overlay" style="width:100%;">
                    <div class="popup" style="width:50%;height:60%;">
                        <h2>Here i am</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content" style="width:100%;height:1000px;">
                        <div class="col-lg-5 col-12 mx-auto" style="margin-top: 0.5%;width: 80%;">
   
   <form action="php/sing_up.php" method="post" class="custom-form membership-form shadow-lg" role="form" style="">
   <center><?php if (isset($_GET['ms'])): ?>
            <p><?php echo $_GET['ms']; ?></p>
            <?php endif ?>
                 
  </center>
   
   

           <div class="form-floating">
               <input type="text" name="n_bage" id="full-name" class="form-control" pattern="[a-zA-Z]+-[0-9]+-[0-9]{2}" disabled style="" title="Please enter the input in the format: [letters]-[numbers]-[2 digits]" placeholder="MAC-0000-17"  required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;"> <?php echo $label3; ?></label>
           </div>
           <div class="form-floating">
               <input type="text" name="name_pigeon" id="full-name" class="form-control" placeholder="Name Pigeon" required="" style="color:black; font-size:20px;">
               
               <label for="floatingInput" style="color:black; font-size:20px;">Name Pigeon</label>
           </div>
           <div class=""><center>
           <input type="radio" required name="genre" value="male" checked><label for=""style="color:black;font-weight: bold;">Male</label>
        <input type="radio" required name="genre" value="female" ><label for=""style="color:black;font-weight: bold;">Female</label> 
        <input type="radio" required name="genre" value="yaung" ><label for=""style="color:black;font-weight: bold;">Yaung</label></center>
           </div>

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

           </div>
           <center>
           
           <label style="color:black;font-weight: bold;">Addtional Information  :</label><br><br>
         <textarea  id="" cols="40" rows="10"  name="ad_info"  style="background: ;"></textarea>
        <br>
        
        <input type="file" name="picture" onchange="previewPicture(this)"  >
                    <img src="#" alt="" id="image" name="my_image" style="max-width: 500px; margin-top: 20px;" >
        </center> <br><br>
          
                    <button style="--clr:#F3bc06;" type="submit" class="button1" ><span><b>Next</b> </span><i class="i1"></i></button>
                   
       </div>
   </form>
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
            </td>
       
           
        </tr> 

        <tr>
            <td rowspan="4"> 
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">gggg</label></button></center>
                        <textarea name="" id=""  cols="25"     rows="10"    disabled style=""></textarea>
                            <img src="" alt="" srcset="">
    
                    </div>
                </center>
            </td>
            
           
        </tr> 

        <tr>
            <td >
                <center>
                   
                        <div class="class1">
                            <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">pppp</label></button></center>
                            <textarea name="" id=""  cols="25"    rows="6"     disabled style=""></textarea>
               
        
                        </div>
                </center>
            </td>
            <td >
                <center>
                   
                        <div class="class1">
                            <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">ooo</label></button></center>
                            <textarea name="" id=""  cols="25"  class="rows2"  rows="2"    disabled style=""></textarea>
               
        
                        </div>
                        <div class="class1">
                            <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">iiii</label></button></center>
                            <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
               
        
                        </div>
                </center>
            </td>
           
                
             
            
        
           
        </tr> 

        <tr>
            <td rowspan="4">
                <center>
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images/anna-rosar-ZxFyVBHMK-c-unsplash.jpg" style="width: 140px;height: 90px;">
                   
                </a>
                </center>
            </td>
            
          
        </tr> 

        <tr>
            <td >
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">uuuu</label></button></center>
                        <textarea name="" id=""  cols="25"    rows="6"     disabled style=""></textarea>
           
    
                    </div>
                </center>
            </td>
            
            <td rowspan="">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">yyyy</label></button></center>
                    <textarea name="" id=""  cols="25"  class="rows2"  rows="2"    disabled style=""></textarea>
       

                </div>
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">ttt</label></button></center>
                    <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
       

                </div>
                

            </td>
           
        </tr> 

        <tr>
            <td rowspan="4">
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">eee</label></button></center>
                        <textarea name="" id=""  cols="25"     rows="10"    disabled style=""></textarea>
           
    
                    </div>
                </center>
            </td>
            <td rowspan="">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">zzzzz</label></button></center>
                    <textarea name="" id=""  cols="25"    rows="6"     disabled style=""></textarea>
       

                </div>
                

            </td>
            <td rowspan="">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">ffff</label></button></center>
                    <textarea name="" id=""  cols="25"  class="rows2"  rows="2"    disabled style=""></textarea>
       

                </div>
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">ddddd</label></button></center>
                    <textarea name="" id=""  cols="25" class="rows2"   rows="2"    disabled style=""></textarea>
       

                </div>
                

            </td>
        </tr> 

        <tr>
            <td>
                <center>
                    <div class="class1">
                        <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">cccccc</label></button></center>
                        <textarea name="" id=""  cols="25"    rows="6"     disabled style=""></textarea>
           
    
                    </div>
                </center>
            </td>
            <td rowspan="">
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">bbbbbb</label></button></center>
                    <textarea name="" id=""  cols="25"  class="rows2"  rows="2"    disabled style=""></textarea>
       

                </div>
                <div class="class1">
                    <center><button style="width: max-content;height: max-content;margin-bottom: 0%;"><label style="color: red;">aaaaaaa</label></button></center>
                    <textarea name="" id=""  cols="25"  class="rows2"  rows="2"    disabled style=""></textarea>
       

                </div>


            </td>
           
        </tr> 
        
        
        
       
    </table></center>
    </form>
<div>
<div class="">

</div>

</div>


</body>
</html>