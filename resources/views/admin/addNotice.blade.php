@extends('admin.layout.adminPanel');
@section('title', 'Add Notice')
@section('content')
    <div class="add-notice " class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Add Notice </h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notice</label>
                                <textarea name="" id="" rows="5" placeholder="write notice..." class="form-control"></textarea>
                            </div>
                         
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection