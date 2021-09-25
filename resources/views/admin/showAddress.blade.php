@extends('admin.layout.adminPanel')
@section('title', 'Show Address')
@section('content')

  <div id="show-address"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Address</h3>
            </div>
            <div class="offset-md-3 col-md-6">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table table-responsive-xl  table-striped  text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Address</th>
                            <th> Telephone</th>
                            <th> Fax</th>
                            <th>Email</th>
                            @if (Auth::user()->role == 1)
                            <th>Action </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @isset($addresses)
                            
                            @foreach ($addresses as $address)
                            <tr class="bg-light">
                                <td>{{$address->address}}</td>
                                <td>{{$address->telephone}}</td>
                                <td>{{$address->fax}}</td>
                                <td>{{$address->email}}</td>
                                @if (Auth::user()->role == 1)
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.edit.address', $address->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('admin.delete.address', $address->id)}}">Delete</a>
                                
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        @endisset
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
    
@endsection