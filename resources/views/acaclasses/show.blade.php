@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Class Display </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('acaclasses.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    You are logged in!
                    <table class="table table-hover table-borderless">
                         
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Description</th>
                            <th scope="col">Results</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <th>Class Name:</th>
                        <td>{{  $acaclass->name }}</td>
                    </tr>
                    <tr>
                      <tr>
                      <th>Description:</th>
                        <td>{{ $acaclass->description }}</td>
                    </tr>
                   
                    <tr>
                     <th>Addons</th>
                        <td>{{ $acaclass->addon }}</td>
                  <tr>
                      <th>Creation:</th>
                        <td>{{ $acaclass->created_at}}</td>
                    </tr>
                    <tr>
                      <th>Update:</th>
                        <td>{{ $acaclass->updated_at }}</td>
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
