@extends('layouts.app')

@section('title','Slider')

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
              <h4 class="card-title ">Add New Slider</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
            <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Title</label>
                        <input type="text" class="form-control" name="title">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Sub Title</label>
                        <input type="text" class="form-control" name="sub_title">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                        <label class="bmd-label-floating">Image</label>
                        <input type="file" name="image">
                    </div>
                  </div> <br>
                  <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                  <button class="btn btn-primary" type="submit">Save</button>
                  
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
    
