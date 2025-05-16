<!-- services section start -->
@if (count($services) > 0 )

<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Services </h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have
          suffered alteration</p>
       <div class="services_section_2">
        <div class="row">
        @foreach ( $services as $service )
        <div class="col-md-4">
            <img src="{{ asset('storage/services/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid mb-3">

            <div class="btn_main"><a href="#">{{ $service->name }}</a></div>
         </div>
        @endforeach
          
             
          </div>
       </div>
    </div>
 </div>
@endif

 <!-- services section end -->