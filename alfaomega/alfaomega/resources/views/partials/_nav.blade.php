    <nav class="navbar navbar-inverse navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <div class="navbar-header ">
      <a class="navbar-left" href="#"><img src=" {{ asset('img\icons\title-icon.png') }}" style="width:100px;height:100px;"></a>
    </div>
    <ul class="nav navbar-nav inline">
        <br/>
        <li class="active"><a href="#">Acasa</a></li>
        <li><a href="/about">Despre noi</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Produse <i class="icon-angle-down"></i></a>
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

    <div class="nav navbar-nav col-xs-8 col-xs-offset-5">
        <br/>

        <div class="input-group">
            <div class="input-group-btn search-panel">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Cauta</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Electronice</a></li>
                      <li><a href="#its_equal">Telecomenzi</a></li>
                      <li><a href="#greather_than">Boxe</a></li>
                      <li><a href="#less_than">Statii</a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Cauta dupa barcode</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search ...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>

    <ul class="nav navbar-nav navbar-right">
        <br/>
      <li><a href="registration.html"><span class="glyphicon glyphicon-user"></span> Inregistrare</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Autentificare </a></li>
    </ul>
  </div>
</nav>
