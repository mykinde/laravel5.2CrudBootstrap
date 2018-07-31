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
                    <a href="{{route('acasessions.create')}}" class="btn btn-info" role="button" aria-pressed="true">Add Year/Session</a>
               

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
                           </tr>
                         </thead>
                         <tbody>
                 
                   @foreach($acasessions as $acasession)
                 
                               <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{$acasession->name}}</td>
                               <td>{{$acasession->description}}</td>
                                <td>{{$acasession->status== 1 ? 'Active' : 'Not Active' }}</td>
                               <td>{{$acasession->created_at->diffForHumans()}}</td>
                               <td>{{$acasession->updated_at->diffForHumans()}}</td>
                               <td>
                                     <form  action="{{ route('acasessions.destroy', $acasession->id) }}" method="POST">
                                             <a class="btn btn-success" href="{{ route('acasessions.show',$acasession->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('acasessions.edit',$acasession->id) }}">Edit</a>
                         
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
                {!! $acasessions->links() !!} 
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
