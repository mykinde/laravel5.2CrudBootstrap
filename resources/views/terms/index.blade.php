@extends('layouts.app')

@section('content')
<div class="container">
        @include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-info">Terms Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                  <h2> Available   Term</h2>
                   
                                    <a href="{{route('terms.create')}}" class="btn btn-info" role="button" aria-pressed="true">Add Term</a>

                                    <table class="table">
                                            <thead>
                                              <tr>
                                                  <th>Id</th>
                                                  <th>Session</th>
                                                  <th>Description</th>
                                                  <th>Status/Current</th>
                                                  <th>Added Date</th>
                                                  <th>Updated Date</th>
                                                   <th>Action</th>
                                                   <th>Action</th>
                                               </tr>
                                             </thead>
                                             <tbody>
                                     
                                       @foreach($terms as $term)
                                     
                                                   <tr>
                                                   <td>{{ ++$i }}</td>
                                                   <td>{{$term->name}}</td>
                                                   <td>{{$term->description}}</td>
                                                    <td>{{$term->status== 1 ? 'Active' : 'Not Active' }}</td>
                                                   <td>{{$term->created_at->diffForHumans()}}</td>
                                                   <td>{{$term->updated_at->diffForHumans()}}</td>
                                                   <td><a class="btn btn-success" href="{{ route('terms.show',$term->id) }}">Show</a>
                                                  </td>
                                                    <td> <a class="btn btn-primary" href="{{ route('terms.edit',$term->id) }}">Edit</a>
                                                   </td>
                                                </tr>
                                                
                                                 @endforeach
                                                    
                                            </tbody>
                                          </table>

                         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
