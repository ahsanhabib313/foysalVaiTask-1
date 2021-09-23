@extends('admin.layout.adminPanel')
@section('title', 'Show Course')
@section('content')

  <div id="show-course"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Courses</h3>
            </div>
            <div class="offset-md-3 col-md-6">
                @if (Session::has('msgType'))
                    <div class="alert alert-{{Session::get('clsType')}}">
                    <p class="text-{{Session::get('clsType')}}"> {{Session::get('message')}}</p>
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table table-striped  text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th> Description</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($courses)

                        @foreach ($courses as $course)
                            <tr class="bg-light">
                                <td>{{$course->name}}</td>
                                <td>{{$course->description}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.edit.course', $course->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('admin.delete.course', $course->id)}}">Delete</a>
                                
                                </td>
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