@extends('layouts.app')

@section('title','Contact')

@push('css')
  
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
         
        
           @include('layouts.partial.msg')

          <div class="card">
            <div class="card-header card-header-primary">
            <h4 class="card-title ">{{$contact->subject}}</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
                <div class="row">
                      <div class="col-md-12">
                      <strong style="font-weight: bold;">Name: {{$contact->name}}</strong> <br>
                      <b style="font-weight: bold;">Email: {{$contact->email}}</b> <br>
                      <strong>Message: </strong><hr>

                      <p>{{$contact->message}}</p><hr>

                      </div>
                </div>

            <a href="{{route('contact.index')}}" class="btn btn-danger">Back</a>
            <div class="clearfix"></div>
            </div>
          </div>
        </div>
     
      </div>
    </div>
  </div>
@endsection

@push('scripts')

@endpush
    
