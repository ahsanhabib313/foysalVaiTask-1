@extends('master')

@section('title' , 'Search Registered Member Page')

@section('content')
    
       <div id="searchMember" >
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card">
                        <div class="card-header pb-5">
                            <h5 class="card-title text-center py-3">Search Registered Member</h5>
                            <div class="search-form">
                                <form autocomplete="off" class="col-10" action="{{route('search.registered.member')}}" method="POST">
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
                            <h5 class="text-center py-3">Member Information</h5>
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{Session::get('error')}}
                                    </div>
                                @endif
                            <table class="table  table-striped my-3">
                                @isset($member)
                                    <tr>
                                        <th>Name</th>
                                        <td>{{$member->firstName}} {{$member->lastName}}</td>
                                    </tr>
                                    <tr>
                                        <th>Father's Name</th>
                                        <td>{{$member->fatherName}}</td>
                                    </tr>
                                    <tr>
                                        <th >Mother's Name</th>
                                        <td>{{$member->motherName}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$member->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mobile Number</th>
                                        <td>{{$member->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th>Birth Date</th>
                                        <td>{{$member->birthOfDate}}</td>
                                    </tr>
                                    <tr>
                                        <th>Branch Name</th>
                                        <td>{{$member->branch->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Course Name</th>
                                        <td>{{$member->course->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Duration</th>
                                        <td>{{$member->duration->duration}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td><img class="img-fluid" src="{{asset('storage/'.$member->photo)}}" alt="" width="250" height="250"></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Signature</th>
                                        <td><img class="img-fluid" src="{{asset('storage/'.$member->signature)}}" height="10"></td>
                                    </tr>
                                   

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