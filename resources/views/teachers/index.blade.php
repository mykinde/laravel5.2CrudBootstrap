@extends('../layouts.app')

@section('content')
<div class="container">
@include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">Tearchers Home </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <center><div class="text-center"><b>Session</b> {{date('Y')}}.</div></center>
                    <a href="{{route('teachers.create')}}" class="btn btn-info" role="button" aria-pressed="true">Add New</a>
               

                    <table class="table">
                        <thead>
                          <tr>
                              <th>Id</th>
                              <th>Lastname</th>
                              <th>Firstname</th>
                              <th>Status</th>
                              <th>Added Date</th>
                              <th>Updated Date</th>
                               <th>Action</th>
                           </tr>
                         </thead>
                         <tbody>
                 
                   @foreach($teachers as $teacher)
                 
                               <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{$teacher->lastname}}</td>
                               <td>{{$teacher->firstname}}</td>
                                <td>{{$teacher->status== 1 ? 'Active' : 'Not Active' }}</td>
                               <td>{{$teacher->created_at->diffForHumans()}}</td>
                               <td>{{$teacher->updated_at->diffForHumans()}}</td>
                               <td>
                                     <form  action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                                             <a class="btn btn-success" href="{{ route('teachers.show',$teacher->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a>
                         
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
                {!! $teachers->links() !!} 
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
