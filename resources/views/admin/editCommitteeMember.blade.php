@extends('admin.layout.adminPanel');
@section('title', 'edit Committee Member')

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
                    <h2 class="text-center ">Edit Committee Member </h2>
                        <form action="{{route('committeeMember.update', $committeeMember->id)}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $committeeMember->name }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger"> {{$errors->first('name')}}</p>
                                 @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Designation</label>
                                <input type="text" name="designation" class="form-control"  value="{{ $committeeMember->designation }}">
                                @if ($errors->has('designation'))
                                    <p class="text-danger"> {{$errors->first('designation')}}</p>
                                 @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Commitee</label>
                                <select class="form-control" name="committee_id" id="">
                                        @isset($committees)
                                             @foreach ($committees as $committee)
                                                 <option {{ $committee->id == $committeeMember->id ? 'selected':' ' }} value="{{ $committee->id }}">{{ $committee->name }}</option>
                                             @endforeach
                                        @endisset
                                </select>
                                @if ($errors->has('committee_id'))
                                    <p class="text-danger"> {{$errors->first('committee_id')}}</p>
                                 @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Photo</label>
                                <input type="file" name="photo" class="form-control" >
                                @if ($errors->has('photo'))
                                    <p class="text-danger"> {{$errors->first('photo')}}</p>
                                 @endif
                            </div>
                            
                            <button type="submit" class="btn btn-primary">update</button>
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection