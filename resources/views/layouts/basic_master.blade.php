@include('layouts.header')

<div id="header_outr">
	<div id="header_inr" class="row">
    	<div id="header_cont" class="col-md-12 col-xs-12">
        	<div class="header_left col-md-1 col-sm-12 col-xs-12 text-center">
            	<a href="#"><img src="{{ asset('assets/images/logo.png') }}" title="BRC"/></a>
       		</div>
            
            <!-- -->
            <div class="header_right col-md-8 col-sm-12 col-xs-12">
        		<nav class="navbar navbar-default col-md-10 padd_left_right_all_zero">
                	<div class="container-fluid">
                    	<div class="col-md-12 padd_left_right_all_zero">
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
                <div class="col-md-2 col-sm-12 login-btn-outr">
                    @if (Auth::guest())
                        <button class="pink_btn login_btn" onclick='window.location.href="{{ url('/login') }}"'>login</button>
                    @else
                        <button class="pink_btn login_btn" onclick="document.getElementById('logout-form').submit();">logout</button>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </div>
                
                <!---->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- /.navbar-collapse -->
			</div>
        </div>
    </div>
</div>

<div id="banner_outr">
	<img src="{{ asset('assets/images/home-slider.jpg') }}" />
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

