@extends('admin.layout.adminPanel');
@section('title', 'Edit Employee')

@section('content')
    <div class="edit-employee"class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Edit Employee </h2>
                        <form action="{{route('admin.update.employee', $employee->id)}}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" value="{{$employee->name}}" name="name" class="form-control" placeholder="Enter name">
                                @if ($errors->has('name'))
                                   <p class="text-danger"> {{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post</label>
                                <input type="text" value="{{$employee->post}}" name="post" class="form-control"  placeholder="Enter poar">
                                @if ($errors->has('post'))
                                   <p class="text-danger"> {{$errors->first('post')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Photo</label>
                                <input type="file" name="photo" class="form-control"  >
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>    
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection