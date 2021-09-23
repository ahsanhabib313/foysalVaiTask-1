@extends('admin.layout.adminPanel')
@section('title', 'Show Member')
@section('content')

  <div id="showMember"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Pending Members</h3>
            </div>
            <div class="col-md-12">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                            {{Session::get('success')}}
                    </div> 
                @endif
                <table class="table table-responsive table-striped text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Branch</th>
                            <th>Photo</th>
                            <th>Signature</th>
                            <th>Registration No.</th>
                            <th>Transection ID</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($members)

                            @foreach ($members as $member)
                                <tr class="bg-light">
                                    <td>{{$member->firstName.' '.$member->lastName}}</td>
                                    <td>{{$member->email}}</td>
                                    <td>{{$member->mobile}}</td>
                                    <td>{{$member->branchName->name}}</td>
                                    <td><img src="{{asset('storage')}}/{{$member->photo}}" alt="" height="50" width="50"></td>
                                    <td><img src="{{asset('storage')}}/{{$member->signature}}" alt=""  height="50" width="50"></td>
                                    <td>{{$member->registrationNum}}</td>
                                    <td>{{$member->transectionId}}</td>
                                    <td>
                                        <a href="{{route('admin.active.member',$member->id)}}" class="btn btn-success" href="#">Active</a>
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