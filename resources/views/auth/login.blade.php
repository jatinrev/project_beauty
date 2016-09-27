@extends('layouts.cms_master')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
@endsection

@section('content')
<div class="signin_outr">
    <div class="col-md-4 col-sm-6 col-xs-6 col-md-offset-4 col-sm-offset-3 col-xs-offset-3 signin-form">
        <div class="signin-heading">
            <h3>LOGIN</h3>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} margin_top_20px">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email_Address">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} margin_top_20px">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="checkbox">
                                <label class="rem_chkbox">
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                                <a class="btn btn-link forget_pwd_link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                            <button type="submit" class="signin_btn light_red_btn">LOGIN
                            </button>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
