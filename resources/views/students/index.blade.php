@extends('../layouts.app')

@section('content')
<div class="container">
@include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">Students Home </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <center><div class="text-center"><b>Session</b> {{date('Y')}}.</div></center>
                    <a href="{{route('students.create')}}" class="btn btn-info" role="button" aria-pressed="true">Add New</a>
               

                    <table class="table">
                        <thead>
                          <tr>
                              <th>Id</th>
                              <th>Lastname</th>
                              <th>Firstname</th>
                              <th>Status/Current</th>
                              <th>Added Date</th>
                              <th>Updated Date</th>
                               <th>Action</th>
                           </tr>
                         </thead>
                         <tbody>
                 
                   @foreach($students as $student)
                 
                               <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{$student->lastname}}</td>
                               <td>{{$student->firstname}}</td>
                                <td>{{$student->status== 1 ? 'Active' : 'Not Active' }}</td>
                               <td>{{$student->created_at->diffForHumans()}}</td>
                               <td>{{$student->updated_at->diffForHumans()}}</td>
                               <td>
                                     <form  action="{{ route('students.destroy', $student->id) }}" method="POST">
                                             <a class="btn btn-success" href="{{ route('students.show',$student->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                         
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="btn btn-danger">Delete</button>
                                         </form>
                               </td>
                            </tr>
                            
                             @endforeach
                                
                        </tbody>
                      </table>
                </div>
                {!! $students->links() !!} 
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
