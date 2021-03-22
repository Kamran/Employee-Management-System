@extends('employees-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-11 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red">Update employee</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.update', ['id' => $employee->id]) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       
                            <div class="col-md-4">
                                First Name<input id="firstname" type="text" class="form-control" name="firstname" value="{{ $employee->firstname }}" required autofocus placeholder="First Name">

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                Middle name<input id="middlename" type="text" class="form-control" name="middlename" value="{{ $employee->middlename }}" required placeholder="Middle Name">

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="col-md-4">
                                Last name<input id="lastname" type="text" class="form-control" name="lastname" value="{{ $employee->lastname }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                           <br><br><br><br>

                           <div class="col-md-4">
                            Country<select class="form-control" name="country_id">
                                @foreach ($countries as $country)
                                    <option {{$employee->country_id == $country->id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="col-md-4">
                                State<select class="form-control" name="state_id">
                                    @foreach ($states as $state)
                                        <option {{$employee->state_id == $state->id ? 'selected' : ''}} value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
  
                            <div class="col-md-4">
                                City<select class="form-control" name="city_id">
                                    @foreach ($cities as $city)
                                        <option {{$employee->city_id == $city->id ? 'selected' : ''}} value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <br><br><br><br>
                            <div class="col-md-4">
                                Employeee ID<input id="zip" type="text" class="form-control" name="zip" value="{{ $employee->zip }}" required>

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    Date of Birth<input type="text" value="{{ $employee->birthdate }}" name="birthdate" class="form-control pull-right" id="birthDate" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    Joining Date<input type="text" value="{{ $employee->date_join }}" name="date_join" class="form-control pull-right" id="hiredDate" required>
                                </div>
                            </div>
                            <br><br><br><br>
                            <div class="col-md-4">
                                Email<input id="email" type="text" class="form-control" name="email" value="{{ $employee->email}}"  placeholder="Email address">
    
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                Email<input type="text" value="{{ old('email') }}" name="email" class="form-control pull-right"  required placeholder="Email address">
                                </div>
                                </div>
                            </div> --}}
                            <div class="col-md-4">
                                Mobile<input id="mobile" type="text" class="form-control" name="mobile" value="{{ $employee->mobile }}"  placeholder="Mobile No">

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
                            
                            <br><br><br><br>
                            <div class="col-md-4">
                                Department<select class="form-control" name="department_id">
                                    @foreach ($departments as $department)
                                        <option {{$employee->department_id == $department->id ? 'selected' : ''}} value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                Designation<select class="form-control" name="division_id">
                                    <option selected disabled></option>
                                    @foreach ($divisions as $division)
                                        <option {{$employee->division_id == $division->id ? 'selected' : ''}} value="{{$division->id}}">{{$division->name}}</option>
                                    @endforeach
                                </select>
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
                                Salary<input id="salary" type="text" class="form-control" name="salary" value="{{ $employee->salary }}"  placeholder="salary ($)">

                                @if ($errors->has('salary'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('salary') }}</strong>
                                </span>
                                @endif
                            </div>
                            <br><br><br><br>
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
                                <img src="../../{{$employee->picture }}" width="50px" height="50px"/>
                                <input type="file" id="picture" name="picture" />
                            </div>
                            <br><br><br><br>
                            <div class="col-md-8">
                            Address<textarea id="address" type="text" class="form-control" name="address"  required>{{ $employee->address }}</textarea>

                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                            </div>
                            <br><br><br><br>
                            <div class="form-group pull-right">
                                <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                   <i class="fa fa-refresh"> Update Employee</i>
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
