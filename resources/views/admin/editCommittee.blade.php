@extends('admin.layout.adminPanel');
@section('title', 'Edit Committee')

@section('content')
    <div class="add-committee " class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                      {{Session::get('success')}}
                    </div>
                @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center ">Edit Committee </h2>
                        <form action="{{route('committee.update', $committee->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Committee Name</label>
                                <input type="name" name="name" class="form-control" value="{{ $committee->name }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger"> {{$errors->first('name')}}</p>
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