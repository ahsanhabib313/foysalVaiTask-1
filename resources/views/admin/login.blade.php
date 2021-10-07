@extends('admin.layout.authentication')
@section('title', 'Login Page')
    
@section('content')
<div class="login bg-info ">
 <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @if (Session::has('success'))
                <div class="alert alert-success mt-3">
                    {{Session::get('success')}}
                </div>
            @endif
            @if (Session::has('error'))
            <div class="alert alert-danger mt-3">
                {{Session::get('error')}}
            </div>
        @endif
            <div class="jumbotron bg-light text-dark font-weight-bold  my-5">
                <h2 class="text-center text-success">Login </h2>
                    <form action="{{route('user.login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            @error('email')<p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            @error('password')<p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                  {{--   <a class="d-block text-muted mt-3" href="{{url('admin/register')}}">Register Now</a> --}}
            </div>
        </div>
    </div>
</div>
</div>
@endsection