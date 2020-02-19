@extends('front.master')

@section('front_title')
Jhinaiya High School
@endsection

@section('css_js')
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

@endsection

@section('menu')
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
            @foreach($menus as $menu) 
            <li class="nav-item nav-item__has-megamenu megamenu-col-2">
              <a class="nav-link" href="#" data-toggle="dropdown">{{ $menu->MenuName }}</a>
               <ul class="dropdown-menu">
                 @foreach($menu->sub_categories as $subMenu)
                  <li><a href="page-sp-all-courcess.html" class="nav-link__list">{{ $subMenu->SubMenuName }}</a></li>
                  @endforeach  
                </ul>
            </li>
           @endforeach 
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
  </div> 
@endsection

@section('slideshow')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  
  <div class="carousel-inner">
   
    <div class="carousel-item height-90vh padding-y-80 active">
     <div class="bg-absolute" data-dark-overlay="5" style="background:url(front/assets/img/1920x800/2.jpg) no-repeat"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
              <h2 class="display-lg-4 font-weight-bold text-white animated slideInUp mb-0">
                Best Ever Trendy
              </h2>
              <h1 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                College / University
              </h1>
              <p class="font-size-md-18 animated slideInUp">
                This modern and inviting academic template is perfectly suited for school, colleges, university, on-line course, and other educational institutions.  Investig ationes demons travge
              </p>
              <a href="#" class="btn btn-primary mt-3 mx-2 animated slideInUp">Our Courses</a>
              <a href="https://www.wanbahjahkas.net/" target="_blank" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Registration</a>
            </div>
          </div>
        </div>
    </div>
   
    <div class="carousel-item height-90vh padding-y-80">
     <div class="bg-absolute" data-dark-overlay="5" style="background:url(front/assets/img/1920x800/2.jpg) no-repeat"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
              <h2 class="display-lg-4 font-weight-bold text-white animated slideInUp">
                Best Ever Trendy
              </h2>
              <h1 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                college / university
              </h1>
              <p class="font-size-md-18 animated slideInUp">
                This modern and inviting academic template is perfectly suited for school, colleges, university, on-line course, and other educational institutions.  Investig ationes demons travge
              </p>
              <a href="#" class="btn btn-primary mt-3 mx-2 animated slideInUp">Our Courses</a>
              <a href="#" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Registration</a>
            </div>
          </div>
        </div>
    </div>

   
    <div class="carousel-item height-90vh padding-y-80">
     <div class="bg-absolute" data-dark-overlay="5" style="background:url(front/assets/img/1920x800/1.jpg) no-repeat"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
              <h4 class="display-lg-4 font-weight-bold text-white animated slideInUp">
                Best Ever Trendy
              </h4>
              <h2 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                college / university
              </h2>
              <p class="font-size-md-18 animated slideInUp">
                This modern and inviting academic template is perfectly suited for school, colleges, university, on-line course, and other educational institutions.  Investig ationes demons travge 
              </p>
              <a href="#" class="btn btn-primary mt-3 mx-2 animated slideInUp">Our Courses</a>
              <a href="#" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Registration</a>
            </div>
          </div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i>
  </a>
</div>
@endsection

