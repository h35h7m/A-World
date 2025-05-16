@extends('admin.master')
@section('title', __('keywords.services'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3" >
            <h5 class="page-title">{{ __('keywords.services') }}</h5>

            <div>
               
                <x-action-button href="{{ route('admin.services.create') }}" type="create" ></x-action-button>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
              <x-success-alert></x-success-alert>
              
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th width='5%'>#</th>
                    <th>{{ __('keywords.name') }}</th>
                    <th width='10%'>{{ __('keywords.image') }}</th>
                    <th width='15%' >{{ __('keywords.actions') }}</th>
                    
                  </tr>
                </thead>
                <tbody>
                @if (count($services)>0)
                    @foreach ($services as $key=> $service)
                  <tr>
                    <td>{{ $services->firstItem() + $loop->index}}</td>
                    <td>{{ $service ->name }}</td>
                    <td>
                      <img src="{{ asset("storage/services/$service->image") }}" alt="#" width="50px" >
                    </td>
                    <td>
                      {{-- Edit-button --}}
                      <x-action-button href="{{ route('admin.services.edit',['service'=>$service]) }}" type="edit" ></x-action-button>

                      {{-- Show-button --}}
                      <x-action-button href="{{ route('admin.services.show',['service'=>$service]) }}" type="show" ></x-action-button>
                  
                      {{-- Delete-button --}}

                      <x-delete-button href=" {{ route('admin.services.destroy',['service'=>$service]) }} " id="{{ $service->id }}" ></x-delete-button>

                    </td>
                  </tr>
                    @endforeach
                  @else
                   <x-empty-alert></x-empty-alert>
                @endif
                  
                </tbody>
              </table>
              {{ $services->render('pagination::bootstrap-4')  }}
            </div>
          </div>
      </div>
    </div>
  </div>

@endsection