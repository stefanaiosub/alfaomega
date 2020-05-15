<!doctype html>
<html>
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Alfa si omega </title>

        <link rel="shortcut icon" href="img/icons/title-icon.png"/>

       <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- CSS STYLES -->
        <link rel="stylesheet" href="css/homepage.css"/> 
        
        
    </head>



    <body>
    	
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

    	
            <div class="content">
                <div class="title" >
                    Alfa si Omega 
                </div>
                <div >
                	<p class="p-title">Electronice| Boxe | Statii | Telecomenzi </p>
				</div>
        	</div>
    	

        </div>


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