@section('quick-guide')
<section class="padding-y-100 bg-light-v2">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-7 mx-auto text-center mb-5">
        <h2 class="mb-4">
          Quick Guide for the Students
        </h2>
        <p class="font-size-18">
          Before exploring online colleges, every potential student should read about and 
          understand the basics of remote learning, financial aid, quality control and the 
          institutions themselves.
        </p>
      </div> 
    
     <div class="col-lg-6 my-2">
       <div class="card">
         <div class="card-header p-3 px-md-5 bg-primary border-0">
           <h4 class="text-white mb-0">
             To Learn & Share Regularly
           </h4>
         </div> <!-- END card-header-->
         <div class="card-body p-4 px-md-5">
           <div id="accordion-2" class="accordion-style-2">
           
            <div class="accordion-item border-bottom wow slideInUp">
              @foreach($learn_share as $learn_shares)
             <a href="#acc2_1" class="accordion__title h6 py-3" data-toggle="collapse" aria-expanded="true">
              <span class="accordion__icon float-right ml-3">
                <i class="ti-plus"></i>
                <i class="ti-minus"></i>
              </span>
               {{ $learn_shares->learn_share_title }}
             </a>
              <div id="acc2_1" class="collapse show" data-parent="#accordion-2" style="">
                <div class="p-0">
                   <p>
                    {{ $learn_shares->learn_share_description }}
                   </p>
                </div>
              </div>
              @endforeach
            </div> <!-- END accordion-item-->

          </div> <!-- END accordion-2-->
         </div> <!-- END card-body-->
       </div> <!-- END card-->
     </div> <!-- END col-lg-6 -->
     
     <div class="col-lg-6 my-2">
       <div class="card">
         <div class="card-header p-3 px-md-5 bg-primary border-0">
           <h4 class="text-white mb-0">
             To Practice as your wish
           </h4>
         </div> <!-- END card-header-->
         <div class="card-body p-4 px-md-5">
           <div id="accordion-2_1" class="accordion-style-2">
           
            <div class="accordion-item border-bottom wow slideInUp">
              @foreach($practice_wish as $practice_wishs)
             <a href="#acc2_6" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="false">
              <span class="accordion__icon float-right ml-3">
                <i class="ti-plus"></i>
                <i class="ti-minus"></i>
              </span>
               {{ $practice_wishs->practice_wish_title }}
             </a>
              <div id="acc2_6" class="collapse" data-parent="#accordion-2_1" style="">
                <div class="p-0">
                   <p>
                    {{ $practice_wishs->practice_wish_description }}
                   </p>
                </div>
              </div>
                @endforeach
            </div> <!-- END accordion-item-->

          </div> <!-- END accordion-2_1-->
         </div> <!-- END card-body-->
       </div> <!-- END card-->
     </div> <!-- END col-lg-6 -->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
@endsection

@section('reviews')

@endsection

@section('gallery')

@endsection

@section('latest-school-news')
<section class="padding-y-100 bg-light-v2">
  <div class="container">
    <div class="row">
     
      <div class="col-12 text-center">
        <h2 class="mb-4">
          Latest School News
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div> 
    </div> <!-- END row-->
    
    <div class="row mt-4">
     @foreach($latestNews as $latest_school)
      <div class="col-lg-4 col-md-6 marginTop-30 wow slideInUp" data-wow-delay=".1s">
        
        <div class="card padding-30 shadow-v1">
         <p class="text-primary">
           Aug 13, 2018
         </p>
         <a href="#" class="h4 mb-3">
           {{ $latest_school->school_news_title}}
         </a>
         <p>
          {{ $latest_school->school_news_description}}
         </p>
         <a href="#" class="btn btn-outline-primary align-self-start mt-2">
           Read More
         </a>
        </div>
         
      </div>
      @endforeach
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
@endsection
@section('admission-orientation')
<section>
  <div class="container-fluid">
   <div class="row">
      @foreach($admission as $admissions)
      <div class="col-md-6 bg-cover bg-center text-white padding-y-80" style="background:url(front/assets/img/960x560/1.jpg) no-repeat">
        <div class="padding-x-lg-100 wow pulse">
          <h2 class="text-white mb-4">
            {{ $admissions-> admission_orientation_title }}
          </h2>
          <p>
            {{ $admissions-> admission_orientation_description }}
          </p>
          <a href="#" class="btn btn-white mt-4">Apply now</a>
        </div>
      </div>
       @endforeach
    </div>
  </div> <!-- END container-->
