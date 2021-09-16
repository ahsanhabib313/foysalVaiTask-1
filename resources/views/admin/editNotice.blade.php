@extends('admin.layout.adminPanel');
@section('title', 'Edit Notice')
@section('content')
    <div class="edit-notice " class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success">Edit Notice </h2>
                        <form action="{{route('admin.update.notice', $notice->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notice</label>
                                <textarea name="notice"  rows="5" placeholder="write notice..." class="form-control">{{$notice->notice}}</textarea>
                                @if ($errors->has('notice'))
                                    <p class="text-danger"> {{$errors->first('notice')}}</p>
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