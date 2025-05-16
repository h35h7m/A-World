 @if (count($abouts) > 0)
  <!-- about section start -->
 <div class="about_section layout_padding">
    <div class="container-fluid">
       <div class="row">
        @foreach ($abouts as $about )
         <div class="col-md-6">
             <div class="about_taital_main">
                <h1 class="about_taital">{{ $about->name }}</h1>
                <p class="about_text">{{ $about->description }} </p>
                <div class="readmore_bt"><a href="#">Read More</a></div>
             </div>
          </div>
          <div class="col-md-6 padding_right_0">
             <div><img src="{{ asset('storage/abouts/' . $about->image) }}" class="about_img img-fluid" alt="About Image">
             </div>
          </div> 
        @endforeach


       </div>
    </div>
 </div>
 <!-- about section end -->
 
 @endif
 
