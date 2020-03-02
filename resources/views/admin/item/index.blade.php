@extends('layouts.app')

@section('title','Item')

@push('css')
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{route('item.create')}}" class="btn btn-primary">Add New</a>
        
           @include('layouts.partial.msg')

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">All Categories</h4>
              {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table " style="width:100%" id="table">
                  <thead class=" text-primary">
                    <th style="color:#9B34B2">
                      ID
                    </th>
                    <th style="color:#9B34B2">
                      Name
                    </th>
                    <th style="color:#9B34B2">
                      Image
                    </th>
                    <th style="color:#9B34B2">
                      Category Name
                    </th>
                    <th style="color:#9B34B2">
                     Description
                    </th>
                    <th style="color:#9B34B2">
                      Price
                  </th>
                  <th style="color:#9B34B2">
                    Created At
                 </th>
                 <th style="color:#9B34B2">
                  Updated At
                 </th>
                    <th style="color:#9B34B2">
                      Action
                  </th>
                  </thead>
                  <tbody>
                    @foreach ($items as $key=>$item)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->image}}</td>
                            <td>{{ $item->category->name}}</td>
                            <td>{{ $item->description}}</td>
                            <td>{{ $item->price}}</td>
                            <td>{{ $item->created_at}}</td>
                            <td>{{ $item->updated_at}}</td>
                            <td>
                               <a href="{{route('item.edit',$item->id)}}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                            <form id="delete-form-{{$item->id}}" action="{{route('item.destroy', $item->id)}}" style="display: none;" method="POST">
                            
                              @csrf
                              @method('DELETE')

                            
                            </form>
                          <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? you want to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$item->id}}').submit();
                          }else{
                            event.preventDefault();
                          }"><i class="material-icons">delete</i></button>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">

  </script>

  <script>
      $(document).ready(function() {
    $('#table').DataTable();
} );
  </script>
@endpush
    
