@extends('admin.layout.adminPanel');
@section('title', 'Add Branch')

@section('content')
    <div class="add-branch " class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center ">Add Branch </h2>
                        <form action="{{route('admin.store.branch')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Branch Name</label>
                                <input type="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter branch name">
                                @if ($errors->has('name'))
                                    <p class="text-danger"> {{$errors->first('name')}}</p>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">District</label>
                                <select class="form-control" name="district_id">
                                    <option selected disabled>Select District</option>
                                    @isset($districts)
                                        @foreach ($districts as $district)
                                        <option value="{{$district->id}}">{{ $district->name }}</option>
                                        @endforeach
                                    @endisset
                                    
                                </select>
                                @if ($errors->has('district_id'))
                                    <p class="text-danger"> {{$errors->first('district_id')}}</p>
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