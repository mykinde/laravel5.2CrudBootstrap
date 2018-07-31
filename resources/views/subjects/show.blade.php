@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Session Display </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('subjects.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    You are logged in!
                    <table class="table table-hover table-borderless">
                         
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Description</th>
                            <th scope="col">Output</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <th>Surname:</th>
                        <td>{{  $subject->name }}</td>
                    </tr>
                    <tr>
                      <tr>
                      <th>FirstName:</th>
                        <td>{{ $subject->description }}</td>
                    </tr>
                   
                    <tr>
                     <th>Status: </th>
                        <td>{{ $subject->status == 1 ? 'Active' : 'Not Active' }}</td>
                  <tr>
                      <th>Creation:</th>
                        <td>{{ $subject->created_at}}</td>
                    </tr>
                    <tr>
                      <th>Update:</th>
                        <td>{{ $subject->updated_at }}</td>
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
