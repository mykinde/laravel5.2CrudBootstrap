@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Session Update </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('subjects.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    <form method="POST" action="{{route('subjects.update', $subject->id) }}">
                        @csrf
                        @method('PUT')

                       
                       
                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('SUbject Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{  $subject->name }}"   required autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                    <label for="subjectcode" class="col-md-4 col-form-label text-md-right">{{ __('Optional Subject Code in (3)letters abbrevation e.g MAT,BIO,ENG') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="subjectcode" type="text" class="form-control{{ $errors->has('subjectcode') ? ' is-invalid' : '' }}" name="subjectcode" value="{{  $subject->subjectcode }}"  autofocus>
        
                                        @if ($errors->has('subjectcode'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('subjectcode') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                       
                       
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Optional Detailsiption') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{  $subject->name }}"  autofocus>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
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
