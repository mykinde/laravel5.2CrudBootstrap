@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Class Update </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('acaclasses.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    <form method="POST" action="{{route('acaclasses.update', $acaclass->id) }}">
                        @csrf
                        @method('PUT')

                       
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Session/Year') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{  $acaclass->name }}"  autofocus required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                                        
                        <div class="col-md-6">
                            <div class="form-group">
                                  
                                  <select class="form-control" id="status" name="status" required>
                                    <option value="">--Select--</option>
                                                 <option value="0">Not Current</option>
                                                 <option value="1">Currently-Active</option>
                                                
                                                 
                                  </select>
                                </div>
                                                           
                            @if ($errors->has('status'))
                        <span class="help-block">
                         <strong>{{ $errors->first('status') }}</strong>
                        </span>
                        @endif
                            </div>
                                </div>
                       
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Optional Detailsiption') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $acaclass->description }}"  autofocus>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn bg-info">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
