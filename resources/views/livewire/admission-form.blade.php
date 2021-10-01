<div>
   
    <form wire:submit.prevent="register">

        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        {{--step one --}}
@if ($currentStep ==1)
    
        <div class="stepOne">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 1/4 - Personal Details</div>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" wire:model="firstName"  placeholder="enter your first name">
                                <span class="text-danger">@error('firstName'){{$message}} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" wire:model="lastName"  placeholder="enter your last name" >
                                <span class="text-danger">@error('lastName'){{$message}} @enderror</span>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Father's Name</label>
                            <input type="text" class="form-control" wire:model="fatherName"  placeholder="enter your father's name" >
                            <span class="text-danger">@error('fatherName'){{$message}} @enderror</span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mother's Name</label>
                            <input type="text" class="form-control" wire:model="motherName"  placeholder="enter your mother's name">
                            <span class="text-danger">@error('motherName'){{$message}} @enderror</span>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" wire:model="email"  placeholder="enter your email">
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <p>Gender</p>
                          <div class="form-check form-check-inline">  
                            <input class="form-check-input" type="radio" value="male" wire:model="gender" >
                            <label class="form-check-label" for="male">
                              Male
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="female" wire:model="gender">
                            <label class="form-check-label" for="female">
                              Female
                            </label>
                          </div> 
                          <span class="text-danger">@error('gender'){{$message}} @enderror</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mobile No.</label>
                            <input type="tel" class="form-control"  wire:model="mobile"  placeholder="enter your mobile number">
                            <span class="text-danger">@error('mobile'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NID No.</label>
                            <input type="number" class="form-control"  wire:model="nid"  placeholder="enter your NID">
                            <span class="text-danger">@error('nid'){{$message}} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Birth Certificate No.</label>
                            <input type="number" class="form-control"  wire:model="birthCertificate"  placeholder="enter your birthday certificate no.">
                            <span class="text-danger">@error('birthCertificate'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="date" class="form-control"  wire:model="birthOfDate">
                            <span class="text-danger">@error('birthOfBirth'){{$message}} @enderror</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            @endif
       


        {{--step Two --}}

        @if ($currentStep == 2)

        <div class="stepTwo">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 2/4 - Present Adress</div>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Division</label>
                                <select class="form-control" wire:model="presentDivision" > 
                                    <option selected value="">Select Division</option>
                                    @isset($divisions)
                                        @foreach ($divisions as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    @endisset
                                   
                                </select>
                                <span class="text-danger">@error('presentDivision'){{$message}} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">District</label>
                                <select class="form-control" wire:model="presentDistrict" >
                                    <option selected value="">Select District</option>   
                                  @isset($districts)
                                    @foreach ($districts as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                  @endisset
                                </select>
                                <span class="text-danger">@error('presentDistrict'){{$message}} @enderror</span>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Upozilla</label>
                            <select class="form-control" wire:model="presentUpozilla" >
                                <option selected value="">Select Upozilla</option>
                                @isset($upozillas)
                                    @foreach ($upozillas as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                            <span class="text-danger">@error('presentUpozilla'){{$message}} @enderror</span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Office</label>
                            <input class="form-control" wire:model="presentPostOffice"  placeholder="enter your post office">
                            <span class="text-danger">@error('presentPostOffice'){{$message}} @enderror</span>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Code</label>
                            <input class="form-control" wire:model="presentPostCode"  placeholder="enter your post code">
                            <span class="text-danger">@error('presentPostCode'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Course Name</label>
                            <select class="form-control" wire:model="courseName"  placeholder="enter your course name">
                                <option>Select Course Name</option>
                                @isset($courses)
                                    @foreach ($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                            <span class="text-danger">@error('branchName'){{$message}} @enderror</span>
                        </div> 
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Branch Name</label>
                            <select class="form-control" wire:model="branchName"  placeholder="enter your branch name">
                                <option>Select Branch Name</option>
                                @isset($branchNames)
                                    @foreach ($branchNames as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                            <span class="text-danger">@error('branchName'){{$message}} @enderror</span>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

                    
        @endif

        {{--step Three --}}

        @if ($currentStep == 3)
 
        <div class="stepThree">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 3/4 - Permanent Adress</div>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">  
                            <input class="form-check-input" type="checkbox" wire:model="checkAddress" >
                            <label class="form-check-label" for="checkAddress">
                              Same as Present Address <span class="text-danger">(don't need to fill up the below input field)</span>
                            </label>
                        </div>

                        <span class="text-danger">@error('checkAddress'){{$message}} @enderror</span>
                    </div>
                </div>
                <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Division</label>
                                <select class="form-control" wire:model="permanentDivision" >
                                    <option>Select Division</option>
                                    @isset($permanentDivisions)
                                        @foreach ($permanentDivisions as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    @endisset
                                </select>
                                <span class="text-danger">@error('permanentDivision'){{$message}} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">District</label>
                                <select class="form-control" wire:model="permanentDistrict" class="permanentAddress" >
                                    <option selected value="">Select District</option>
                                    @isset($permanentDistricts)
                                        @foreach ($permanentDistricts as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    @endisset
                                </select>
                                <span class="text-danger">@error('permanentDistrict'){{$message}} @enderror</span>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Upozilla</label>
                            <select class="form-control" wire:model="permanentUpozilla" class="permanentAddress" >
                                <option selected value="">Select District</option>
                                    @isset($permanentUpozillas)
                                        @foreach ($permanentUpozillas as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    @endisset
                            </select>
                            <span class="text-danger">@error('permanentUpozilla'){{$message}} @enderror</span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Office</label>
                            <input type="text" class="form-control" wire:model="permanentPostOffice"  placeholder="enter your post office" class="permanentAddress" >
                            <span class="text-danger">@error('permanentPostOffice'){{$message}} @enderror</span>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Code</label>
                            <input type="number" class="form-control" wire:model="permanentPostCode"  placeholder="enter your post code" class="permanentAddress" >    
                            <span class="text-danger">@error('permanentPostCode'){{$message}} @enderror</span>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
           
        @endif

         {{--step Four --}}

         @if ($currentStep == 4)
             
       
         <div class="stepFour">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 4/4 - Qualifications and Payement</div>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">  
                                <label for=""> Photo </label>
                                <input class="form-control" type="file" wire:model="photo">
                                <span class="text-danger">@error('photo'){{$message}} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">  
                                <label for=""> Signature </label>
                                <input class="form-control" type="file" wire:model="signature">  
                                <span class="text-danger">@error('signature'){{$message}} @enderror</span>
                            </div>
                        </div>
                </div> 
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group">  
                            <label for="" class="mr-3 h6"> Qualification </label>
                            @isset($qualifications)
                               @foreach ($qualifications as $item)
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="{{$item->name}}" wire:model="qualification">{{$item->name}} 
                                        </label>
                                    </div>
                                @endforeach
                            @endisset
                            <span class="text-danger">@error('qualification'){{$message}} @enderror</span>
                        </div> 
                    </div>
                </div> 

                <div class="row mt-2">
                    <div class="col-md-8 offset-md-2">
                        <div class="payment-section">
                            <h3 class="bikash-title text-center">Bikash Payment</h1>
                                
                            <div class="form-group">
                                <label for="bikas_transectionId">Bikash Number</label>
                                <input class="form-control" type="number" wire:model="bikashNumber" placeholder="enter your bikash number">
                                <span class="text-danger">@error('bikashNumber'){{$message}} @enderror</span>
                            </div>
                          
                                <div class="form-group">
                                    <label for="bikas_transectionId">Bikash Transection ID</label>
                                    <input class="form-control" type="text" wire:model="transectionId" placeholder="enter bikash transection ID">
                                    <span class="text-danger">@error('transectionId'){{$message}} @enderror</span>
                                </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
  
        @endif            

        <div class="actions-button d-flex justify-content-between bg-light p-3">

            @if ($currentStep == 1)
            <div></div> 
            @endif

            @if($currentStep == 2 || $currentStep ==3 || $currentStep == 4)
            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif

            @if ($currentStep == 1 || $currentStep == 2 || $currentStep ==3)
            <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif

            @if ($currentStep ==4)
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif
           
        </div>
    </form>

</div>
