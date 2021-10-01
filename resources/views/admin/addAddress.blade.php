@extends('admin.layout.adminPanel');
@section('title', 'Add Address')

@section('content')
    <div class="add-address " class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Add Address </h2>
                        <form action="{{route('admin.store.address')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <textarea class="form-control" name="address"  placeholder="Enter address">{{old('address')}}</textarea>
                                @if ($errors->has('address'))
                                    <p class="text-danger"> {{$errors->first('address')}}</p>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telephone</label>
                                <input type="tel" name="telephone" class="form-control" placeholder="Enter telephone" value="{{old('telephone')}}">
                                @if ($errors->has('telephone'))
                                    <p class="text-danger"> {{$errors->first('telephone')}}</p>
                                 @endif
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fax</label>
                                <input type="tel" name="fax" class="form-control" placeholder="Enter fax" value="{{old('fax')}}">
                                @if ($errors->has('fax'))
                                    <p class="text-danger"> {{$errors->first('fax')}}</p>
                                 @endif
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                    <p class="text-danger"> {{$errors->first('email')}}</p>
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