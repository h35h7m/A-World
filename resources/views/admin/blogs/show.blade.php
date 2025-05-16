@extends('admin.master')
@section('title', __('keywords.show_blog'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h5 class="page-title">{{ __('keywords.show_blog') }}</h5>
      
        <div class="card shadow">
            <div class="card-body">
              
                <div class="row">
                    <!-- حقل الاسم -->
                    <div class="col-md-10 mt-2">
                        <label for="name">{{ __('keywords.name') }}</label>
                        <p class="form-control"> {{ $blog->name }}</p>
              
                    </div>
            
                    <!-- حقل الصورة -->
                    <div class="col-md-2 mt-2">  
                        <label for="image">{{ __('keywords.image') }}</label>
                        
                        <div>
                          <img src="{{ asset("storage/blogs/$blog->image") }}" alt="#"
                         width="40px" >
                        </div>
                       
                    </div>
            
                    <!-- حقل الوصف -->
                    <div class="col-md-12 mt-2">
                        <label for="description">{{ __('keywords.description') }}</label>
                        <p class="form-control"> {{ $blog->description }}</p>
                       
                    </div>
            
                    
                    
                </div>
            
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection