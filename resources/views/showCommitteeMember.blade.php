@extends('master')
@section('title', 'Show Committee Member')
@section('content')

{{--marque section--}}
    
<section class="marque my-3">

    <div class="alert alert-success">
       <p class="alert-success font-weight-bold pb-1 m-0 pt-1 ">
           <marquee  direction="forwards" >
                    @isset($notices)
                        @foreach ($notices as $notice)
                            {{$notice->notice}}
                        @endforeach
                    @endisset
            </marquee>
        </p>
    </div>

</section>

<section>


  <div id="show-advertising-logo" class="middle-content">
     
        <div class="row text-dark">
            <div class="col-lg-12">
                <h3 class="text-center my-3 text-white" > Committee Members</h3>
            </div>
            <div class="col-lg-6 offset-lg-3">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            </div>
            <div class="col-lg-12">
                <table class="table table-responsive-xl  table-striped text-dark text-center">
                    <thead class="">
                        <tr>
                            <th>SL.</th>
                            <th> Name</th>
                            <th> Designation</th>
                            <th> Commmittee</th>
                            <th> Photo</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @isset($committeeMembers)
                                @foreach ($committeeMembers as $committeeMember)

                                    <tr class="bg-light">
                                        <td>{{$loop->index + 1}}</td>
                                        <td>
                                            {{ $committeeMember->name }}
                                        </td>
                                        <td>
                                            {{ $committeeMember->designation }}
                                        </td>
                                        <td>
                                            {{ $committeeMember->committee->name }}
                                        </td>
                                        <td>
                                            <img src="{{ asset('img/committeeMember/'.$committeeMember->photo) }}" height="100" width="100" alt="committee member photo">
                                        </td>
                                        
                                       
                                    </tr>

                                @endforeach
                            
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    
  </div>
</section>

    
@endsection