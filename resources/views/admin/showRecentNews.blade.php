@extends('admin.layout.adminPanel')
@section('title', 'Show Recent News')
@section('content')
  <div id="show-slide-photo" class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Recent News</h3>
            </div>
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table table-responsive-xl  table-striped text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>File</th>
                            @if (Auth::user()->role == 1)
                            <th>Action </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @isset($recentNews)
                            @foreach($recentNews as $item)
                                <tr class="bg-light">
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->file}}</td>
                                    @if (Auth::user()->role == 1)
                                    <td> 
                                        <a class="btn btn-success" href="{{route('admin.edit.recent.news', $item->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('admin.delete.recent.news', $item->id)}}">Delete</a>
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