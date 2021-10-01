@extends('admin.layout.adminPanel');
@section('title', 'Edit Member')

@section('content')
    <div class="edit-member"class="middle-content">
        <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="jumbotron bg-light text-dark font-weight-bold mt-2 mb-5">
                    <h2 class="text-center text-success my-4">Edit Member </h2>
                        <form action="{{route('admin.member.update',$member->registrationNum)}}" method="post" enctype="multipart/form-data">
                           @csrf

                           <div class="row">
                              <div class="form-group col-3">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" value="{{ $member->firstName }}" name="firstName" class="form-control">
                                @if ($errors->has('firstName'))
                                  <p class="text-danger"> {{$errors->first('firstName')}}</p>
                                @endif
                               </div>
                               <div class="form-group col-3">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" value="{{ $member->lastName }}" name="lastName" class="form-control">
                                @if ($errors->has('lastName'))
                                  <p class="text-danger"> {{$errors->first('lastName')}}</p>
                                @endif
                               </div>
                               <div class="form-group col-3">
                                <label for="exampleInputEmail1">Father Name</label>
                                <input type="text" value="{{ $member->fatherName }}" name="fatherName" class="form-control">
                                @if ($errors->has('fatherName'))
                                  <p class="text-danger"> {{$errors->first('fatherName')}}</p>
                                @endif
                               </div>
                               <div class="form-group col-3">
                                <label for="exampleInputEmail1">Mother Name</label>
                                <input type="text" value="{{ $member->motherName }}" name="motherName" class="form-control">
                                @if ($errors->has('motherName'))
                                  <p class="text-danger"> {{$errors->first('motherName')}}</p>
                                @endif
                               </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-3">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" value="{{ $member->email }}" name="email" class="form-control">
                                @if ($errors->has('email'))
                                  <p class="text-danger"> {{$errors->first('email')}}</p>
                                @endif
                               </div>
                               <div class="form-group col-3">
                                <label for="exampleInputEmail1">Mobile No.</label>
                                <input type="mobile" value="{{ $member->mobile }}" name="mobile" class="form-control">
                                @if ($errors->has('mobile'))
                                  <p class="text-danger"> {{$errors->first('mobile')}}</p>
                                @endif
                               </div>
                               <div class="form-group col-3">
                                <label for="exampleInputEmail1">National Id No.</label>
                                <input type="number" value="{{ $member->nid}}" name="nid" class="form-control">
                                @if ($errors->has('nid'))
                                  <p class="text-danger"> {{$errors->first('nid')}}</p>
                                @endif
                               </div>
                               <div class="form-group col-3">
                                <label for="exampleInputEmail1">Birth Certificate No.</label>
                                <input type="text" value="{{ $member->birthCertificate }}" name="birthCertificate" class="form-control">
                                @if ($errors->has('birthCertificate'))
                                  <p class="text-danger"> {{$errors->first('birthCertificate')}}</p>
                                @endif
                               </div>
                           </div>
                           <div class="row">
                            <div class="form-group col-3">
                              <label for="exampleInputEmail1">Birth of Date</label>
                              <input type="date" value="{{ $member->birthOfDate }}" name="birthOfDate" class="form-control">
                              @if ($errors->has('birthOfDate'))
                                <p class="text-danger"> {{$errors->first('birthOfDate')}}</p>
                              @endif
                             </div>
                              <div class="form-group col-3">  
                                <label for=""> Photo </label>
                                <input class="form-control" type="file" name="photo">
                                <span class="text-danger">@error('photo'){{$message}} @enderror</span>
                              </div>
                              <div class="form-group col-3">  
                                <label for=""> Signature </label>
                                <input class="form-control" type="file" name="signature">  
                                <span class="text-danger">@error('signature'){{$message}} @enderror</span>
                               </div>
                               <div class="form-group col-3">
                                <label for="bikas_transectionId">Bikash Number</label>
                                <input class="form-control" value="{{ $member->bikas_number }}" type="number" name="bikashNumber">
                                <span class="text-danger">@error('bikashNumber'){{$message}} @enderror</span>
                            </div>
                              
                           </div>
                           <div class="row">
                            <div class="form-group col-3">
                              <label for="bikas_transectionId">Bikash Transection ID</label>
                              <input class="form-control" value="{{ $member->transectionId }}" type="text" name="transectionId">
                              <span class="text-danger">@error('transectionId'){{$message}} @enderror</span>
                          </div>
                          <div class="form-group col-3">
                            <label for="bikas_transectionId">Registration</label>
                            <input class="form-control" value="{{ $member->registrationNum }}" type="number" name="registrationNum">
                            <span class="text-danger">@error('registrationNum'){{$message}} @enderror</span>
                        </div>
                           </div>
                            <button type="submit" class="btn  btn-primary">Update</button>
                        </form>    
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection