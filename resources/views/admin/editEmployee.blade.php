@extends('admin.layout.adminPanel');
@section('title', 'Edit Employee')

@section('content')
    <div class="edit-employee"class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Edit Employee </h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="email" value="Sheikh Ahsan Habib" name="name" class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post</label>
                                <input type="email" value="CEO" name="post" class="form-control"  placeholder="Enter poar">
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