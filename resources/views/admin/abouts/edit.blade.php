@extends('admin.master')
@section('title', __('keywords.edit_about'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h5 class="page-title">{{ __('keywords.edit_about') }}</h5>
      
        <div class="card shadow">
            <div class="card-body">
              <form action="{{ route('admin.abouts.update',['about'=> $about]) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="row">
                    <!-- حقل الاسم -->
                    <div class="col-md-12 mt-2">
                        <x-form-label filed="name" ></x-form-label>
                        <input type="text" name="name" class="form-control" placeholder="{{ __('keywords.name') }}" value="{{ $about->name }}">
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
                        <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}" >{{ $about->description }} </textarea>

                        <x-validtion-erorr filed="description"></x-validtion-erorr>
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