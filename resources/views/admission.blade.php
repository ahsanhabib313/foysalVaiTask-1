@extends('master')

@section('content')
<section id="admissionForm">

  <div class="row">
    <div class="col-lg-10 offset-lg-1">
      <h1 class="mt-5">Students Admission Form</h1><hr>

              @livewire('admission-form',['officeLocation' => $officeLocation, 'address' => $address])
      
    </div>            
</div>

</section>  
@endsection
