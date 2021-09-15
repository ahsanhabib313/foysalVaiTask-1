@extends('admin.layout.adminPanel');
@section('title', 'Add Recent News')

@section('content')
    <div class="add-recent-news "class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Add Recent News </h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" name="title" class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Type</label>
                                <input type="email" name="type" class="form-control"  placeholder="Enter poar">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">PDF File</label>
                                <input type="file" name="file" class="form-control"  >
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection