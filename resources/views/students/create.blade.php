@extends('../layouts.app')

@section('content')
<div class="container">
        @include('../layouts.success')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Student Add </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('students.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
                    <form method="POST" action="{{ route('students.store') }}">
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
                                            <label for="studentid" class="col-md-4 col-form-label text-md-right">{{ __('Student No') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="studentid" type="text" class="form-control{{ $errors->has('studentid') ? ' is-invalid' : '' }}" name="studentid" >
                
                                                @if ($errors->has('studentid'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('studentid') }}</strong>
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
         <input id="dateofbirth" type="date"  max="60" class="form-control" name="dateofbirth" value="{{ old('dateofbirth') }}" autofocus>
                     
                                   @if ($errors->has('dateofbirth'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('dateofbirth') }}</strong>
                                               </span>
                                             @endif
                                            </div>
                                        </div>



<div class="form-group row">
        <label for="paymentstatus" class="col-md-4 col-form-label text-md-right">{{ __('Payment Status') }}</label>
                                               
                      <div class="col-md-6">
                       <div class="form-group">
                                         
                     <select class="form-control" id="paymentstatus" name="paymentstatus">
                      <option value="{{ old('paymentstatus') }}">{{ old('relgion') }}</option>
                     <option value="No Payment">No Payment</option>
                     <option value="Part Payment">Part Payment</option>
                     <option value="Full Payment">Full Payment</option>
                        <option value="Others">Others</option>
                                                      
                                         </select>
                                       </div>
                                                                  
                                   @if ($errors->has('paymentstatus'))
                               <span class="help-block">
                                <strong>{{ $errors->first('paymentstatus') }}</strong>
                               </span>
                               @endif
                                   </div>
                                       </div>


             <div class="form-group row">
                                    <label for="paymentrate" class="col-md-4 col-form-label text-md-right">{{ __('Amount Paid') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="paymentrate" type="text" class="form-control{{ $errors->has('paymentrate') ? ' is-invalid' : '' }}" name="paymentrate" value="{{ old('paymentrate') }}"  autofocus>
        
                                        @if ($errors->has('paymentrate'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('paymentrate') }}</strong>
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
                                    



   
       <!--select--> 
                       <div class="form-group row">
                       <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>
                                   
                   <div class="col-md-6">
                       <div class="form-group">
                             
                             <select class="form-control" id="country" name="country">
                               <option value="{{ old('country') }}">{{ old('country') }}</option>
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
                             <option value="{{ old('stateoforigin') }}">{{ old('stateoforigin') }}</option>
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
                                           <option value="{{ old('religion') }}">{{ old('relgion') }}</option>
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
                                <label for="plastname" class="col-md-4 col-form-label text-md-right">{{ __('Parent LastName') }}</label>
    
                                <div class="col-md-6">
                                    <input id="plastname" type="text" class="form-control{{ $errors->has('plastname') ? ' is-invalid' : '' }}" name="plastname" value="{{ old('plastname') }}" required autofocus>
    
                                    @if ($errors->has('plastname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('plastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="pfirstname" class="col-md-4 col-form-label text-md-right">{{ __('Parent FirstName') }}</label>
    
                                <div class="col-md-6">
                                    <input id="pfirstname" type="text" class="form-control{{ $errors->has('pfirstname') ? ' is-invalid' : '' }}" name="pfirstname" value="{{ old('pfirstname') }}" required autofocus>
    
                                    @if ($errors->has('pfirstname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pfirstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="pmiddlename" class="col-md-4 col-form-label text-md-right">{{ __('Parent Othernames') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="pmiddlename" type="text" class="form-control{{ $errors->has('pmiddlename') ? ' is-invalid' : '' }}" name="pmiddlename" value="{{ old('pmiddlename') }}"  autofocus>
        
                                        @if ($errors->has('pmiddlename'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('pmiddlename') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
    
                                     
                               <div class="form-group row">
                                    <label for="partnername" class="col-md-4 col-form-label text-md-right">{{ __('Partner\'s Fullname') }}</label>
            
                                    <div class="col-md-6">
                                        <input id="partnername" type="text" class="form-control{{ $errors->has('partnername') ? ' is-invalid' : '' }}" name="partnername" value="{{ old('partnername') }}"  autofocus>
            
                                        @if ($errors->has('partnername'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('partnername') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
            
            


                            <div class="form-group row">
                                    <label for="relationship" class="col-md-4 col-form-label text-md-right">{{ __('Relationship-Father/Mother') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="relationship" type="textarea" class="form-control{{ $errors->has('relationship') ? ' is-invalid' : '' }}" name="relationship" value="{{ old('relationship') }}"  autofocus>
        
                                        @if ($errors->has('relationship'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('relationship') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> 

   

                               <!--radiobutton -->
                               <div class="form-group row">
                                   <label for="maritalstatus" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>
                   
                               <div class="col-md-6" class="form-control">
                               <input id="female" type="radio" name="maritalstatus" value="Single" {{ (old('maritalstatus') == 'single') ? 'checked' : '' }} >Separated
                           <input id="male" type="radio" name="maritalstatus" value="Male" {{ (old('maritalstatus') == 'married') ? 'checked' : '' }} >Married
                      
                                   @if ($errors->has('maritalstatus'))
                                   <span class="help-block">
                                <strong>{{ $errors->first('maritalstatus') }}</strong>
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
