@extends('master')

@section('content')
<section id="admissionForm">

  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1 class="mt-5">Students Admission Form</h1><hr>

              @livewire('admission-form')
      
    </div>
                  
</div>

</section>  
@endsection