@extends('admin.layout.adminPanel')
@section('title', 'Show Notice')
@section('content')
  <div id="show-notice" class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Notice</h3>
            </div>
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table table-striped text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th> Notice</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                            @isset($notices)
                                @foreach ($notices as $notice)
                                    <tr class="bg-light">
                                        <td>{{$notice->notice}}</td>
                                        <td> 
                                            <a class="btn btn-success" href="{{route('admin.edit.notice', $notice->id)}}">Edit</a>
                                            <a class="btn btn-danger" href="{{route('admin.delete.notice', $notice->id)}}">Delete</a>
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