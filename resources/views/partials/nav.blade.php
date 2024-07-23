<title>Itza House Investment</title>
<link rel="icon" type="image/png" href="{{ asset("/images/favicon.ico") }}">

<header class="site-navbar site-navbar-target" role="banner">
  

  <link href="{{ asset("/css/estilo.css") }}" rel="stylesheet">
  
  <link href="{{ asset('/fonts/icomoon/style.css') }}" rel="stylesheet">
    

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('fonts/flaticon/font/flaticon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset("/css/style.css") }}" rel="stylesheet">
  
  <div class="container">
      <div class="row align-items-center position-relative">

        <div class="col-3 ">
          <div class="site-logo">
            <a href="{{ url('/') }}">
            <img  class="zoom1" src="/images/logo.webp">
            </a>
          </div>
        </div>
        <style>
              .zoom1 {
                  max-width: 60%; 
                  height: auto; 
              }
              .site-navigation {
        position: relative;
        z-index: 100; 
    }
          </style>


        <div class="col-9  text-right">
          

          <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

          

          

          
          <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto">
                <li><a href="/" class="nav-link">Inicio</a></li>
                <li><a href="/property-list" class="nav-link">Propiedades</a></li>
                <li><a href="/contact" class="nav-link">Contacto</a></li>
        
                @guest
                    <li><a href="/login" class="nav-link">Admin</a></li>
                @endguest
        
                @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                           class="nav-link"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
        
        
        
        
        
        
          
        </div>

        
      </div>
    </div>

  </header>