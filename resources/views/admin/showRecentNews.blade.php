@extends('admin.layout.adminPanel')
@section('title', 'Show Recent News')
@section('content')
  <div id="show-slide-photo" class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center my-3">All Recent News</h3>
            </div>
            <div class="col-md-12">
                <table class="table table-striped text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            
                            <th> Title</th>
                            <th>Type</th>
                            <th>File</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-light">
                            <td>Title 1</td>
                            <td>notice </td>
                            <td>File</td>
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