@extends('../layouts.app')

@section('content')
<div class="container">
        @include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Session Add </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('acasessions.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    <form method="POST" action="{{ route('acasessions.store') }}">
                        @csrf

                       
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Session/Year') }}</label>
                                        
                        <div class="col-md-6">
                            <div class="form-group">
                                  
                                  <select class="form-control" id="name" name="name" required>
                                    <option value="">--Select--</option>
                                                 <option value="2016-2017">2016-2017</option>
                                                 <option value="2017-2018">2017-2018</option>
                                                 <option value="2018-2019">2018-2019</option>
                                                 <option value="2019-2020">2019-2020</option>
                                                 <option value="2021-2022">2021-2022</option>
                                                 <option value="2022-2023">2022-2023</option>
                                                 <option value="2016-2017">2016-2017</option>
                                                 <option value="2017-2018">2017-218</option>
                                                 <option value="2018-2019">2018-2019</option>
                                                 <option value="2019-2020">2019-2020</option>
                                                 <option value="2021-2022">2021-2022</option>
                                                 <option value="2022-2023">2022-2023</option>
                                                 
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
                                    {{ __('Add Year') }}
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
