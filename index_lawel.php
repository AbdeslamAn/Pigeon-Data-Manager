<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Fly-Hieghr</title>
        <link rel="stylesheet" href="style_service.css">
        <link rel="stylesheet" href="css/style.css">
      

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
        <link rel="stylesheet" href="css/css_table.css">
<!-- <script LANGAUGE="JavaScript">
    function disablesect(e) {
        return true
    }
    function reEnable() {
        return true
    }

    document.onselectstart = new Function("return false")
    document.oncontextmenu = new Function("return false")
    
    if(window.sidebar){
      document.onmousedown=disablesect
      document.onclick=reEnable



    }


</script>-->
        
<!--

TemplateMo 587 Tiya Golf Club

https://templatemo.com/tm-587-tiya-golf-club

-->

    <style>
        .nav-link:hover{
            color: #F3bc06;
            border-bottom: 2px solid #F3bc06;
        }
        .nav-link{
            text-decoration: none;
            color: #F3bc06;
            padding: 30px;
        }
    </style>
    </head>
    
    <body >

        <main>

            <nav class="navbar navbar-expand-lg" >                
                <div class="container"  style="margin-left: 4px;">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="images/logo.png" style="width: 140px;height: 90px;">
                       
                    </a>
                   
      

                 
    
                   
    
                    <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 100px;">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1" >Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Service</a>
                            </li>

                        

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact Us</a>
                            </li>

                          
                        </ul>

                       
                    </div>
                    
                </div>
                <div id=""  style="margin-right: 30px;" class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item dropdown" class="nav-item">
                           
                                <a  class="btn custom-btn custom-border-btn" style="cursor : auto;">  Se Connecter <img src="images/iconprofil1.png" style="width:35px ; height:35px ;"></a>
                            
                            
                                

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item"  data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Login</a></li>

                                    <li><a class="dropdown-item" href="singup.php">Sing Up</a></li>
                                </ul>
                            </li>
                            </ul>
                        
                        </div>
            </nav>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h1 class="offcanvas-title" id="offcanvasExampleLabel" style="color: white;"> Login</h1>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="php/login.php" method="post" role="form">
                    <center>
                    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                    
                     </center>
                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-number" style="color: black;" ><b>Email</b>  </label>

                                <input type="text" name="email1" id="member-login-number" class="form-control" placeholder="Email" >
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-password" style="color: black; "><b>Password</b> </label>

                                <input type="password" name="password1" id="member-login-password"  class="form-control" placeholder="Password" >
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>

                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control" style="background-color: #3D405B;">Login</button>
                            </div>

                            <div class="text-center my-4">
                                <a href="#">Forgotten password?</a>
                            </div>

                            <a href="singup.php">Create new acount</a> 
                        </div>
                    </form>

                     
                </div>

                
            </div>

            
            
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            

                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                
                                <span class="cd-words-wrapper">
                                    <b class="is-visible" style="color: #F3bc06;">Fly</b>
                                    <b style="color: #F3bc06;">Higher</b>
                                    
                                </span>
                            </h1>

                            <div class="custom-btn-group">
                                

                                <a href="singup.php" class="link smoothscroll"><button class="btn custom-btn smoothscroll me-3"  style="background-color: white; color: black;">Become a member</button> </a>
                            </div>
                        </div>

                     

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-lg-5 mb-4">About Tiya</h2>
                        </div>

                        <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                            <h3 class="mb-3">Tiya Club History</h3>

                            <p><strong>Since 1984</strong>, Tiya is ranked #8 in the top 10 golf courses in the world. Tiya is Bootstrap 5 HTML CSS template for golf clubs. Anyone can modify and use this layout for commercial purposes.</p>

                            <p>Tiya Golf Club is 100% free CSS template provided by TemplateMo website. Please tell your friends about our website. Thank you for visiting.</p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/members/portrait-young-handsome-businessman-wearing-suit-standing-with-crossed-arms-with-isolated-studio-white-background.jpg" class="member-block-image img-fluid" alt="">

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="member-block-info d-flex align-items-center">
                                    <h4>Michael</h4>

                                    <p class="ms-auto">Founder</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/members/successful-asian-lady-boss-red-blazer-holding-clipboard-with-documens-pen-working-looking-happy-white-background.jpg" class="member-block-image img-fluid" alt="">

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-linkedin"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="member-block-info d-flex align-items-center">
                                    <h4>Sandy</h4>

                                    <p class="ms-auto">Co-Founder</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

           
                


            <section class="section-bg-image">
                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>
                <table>
                    <tbody>
                      <tr>
                        <td ><div class="container" >
                            <div class="">
                
                                <div class="" >
                                    <div class="section-bg-image-block">
                                        <h2 class="mb-lg-3">Get our newsletter</h2>
                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore.</p>
                
                                        <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text bi-envelope" id="basic-addon1"></span>
                
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                
                                                <button type="submit" class="form-control">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                
                            </div>
                        </div></td>
                      
                     
                        <td scope="row" ><div class="container" >
                            <div class="">
                
                                <div class="" >
                                    <div class="section-bg-image-block">
                                        <h2 class="mb-lg-3">Get our newsletter</h2>
                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore.</p>
                
                                        <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text bi-envelope" id="basic-addon1"></span>
                
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                
                                                <button type="submit" class="form-control">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                
                            </div>
                        </div></td>
                       
                      
                        <td scope="row" data-label="Account"><div class="container" >
                            <div class="">
                
                                <div class="" >
                                    <div class="section-bg-image-block">
                                        <h2 class="mb-lg-3">Get our newsletter</h2>
                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore.</p>
                
                                        <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text bi-envelope" id="basic-addon1"></span>
                
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                
                                                <button type="submit" class="form-control">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                
                            </div>
                        </div></td>
                    
                      </tr>
                     
                    </tbody>
                  </table>
                
                       
                <br>
                <br>
                <br>
                <br>
             

              

                
            </section><br><br><br><br>


            <section class="aboutt" id="section_3" >
                <div class="containerr">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-lg-4">
                            <img src="images/photo_5866041967983574246_x.jpg"  class="w-100 img-thumbnail mb-3">
                        </div>
                        <div class="col-md-7 col-lg-8">
                            <h6 class="section-subtitle mb-0" style="margin-top: 0;
                            margin-bottom: 0.5rem;">We Create</h6>
                            <h6 class="section-title mb-3">Awesome Work</h6>
                            <p class="class"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente cupiditate quas, amet harum perferendis minus, cum dolorum obcaecati iste aspernatur voluptatum aut.</p>
                            <p class="class">Cum laudantium unde nemo doloribus eligendi quodarum ea vitae dicta. Accusantium vero, ea? Alias, atque libero. Id, ut harum. </p>
                            <p class="class">consectetur adipisicing elit. Omnis quidem, quos iure a dolorum illum culpa quia nemo soluta, ratione harum beatae minus doloribus consectetur! Similique tempora sunt doloribus molestias.</p>
                        </div>
                    </div>
                </div>
            </section>




           <center> <section class="contact-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12">
                            <form action="#" method="post" class="custom-form contact-form" role="form">
                                <h2 class="mb-4 pb-2">Contact Tiya</h2>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                            
                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                            
                                            <label for="floatingTextarea">Message</label>
                                        </div>

                                        <button type="submit" class="form-control">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        

                    </div>
                </div>
            </section></center>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="">
                            <span class="navbar-brand-text">
                                Fly
                                <small>HIEGHR</small>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <h5 class="site-footer-title mb-4">Join Us</h5>

                       
                        <br>
                        <p class="copyright-text">Copyright © 2023 Abde+Abde</p>
                    </div>

                        <div class="col-lg-2 col-12 ms-auto">
                            <ul class="social-icon mt-lg-5 mt-3 mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>
                            
                        </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>
       
    </body>
</html>