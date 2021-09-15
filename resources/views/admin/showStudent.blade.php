@extends('admin.layout.adminPanel')
@section('title', 'Show Student')
@section('content')

  <div id="showStudent"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Pending Students</h3>
            </div>
            <div class="col-md-12">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                            {{Session::get('success')}}
                    </div> 
                @endif
                <table class="table table-striped text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Branch</th>
                            <th>Photo</th>
                            <th>Signature</th>
                            <th>Registration No.</th>
                            <th>Transection ID</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($students)

                            @foreach ($students as $student)
                                <tr class="bg-light">
                                    <td>{{$student->firstName.' '.$student->lastName}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->branchName->name}}</td>
                                    <td><img src="{{asset('storage/'.$student->photo)}}" alt="" height="50" width="50"></td>
                                    <td><img src="{{asset('storage/'.$student->signature)}}" alt=""  height="50" width="50"></td>
                                    <td>{{$student->registrationNum}}</td>
                                    <td>{{$student->transectionId}}</td>
                                    <td>
                                        <a href="{{route('admin.active.student',$student->id)}}" class="btn btn-success" href="#">Active</a>
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