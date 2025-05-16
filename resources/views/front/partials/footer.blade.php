<!-- footer section start -->
<div class="footer_section layout_padding">
  <div class="container">
    <!-- نموذج الاشتراك -->
    <div class="input_btn_main">
      <form action="{{ route('front.subscribe.store') }}" method="post" class="subscribe-form">
        @csrf
        <div class="subscribe-wrapper">
            <input type="email" class="mail_text" placeholder="Enter your email" name="email" required>
            <button type="submit" class="subscribe_bt">
                <img src="{{ asset('assets-front') }}/images/send.png" class="right_icon" alt="Send">
            </button>
            {{-- <x-validtion-erorrs field="email"></x-validtion-errors> --}}
        </div>
    </form>
    
    @if (session('subscriper_success'))
        <div class="alert-success-custom">
            {{ session('subscriper_success') }}
        </div>
    @endif
    
    </div>
    
    

    <!-- معلومات الاتصال -->
    <div class="location_main">
      <div class="call_text"><img src="{{asset('assets-front')}}/images/call-icon.png"></div>
      <div class="call_text"><a href="#">{{ $settings->phone }}</a></div>
      <div class="call_text"><img src="{{asset('assets-front')}}/images/mail-icon.png"></div>
      <div class="call_text"><a href="#">{{ $settings->email }}</a></div>
    </div>

    <!-- روابط السوشيال -->
    <div class="social_icon">
      <ul>
        @if ($settings->facebook)
        <li><a target="_blank" href="{{ $settings->facebook }}"><img src="{{asset('assets-front')}}/images/fb-icon.png"></a></li>
        @endif
        @if ($settings->twitter)
        <li><a target="_blank" href="{{ $settings->twitter }}"><img src="{{asset('assets-front')}}/images/twitter.png"></a></li>
        @endif
        @if ($settings->linkedin)
        <li><a target="_blank" href="{{ $settings->linkedin }}"><img src="{{asset('assets-front')}}/images/linkedin-icon.png"></a></li>
        @endif
        @if ($settings->instagram)
        <li><a target="_blank" href="{{ $settings->instagram }}"><img src="{{asset('assets-front')}}/images/instagram-icon.png"></a></li>
        @endif
      </ul>
    </div>
  </div>
</div>
<!-- footer section end -->
