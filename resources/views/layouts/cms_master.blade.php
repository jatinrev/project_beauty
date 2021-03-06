@include('layouts.header')



<div id="inr_pages_header">
  <div id="header_inr" class="row padd_top_5px">
      <div id="header_cont padd_top_10 padd_botm_8" class="col-md-12 col-xs-12">
          <div class="header_left col-md-1 col-sm-12 col-xs-12 text-center">
              <a href="#"><img src="images/site_logo.png" title="BRC"/></a>
          </div>
            
            <!-- -->
                <div class="header_right col-md-8 col-sm-10 col-xs-12">
                    <nav class="navbar navbar-default col-md-9 col-sm-12 padd_left_right_all_zero">
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
                                        <li><a href="{{ url('/how-it-works') }}">how it works</a></li>
                                        <li><a href="#">shop</a></li>
                                        <li><a href="{{ url('/faq') }}">faq</a></li>
                                        <li><a href="{{ url('/about-us') }}">about us</a></li>
                                        <li><a href="{{ url('/contact-us') }}">contact us</a></li>
                                      </ul>
                                
                                  </div>
                              </div>
                          </div>
                    </nav>
                    <div class="col-md-3 col-sm-7 col-xs-9">
                      @if (Auth::guest())
                        <div class="reg-btn-outr">
                            <button class="pink_btn reg_btn" onclick='window.location.href="{{ url('/register') }}"'>Register</button>
                        </div>
                        <div class="login-btn-outr">
                            <button class="pink_btn login_btn" onclick='window.location.href="{{ url('/login') }}"'>login</button>  
                        </div>
                      @else
                        <div class="reg-btn-outr">
                          <button class="pink_btn reg_btn" onclick="document.getElementById('logout-form').submit();">logout</button>
                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                          </form>
                        </div>
                      @endif
                    </div>

                    
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <!-- /.navbar-collapse -->
          </div>
        </div>
    </div>
</div>


@yield('content')


<!-- Footer Section-->
<div class="footer">
    <div id="footer_social_outr">
        <div id="footer_social_inr" class="row">
            <div id="footer_social_cont" class="col-md-12 col-sm-12 col-xs-12">
                <div class="social_links col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="#" class="col-md-4 col-sm-4 col-xs-4">
                      <img src="{{ asset('assets/images/fb-icon.png') }}" /></a>
                    <a href="#" class="col-md-4 col-sm-4 col-xs-4">
                      <img src="{{ asset('assets/images/tw-icon.png') }}" /></a>               
                    <a href="#" class="col-md-4 col-sm-4 col-xs-4">
                      <img src="{{ asset('assets/images/insta-icon.png') }}" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right text-center color_white">Copyright &copy; 2016 BRC.</div>
</div>



 <!--fancybox main JS and Css files -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.js?v=2.1.5') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css?v=2.1.5') }}" media="screen" />
  <script type="text/javascript">
    $(document).ready(function() {
      /* Simple image gallery. Uses default settings*/
      $('.fancybox').fancybox();
    });
  </script>


<!-- Accordion js-->


@include('layouts.footer')

