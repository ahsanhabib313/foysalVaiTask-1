@extends('admin.layout.adminPanel')
@section('title', 'Show Committee')
@section('content')

  <div id="show-course"class="middle-content">
      <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <h3 class="text-center text-white my-3">All Committees</h3>
            </div>
            <div class="offset-md-3 col-md-6">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table table-responsive-xl  table-striped  text-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                           
                            @if (Auth::user()->role == 1)
                            <th>Action </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @isset($committees)

                        @foreach ($committees as $committee)
                            <tr class="bg-light">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{$committee->name}}</td>
                                @if (Auth::user()->role == 1)
                                <td>
                                    <a class="btn btn-success" href="{{route('committee.edit', $committee->id)}}">Edit</a>
                                    <form style="display: inline-block" action="{{route('committee.destroy', $committee->id)}}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                    
                                
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        @endisset
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
    
@endsection