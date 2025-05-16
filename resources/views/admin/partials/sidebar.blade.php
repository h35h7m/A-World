<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex justify-content-center align-items-center">
        <a class="navbar-brand text-center" href={{ route('admin.index') }}>
            <img src="{{ asset('assets-front') }}/images/logo2.png" alt="Logo" style="width: 180px; height: 150px;">
        </a>
    </div>
    
      

      {{-- HOME  --}}
      <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item w-100">
        <a class="nav-link" href= {{route('admin.index')}} >
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">{{ __('keywords.home') }}</span>
        </a>
      </li>
      </ul>

    
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>{{ __('keywords.components') }}</span>
      </p>

      
      
      <ul class="navbar-nav flex-fill w-100 mb-2">
       {{-- Services --}}
        <x-sidebar-tab href="{{ route('admin.services.index') }}" icon="fe-codesandbox" name="{{ __('keywords.services') }}"></x-sidebar-tab>
        {{-- Abouts --}}
        <x-sidebar-tab href="{{ route('admin.abouts.index') }}" icon="fe-twitch" name="{{ __('keywords.abouts') }}"></x-sidebar-tab>
        {{-- Blogs --}}
        <x-sidebar-tab href="{{ route('admin.blogs.index') }}" icon="fe-book" name="{{ __('keywords.blogs') }}"></x-sidebar-tab>
        {{--Testimonials --}}
        <x-sidebar-tab href="{{ route('admin.testimonials.index') }}" icon="fe-users" name="{{ __('keywords.testimonials') }}"></x-sidebar-tab>
        {{--Contacts --}}
        <x-sidebar-tab href="{{ route('admin.contacts.index') }}" icon="fe-mail" name="{{ __('keywords.contacts') }}"></x-sidebar-tab>
        {{--Subscribers --}}
        <x-sidebar-tab href="{{ route('admin.subscribers.index') }}" icon="fe-users" name="{{ __('keywords.subscribers') }}"></x-sidebar-tab>
        {{-- Settings --}}
        <x-sidebar-tab href="{{ route('admin.settings.index') }}" icon="fe-settings" name="{{ __('keywords.settings') }}"></x-sidebar-tab>
        
        
        
        
        
        
        
      </ul>

    </nav>
  </aside>