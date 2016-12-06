@extends('layouts.app')

@section('title', '| New Register')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form id="form_signup" name="form_signup" action="" method="POST">
                <label class="control-label" for="member_firstName">Name & Last Name:</label>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <input name="member_firstName" type="text" required="required" class="form-control" id="member_firstName" placeholder="First Name" maxlength="30">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <input name="member_lastName" type="text" required="required" class="form-control" id="member_lastName" placeholder="Last Name" maxlength="30">
                    </div>
                </div>  
                <label class="control-label padding-top-10px" for="member_email">Email Address:</label>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input name="member_email" type="text" required="required" class="form-control" id="member_email" placeholder="Email Adress" maxlength="35">
                    </div>
                </div>
                <label class="control-label padding-top-10px" for="member_password">Password:</label>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input name="member_password" type="password" required="required" class="form-control" id="member_password" placeholder="Password" maxlength="20">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-10 padding-top-10px">
                        <input name="member_password_check" type="password" class="form-control" id="member_password_check" placeholder="Re-Password" maxlength="20">
                    </div>
                </div>
                <label class="control-label padding-top-10px" for="member_birthday">Birthday & Race:</label>
                <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-6">
                        <input name="member_birthday" type="date" class="form-control" id="member_birthday" placeholder="Birthday">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <select name="member_race_id" class="form-control" id="member_race_id">
                            <option value="1" selected="selected">Male</option>
                            <option value="2">Female</option>
                        </select>
                  </div>
                </div>
                <div class="row padding-top-15px">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                    </div>
                </div>
                <input type="hidden" name="MM_insert" value="form_signup" />   
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
