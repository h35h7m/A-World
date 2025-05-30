@extends('admin.master')
@section('title', __('keywords.contacts'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3" >
            <h5 class="page-title">{{ __('keywords.contacts') }}</h5>
        </div>
        <div class="card shadow">
            <div class="card-body">
              <x-success-alert></x-success-alert>
              
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th width='5%'>#</th>
                    <th>{{ __('keywords.name') }}</th>
                    <th >{{ __('keywords.phone') }}</th>
                    <th >{{ __('keywords.email') }}</th>
                    
                    <th >{{ __('keywords.message') }}</th>
                    <th width='15%' >{{ __('keywords.actions') }}</th>
                    
                  </tr>
                </thead>
                <tbody>
                @if (count($contacts)>0)
                    @foreach ($contacts as $key=> $contact)
                  <tr>
                    <td>{{ $contacts->firstItem() + $loop->index}}</td>
                    <td>{{ $contact ->name }}</td>
                    <td>{{ $contact ->phone }}</td>
                    <td>{{ $contact ->email }}</td>
                      <td>{{ $contact ->message }}</td>
                    
                    <td>

                      {{-- Show-button --}}
                      <x-action-button href="{{ route('admin.contacts.show',['contact'=>$contact]) }}" type="show" ></x-action-button>
                  
                      {{-- Delete-button --}}

                      <x-delete-button href=" {{ route('admin.contacts.destroy',['contact'=>$contact]) }} " id="{{ $contact->id }}" ></x-delete-button>

                    </td>
                  </tr>
                    @endforeach
                  @else
                   <x-empty-alert></x-empty-alert>
                @endif
                  
                </tbody>
              </table>
              {{ $contacts->render('pagination::bootstrap-4')  }}
            </div>
          </div>
      </div>
    </div>
  </div>

@endsection