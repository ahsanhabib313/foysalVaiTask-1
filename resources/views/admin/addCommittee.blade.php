@extends('admin.layout.adminPanel');
@section('title', 'Add Committee')

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
                    <h2 class="text-center ">Add Committee </h2>
                        <form action="{{route('committee.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Committee Name</label>
                                <input type="name" name="name" class="form-control" placeholder="Enter course name">
                                @if ($errors->has('name'))
                                    <p class="text-danger"> {{$errors->first('name')}}</p>
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