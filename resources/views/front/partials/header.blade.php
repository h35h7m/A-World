<div class="header_main">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="index.html"><img src="{{asset('assets-front')}}/images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">

                <li class="nav-item">
                   <a class="nav-link" href="login.html">Login</a>
                </li>
                
                <li class="nav-item">
                   <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="contact.html">Contact</a>
                </li>
             </ul>
          </div>
       </nav>
    </div>
    <div class="container-fluid">
       <div class="logo"><a href="{{ route('front.index') }}"><img src="{{asset('assets-front')}}/images/logo.png"></a></div>
       <div class="menu_main">
          <ul>
             {{-- <li><a href="{{ route('front.login2') }}">Login</a></li> --}}
             <li class="@yield('home-active')"><a href="{{ route('front.index') }}">Home</a></li>
             <li class="@yield('about-active')"><a href="{{ route('front.about') }}">About</a></li>
             <li class="@yield('services-active')"><a href="{{ route('front.services') }}">Services</a></li>
             <li class="@yield('blog-active')"><a href="{{ route('front.blog') }}">Blog</a></li>
             <li class="@yield('contact-active')"><a href="{{ route('front.contact') }}">Contact us</a></li>
          </ul>
       </div>
    </div>
 </div>