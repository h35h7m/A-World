@extends('front.master')

@section('title', 'Contact Us')
@section('contact-active', 'active')


@section('content') 
  <!-- contact section start -->
  <div class="contact_section layout_padding" ">
   <div class="container">
      <h1 class="contact_taital">Request A Call Back</h1>
      <form action="{{ route('front.contact.store') }}" method="POST">
         @csrf
         <div class="email_text">
             <div class="form-group">
                 <input type="text" class="email-bt" placeholder="Name" name="name" required>
             </div>
             <div class="form-group">
                 <input type="text" class="email-bt" placeholder="Phone Number" name="phone" required>
             </div>
             <div class="form-group">
                 <input type="email" class="email-bt" placeholder="Email" name="email" required>
             </div>
             <div class="form-group">
                 <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message" required></textarea>
             </div>
             <div class="send_btn">
                 <button type="submit" class="send-button">SEND</button>
             </div>
         </div>
     </form>
     
     @if (session('contact_success'))
         <div class="alert alert-success">{{ session('contact_success') }}</div>
     @endif
     
     
     
      
   </div>
</div>
<!-- contact section end -->
 @endsection
