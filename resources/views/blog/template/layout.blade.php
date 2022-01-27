<!doctype html>
<html lang="en">
  <head>
    <title>@yield('pestaña')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <div class="site-wrap">

      <a href="#" class="offcanvas-toggle js-offcanvas-toggle">Menu</a>
      <div class="offcanvas_menu" id="offcanvas_menu">
        <ul class="mb-5">
          <li><a href="{{route('inicio')}}">Datos</a></li>
          <hr>
          <li><a href="{{route('portfolio')}}">Hobbies</a></li>
          <hr>
          <li><a href="{{route('resume')}}">Dirección</a></li>
          <hr>
        </ul>

        <ul class="social">
          <li><a href="https://www.facebook.com/luisivan.tenoriogarcia" class="fa fa-facebook"></a></li>
          <li><a href="https://www.instagram.com/ivante__/?hl=es-la" class="fa fa-instagram"></a></li>
        </ul>
      </div>
      
      <aside style="background-image: url(img/profile_big.jpg)" width="20px" height="20px"></aside>
      <main>
        @yield('titulo')
        <div class="mb-5">
            @yield('contenido')
        </div>

        <p>
        <hr>
          <a href="https://www.facebook.com/luisivan.tenoriogarcia" class="mr-2 mb-2 ">Facebook</a>
          <a href="https://www.instagram.com/ivante__/?hl=es-la" class="mr-2 mb-2">Instagram</a> 
       </p>
        </div>
        
      </main>
    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>