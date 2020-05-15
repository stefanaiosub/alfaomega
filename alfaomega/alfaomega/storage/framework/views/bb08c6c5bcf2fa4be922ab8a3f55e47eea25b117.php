 



<?php $__env->startSection('title'); ?>
Alfa si omega | Contact
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>


    
            <div class="content">
                <div class="title" >
                    Contacteaza-ne!
                </div>
                
         
        


    
<!--Contact Form -->



<div class="container">
           

 <div class="col-md-6">

            <form class="form-horizontal" role="form">
                <h2>Completeaza formularul si te vom contacta cat mai curand posibil!</h2>
                <br/>
            

                <div class="container-contactus">
                    <form class="contact-form" action="/action_page.php">
                    <p class="p-form">
                    <label class="contact-label" for="fname">Nume:</label>
                    <input class= "contact-input" type="text" id="fname" name="firstname" placeholder="Introduceti numele">
                    </p>
                    
                    <br/>
                    
                    
                    <p class="p-form">
                    <label class="contact-label" for="lname">Prenume:</label>
                    <input  class= "contact-input" type="text" id="lname" name="lastname" placeholder="Introduceti prenumele">
                    </p>
                    
                    <br/>
                    
                    <p class="p-form">
                    <label class="contact-label" for="email">E-mail:</label>
                    <input  class= "contact-input" type="text" id="lname" name="lastname" placeholder="Introduceti emailul" style="margin-left:28px;">
                    </p>
                    
                    <br/>
                    
                    <p class="p-form">
                    <label class="contact-label" for="country">Tara:</label>
                    <select id="country" name="country" style="margin-left:18px;">
                          <option value="romania">Romania</option>
                          <option value="australia">Australia</option>
                          <option value="canada">Canada</option>
                          <option value="usa">USA</option>
                    </select>
                    </p>

                    <br/>
                    

                    <p class="p-form">
                    <label class="contact-label" for="subject">Adresa:</label>
                        <br/>
                        <textarea id="adress" name="subject" placeholder="Va rugam completati aici cu adresa dumneavoasta." style="height:150px width=200px" ></textarea>
                    </p>

                    
                    <br/>

                    <br/>
                    
                    <p class="p-form">
                    <label  class="contact-label" for="subject">Subiect:</label>
                    <br/>
                    <textarea id="subject" name="subject" placeholder="Mesajul dumneavoasta.." style="height:200px"></textarea>
                    </p>

                      </form>

                    <br/>
                    <br/>
                    </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">Trimite</button>

                    <br/>
                    <br/>
                    </div>
                </div>
            </form> <!-- /form -->
            </div>

 <div class="col-md-6">
            <h2 style="text-align:center;">Locatia noastra</h2>
            <div class="img_border img_border_b">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.3929367770597!2d27.57017501185489!3d47.16974276889002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb6682d4a1c3%3A0x2f7705c5f2186ba8!2sStrada+Florilor+32%2C+Ia%C8%99i+700513!5e0!3m2!1sen!2sro!4v1548072624180" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <br /><small><a href="https://www.google.com/maps/place/Strada+Florilor+32,+Ia%C8%99i+700513/@47.1697428,27.570175,17z/data=!4m8!1m2!2m1!1sStrada+Florilor+32!3m4!1s0x40cafb6682d4a1c3:0x2f7705c5f2186ba8!8m2!3d47.1698538!4d27.5702388" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
        
        <div class="clear"></div>
            
        <div class="clear"></div>
     </div>   
        </div> <!-- ./container --> 



<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>