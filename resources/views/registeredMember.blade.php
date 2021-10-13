@extends('master')

@section('title' , 'Search Registered Member Page')

@section('content')
    
       <div id="searchMember" >
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="card">
                        <div class="card-header pb-5">
                            <h5 class="card-title text-center py-3">Search Registered Rural Physicians</h5>
                            <div class="search-form">
                                <form autocomplete="on" class="col-10" action="{{route('search.registered.member')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="registrationNum"> Registration Number </label>
                                        <input type="number" class="form-control" name="registrationNum" id="registrationNum" placeholder="enter registration number">
                                    @error('registrationNum') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <button type="submit" class="btn btn-info">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="text-center py-3">Registered Rural Physicians Information</h5>
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{Session::get('error')}}
                                    </div>
                                @endif
                            <table class="table  table-striped my-3">
                                @isset($member)


                                <tbody>
                                        <tr>
                                            <th>Registration No.</th>
                                            <th>{{$member->registrationNum}}</th>
                                            <th rowspan="7" align="center"><img style="float:right" class="img-fluid" src="{{asset('storage/'.$member->photo)}}" alt="" width="250" height="250"></th>
                                        </tr>
                                   
                                   
                                        <tr>
                                            <td>Name</td>
                                            <td>{{$member->firstName.' '.$member->lastName}}</td>
                                        </tr>
                                        <tr>
                                            <td>Father's Name</td>
                                            <td>{{$member->fatherName}}</td>
                                        </tr>
                                        <tr>
                                            <td>Course Name </td>
                                            <td>{{$member->course->name}}</td>
                                        </tr>

                                        <tr>
                                            <th>Course Duration</th>
                                            <td>{{$member->duration->duration}}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{$member->presentDistrict->name.', '.$member->presentUpozilla->name.', '.$member->presentPostOffice.', '.$member->presentPostCode.', '.$member->village}}
                                            </td>
                                        </tr>
                                    </tbody>

                                 @endisset
                                
                            </table>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
           
       </div>

@endsection