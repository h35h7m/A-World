@extends('front.master')

@section('title', 'Home')
@section('home-active', 'active')

@section('banner')
<!-- banner section start -->
<div class="banner_section layout_padding">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <h1 class="banner_taital">Adventure</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the
                   majority have sufferedThere are ma available, but the majority have suffered</p>
                <div class="read_bt"><a href="#">Get A Quote</a></div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <h1 class="banner_taital">Adventure</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the
                   majority have sufferedThere are ma available, but the majority have suffered</p>
                <div class="read_bt"><a href="#">Get A Quote</a></div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <h1 class="banner_taital">Adventure</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the
                   majority have sufferedThere are ma available, but the majority have suffered</p>
                <div class="read_bt"><a href="#">Get A Quote</a></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- banner section end -->
@endsection

@section('content')
   <!-- services section start -->
<x-front-services-comonent></x-front-services-comonent>
   <!-- services section end -->

   <!-- about section start -->
<x-front-abouts-comonent></x-front-abouts-comonent>
   <!-- about section end -->
   
 <!-- blog section start -->
<x-front-blog-comonent></x-front-blog-comonent>
 <!-- blog section end -->
 <x-front-testimonail-comonent></x-front-testimonail-comonent>
 <!-- choose section start -->
 <div class="choose_section layout_padding">
    <div class="container">
       <h1 class="choose_taital">Why Choose Us</h1>
       <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have
          suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
          believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
          embarrassing hidden in the middle of text. All </p>
       <div class="read_bt_1"><a href="#">Read More</a></div>
       <div class="newsletter_box">
          <h1 class="let_text">Let Start Talk with Us</h1>
          <div class="getquote_bt"><a href="#">Get A Quote</a></div>
       </div>
    </div>
 </div>
 <!-- choose section end -->

 @endsection
