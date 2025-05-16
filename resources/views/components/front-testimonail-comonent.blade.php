@if (count($testimonials) > 0)
     <!-- client section start -->
 <div class="client_section layout_padding">
    <div class="container">
       <h1 class="client_taital">Testimonial</h1>
       <div class="client_section_2">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
             </ol>
             <div class="carousel-inner">
                @foreach ($testimonials as $testimonial)
                
                 <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                  <div class="client_main">
                     <div class="box_left">
                        <p class="lorem_text">
                           {{ $testimonial->description }}
                        </p>
                     </div>
                     <div class="box_right">
                        <div class="client_taital_left">
                           <div class="client_img">
                            <img src="{{ asset('storage/testimonials/' . $testimonial->image) }}" alt="Client Photo">

                           </div>
                           <div class="quick_icon">
                              <img src="{{asset('assets-front')}}/images/quick-icon.png" alt="Quote Icon">
                           </div>
                        </div>
                        <div class="client_taital_right">
                           <h4 class="client_name">{{ $testimonial->name }}</h4>
                           <p class="customer_text">{{ $testimonial->position }}</p>
                        </div>
                     </div>
                  </div>
               </div>
                    
                @endforeach
               
                  
              
               
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- client section end -->

@endif 
 
