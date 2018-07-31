@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Add Terms Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    Add New Term
                    <a href="{{route('terms.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>

                    <form method="POST" action="{{ route('terms.store') }}">
                            @csrf
    
                           
                           
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Academic Term') }}</label>
                                            
                            <div class="col-md-6">
                                <div class="form-group">
                                      
                                      <select class="form-control" id="name" name="name" required>
                                        <option value="">--Select--</option>
                                                     <option value="1st">1st Term</option>
                                                     <option value="2nd">2nd Term</option>
                                                     <option value="3rd">3rd Term</option>
                                                     <option value="4th">4th Term</option>
                                                     <option value="summer">Summer</option>
                                                     <option value="Others">Others</option>
                                                    
                                                     
                                      </select>
                                    </div>
                                                               
                                @if ($errors->has('name'))
                            <span class="help-block">
                             <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                                </div>
                                    </div>
                           
                           
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Optional Detailsiption') }}</label>
    
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}"  autofocus>
    
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
                                        {{ __('Add Term') }}
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