</section>
@endsection
@section('upcoming-events')
<section class="padding-y-100 bg-light-v5">
  <div class="container">
    <div class="row">
     
      <div class="col-12 text-center mb-4">
        <h2 class="mb-4">
          Upcoming Events
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div> 
    </div> <!-- END row-->
    
    <div class="row">
      @foreach($upcoming_events as $upcomingEvents)
      <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".1s">
        <div class="card shadow-v1">
          <div class="padding-40 border-bottom">
            <a href="#" class="h4">
              {{ $upcomingEvents-> upcoming_events_title }}
            </a>
          </div>
          <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
            <li>
               <i class="ti-time mr-2 text-primary"></i>
               April 13, 2018 @ 8:00 am
            </li>
            <li>
               <i class="ti-location-pin mr-2 text-primary"></i>
               {{ $upcomingEvents-> upcoming_events_address }}
            </li>
          </ul>
        </div>
      </div>
      @endforeach
     
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
@endsection
@section('include-school')
<section class="padding-y-100 bg-light-v5">
  <div class="container">
    <div class="row">
     
      <div class="col-12 text-center">
        <h2 class="mb-4">
          Our Included School
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div> 
    </div> <!-- END row-->
    
    <div class="row mt-4">
      @foreach($include_school as $include_schools)
      <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".1s">
        <div class="list-card align-items-center height-100p m-0 shadow-v1">
          <div class="col-md-4 p-4 p-md-5 border-right text-center">
           <img src="{{ asset($include_schools->include_school_image) }}" width="60">
          </div>
          <div class="col-md-8 p-4 p-md-5">
            <h4>
              {{ $include_schools->include_school_title }}
            </h4>
            <p>
              <i class="ti-location-pin"></i> {{ $include_schools->include_school_address }}
            </p>
          </div>
        </div>
      </div>
      @endforeach

    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
@endsection
@section('counter')
<section class="padding-y-100 bg-cover" data-dark-overlay="6" style="background:url(front/assets/img/college/2.jpg) no-repeat">
  <div class="container">
    <div class="row text-center text-white">
     
      <div class="col-lg-3 col-md-6 mt-5 wow zoomIn" data-wow-delay=".1s">
        <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="520" data-speed="3000">
          520
        </p>
        <p class="lead">
          Online Courses
        </p>
      </div>
     
      <div class="col-lg-3 col-md-6 mt-5 wow zoomIn" data-wow-delay=".2s">
        <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="690" data-speed="3000">
          690
        </p>
        <p class="lead">
          Trusted Tutors
        </p>
      </div>
     
      <div class="col-lg-3 col-md-6 mt-5 wow zoomIn" data-wow-delay=".3s">
        <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="485645" data-speed="3000">
          485645
        </p>
        <p class="lead">
          Online Students
        </p>
      </div>
     
      <div class="col-lg-3 col-md-6 mt-5 wow zoomIn" data-wow-delay=".4s">
        <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="5409" data-speed="3000">
          5409
        </p>
        <p class="lead">
          Success Stories
        </p>
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
@endsection
@section('online-suggestion')

@endsection
@section('notice')
      <div class="col-lg-4 mt-5 mt-md-0">
        <div class="card shadow-v2 z-index-5" data-offset-top-xl="-160">
          <div class="card-header bg-primary text-white border-bottom-0">
            <span class="lead font-semiBold text-uppercase">
              Notice Board
            </span>
          </div>
          @foreach($notices as $notice_board)
          <div class="p-4 border-bottom wow fadeInUp">
            <p class="text-primary mb-1">
              July 02, 2018
            </p>
            <a href="#">
              {{ $notice_board->notice_title }}
            </a>
          </div>
          @endforeach

          <div class="p-4">
            <a href="#" class="btn btn-link pl-0">
              View All Notices
            </a>
          </div>
        </div>
      </div>
@endsection

@section('search')
<section class="py-5 shadow-v2">
  <div class="container">
   <form class="row align-items-center" action="#" method="POST">
     <div class="col-lg-4">
       <h4>
         Find an Solution of At Any Topic:
       </h4>
     </div>
     <div class="col-lg-3 mt-4 mt-lg-0">
       <select name="subject" class="form-control">
        <option disabled selected default>Select a Degree Level</option>
         <option value="AA">AA</option>
         <option value="AAS">AAS</option>
         <option value="BA">BA</option>
         <option value="BS">BS</option>
       </select>
     </div>
     <div class="col-lg-3 mt-4 mt-lg-0">
       <select name="" class="form-control">
        <option disabled selected default>Select a Subject</option>
         <option value="Arts & Humanities">Arts & Humanities</option>
         <option value="Business & Management">Business & Management</option>
         <option value="Engineering & Technology">Arts & Humanities</option>
         <option value="Life Sciences & Medicine">Arts & Humanities</option>
         <option value="Natural Sciences">Natural Sciences</option>
       </select>
     </div>

     <div class="col-lg-2 mt-4 mt-lg-0">
       <button class="btn btn-primary btn-block">Search</button>
     </div>
   </form> <!-- END row-->
  </div> <!-- END container-->
</section><br><br><br><br>

@endsection