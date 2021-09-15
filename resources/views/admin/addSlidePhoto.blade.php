@extends('admin.layout.adminPanel');
@section('title', 'Add Slide Photo')

@section('content')
    <div class="add-slide-photo  "class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron bg-light text-dark font-weight-bold  mt-2 mb-5">
                    <h2 class="text-center text-success">Add Slide Photo </h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="title" name="title" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Photo</label>
                                <input type="file" name="photo" class="form-control"  >
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection