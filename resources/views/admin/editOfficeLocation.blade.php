@extends('admin.layout.adminPanel');
@section('title', 'Edit Office Location')
@section('content')
    <div class="edit-office-location " class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Edit Office Location </h2>
                        <form action="{{route('admin.update.office.location', $officeLocation->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Office Location</label>
                                <textarea name="office_location"  rows="5" class="form-control">{{$officeLocation->office_location}}</textarea>
                                @if ($errors->has('office_location'))
                                    <p class="text-danger"> {{$errors->first('office_location')}}</p>
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