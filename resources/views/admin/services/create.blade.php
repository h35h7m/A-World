@extends('admin.master')
@section('title', __('keywords.add_new_service'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h5 class="page-title">{{ __('keywords.add_new_service') }}</h5>
      
        <div class="card shadow">
            <div class="card-body">
              <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- حقل الاسم -->
                    <div class="col-md-12 mt-2">
                         <x-form-label filed="name" ></x-form-label>
                        
                        <input type="text" name="name" class="form-control" placeholder="{{ __('keywords.name') }}">
                        <x-validtion-erorr filed="name"></x-validtion-erorr>
                    </div>
            
                    <!-- حقل الصورة -->
                    <div class="col-md-12 mt-2">  
                      <x-form-label filed="image" ></x-form-label>
                        <input type="file" name="image" class="form-control-file">
                        <x-validtion-erorr filed="image"></x-validtion-erorr>
                    </div>
            
                    <!-- حقل الوصف -->
                    <div class="col-md-12 mt-2">
                      <x-form-label filed="description" ></x-form-label>
                      <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                        <x-validtion-erorr filed="description"></x-validtion-erorr>
                    </div>
            
                    <!-- زر الإرسال -->
                    <x-submit-button></x-submit-button>
                </div>
            </form>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection