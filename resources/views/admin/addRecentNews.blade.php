@extends('admin.layout.adminPanel');
@section('title', 'Add Recent News')

@section('content')
    <div class="add-recent-news "class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Add Recent News </h2>
                        <form action="{{route('admin.store.recent.news')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="title" name="title" value="{{old('title')}}" class="form-control" placeholder="Enter title">
                                @if ($errors->has('title'))
                                    <p class="text-danger"> {{$errors->first('title')}}</p>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Type</label>
                                <input type="type" name="type" value="{{old('type')}}" class="form-control"  placeholder="Enter type">
                                @if ($errors->has('type'))
                                <p class="text-danger"> {{$errors->first('type')}}</p>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">PDF File</label>
                                <input type="file" name="file" class="form-control" >
                                @if ($errors->has('file'))
                                <p class="text-danger"> {{$errors->first('file')}}</p>
                                 @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection