@extends('layouts.app')

@section('title', '| New Register')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ลงทะเบียน</div>
                

                <!-- Create Post Form -->
                <div class="panel-body">
                    {!! Form::open(['action' => 'Auth\AuthController@register']) !!}
                        <label class="control-label" for="first_name">ชื่อ & นามสกุล:</label>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                            @if ($errors->has('first_name')) <p class="help-block">* {{ $errors->first('first_name') }}</p> @endif
                                <input name="first_name" type="text" required="required" class="form-control"  placeholder="ชื่อ" maxlength="30" value="{{ old('first_name') }}">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                            @if ($errors->has('last_name')) <p class="help-block">* {{ $errors->first('last_name') }}</p> @endif
                                <input name="last_name" type="text" required="required" class="form-control" placeholder="นามสกุล" maxlength="30" value="{{ old('last_name') }}">
                            </div>
                        </div>  
                        <label class="control-label padding-top-10px" for="email">อีเมล:</label>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-10">
                                @if ($errors->has('email')) <p class="help-block">* {{ $errors->first('email') }}</p> @endif
                                <input name="email" type="text" required="required" class="form-control"  placeholder="อีเมล" maxlength="35" value="{{ old('email') }}">
                            </div>
                        </div>
                        <label class="control-label padding-top-10px" for="password">Password:</label>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-10">
                                 @if ($errors->has('password')) <p class="help-block">* {{ $errors->first('password') }}</p> @endif
                                <input name="password" type="password" required="required" class="form-control"  placeholder="Password" maxlength="20">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-10 padding-top-10px">
                                <input name="password_confirmation" type="password" class="form-control"  placeholder="ยืนยัน Password" maxlength="20">
                            </div>
                        </div>
                        <label class="control-label padding-top-10px" for="birthdate">วันเกิด & เพศ:</label>
                        <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                        @if ($errors->has('birthdate')) <p class="help-block">* {{ $errors->first('birthdate') }}</p> @endif
                                <input name="birthdate" type="date" class="form-control" placeholder="วันเกิด">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <select name="gender" class="form-control">
                                    <option value="1" selected="selected">ชาย</option>
                                    <option value="2">หญิง</option>
                                </select>
                          </div>
                        </div>
                        <div class="row padding-top-15px">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                            </div>
                        </div>
                        <input type="hidden" name="MM_insert" value="form_signup" />   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
