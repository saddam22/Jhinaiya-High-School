<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title-->
    <title>@yield('front_title')</title>
    
    @yield('css_js')
    
  </head>
  
  <body>
   
@include('front.inc.site-header')
<!-- END site header-->

 @yield('menu')   
<!-- END ec-nav -->    

 @yield('slideshow')       
<!-- END slideshow-->    
 
 @yield('search')       
 <!-- END search-->         
      
<section class="padding-y-100">
  <div class="container">
    <div class="row">
     @include('front.inc.video')
       <!-- END video-->
     @yield('notice')
     <!-- END notice --> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
   
 @yield('online-suggestion')
<!-- END online-suggestion -->    
    
@yield('counter')
<!-- END counter -->    

@yield('include-school')
<!-- END include-school --> 

@yield('upcoming-events')
<!-- END upcoming-events -->   

@yield('admission-orientation')
<!-- END admission-orientation --> 

@yield('latest-school-news')
<!-- END latest-school-news -->  

@yield('gallery')
<!-- END gallery -->   
  
@yield('reviews')
<!-- END reviews --> 

@yield('quick-guide')
<!-- END quick-guide --> 

@include('front.inc.quiz-page')
<!-- END quiz-page -->  

@include('front.inc.footer')
<!-- END site-footer -->


<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     <script src="{{ asset('front') }}/assets/js/vendors.bundle.js"></script>
    <script src="{{ asset('front') }}/assets/js/scripts.js"></script>    

  </body>

<!-- Mirrored from echotheme.com/educati/index-college.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 07:40:23 GMT -->
</html>