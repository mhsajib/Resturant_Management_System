@extends('layouts.app')

@section('title','Contact')

@push('css')
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
   <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
         
        
           @include('layouts.partial.msg')

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">All Contacts Message</h4>
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
                      Subject
                    </th>
                    <th style="color:#9B34B2">
                      Send At
                    </th>

                    <th style="color:#9B34B2">
                      Action
                  </th>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $key=>$contact)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $contact->name}}</td>
                            <td>{{ $contact->subject}}</td>
                            <td>{{ $contact->created_at}}</td>
                            
                            <td>
                            <a href="{{route("contact.show",$contact->id)}}" class="btn btn-info btn-sm"><i class="material-icons">details</i></a>

                            <form id="delete-form-{{$contact->id}}" action="{{route('contact.destroy',$contact->id)}}" style="display: none;" method="POST">
                            
                              @csrf
                              @method('DELETE')

                            
                          </form>
                          <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? you want to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$contact->id}}').submit();
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
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

  </script>

  <script>
      $(document).ready(function() {
    $('#table').DataTable();
} );
  </script>
@endpush
    
