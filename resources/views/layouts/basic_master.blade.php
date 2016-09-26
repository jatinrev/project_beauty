@include('layouts.header')
<style type="text/css">
    .form_alert_msg{ display: none; position: absolute; text-align: center; top: 0}
    .alert_click{color: #ffffff; background: transparent; font-size: 16px; display: none;} 
</style>


    <div id="header_outr">
    	<div id="header_inr" class="row">
        	<div id="header_cont" class="col-md-12 col-xs-12">
                    <div class="form_alert_msg col-md-6 col-md-offset-3 col-sm-offset-3 
                        col-sm-6 col-xs-11 col-xs-offset-0">
                        <div class="alert alert-warning">
                              <strong>Warning!</strong> Indicates a warning that might need attention. 
                        </div>
                    </div>
                        
                    <!---->
            	<div class="header_left col-md-1 col-sm-12 col-xs-12 text-center">
                	<a href="#"><img src="{{ asset('assets/images/logo.png')}}" title="BRC"/></a>
           		</div>
                
                <!-- -->
                <div class="header_right col-md-8 col-sm-10 col-xs-12">
            		<nav class="navbar navbar-default col-md-9 col-sm-12  padd_left_right_all_zero">
                    	<div class="container-fluid">
                        	<div class="col-md-12 col-sm-12 padd_left_right_all_zero">
                            	<div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button> 
                                </div>
                                <div class="collapse navbar-collapse padd_left_right_all_zero" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav header_menu">
                                        <li><a href="#">how it works</a></li>
                                        <li><a href="#">shop</a></li>
                                        <li><a href="#">faq</a></li>
                                        <li><a href="#">about us</a></li>
                                        <li><a href="#">contact us</a></li>
                                    </ul>

                                </div>
                   			</div>
                        </div>
                    </nav>
                    <div  class="col-md-3 col-sm-7 col-xs-9">
                        <div class="reg-btn-outr">
                            <button class="pink_btn reg_btn">Register</button>
                        </div>
                        <div class="login-btn-outr">
                            @if (Auth::guest())
                                <button class="pink_btn login_btn" onclick='window.location.href="{{ url('/login') }}"'>login</button>
                            @else
                                <button class="pink_btn login_btn" onclick="document.getElementById('logout-form').submit();">logout</button>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                            @endif
                        
                        </div>
                    </div>
                                            <a href="#" class="alert_click">Click</a>
                   
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <!-- /.navbar-collapse -->
    			</div>
            </div>
        </div>
    </div>

    <div id="banner_outr">
        <div id="banner_cont">
            <img src="{{ asset('assets/images/stationary-banner.jpg') }}">
        </div>
    </div>

<div class="banner_text row">
    <h3 class="text_on_img col-md-12 col-sm-12 col-xs-12"> REFFER YOUR FAVORITE
        <div id="rotate"> 
            <span>hairstylist</span> <span>makeup look</span> 
            <span>skincare</span> <span>nail-art</span> 
        </div> 
    </h3>
</div>

<div class="banner_scrolling_text_outr row">
    <div class="banner_text_inr">
        <div class="banner_text_cont col-md-12 col-sm-12 col-xs-12">    
            <div class="slide_link">
                <a href="#">Lorem Ipsum 1&nbsp;</a>
                <a href="#">Lorem Ipsum 2&nbsp;</a>
                <a href="#" class="last">Lorem Ipsum 3&nbsp;</a>    
            </div>
            <div class="slide_btn">
                <button type="button" class="light_red_btn banner_btn">Get Started </button>
            </div>
        </div>    
    </div>
</div>

    @yield('content')


    <div class="footer">
        <div id="footer_social_outr">
            <div id="footer_social_inr" class="row">
                <div id="footer_social_cont" class="col-md-12 col-sm-12 col-xs-12">
                    <div class="social_links col-md-12 col-sm-12 col-xs-12 text-center">
                        <a href="#" class="col-md-4 col-sm-4 col-xs-4"><img src="{{ asset('assets/images/fb-icon.png') }}" /></a>
                        <a href="#" class="col-md-4 col-sm-4 col-xs-4"><img src="{{ asset('assets/images/tw-icon.png') }}" /></a>               
                        <a href="#" class="col-md-4 col-sm-4 col-xs-4"><img src="{{ asset('assets/images/insta-icon.png') }}" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy_right text-center color_white">Copyright &copy; 2016 BRC.</div>
    </div>



@include('layouts.footer')

<script type="text/javascript">
    $(document).ready(function() {
        $(".alert_click").click(function(){
            $(".form_alert_msg").show();

        });
            setTimeout(function() { $(".form_alert_msg").hide(); }, 5000);
    });
</script>