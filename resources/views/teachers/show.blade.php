@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Teacher Display </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('teachers.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    You are logged in!
                    
                        <div class="form-group row">
                                <label for="pwd" class="col-3 col-form-label mr-2"><b>Lastname:</b></label>
                                <div class="col-8">
                                <p class="form-control-plaintext">{{$teacher->lastname}}</p>
                                </div>
                                </div>
                    <div class="form-group row">
                            <label for="pwd" class="col-3 col-form-label mr-2"><b>Firstname:</b></label>
                            <div class="col-8">
                            <p class="form-control-plaintext">{{$teacher->firstname}}</p>
                            </div>
                            </div>
                    <div class="form-group row">
                            <label for="pwd" class="col-3 col-form-label mr-2"><b>Ohternames:</b></label>
                            <div class="col-8">
                            <p class="form-control-plaintext">{{$teacher->middlename}}</p>
                            </div>
                            </div>
                        <div class="form-group row">
                                <label for="pwd" class="col-3 col-form-label mr-2"><b>Staff Status:</b></label>
                                <div class="col-8">
                                <p class="form-control-plaintext">{{$teacher->status == 1 ? 'Active' : 'Not Active'}}</p>
                                </div>
                                </div>
            <div class="form-group row">
                    <label class="col-3 col-form-label mr-2"><b>Email Address:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->email}}</p>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Phone Number:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->phone}}</p>
                    </div>
                    </div>

                    <div class="form-group row">
                            <label for="pwd" class="col-3 col-form-label mr-2"><b>Gender:</b></label>
                            <div class="col-8">
                            <p class="form-control-plaintext">{{$teacher->gender}}</p>
                            </div>
                            </div>
                    
                    <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Marital Status:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->maritalstatus}}</p>
                    </div>
                    </div>

                    <div class="form-group row">
                            <label for="pwd" class="col-3 col-form-label mr-2"><b>Qualifications:</b></label>
                            <div class="col-8">
                            <p class="form-control-plaintext">{{$teacher->qualification}}</p>
                            </div>
                            </div>
<div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Nationality:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->country}}</p>
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Sate of Origin:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->stateoforigin}}</p>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Local Govt Area:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->province}}</p>
                    </div>
                    </div>
        
                    <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Date of Birth:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->dateofbirth}}</p>
                    </div>
                    </div>
                <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Date Employed:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->dateemployed}}</p>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Religion:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->religion}}</p>
                    </div>
                    </div>
                    <div class="form-group row">
                            <label for="pwd" class="col-3 col-form-label mr-2"><b>Address:</b></label>
                            <div class="col-8">
                            <p class="form-control-plaintext">{{$teacher->address}}</p>
                            </div>
                            </div>
            <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Responsibility:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->duty}}</p>
                    </div>
                    </div>
                    <div class="form-group row">
                            <label for="pwd" class="col-3 col-form-label mr-2"><b>Photo:</b></label>
                            <div class="col-8">
                            <p class="form-control-plaintext">{{$teacher->passport}}</p>
                            </div>
                            </div>
            <div class="form-group row">
                    <label for="pwd" class="col-3 col-form-label mr-2"><b>Registered Date:</b></label>
                    <div class="col-8">
                    <p class="form-control-plaintext">{{$teacher->created_at}}</p>
                    </div>
                    </div>
                    <div class="form-group row">
                            <label for="pwd" class="col-3 col-form-label mr-2"><b>Updated Date:</b></label>
                            <div class="col-8">
                            <p class="form-control-plaintext">{{$teacher->updated_at}}</p>
                            </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
