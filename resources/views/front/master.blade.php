<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')


<body>

<!-- header section start -->
<div class="header_section">
    @include('front.partials.header')

    @yield('banner')
    
 </div>
<!-- header section end -->

    
 
   
   @yield('content')

   @include('front.partials.footer')
   
   @include('front.partials.copyrights')


   @include('front.partials.scripts')
   

</body>

</html>
