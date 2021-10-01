@extends('master')

@section('content')
<section id="memberForm">

  <div class="row">
    <div class="col-lg-10 offset-lg-1">
      <h1 class="mt-5">Members Form</h1><hr>

              @livewire('member-form',['officeLocation' => $officeLocation, 'address' => $address])
      
    </div>
                  
</div>

</section>  
@endsection
