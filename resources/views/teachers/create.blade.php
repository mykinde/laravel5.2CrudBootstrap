@extends('../layouts.app')

@section('content')
<div class="container">
        @include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">New add </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <a href="{{route('teachers.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    <form method="POST" action="{{ route('teachers.store') }}">
                        @csrf

                       
                       
                        <div class="form-group row">
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>
    
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>
    
                                    @if ($errors->has('lastname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>
    
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
    
                                    @if ($errors->has('firstname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Othernames') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="middlename" type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}" name="middlename" value="{{ old('middlename') }}"  autofocus>
        
                                        @if ($errors->has('middlename'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('middlename') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Personal E-Mail Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
    
            
                                    <div class="form-group row">
                                            <label for="staffidno" class="col-md-4 col-form-label text-md-right">{{ __('Staff ID No') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="staffidno" type="text" class="form-control{{ $errors->has('staffidno') ? ' is-invalid' : '' }}" name="staffidno" >
                
                                                @if ($errors->has('staffidno'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('staffidno') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" autofocus>
                    
                                                    @if ($errors->has('phone'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                    
                                            <!--Date -->
                        <div class="form-group row">
                                                 <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>
                                                 
                                         <div class="col-md-6">
                                         <input id="dateofbirth" type="date"  max="90" class="form-control" name="dateofbirth" value="{{ old('dateofbirth') }}" autofocus>
                     
                                              @if ($errors->has('dateofbirth'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('dateofbirth') }}</strong>
                                                 </span>
                                              @endif
                                             </div>
                                         </div>


             <div class="form-group row">
         <label for="dateemployed" class="col-md-4 col-form-label text-md-right">{{ __('Date Employed') }}</label>
                                        
         <div class="col-md-6">
         <input id="dateemployed" type="date" max="60" class="form-control" name="dateemployed" value="{{ old('dateemployed') }}" autofocus>
                                        
                             @if ($errors->has('dateemployed'))
                               <span class="help-block">
                        <strong>{{ $errors->first('dateemployed') }}</strong>
                                 </span>
                                  @endif
                                  </div>
                                   </div>
                                        
                     <!--radiobutton -->
                                     <div class="form-group row">
                   <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                        
                         <div class="col-md-6" class="form-control">
                        <input id="female" type="radio" name="gender" value="Female" {{ (old('gender') == 'female') ? 'checked' : '' }} >Female
                          <input id="male" type="radio" name="gender" value="Male" {{ (old('gender') == 'male') ? 'checked' : '' }} >Male
                                           
                               @if ($errors->has('gender'))
                                         <span class="help-block">
                             <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                  @endif
                  </div>
                   </div>
                                    



                   <!--radiobutton -->
                   <div class="form-group row">
                       <label for="maritalstatus" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>
       
                   <div class="col-md-6" class="form-control">
                   <input id="female" type="radio" name="maritalstatus" value="Single" {{ (old('maritalstatus') == 'single') ? 'checked' : '' }} >Single
               <input id="male" type="radio" name="maritalstatus" value="Male" {{ (old('maritalstatus') == 'married') ? 'checked' : '' }} >Married
          
                       @if ($errors->has('maritalstatus'))
                       <span class="help-block">
                    <strong>{{ $errors->first('maritalstatus') }}</strong>
                   </span>
                   @endif
                   </div>
                   </div>
   
                   
                   <div class="form-group row">
                           <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Educational Qualifications') }}</label>
   
                           <div class="col-md-6">
                               <input id="qualification" type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" value="{{ old('qualification') }}"  autofocus>
   
                               @if ($errors->has('qualification'))
                                   <span class="invalid-feedback">
                                       <strong>{{ $errors->first('qualification') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
   
   
   
       <!--select--> 
                       <div class="form-group row">
                       <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>
                                   
                   <div class="col-md-6">
                       <div class="form-group">
                             
                             <select class="form-control" id="country" name="country">
                               <option value="">--Select--</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Benin Republic">Benin Republic</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Cameroun">Cameroun</option>
                                            <option value="Niger Republic">Niger Republic</option>
                                            <option value="SouthAfrica">SouthAfrica</option>
                                            <option value="Europen">Europian Countries</option>
                                            <option value="America">America Countries</option>
                                            <option value="Others">Others</option>
                             </select>
                           </div>
                                                      
                       @if ($errors->has('country'))
                   <span class="help-block">
                    <strong>{{ $errors->first('country') }}</strong>
                   </span>
                   @endif
                       </div>
                           </div>
         <!--occupation -->
                               <div class="form-group row">
                <label for="stateoforigin" class="col-md-4 col-form-label text-md-right">{{ __('State Of Origin') }}</label>
                                   
                           <div class="col-md-6">
                                   <div class="form-group">
                             
                             <select class="form-control" id="stateoforigin" name="stateoforigin">
                             <option value="">--Select--</option>
                                  <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Enugu">Enugu</option>
                                 <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekti</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                 <option value="Kano">Kano</option>
                                <option value="Katsina">Kastina</option>
                                 <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Traraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option>
                                <option value="FCT">FTC Abuja</option>
                             </select>
                           </div>
                                                      
                       @if ($errors->has('stateoforigin'))
                   <span class="help-block">
                    <strong>{{ $errors->first('stateoforigin') }}</strong>
                   </span>
                   @endif
                       </div>
                           </div>
   
                           <div class="form-group row">
                                   <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>
                                               
                               <div class="col-md-6">
                                   <div class="form-group">
                                         
                                         <select class="form-control" id="religion" name="religion">
                                           <option value="{{ old('religion') }}">{{ old('religion') }}</option>
                                                        <option value="Christian">Christian</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Traditonal">Traditional</option>
                                                        <option value="Others">Others</option>
                                                      
                                         </select>
                                       </div>
                                                                  
                                   @if ($errors->has('religion'))
                               <span class="help-block">
                                <strong>{{ $errors->first('religion') }}</strong>
                               </span>
                               @endif
                                   </div>
                                       </div>
   
                           <div class="form-group row">
                                   <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Local Govt Area') }}</label>
       
                                   <div class="col-md-6">
                                       <input id="province" type="text" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="province" value="{{ old('province') }}" autofocus>
       
                                       @if ($errors->has('province'))
                                           <span class="invalid-feedback">
                                               <strong>{{ $errors->first('province') }}</strong>
                                           </span>
                                       @endif
                                   </div>
                               </div>
   
   
                               <div class="form-group row">
                                       <label for="duty" class="col-md-4 col-form-label text-md-right">{{ __('Duties & Responsibilities') }}</label>
           
                                       <div class="col-md-6">
                                           <input id="duty" type="textarea" class="form-control{{ $errors->has('duty') ? ' is-invalid' : '' }}" name="duty" value="{{ old('duty') }}"  autofocus>
           
                                           @if ($errors->has('duty'))
                                               <span class="invalid-feedback">
                                                   <strong>{{ $errors->first('duty') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div> 
   
                                   <div class="form-group row">
                                           <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
               
                                           <div class="col-md-6">
                                               <input id="address" type="textarea" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}"  autofocus>
               
                                               @if ($errors->has('address'))
                                                   <span class="invalid-feedback">
                                                       <strong>{{ $errors->first('address') }}</strong>
                                                   </span>
                                               @endif
                                           </div>
                                       </div>
   
                                       <div class="form-group row">
                                               <label for="passport" class="col-md-4 col-form-label text-md-right">{{ __('Passport') }}</label>
                   
                                               <div class="col-md-6">
                                                   <input id="passport" type="file" class="form-control{{ $errors->has('passport') ? ' is-invalid' : '' }}" name="passport" value="{{ old('passport') }}"  autofocus>
                   
                                                   @if ($errors->has('passport'))
                                                       <span class="invalid-feedback">
                                                           <strong>{{ $errors->first('passport') }}</strong>
                                                       </span>
                                                   @endif
                                               </div>
                                           </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn bg-info">
                                    {{ __('Submit') }}
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
