@extends('admin.layout.adminPanel')
@section('title', 'Show Slide Photo')
@section('content')
  <div id="show-slide-photo" class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Slide Photos</h3>
            </div>
            <div class="col-md-6 offset-md-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table table-striped text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th> Photo</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($sliderPhotos)
                            @foreach($sliderPhotos as $sliderPhoto)
                                    <tr class="bg-light">
                                        <td>{{$sliderPhoto->title}}</td>
                                        <td><img src="{{asset('img/slider/'.$sliderPhoto->photo)}}" alt="" height="50" width="50"></td>
                                        <td> 
                                            <a class="btn btn-danger" href="{{route('admin.destroy.slide.photo',$sliderPhoto->id)}}">Delete</a>
                                        </td>
                                    </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
    
@endsection