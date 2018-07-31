@extends('../layouts.app')

@section('content')
<div class="container">
@include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">Class Home </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <center><div class="text-center"><b>Session</b> {{date('Y')}}.</div></center>
                    <a href="{{route('acaclasses.create')}}" class="btn btn-info" role="button" aria-pressed="true">Add New</a>
               

                    <table class="table">
                        <thead>
                          <tr>
                              <th>Id</th>
                              <th>Session</th>
                              <th>Description</th>
                              <th>Additional</th>
                              <th>Added Date</th>
                              <th>Updated Date</th>
                               <th>Action</th>
                           </tr>
                         </thead>
                         <tbody>
                 
                   @foreach($acaclasses as $acaclass)
                 
                               <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{$acaclass->name}}</td>
                               <td>{{$acaclass->description}}</td>
                                <td>{{$acaclass->addon}}</td>
                               <td>{{$acaclass->created_at->diffForHumans()}}</td>
                               <td>{{$acaclass->updated_at->diffForHumans()}}</td>
                               <td>
                                     <form  action="{{ route('acaclasses.destroy', $acaclass->id) }}" method="POST">
                                             <a class="btn btn-success" href="{{ route('acaclasses.show',$acaclass->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('acaclasses.edit',$acaclass->id) }}">Edit</a>
                         
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
                {!! $acaclasses->links() !!} 
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
