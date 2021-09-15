@extends('admin.layout.adminPanel')
@section('title', 'Show Notice')
@section('content')
  <div id="show-notice" class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Notice</h3>
            </div>
            <div class="col-md-12">
                <table class="table table-striped text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            
                            <th> Notice</th>
                          
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-light">
                            <td>Notice</td>
                          
                            <td> 
                                <a class="btn btn-success" href="#">Edit</a>
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