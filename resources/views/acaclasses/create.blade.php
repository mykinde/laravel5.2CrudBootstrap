@extends('../layouts.app')

@section('content')
<div class="container">
        @include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Add New Class </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('acaclasses.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    <form method="POST" action="{{ route('acaclasses.store') }}">
                        @csrf

                       
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>
                                        
                        <div class="col-md-6">
                            <div class="form-group">
                                  
                                  <select class="form-control" id="name" name="name" required>
                                    <option value="">--Select--</option>
                                                 <option value="Creche">Creche</option>
                                                 <option value="Pre-Nursery">Pre-Nursery</option>
                                                 <option value="Nursery-1">Nursery-1</option>
                                                 <option value="Nursery-2">Nursery-2</option>
                                                 <option value="Primary-1">Primary-1</option>
                                                 <option value="Primary-2">Primary-2</option>
                                                 <option value="Primary-3">Primary-3</option>
                                                 <option value="Primary-4">Primary-4</option>
                                                 <option value="Primary-5">Primary-5</option>
                                                 <option value="Primary-6">Primary-6</option>
                                                 <option value="JSS-1">JSS-1</option>
                                                 <option value="JSS-2">JSS-2</option>
                                                 <option value="JSS-3">JSS-3</option>
                                                 <option value="SSS-1">JSS-4</option>
                                                 <option value="SSS-2">JSS-5</option>
                                                 <option value="SSS-3">JSS-6</option>
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
                                    {{ __('Add class') }}
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
