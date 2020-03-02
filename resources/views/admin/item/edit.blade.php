@extends('layouts.app')

@section('title','Edit')

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
              <h4 class="card-title ">Edit Category</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
            <form method="post" action="{{ route('category.update',$category->id) }}">
                  @csrf
                  @method('put')
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Title</label>
                      <input type="text" class="form-control" name="name" value="{{$category->name}}">
                      </div>
                    </div>
                  </div>


                  <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
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
    
