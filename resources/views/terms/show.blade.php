@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Update Terms Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    Set Current Term
                    <a href="{{route('terms.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>


                    <table class="table table-hover table-borderless">
                         
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">Description</th>
                                <th scope="col">Results</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <th>Surname:</th>
                            <td>{{  $term->name }}</td>
                        </tr>
                        <tr>
                          <tr>
                          <th>FirstName:</th>
                            <td>{{ $term->description }}</td>
                        </tr>
                       
                        <tr>
                         <th>Status: </th>
                            <td>{{ $term->status == 1 ? 'Active' : 'Not Active' }}</td>
                      <tr>
                          <th>Creation:</th>
                            <td>{{ $term->created_at}}</td>
                        </tr>
                        <tr>
                          <th>Update:</th>
                            <td>{{ $term->updated_at }}</td>
                        </tr>
                        
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
