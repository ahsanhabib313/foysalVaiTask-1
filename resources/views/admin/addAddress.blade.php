@extends('admin.layout.adminPanel');
@section('title', 'Add Address')

@section('content')
    <div class="add-address " class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Add Address </h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <textarea class="form-control" name="" id=""  placeholder="Enter address"></textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telephone</label>
                                <input type="text" name="addtress" class="form-control" placeholder="Enter telephone">
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fax</label>
                                <input type="text" name="addtress" class="form-control" placeholder="Enter fax">
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="addtress" class="form-control" placeholder="Enter email">
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection