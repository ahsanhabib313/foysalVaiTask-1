@extends('admin.layout.adminPanel')
@section('title', 'Show Active Student')
@section('content')

  <div id="showActiveStudent"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Active Students</h3>
            </div>
            <div class="col-md-12">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                            {{Session::get('success')}}
                    </div> 
                @endif
                <table class="table table-responsive-xl table-striped text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>  
                            <th>Mobile No.</th>    
                            <th>Branch</th>
                            <th>Photo</th>
                            <th>Signature</th>
                            <th>Registration No.</th>
                           
                            <th>Transection ID</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @isset($students)

                            @foreach ($students as $student)
                                <tr class="bg-light">
                                    <td>{{$student->firstName.' '.$student->lastName}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->mobile}}</td>
                                    <td>{{$student->branchName->name}}</td>
                                    <td><img src="{{url('storage')}}/{{$student->photo}}" alt="" height="50" width="50"></td>
                                    <td><img src="{{url('storage')}}/{{$student->signature}}" alt=""  height="50" width="50"></td>
                                  
                                    <td>{{$student->registrationNum}}</td>
                                    <td>{{$student->transectionId}}</td>
                                   
                                    
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