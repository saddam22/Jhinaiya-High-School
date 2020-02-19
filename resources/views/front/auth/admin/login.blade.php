<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Jhinaiya High School | Login Panel</title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Education theme by EchoTheme">
    <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme">
    <meta name="author" content="education">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
            
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
    <link rel="shortcut icon" href="{{ asset('front') }}/assets/img/favicon/114x114.png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front') }}/assets/img/favicon/96x96.png">
    
    
    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">
    
    
    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/fonts/themify-icons/css/themify-icons.css">
    
    
    <!-- stylesheet-->    
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/vendors.bundle.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/style.css">
    
  </head>
  
  <body>
   

<header class="site-header bg-dark text-white-0_5">        
    <div class="container">
      <div class="row align-items-center justify-content-between mx-0">
        <ul class="list-inline d-none d-lg-block mb-0">
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-email mr-2"></i>
            <a href="mailto:support@educati.com">wansornolotait@gmail.com</a>
           </div>
          </li>
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-headphone mr-2"></i>
            <a href="tel:+8801740411513">+8801615469777</a>
           </div>
          </li>
        </ul>
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
            <a href="#"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="#"><i class="ti-twitter"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="#"><i class="ti-vimeo"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="#"><i class="ti-linkedin"></i></a>
          </li>
        </ul>
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1">
            <a href="{{ route('login') }}">Login</a>
          </li>
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
            <a href="{{ route('register') }}">Register</a>
          </li>
        </ul>
      </div> <!-- END END row-->
    </div> <!-- END container-->
  </header>
  
  

 <nav class="ec-nav sticky-top bg-white">
  <div class="container">
    <div class="navbar p-0 navbar-expand-lg">
      <div class="navbar-brand">
        <a class="logo-default" href=""><img alt="" src="{{ asset('front') }}/assets/img/logo-black.png"></a>
      </div>
      <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
        <div class="hamburger hamburger--spin js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </span>
      <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
        <ul class="nav navbar-nav ec-nav__navbar ml-auto">

            <li class="nav-item nav-item__has-megamenu megamenu-col-2">
              <a class="nav-link" href="#" data-toggle="dropdown">Home</a>
            </li>

            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Class</a>
                <ul class="dropdown-menu">
                  <li><a href="page-sp-all-courcess.html" class="nav-link__list">Six</a></li>
                  <li><a href="page-sp-all-courcess-list.html" class="nav-link__list">Seven</a></li>
                  <li><a href="page-sp-all-courcess-with-sidebar.html" class="nav-link__list">Eight</a></li>
                  <li><a href="page-sp-all-courcess-list-with-sidebar.html" class="nav-link__list">Nine</a></li>
                  <li><a href="page-sp-all-courcess-with-sidebar.html" class="nav-link__list">Ten</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="#">Teacher</a>
            </li>
            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="#">Student</a>
            </li>

             <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Result </a>
                <ul class="dropdown-menu">
                  <li><a href="page-sp-all-courcess.html" class="nav-link__list">Six</a></li>
                  <li><a href="page-sp-all-courcess-list.html" class="nav-link__list">Seven</a></li>
                  <li><a href="page-sp-all-courcess-with-sidebar.html" class="nav-link__list">Eight</a></li>
                  <li><a href="page-sp-all-courcess-list-with-sidebar.html" class="nav-link__list">Nine</a></li>
                  <li><a href="page-sp-all-courcess-with-sidebar.html" class="nav-link__list">Ten</a></li>
                </ul>
              </li>

              <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Institute </a>
                <ul class="dropdown-menu">
                  <li><a href="page-sp-all-courcess.html" class="nav-link__list">Kindergarten</a></li>
                  <li><a href="page-sp-all-courcess-list.html" class="nav-link__list">Primary</a></li>
                  <li><a href="page-sp-all-courcess-with-sidebar.html" class="nav-link__list">Seconday</a></li>
                  <li><a href="page-sp-all-courcess-list-with-sidebar.html" class="nav-link__list">Higher Seconday</a></li>
                  <li><a href="page-sp-all-courcess-with-sidebar.html" class="nav-link__list">University</a></li>
                </ul>
              </li>

            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="#">Discover</a>
            </li>
            <li class="nav-item">
                <a href="https://www.wanbahjahkas.net/practice_center" class="nav-link" target="_blank">চল শিখি/শিখাই</a>
            </li>
            
        </ul>
      </div>
      <div class="nav-toolbar">
        <ul class="navbar-nav ec-nav__navbar">
          <li class="nav-item nav-item__has-dropdown">
          </li>
          <li class="nav-item">
            <a class="nav-link site-search-toggler" href="#">
              <i class="ti-search"></i>
            </a>
          </li>
        </ul>
      </div>    
    </div>
  </div> <!-- END container-->    
  </nav> 
    <div class="site-search">
   <div class="site-search__close bg-black-0_8"></div>
   <form class="form-site-search" action="#" method="POST">
    <div class="input-group">
      <input type="text" placeholder="Search" class="form-control py-3 border-white" required="">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
      </div>
    </div>
   </form> 
  </div> <!-- END ec-nav -->    

  <div class="site-search">
   <div class="site-search__close bg-black-0_8"></div>
   <form class="form-site-search" action="#" method="POST">
    <div class="input-group">
      <input type="text" placeholder="Search" class="form-control py-3 border-white" required="">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
      </div>
    </div>
   </form> 
  </div> <!-- END site-search-->


   
