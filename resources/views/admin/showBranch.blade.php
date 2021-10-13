@extends('admin.layout.adminPanel')
@section('title', 'Show Branch')
@section('content')

  <div id="show-course"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center text-white my-3">All Branches</h3>
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
                            <th>Name</th>
                            <th> District</th>
                            @if (Auth::user()->role == 1)
                            <th>Action </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @isset($branches)

                        @foreach ($branches as $branch)
                            <tr class="bg-light">
                                <td>{{$branch->name}}</td>
                                <td>{{$branch->district->name}}</td>
                                @if (Auth::user()->role == 1)
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.edit.branch', $branch->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('admin.delete.branch', $branch->id)}}">Delete</a>
                                
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