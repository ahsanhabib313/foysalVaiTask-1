@extends('admin.layout.adminPanel')
@section('title', 'Show Office Location')
@section('content')
  <div id="show-office-location" class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">Office Location</h3>
            </div>
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if (Session::has('danger'))
                    <div class="alert alert-danger">
                        {{Session::get('danger')}}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table  table-responsive table-striped text-dark text-center" style="overflow-x:auto;">
                    <thead class="thead-dark">
                        <tr>
                            <th> Location</th>
                            @if (Auth::user()->role == 1)
                            <th>Action </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                            @isset($officeLocations)
                                @foreach ($officeLocations as $officeLocation)
                                    <tr class="bg-light">
                                        <td style="overflow-x: auto">{{$officeLocation->office_location}}</td>
                                        @if (Auth::user()->role == 1)
                                        <td> 
                                            <a class="btn btn-sm btn-success" href="{{route('admin.edit.office.location', $officeLocation->id)}}">Edit</a>
                                           <a class="btn btn-sm btn-danger my-2" href="{{route('admin.delete.office.location', $officeLocation->id)}}">Delete</a>
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