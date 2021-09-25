@extends('admin.layout.adminPanel')
@section('title', 'Show Employee')
@section('content')

  <div id="showEmployee"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Employees</h3>
            </div>
            <div class="offset-md-3 col-md-6">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            </div>
            <div class="col-md-12">
                <table class="table table-responsive-xl   table-striped  text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Post</th>
                            <th> Image</th>
                            @if (Auth::user()->role == 1)
                            <th>Action </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @isset($employees)
                            @foreach ($employees as $employee)
                            <tr class="bg-light">
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->post}}</td>
                                <td> <img src="{{asset('img/employee/'.$employee->photo)}}" alt="Employee Image" width="50" height="50"></td>
                                @if (Auth::user()->role == 1)
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.edit.employee', $employee->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('admin.delete.employee', $employee->id)}}">Delete</a>
                                
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