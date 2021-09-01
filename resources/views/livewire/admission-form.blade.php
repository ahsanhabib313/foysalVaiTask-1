<div>
   
    <form wire:submit.prevent="register">

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
                                <input type="text" class="form-control" wire:model="firstName" >
                                <span class="text-danger">@error('firstName'){{$message}} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" wire:model="lastName" >
                                <span class="text-danger">@error('lastName'){{$message}} @enderror</span>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Father's Name</label>
                            <input type="text" class="form-control" wire:model="fatherName" >
                            <span class="text-danger">@error('fatherName'){{$message}} @enderror</span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mother's Name</label>
                            <input type="text" class="form-control" wire:model="motherName">
                            <span class="text-danger">@error('motherName'){{$message}} @enderror</span>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" wire:model="email">
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <p>Gender</p>
                          <div class="form-check form-check-inline">  
                            <input class="form-check-input" type="radio" wire:model="gender" id="male">
                            <label class="form-check-label" for="male">
                              Male
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" wire:model="gender" id="female" checked>
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
                            <input type="tel" class="form-control"  wire:model="mobile">
                            <span class="text-danger">@error('mobile'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NID No.</label>
                            <input type="number" class="form-control"  wire:model="nid">
                            <span class="text-danger">@error('nid'){{$message}} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Birth Certificate No.</label>
                            <input type="num,ber" class="form-control"  wire:model="birthCertificate">
                            <span class="text-danger">@error('birthCertificate'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="number" class="form-control"  wire:model="birthOfBirth">
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
                                <select class="form-control" wire:model="presentDivision">
                                    <option>Choose your Division...</option>
                                    <option>Dhaka</option>
                                    <option>Chittagong</option>
                                    <option>Rajshahi</option>
                                </select>
                                <span class="text-danger">@error('presentDivision'){{$message}} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">District</label>
                                <select class="form-control" wire:model="presentDistrict">
                                    <option>Choose your District...</option>
                                    <option>Dhaka</option>
                                    <option>Savar</option>
                                    <option>Chandpur</option>
                                </select>

                                <span class="text-danger">@error('presentDistrict'){{$message}} @enderror</span>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Upozilla</label>
                            <select class="form-control" wire:model="presentUpozilla">
                                <option>Choose your Upozilla...</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Rajshahi</option>
                            </select>
                            <span class="text-danger">@error('presentUpozilla'){{$message}} @enderror</span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Office</label>
                            <select class="form-control" wire:model="presentPostOffice">
                                <option>Choose your Post Office...</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Rajshahi</option>
                            </select>
                            <span class="text-danger">@error('presentPostOffice'){{$message}} @enderror</span>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Code</label>
                            <select class="form-control" wire:model="presentPostCode">
                                <option>Choose your Post Code...</option>
                                <option>3602</option>
                                <option>1206</option>
                                <option>2388</option>
                            </select>
                            <span class="text-danger">@error('presentPostCode'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Branch Name</label>
                            <select class="form-control" wire:model="presentBranchName">
                                <option>Choose your Branch Name...</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Rajshahi</option>
                            </select>
                            <span class="text-danger">@error('presentBranchName'){{$message}} @enderror</span>
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
                            <input class="form-check-input" type="checkbox" wire:model="checkAddress" id="checkAddress">
                            <label class="form-check-label" for="checkAddress">
                              Same as Present Address
                            </label>
                        </div>

                        <span class="text-danger">@error('checkAddress'){{$message}} @enderror</span>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Division</label>
                                <select class="form-control" wire:model="permanentDivision">
                                    <option>Choose your Division...</option>
                                    <option>Dhaka</option>
                                    <option>Chittagong</option>
                                    <option>Rajshahi</option>
                                </select>
                                <span class="text-danger">@error('permanentDivision'){{$message}} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">District</label>
                                <select class="form-control" wire:model="permanentDistrict">
                                    <option>Choose your District...</option>
                                    <option>Dhaka</option>
                                    <option>Savar</option>
                                    <option>Chandpur</option>
                                </select>
                                <span class="text-danger">@error('permanentDistrict'){{$message}} @enderror</span>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Upozilla</label>
                            <select class="form-control" wire:model="permanentUpozilla">
                                <option>Choose your Upozilla...</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Rajshahi</option>
                            </select>
                            <span class="text-danger">@error('permanentUpozilla'){{$message}} @enderror</span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Office</label>
                            <select class="form-control" wire:model="permanentPostOffice">
                                <option>Choose your Post Office...</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Rajshahi</option>
                            </select>
                            <span class="text-danger">@error('permanentPostOffice'){{$message}} @enderror</span>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Post Code</label>
                            <select class="form-control" wire:model="permanentPostCode">
                                <option>Choose your Post Code...</option>
                                <option>3602</option>
                                <option>1206</option>
                                <option>2388</option>
                            </select>

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
                                <input class="form-control" type="file" wire:model="photo" id="">
                                <span class="text-danger">@error('photo'){{$message}} @enderror</span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">  
                                <label for=""> Signature </label>
                                <input class="form-control" type="file" wire:model="signature" id="">  
                                <span class="text-danger">@error('signature'){{$message}} @enderror</span>
                            </div>
                        </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">  
                            <label for=""> Qualification </label>
                            <select class="form-control" wire:model="qualification">
                                <option>your Qualification</option>
                                <option>SSC</option>
                                <option>HSC</option>
                                <option>Degree</option>
                                <option>Honors</option>
                                <option>Masters</option>
                            </select>
                            <span class="text-danger">@error('qualification'){{$message}} @enderror</span>
                        </div> 
                    </div>
                </div> 

            </div>
        </div>

        @endif

        <div class="actions-button d-flex justify-content-between bg-light pt-2 pb-2">

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
            <button type="button" class="btn btn-md btn-primary">Submit</button>
            @endif
           
        </div>
    </form>

</div>
