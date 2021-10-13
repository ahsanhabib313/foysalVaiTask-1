@extends('admin.layout.adminPanel');
@section('title', 'Edit Advertising Logo')

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
                    <h2 class="text-center text-success">Edit Advertising Logo </h2>
                        <form action="{{route('admin.update.advertising.logo', $advertisingLogo->id)}}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" value="{{$advertisingLogo->title}}" name="title" class="form-control" placeholder="Enter title">
                                @if ($errors->has('title'))
                                   <p class="text-danger"> {{$errors->first('title')}}</p>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Logo Image</label>
                                <input type="file" name="logo" class="form-control"  >
                                @if ($errors->has('logo'))
                                <p class="text-danger"> {{$errors->first('logo')}}</p>
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