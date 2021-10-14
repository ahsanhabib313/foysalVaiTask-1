@extends('admin.layout.adminPanel');
@section('title', 'Add Registration Num')

@section('content')
    <div class=""class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                 @endif
              
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Add Registration Number </h2>
                        <form action="{{route('admin.store.registration.number', $member->id)}}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Registration Number</label>
                                <input type="number"  name="registrationNum" class="form-control" placeholder="Enter Registration Number">
                                @if ($errors->has('registrationNum'))
                                   <p class="text-danger"> {{$errors->first('registrationNum')}}</p>
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