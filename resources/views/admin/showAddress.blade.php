@extends('admin.layout.adminPanel')
@section('title', 'Show Address')
@section('content')

  <div id="show-address"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Address</h3>
            </div>
            <div class="col-md-12">
                <table class="table table-striped  text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Address</th>
                            <th> Telephone</th>
                            <th> Fax</th>
                            <th>Email</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-light">
                            <td>address</td>
                            <td>telephone</td>
                            <td>fax</td>
                            <td>email</td>
                            <td>
                                <a class="btn btn-success" href="">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
    
@endsection