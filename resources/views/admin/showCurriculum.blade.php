@extends('admin.layout.adminPanel')
@section('title', 'Show Curriculums')
@section('content')

  <div id="showEmployee"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Curriculums</h3>
            </div>
            <div class="offset-md-3 col-md-6">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            </div>
            <div class="col-md-12">
                <table class="table table-striped  text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th> File</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($curriculums)

                        @foreach ($curriculums as $curriculum)
                            <tr class="bg-light">
                                <td>{{$curriculum->title}}</td>
                                <td>{{$curriculum->file}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.edit.curriculum', $curriculum->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('admin.delete.curriculum', $curriculum->id)}}">Delete</a>
                                
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