<!doctype html>
<html>

    <head>
        <title> @yield('title') </title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Font Awesome Introduction -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>

    <body>

       <div class="before-nav-part">
            <!-- A grey horizontal navbar that becomes vertical on small screens -->
            <nav class="navbar navbar-expand-sm bg-light justify-content-center">

              <!-- Links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href=""> Ruby on Rails </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=""> Laravel </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=""> Ionic </a>
                </li>
              </ul>

            </nav>
           
       </div>

        <!-- A grey horizontal navbar that becomes vertical on small screens -->
        <nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-topx sticky-top">

            <!-- Brand -->
            <a class="navbar-brand" href="#"> L
               <!--  <img src="bird.jpg" alt="Logo" style="width:40px;"> -->
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--Navbar Links -->  
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Contact</a> 
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Development
                        </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"> Ruby on Rails </a>
                        <a class="dropdown-item" href="#"> Laravel </a>
                        <a class="dropdown-item" href="#"> AngulerJs</a>
                      </div>
                    </li>
                </ul>

                  <form class="form-inline" action="">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-search-plus"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Search">
                    </div> 
                  </form>

            </div> 

        </nav>

    @yield('content')
    </body>
</html>
