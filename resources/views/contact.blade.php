@extends('master')

@section('title' , 'Contact Page')

@section('content')
    
       <div id="searchMember" >
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card">
                        <div class="card-header ">
                            <h5 class="text-center py-1">Contact Information</h5>
                        </div>
                        <div class="card-body">
                            <table class="table   my-3">
                                @isset($address)
                                        <tr>
                                            <th>Address</th>
                                            <td>{{$address->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Telephone</th>
                                            <td>{{$address->telephone}}</td>
                                        </tr>
                                        <tr>
                                            <th >Fax</th>
                                            <td>{{$address->fax}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$address->email}}</td>
                                        </tr>
                                 @endisset
                                
                            </table>
                        </div>
                        <div class="card-footer text-center">
                            Health Education & Development Foundation
                        </div>
                    </div>
                </div>
            </div>
           
       </div>

@endsection