<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>TrailersTube</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/fancybox.min.css">

    <link rel="stylesheet" href="/css/style.css">
    
  </head>
    <body>
        

            <div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="header-bar d-flex d-lg-block align-items-center" data-aos="fade-left">
    <div class="site-logo">
      <a href="/">TrailersTube</a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">
      <ul class="js-clone-nav">
        <li class="{{Request::path() === '/' ? 'active': ''}}"><a href="/">Home</a></li>
        <li class="{{Request::path() === 'contact' ? 'active': ''}}"><a href="/contact">Contact</a></li>
      </ul>
      <ul class="social js-clone-nav">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
      <div class="main-menu">
      <ul class="js-clone-nav">
       @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <li  class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" style="color:black" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:gray" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        <li class="{{Request::path() === 'movies' ? 'active': ''}}"><a href="/movies">Administrar</a></li>
                        <li class="{{Request::path() === '/movies/create' ? 'active': ''}}"><a href="/movies/create">Agregar</a></li>
                    @else
                        <a href="{{ route('login') }}"> <input type="button" class="btn btn-sm btn-primary" value="SingUp"></a>
                    @endauth
    </ul>
      </div>
                </div>
            @endif
    </div>
  </header> 

<main class="main-content" style="padding-top:20px; padding-left:20px">
@yield('movies')
@yield('info')
@yield('loginForm')
@yield('adminForm')
@yield('moviesAD')
@yield('edit')

    <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
            <footer class="footer">
                Copyright &copy;<script>document.write(new Date().getFullYear())</script> All rights reserved | This page was made by Neftali Oviedo
            </footer>
        </div>
    </div>
    </div>
  </main>
</div> <!-- .site-wrap -->

  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.countdown.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/aos.js"></script>

  <script src="/js/jquery.fancybox.min.js"></script>

  <script src="/js/main.js"></script>
    
    </body>
</html>
