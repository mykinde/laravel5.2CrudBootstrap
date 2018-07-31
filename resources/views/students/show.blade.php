@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Student Display </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('students.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
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
                      <th>Surname:</th>
                        <td>{{  $student->lastname }}</td>
                    </tr>
                    <tr>
                      <tr>
                      <th>FirstName:</th>
                        <td>{{ $student->firstname }}</td>
                    </tr>
                    <tr>
                      <tr>
                      <th>Ohternames:</th>
                        <td>{{ $student->middlename }}</td>
                    </tr>
                    <tr>
                     <th>Status: </th>
                        <td>{{ $student->status == 1 ? 'Active' : 'Not Active' }}</td>
                  </tr>
                  <tr>
                        <th>Gender:</th>
                          <td>{{  $student->gender }}</td>
                      </tr>
                      <tr>
                        <tr>
                        <th>Date of Birth:</th>
                          <td>{{ $student->dateofbirth }}</td>
                      </tr>
                      <tr>
                        <tr>
                        <th>Student ID:</th>
                          <td>{{ $student->studentid }}</td>
                      </tr>

                      <tr>
                            <th>Nationality:</th>
                              <td>{{  $student->country}}</td>
                          </tr>
                          <tr>
                            <tr>
                            <th>State of Origin:</th>
                              <td>{{ $student->stateoforigin }}</td>
                          </tr>
                          <tr>
                            <tr>
                            <th>Local Govt Area:</th>
                              <td>{{ $student->province }}</td>
                          </tr>

                          <tr>
                                <th>Religion:</th>
                                  <td>{{  $student->religion }}</td>
                              </tr>
                              <tr>
                                <tr>
                                <th>Status:</th>
                                  <td>{{ $student->status == 1 ? 'Active' : 'Not Active' }}</td>
                              </tr>
                              <tr>
                                <tr>
                                <th>Payment Status:</th>
                                  <td>{{ $student->paymentstatus }}</td>
                              </tr>
                              <tr>
                                    <th>Parent Surname:</th>
                                      <td>{{  $student->plastname }}</td>
                                  </tr>
                                  <tr>
                                    <tr>
                                    <th>Parent FirstName:</th>
                                      <td>{{ $student->pfirstname }}</td>
                                  </tr>
                                  <tr>
                                    <tr>
                                    <th>Parent Ohternames:</th>
                                      <td>{{ $student->pmiddlename }}</td>
                                  </tr>





                  <tr>
                      <th>Creation:</th>
                        <td>{{ $student->created_at}}</td>
                    </tr>
                    <tr>
                      <th>Update:</th>
                        <td>{{ $student->updated_at }}</td>
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
