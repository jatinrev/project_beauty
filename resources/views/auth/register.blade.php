@extends('layouts.cms_master')

<style type="text/css">
    #reg_form_horizontal{display: none;}
</style>

<script>
$(document).ready(function(){
        $('#pro_mem_reg').click(function(){
            $('#reg_form_horizontal').toggle();
        });
});
</script>

@section('content')

<div id="join_form_outr">
    <div id="join_form_inr">
        <div id="join_form_cont" class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center margin_top_100px 
            join_form_top">
               <h3>Let's get started!</h3>
            <div class="col-md-5 col-sm-5 col-xs-12 text-center left_join">
                <img src="{{ asset('assets/images/prof-signup-icon.png') }}">
                <h4>Professional Membership</h4>
                <p>JOIN. GROW. EARN</p>
                <button type="submit" class="light_red_btn join_btn" id="pro_mem_reg" 
                onclick="#reg_form_horizontal">JOIN </button>
            </div> 
            <div class="col-md-2 col-sm-2 col-xs-12 text-center div_join padd_top_botm_90px">
                <h3>OR</h3>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 text-center right_join">
                <img src="{{ asset('assets/images/cust-signup-icon.png') }}">
                <h4>Customer Membership</h4>
                <p>JOIN. SHARE. EARN</p>
                <button type="submit" class="light_red_btn join_btn" id="pro_mem_reg" 
                onclick="#reg_form_horizontal">JOIN </button>
            </div>  
        </div>        
    </div>
</div>

<!--Register form -->


<div class="container"  id="reg_form_horizontal">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary light_red_btn">
                                    Get Started
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
