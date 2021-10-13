@extends('admin.layout.adminPanel');
@section('title', 'Add Advertising Logo')

@section('content')
    <div class="add-advertising-logo  "class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="jumbotron bg-light text-dark font-weight-bold  mt-2 mb-5">
                    <h2 class="text-center text-success">Add Advertising Logo </h2>
                        <form action="{{route('admin.store.advertising.logo')}}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="title" name="title" class="form-control" value="{{old('title')}}" placeholder="Enter title">
                                @if ($errors->has('title'))
                                <p class="text-danger"> {{$errors->first('title')}}</p>
                             @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Logo</label>
                                <input type="file" name="logo" class="form-control">
                                @if ($errors->has('logo'))
                                <p class="text-danger"> {{$errors->first('logo')}}</p>
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