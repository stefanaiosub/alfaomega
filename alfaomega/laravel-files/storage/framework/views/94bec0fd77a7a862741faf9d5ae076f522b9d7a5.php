
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-left" href="#"><img src="<?php echo e(asset('img\icons\title-icon.png')); ?>" style="width:100px;height:100px;"></a>
    </div>
   <ul class="nav navbar-nav">
    <br>
    <br>

      <li ><a href="/home">Acasa</a></li>
      <li  ><a href="/about-us"> Despre noi</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produse <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Electronice</a></li>
                            <li><a href="#">Telecomenzi</a></li>
                            <li><a href="#">Boxe</a></li>
                            <li><a href="#">Statii</a></li>

                        </ul>
                    </li>
             
                     <li><a href="#">Comanda</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
<br>
<br>       
                <?php echo Form::open(array('action' => 'SearchController@index', 'method' => 'GET', 'id' => 'lookup', 'class' => 'form_control')); ?>

 
 <div class="col-lg-6 center-block">
 <div class="input-group">
 <input type="text" id="lookup" name="lookup" value="" class="form-control" placeholder="Search for campaigns">
   <span class="input-group-btn">
    <button class="btn btn-default" type="submit">Lookup</button>
   </span>
     </div>
      </div>
    
<?php echo Form::close(); ?>


    <ul class="nav navbar-nav navbar-right">
        <?php if(Auth::guest()): ?>
            <li><a href="/register" style="color:orange"><span class="glyphicon glyphicon-user" style="color:orange"></span> Sign Up</a></li>
            <li><a href="/login-page" style="color:orange"><span class="glyphicon glyphicon-log-in" style="color:orange"></span> Login</a></li>
        <?php else: ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:orange"> Welcome, 
                    <?php echo e(Auth::user()->name); ?>! <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>

                    <li>
                        <a href="http://127.0.0.1:8000/profile">
                            Profile
                        </a>

                    </li>
                </ul>
            </li>
        <?php endif; ?>

    </ul>  

    </div>
    <br>
    <br>
</nav>
