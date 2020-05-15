<!doctype html>
<html>
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Date de contact </title>

        <link rel="shortcut icon" href="img/icons/title-icon.png"/>

       <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- CSS STYLES -->
        <link rel="stylesheet" href="css/homepage.css"/> 
        
        
    </head>




    <body>



<!--
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

-->

        
        
            <div class="content">
                <div class="title" >
                    Contacteaza-ne!
                </div>
                
            </div>
        


    
<!--Contact Form -->



<div class="container">
           

 <div class="col-sm-6 col-md-4 col-lg-3 mt-4">

            <form class="form-horizontal" role="form">
                <h2>Completeaza formularul si te vom contacta cat mai curand posibil!</h2>
                <br/>
            

                <div class="container-contactus">
                    <form action="/action_page.php">

                    <label for="fname">Nume:</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <br/>
                    <br/>
                    <label for="lname">Prenume:</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <br/>
                    <br/>
                    <label for="email">E-mail:</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your e-mail.." style="margin-left:28px;">
                    <br/>
                    <br/>
                    <label for="country">Tara:</label>
                    <select id="country" name="country" style="margin-left:18px;">
                          <option value="romania">Romania</option>
                          <option value="australia">Australia</option>
                          <option value="canada">Canada</option>
                          <option value="usa">USA</option>
                    </select>
                    <br/>
                    <br/>
                    <label for="subject">Adresa:</label>
                        <br/>
                        <textarea id="adress" name="subject" placeholder="Va rugam completati aici cu adresa dumneavoasta." style="height:200px"></textarea>

                    <br/>
                    <br/>

                    <br/>
                    <br/>

                        <label for="subject">Subiect:</label>
                        <br/>
                        <textarea id="subject" name="subject" placeholder="Mesajul dumneavoasta.." style="height:200px"></textarea>


                      </form>

                    <br/>
                    <br/>
                    </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Trimite</button>

                    <br/>
                    <br/>
                    </div>
                </div>
            </form> <!-- /form -->
            </div>

 <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
<div class="clear h30"></div>
            <div class="img_border img_border_b">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.3929367770597!2d27.57017501185489!3d47.16974276889002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb6682d4a1c3%3A0x2f7705c5f2186ba8!2sStrada+Florilor+32%2C+Ia%C8%99i+700513!5e0!3m2!1sen!2sro!4v1548072624180" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <br /><small><a href="https://www.google.com/maps/place/Strada+Florilor+32,+Ia%C8%99i+700513/@47.1697428,27.570175,17z/data=!4m8!1m2!2m1!1sStrada+Florilor+32!3m4!1s0x40cafb6682d4a1c3:0x2f7705c5f2186ba8!8m2!3d47.1698538!4d27.5702388" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
        
        <div class="clear"></div>
            
        <div class="clear"></div>
     </div>   
        </div> <!-- ./container --> 




        <!-- Footer -->
        <div class="footer">
            <div class="container">
            
                <div class="row">
                
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Date de contact</h3>
                        <p>
                            <b  class="contact-info">Adresa:</b> 
                            <b class="contact-info2"> Str. Florilor, Nr.30-32, Iasi </b>
                            <br/>
                            <b  class="contact-info">Telefon:</b> 
                            <b class="contact-info2">+40 232 xxx xxx</b>
                            <br/>
                            <b  class="contact-info">Fax:</b>
                            <b class="contact-info2"> +40 232 xxx xxx</b>
                            <br/>
                            <b class="contact-info">E-mail:</b>
                            <b class="contact-info2"> 
                                <a href="mailto:alfasiomega.srl@gmail.com">alfasiomega.srl@gmail.com </a> 
                            </b>
                            <br/>
                        </p>
                    </div>             
                    
                    

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright">&copy; 2018 <a> Copyright Alfasiomega</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--END of FOOTER-->
    </body>
</html>
