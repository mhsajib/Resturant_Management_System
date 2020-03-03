@extends('layouts.app')

@section('title','Login')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-md-offset1">
          @include('layouts.partial.msg')

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Login</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
            <form method="post" action="{{ route('login') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control" name="email"
                      value="{{old('email')}}" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-primary" type="submit">Login</button>
                  <a href="{{route('welcome')}}" class="btn btn-danger">Back</a>
                  
                  
             </form>
            </div>
          </div>
        </div>
     
      </div>
    </div>
  </div>
@endsection

@push('scripts')

@endpush
    
