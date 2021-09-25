@extends('admin.layout.authentication')
@section('title', 'Registration Page')
    
@section('content')

    <div class="register bg-info ">
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron bg-light text-dark font-weight-bold  my-5">
                    <h2 class="text-center text-success">Registration </h2>
                        <form action="{{route('user.register')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" value="{{old('username')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                                 @error('username')<p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                @error('email')<p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label> 
                                <input type="password" name="password" class="form-control" value="{{old('password')}}" id="exampleInputPassword1" placeholder="Password">
                                @error('password')<p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <a class="d-block text-muted mt-3" href="{{url('admin/login')}}">I have an account already!</a>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection