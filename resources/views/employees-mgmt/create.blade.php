
  <!-- Modal -->
  <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background:#605ca8;color:white">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:#fff">&times;</span>
              </button>
          <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif">Add new employee</h5>
        </div>
        <div class="modal-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red"> New employee Portal</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-4">
                                First Name<input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="First name">
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-4">
                                Middle Name<input id="middlename" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}"  placeholder="Middle name">

                                @if ($errors->has('middlename'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('middlename') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                Last Name<input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required placeholder="Last name">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                           
                            <br><br><br><br>
                            <div class="col-md-4">
                                Country<select class="form-control js-country" name="country_id">
                                    <option value="-1" selected disabled>Select Country of an employee</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                State<select class="form-control js-states" name="state_id">
                                    <option value="-1" selected disabled>Please select your state</option>

                                </select>
                            </div>
                            <div class="col-md-4">
                                City<select class="form-control js-cities" name="city_id" >
                                    <option value="-1" selected disabled>Please select your city</option>
                                </select>
                            </div>
                            <br><br><br><br>
                            <div class="col-md-4">
                                Employee ID<input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" required placeholder="Employee ID">

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        {{-- <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}" required>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                            <div class="col-md-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    Birth Date<input type="text" value="{{ old('birthdate') }}" name="birthdate" class="form-control" id="birthDate" required placeholder="Date of Birth" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    Joining Date<input type="text" value="{{ old('date_join') }}" name="date_join" class="form-control pull-right" id="hiredDate" required placeholder="Joining Date">
                                </div>
                            </div>
                            <br><br><br><br>
                            <div class="col-md-4">
                                Email<input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email address">
    
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            
                            <div class="col-md-4">
                                Mobile<input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}"  placeholder="Mobile No">

                                @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                {{-- Gender<input type="radio" name="gender" required > --}}
                                   <br> Gender  
                                    <input type="radio" name="gender" value="male" > Male  
                                    <input type="radio" name="gender" value="female">Female   
                                    <input type="radio" name="gender" value="other">other  
                                    
                            
                                 {{-- @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif --}}

                            </div>
                            
                            <br> <br> <br><br>
                            <div class="col-md-4">
                                Department<select class="form-control" name="department_id">
                                    <option selected disabled>Select Department of Employee</option>
                                    @foreach ($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                                 @if ($errors->has('department_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                Designation<select class="form-control" name="division_id">
                                    <option selected disabled>Select Designation</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{$division->id}}">{{$division->name}}</option>
                                    @endforeach
                                </select>
                                 @if ($errors->has('division_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('division_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                Shift<select class="form-control" name="shift">
                                    <option >Day</option>
                                    <option >Night</option>
                                    
                                </select>
                                 {{-- @if ($errors->has('shift'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shift') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                            
                            <br><br><br><br>
                            
                            <div class="col-md-4">
                                Status<select class="form-control" name="status">
                                    <option >Active</option>
                                    <option >Inactive</option>
                                    <option >Regular</option>
                                    <option >Contracted</option>
                                    
                                </select>
                                 {{-- @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif --}}
                            </div> 
                            
                            <div class="col-md-4">
                                Payment Type<select class="form-control" name="paymentType">
                                    <option >Hourly</option>
                                    <option >Monthly</option>
                                    <option >Semi-Monthly</option>
                                    <option >Weekly</option>
                                    <option >Daily</option>
                                    
                                </select>
                                 {{-- @if ($errors->has('PaymentType'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PaymentType') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                            <div class="col-md-4">
                                Salary<input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}"  placeholder="salary ($)">

                                @if ($errors->has('salary'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('salary') }}</strong>
                                </span>
                                @endif
                            </div>
                            
                            <br> <br> <br><br>
                            <div class="col-md-4">
                                Blood Group<select class="form-control" name="bloodGroup">
                                    <option >O+</option>
                                    <option >O-</option>
                                    <option >B+</option>
                                    <option >B-</option>
                                    <option >A+</option>
                                    <option >A-</option>
                                    <option >AB+</option>
                                    <option >AB-</option>
                                    
                                </select>
                                 {{-- @if ($errors->has('bloodGroup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bloodGroup') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                            <div class="col-md-4">
                                Picture<input type="file" id="picture" name="picture" required >
                            </div>
                            
                            <br><br><br><br>
                            <div class="col-md-12">
                                Address<textarea id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address"></textarea>

                                @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                            @endif
                            </div>
                                    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Employee</button>
                        </div>
                    </form>
      </div>
    </div>
  </div>