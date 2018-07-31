@extends('../layouts.app')

@section('content')
<div class="container">
@include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">Session Home </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <center><div class="text-center"><b>Session</b> {{date('Y')}}.</div></center>
                    <a href="{{route('subjects.create')}}" class="btn btn-info" role="button" aria-pressed="true">Add New Subject</a>
               

                    <table class="table">
                        <thead>
                          <tr>
                              <th>Id</th>
                              <th>Session</th>
                              <th>SubjecCode</th>
                              <th>Status/Current</th>
                              <th>Added Date</th>
                              <th>Updated Date</th>
                               <th>Action</th>
                           </tr>
                         </thead>
                         <tbody>
                 
                   @foreach($subjects as $subject)
                 
                               <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{$subject->name}}</td>
                               <td>{{$subject->subjectcode}}</td>
                                <td>{{$subject->status== 1 ? 'Active' : 'Not Active' }}</td>
                               <td>{{$subject->created_at->diffForHumans()}}</td>
                               <td>{{$subject->updated_at->diffForHumans()}}</td>
                               <td>
                                     <form  action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                                             <a class="btn btn-success" href="{{ route('subjects.show',$subject->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>
                         
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
                {!! $subjects->links() !!} 
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