<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header border-bottom">
          <h4 class="mt-4">
            Log In to Your Jhinaiya High School Account!
          </h4>
         </div>         
          <div class="card-body">
            <div class="row">
              <div class="col my-2">
                <button class="btn btn-block btn-facebook">
                 <i class="ti-facebook mr-1"></i>
                 <span>Facebook Sign in</span>
               </button>
              </div>
              <div class="col my-2">
                <button class="btn btn-block btn-google-plus">
                 <i class="ti-google mr-1"></i>
                 <span>Google Sign in</span>
               </button>
              </div>
            </div>
            <p class="text-center my-4">
              OR
            </p>
            <form method="POST" action="{{ route('login') }}" class="px-lg-4">
               @csrf
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span for="email" class="input-group-text bg-white ti-email"></span>
                </div>
                <input type="email" id="email" name="email" class="form-control border-left-0 pl-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" autofocus required autocomplete="email">
              </div>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span for="password" class="input-group-text bg-white ti-lock"></span>
                </div>
                <input type="password" id="password" name="password" class="form-control border-left-0 pl-0 @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password" autofocus required autocomplete="current-password">
              </div>
              <div class="d-md-flex justify-content-between my-4">
                <label class="ec-checkbox check-sm my-2 clearfix">
                  <input type="checkbox" name="checkbox">
                  <span class="ec-checkbox__control"></span>
                  <span class="ec-checkbox__lebel">Remember Me</span>
                </label>
                 <a class="btn btn-link" href="{{ route('password.request') }}">
                   {{ __('Forgot Your Password?') }}
                 </a>
              </div>
              <button class="btn btn-block btn-primary">{{ __('Login') }}</button>
              <p class="my-5 text-center">
                Don’t have an account? <a href="{{ route('register') }}" class="text-primary">Register</a>
              </p>
            </form>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
   
   
   
   

<footer class="site-footer">
  <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
    <div class="container"> 
      <div class="row">

        <div class="col-lg-3 col-md-6 mt-5">
         <img src="assets/img/logo-white.png" alt="Logo">
         <div class="margin-y-40">
           <p>
            Nunc placerat mi id nisi interdm they mtolis. Praesient is haretra justo ught scel erisque placer.
          </p>
         </div>
          <ul class="list-inline"> 
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-facebook"> </i></a></li>
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-twitter"> </i></a></li>
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-linkedin"> </i></a></li>
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-pinterest"></i></a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mt-5">
          <h4 class="h5 text-white">Contact Us</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <ul class="list-unstyled marginTop-40">
            <li class="mb-3"><i class="ti-headphone mr-3"></i><a href="tel:+8801740411513">800 567.890.576 </a></li>
            <li class="mb-3"><i class="ti-email mr-3"></i><a href="mailto:support@educati.com">support@educati.com</a></li>
            <li class="mb-3">
             <div class="media">
              <i class="ti-location-pin mt-2 mr-3"></i>
              <div class="media-body">
                <span> 184 Main Collins Street Chicago, United States</span>
              </div>
             </div>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 mt-5">
          <h4 class="h5 text-white">Quick links</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <ul class="list-unstyled marginTop-40">
            <li class="mb-2"><a href="page-about.html">About Us</a></li>
            <li class="mb-2"><a href="page-contact.html">Contact Us</a></li>
            <li class="mb-2"><a href="page-sp-student-profile.html">Students</a></li>
            <li class="mb-2"><a href="page-sp-admission-apply.html">Admission</a></li>
            <li class="mb-2"><a href="page-events.html">Events</a></li>
            <li class="mb-2"><a href="blog-card.html">Latest News</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <h4 class="h5 text-white">Newslatter</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <div class="marginTop-40">
            <p class="mb-4">Subscribe to get update and information. Don't worry, we won't send spam!</p>
            <form class="marginTop-30" action="#" method="POST">
              <div class="input-group">
                <input type="text" placeholder="Enter your email" class="form-control py-3 border-white" required="">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div> <!-- END row-->
    </div> <!-- END container-->
  </div> <!-- END footer-top-->

  <div class="footer-bottom bg-black-0_9 py-5 text-center">
    <div class="container">
      <p class="text-white-0_5 mb-0">&copy; 2018 Educati. All rights reserved. Created by <a href="http://echotheme.com/" target="_blunk">EchoTheme</a></p>
    </div>
  </div>  <!-- END footer-bottom-->
</footer> <!-- END site-footer -->


<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
    <script src="{{ asset('front') }}/assets/js/vendors.bundle.js"></script>
    <script src="{{ asset('front') }}/assets/js/scripts.js"></script>
  </body>

</html>