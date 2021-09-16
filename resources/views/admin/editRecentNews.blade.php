@extends('admin.layout.adminPanel');
@section('title', 'Edit Recent News')

@section('content')
    <div class="edit-recentNews"class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                 @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Edit Recent News </h2>
                        <form action="{{route('admin.update.recent.news', $recentNews->id)}}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" value="{{$recentNews->title}}" name="title" class="form-control" placeholder="Enter title">
                                @if ($errors->has('title'))
                                   <p class="text-danger"> {{$errors->first('title')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Type</label>
                                <input type="text" value="{{$recentNews->type}}" name="type" class="form-control"  placeholder="Enter type">
                                @if ($errors->has('type'))
                                   <p class="text-danger"> {{$errors->first('type')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">PDF File</label>
                                <input type="file" name="file" class="form-control"  >
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>    
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection