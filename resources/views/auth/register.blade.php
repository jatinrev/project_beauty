@extends('layouts.cms_master')

@section('script')
<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {

     $("#pro_mem_reg").click(function(event) {
            $("#reg_form_horizontal").css("display" , "block"); 
            $(".prof_membership_text").css("display" , "none"); 
            $("#cust_form_horizontal").hide();
            $(".cust_membership_text").css("display" , "inline-block");
     });

      $("#cust_mem_reg").click(function(event) {
            $("#cust_form_horizontal").css("display" , "block"); 
            $(".cust_membership_text").css("display" , "none");
            $("#reg_form_horizontal").hide();
            $(".prof_membership_text").css("display" , "inline-block");
     });
});
</script>
@endsection

@section('content')

<div id="join_form_outr">
    <div id="join_form_inr">
        <div id="join_form_cont" class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center padd_top_30px padd_botm_60px
            join_form_top">
               <h3>Let's get started!</h3>
            <div class="col-md-5 col-sm-5 col-xs-12 text-center left_join">
                    <div class="prof_membership_text">
                        <img src="{{ asset('assets/images/prof-signup-icon.png') }}">
                        <h4>Professional Membership</h4>
                        <p>JOIN. GROW. EARN</p>
                        <button type="submit" class="light_red_btn join_btn" id="pro_mem_reg" 
                        href="#reg_form_horizontal">JOIN </button>                     
                    </div>
                       
                        <div class="container"  id="reg_form_horizontal" >
                            <div class="row">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                           <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="business" name="user_type">
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} margin_top_20px">

                                                    <div class="col-md-12">
                                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} margin_top_20px">

                                                    <div class="col-md-12">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">

                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} margin_top_20px">

                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} margin_top_20px">

                                                    <div class="col-md-12">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">

                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group margin_top_20px">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <button type="submit" class="btn btn-primary light_red_btn start_reg_btn">
                                                            GET STARTED
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
            </div> 
            <div class="col-md-2 col-sm-2 col-xs-12 text-center div_join">
                <img src="{{ asset('assets/images/or.png') }}" alt>
                <h4>OR</h4>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 text-center right_join">
                    <div class="cust_membership_text">
                        <img src="{{ asset('assets/images/cust-signup-icon.png') }}">
                        <h4>Customer Membership</h4>
                        <p>JOIN. SHARE. EARN</p>
                        <button type="submit" class="light_red_btn join_btn" id="cust_mem_reg" 
                        href="#reg_form_horizontal">JOIN </button>
                    </div>

                        <div id="cust_form_horizontal" >
                            <div class="row">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                           <form class="form-horizontal" role="form" method="POST">
                                               <div class="form-group margin_top_20px">
                                                    <div class="col-md-12">
                                                        <input id="name" type="text" class="form-control" name="name" required autofocus placeholder="Name">
                                                    </div>
                                                </div>

                                                <div class="form-group margin_top_20px">

                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control" placeholder="Email-Id" required>
                                                    </div>
                                                </div>

                                                <div class="form-group margin_top_20px">

                                                    <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control" placeholder="Password" required>
                                                    </div>
                                                </div>

                                                <div class="form-group margin_top_20px">
                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="form-control" placeholder="Confirm Password" required>
                                                    </div>
                                                </div>

                                                <div class="form-group margin_top_20px">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <button type="submit" class="btn btn-primary light_red_btn start_reg_btn">
                                                            GET STARTED

                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>  
        </div>        
    </div>
</div>

<!--Register form -->

@endsection

<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#pro_mem_reg").click(function(event) {
        $("#reg_form_horizontal").css("display" , "block"); 
        $(".prof_membership_text").css("display" , "none"); 
        $("#cust_form_horizontal").hide();
        $(".cust_membership_text").css("display" , "inline-block");
    });

    $("#cust_mem_reg").click(function(event) {
        $("#cust_form_horizontal").css("display" , "block"); 
        $(".cust_membership_text").css("display" , "none");
        $("#reg_form_horizontal").hide();
        $(".prof_membership_text").css("display" , "inline-block");
    });
});
</script>