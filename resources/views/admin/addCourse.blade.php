@extends('admin.layout.adminPanel');
@section('title', 'Add Course')

@section('content')
    <div class="add-course " class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('msgType'))
                    <div class="alert alert-{{Session::get('clsType')}}">
                    <p class="text-{{Session::get('clsType')}}"> {{Session::get('message')}}</p>
                    </div>
                @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center ">Add Course </h2>
                        <form action="{{route('admin.store.course')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Course Name</label>
                                <input type="name" name="name" class="form-control" placeholder="Enter course name">
                                @if ($errors->has('name'))
                                    <p class="text-danger"> {{$errors->first('name')}}</p>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="description" name="description" class="form-control" placeholder="Enter course description">
                                @if ($errors->has('description'))
                                    <p class="text-danger"> {{$errors->first('description')}}</p>
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