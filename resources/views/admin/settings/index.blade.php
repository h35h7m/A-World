@extends('admin.master')
@section('title', __('keywords.settings'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h5 class="page-title">{{ __('keywords.settings') }}</h5>
      
        <div class="card shadow">
            <div class="card-body">
              <x-success-alert></x-success-alert>
              <form action="{{ route('admin.settings.update',['setting'=> $setting]) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="row">
                    
                    <div class="col-md-6 mt-2"> 
                        <x-form-label filed="email" ></x-form-label>
                        <input type="text" name="email" class="form-control" placeholder="{{ __('keywords.email') }}" value="{{ $setting->email }}">
                        <x-validtion-erorr filed="email"></x-validtion-erorr>
                    </div>
                    <div class="col-md-6 mt-2"> 
                        <x-form-label filed="phone" ></x-form-label>
                        <input type="text" name="phone" class="form-control" placeholder="{{ __('keywords.phone') }}" value="{{ $setting->phone }}">
                        <x-validtion-erorr filed="phone"></x-validtion-erorr>
                    </div>
                    <div class="col-md-6 mt-2"> 
                        <x-form-label filed="facebook" ></x-form-label>
                        <input type="url" name="facebook" class="form-control" placeholder="{{ __('keywords.facebook') }}" value="{{ $setting->facebook }}">
                        <x-validtion-erorr filed="facebook"></x-validtion-erorr>
                    </div>
    
                    <div class="col-md-6 mt-2"> 
                        <x-form-label filed="instagram" ></x-form-label>
                        <input type="url" name="instagram" class="form-control" placeholder="{{ __('keywords.instagram') }}" value="{{ $setting->instagram }}">
                        <x-validtion-erorr filed="instagram"></x-validtion-erorr>
                    </div>
                    <div class="col-md-6 mt-2"> 
                        <x-form-label filed="linkedin" ></x-form-label>
                        <input type="url" name="linkedin" class="form-control" placeholder="{{ __('keywords.linkedin') }}" value="{{ $setting->linkedin }}">
                        <x-validtion-erorr filed="linkedin"></x-validtion-erorr>
                    </div>
            
                    
            
                    
            
                    <!-- زر الإرسال -->
                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-sm">{{ __('keywords.submit') }}</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection