@extends('admin.master')
@section('title', __('keywords.show_contact'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h5 class="page-title">{{ __('keywords.show_contact') }}</h5>
      
        <div class="card shadow">
            <div class="card-body">
              
                <div class="row">
                    <!-- حقل الاسم -->
                    <div class="col-md-6 mt-2">
                        <label for="name">{{ __('keywords.name') }}</label>
                        <p class="form-control"> {{ $contact->name }}</p>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="phone">{{ __('keywords.phone') }}</label>
                        <p class="form-control"> {{ $contact->phone }}</p>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="email">{{ __('keywords.email') }}</label>
                        <p class="form-control"> {{ $contact->email }}</p>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="message">{{ __('keywords.message') }}</label>
                        <p class="form-control"> {{ $contact->message }}</p>
                    </div> 
                </div>
            
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection