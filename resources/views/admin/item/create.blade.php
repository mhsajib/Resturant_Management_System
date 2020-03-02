@extends('layouts.app')

@section('title','Create')

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
              <h4 class="card-title ">Add New Item</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
            <form method="post" action="{{ route('item.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Category</label>
                        <select name="category" id="" class="form-control">
                            @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>      

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Name</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Description</label>
                        <textarea id="" cols="30" class="form-control" rows="10"  name="description"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Price</label>
                        <input type="number" class="form-control" name="price">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                    
                        <label class="bmd-label-floating">Image</label>
                        <input type="file" class="form-control" name="image">
                      
                    </div>
                  </div>


                  <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
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
    
