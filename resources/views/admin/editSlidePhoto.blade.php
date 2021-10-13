@extends('admin.layout.adminPanel');
@section('title', 'Edit Slide Photo')

@section('content')
    <div class="add-slide-photo  "class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="jumbotron bg-light text-dark font-weight-bold  mt-2 mb-5">
                    <h2 class="text-center text-success">Edit Slide Photo </h2>
                        <form action="{{route('admin.update.slide.photo', $slide->id)}}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="title" name="title" class="form-control" value="{{$slide->title}}" placeholder="Enter title">
                                @if ($errors->has('title'))
                                <p class="text-danger"> {{$errors->first('title')}}</p>
                             @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Photo</label>
                                <input type="file" name="photo" class="form-control">
                                @if ($errors->has('photo'))
                                <p class="text-danger"> {{$errors->first('photo')}}</p>
                             @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection