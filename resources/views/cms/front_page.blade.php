@extends('layouts.basic_master')

@section('script')
    <script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
          //carousel options
          $('#quote-carousel').carousel({
            pause: true, interval: 6000,
          });
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/flexslider.css') }}">
@endsection


@section('content')
    <div id="book_online_outr">
    	<div id="book_online_inr" class="row">
        	<div id="book_online_cont" class="col-md-12 col-sm-12 col-xs-12">
            	<form class="book_online_form">
                	<input type="text" placeholder="BOOK ONLINE BY ENTERING SALON ID" class="col-md-9 col-sm-9 col-xs-10 white_input_field" />
                    <input type="submit" value="GO" class="col-md-2 col-sm-2 col-xs-2 light_red_btn" />
                </form>
            </div>
        </div>
    </div>
    <div id="join_the_club_outr">
    	<div id="join_the_club_inr" class="row">
        	<div id="join_tservices_conthe_club_cont" class="col-md-12 col-sm-12 col-xs-12">
            	<div class="col-md-4 col-xs-12 girl_img">
                    <img src="{{ asset('assets/images/girl-with-tolls-in-hand.png') }}">
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 membership_area">
                    <h2 class="main_all_sections_heading text-center">Join the club</h2>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="prof_memerbship col-md-6 col-sm-6 col-xs-12 padd_left_right_all_zero text-center">
                            <h3 class="color_red">JOIN. GROW. EARN</h3>
                            <img src="{{ asset('assets/images/prof-membership.png') }}" class="margin_top_25px">
                            <a href="#" class="membership_btn margin_top_25px">Register Now & Create Your Account</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padd_left_right_all_zero cust_membership text-center">
                            <h3 class="color_red text-center">JOIN. SHARE. EARN</h3>
                            <img src="{{ asset('assets/images/customer-membersip.png') }}" class="margin_top_25px">
                            <a href="#" class="membership_btn margin_top_25px">Create A Free Account & Earn Money</a>
                    	</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="services_outr">
        <div id="services_inr" class="row">
            <div id="services_cont" class="col-md-12 col-sm-12 col-xs-12">
                <div class="services_text col-md-5 col-sm-12 col-xs-12 color_white text-center">
                    <h2>WE WORK WITH THOUSAND OF PROFESSIONALS</h2>
                    <p class="margin_top_50px">At our website you can find all kind of beauty professionals in your arae.</p>
                </div>
                <div class="services_list col-md-7 col-sm-12 col-xs-12">
                    <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="single_service col-md-12 col-sm-12 col-xs-12 text-center">
                                    <img src="{{ asset('assets/images/hair-service.png') }}">
                                    <span>hair</span>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="single_service col-md-12 col-sm-12 col-xs-12 text-center">
                                    <img src="{{ asset('assets/images/hair-service.png') }}"/>
                                    <span>beauty</span>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="single_service col-md-12 col-sm-12 col-xs-12 text-center">
                                   <img src="{{ asset('assets/images/hair-service.png') }}"/>
                                    <span>nails</span>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="single_service col-md-12 col-sm-12 col-xs-12 text-center">
                                   <img src="{{ asset('assets/images/hair-service.png') }}"/>
                                    <span>skian care</span>
                                </a>
                            </div>
                        </div>
                        
                        
                        <div class="row margin_top_25px">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="single_service col-md-12 col-sm-12 col-xs-12 text-center">
                                    <img src="{{ asset('assets/images/hair-service.png') }}">
                                    <span>eyelash</span>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="single_service col-md-12 col-sm-12 col-xs-12 text-center">
                                    <img src="{{ asset('assets/images/hair-service.png') }}"/>
                                    <span>lipsum</span>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="single_service col-md-12 col-sm-12 col-xs-12 text-center">
                                   <img src="{{ asset('assets/images/hair-service.png') }}"/>
                                    <span>lipsum</span>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <a href="#" class="single_service col-md-12 col-sm-12 col-xs-12 text-center">
                                   <img src="{{ asset('assets/images/hair-service.png') }}"/>
                                    <span>lipsum</span>
                                </a>
                            </div>
                        </div>      
                </div>    
            </div>
        </div>
    </div>
    <div id="call_to_action_outr">
    	<div id="call_to_action_inr" class="row">
        	<div id="call_to_action_cont" class="col-md-12 col-sm-12 col-xs-12">
            	<div class="col-md-8 col-sm-12 col-xs-12">
                	<h2 class="text-uppercase color_white">grow your customers and increase your sales</h2>
                    <p class="color_white">Each of your customers have 100+ friends. Do you want them to be your customer as well?</p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 text-right padd_top_25px text-center call_action_btn">
                	<a href="#" class="trans_Wborder_btn inline_block"> register</a>
                </div>
            </div>
        </div>
    </div>

    <!--Testimonial slider -->
    <div id="test_outr">
    	<div id="test_inr" class="row">
        	<div id="test_cont" class="col-md-12 col-sm-12 col-xs-12 text-center">
                <img src="{{ asset('assets/images/quote.png') }}" class="inline_block"/>

                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                          
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#quote-carousel" data-slide-to="1"></li>
                      <li data-target="#quote-carousel" data-slide-to="2"></li>
                    </ol>
                            
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">

                    <!-- Quote 1 -->
                    <div class="item active">
                      <div class="row">
                        <div class="col-sm-12">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                          <h4><strong>Richard McClintock</strong></h4>
                        </div>
                      </div>
                    </div>

                    <!-- Quote 2 -->
                    <div class="item">
                      <div class="row">
                        <div class="col-sm-12">
                          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam.</p>
                          <h4><strong>Fringilla A., Vulputate Sit</strong></h4>
                        </div>
                      </div>
                    </div>

                    <!-- Quote 3 -->
                    <div class="item">
                      <div class="row">
                        <div class="col-sm-12">
                          <p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.</p>
                          <h4><strong>Aenean A., Justo Cras</strong></h4>
                        </div>
                      </div>
                    </div>
                      
                    </div>
                    

                  </div>                          
                </div>
              </div>
            </div>
               
            </div>
        </div>
    </div>
  
    <div id="news_outr">
    	<div id="news_inr" class="row">
        	<div id="news_cont" class="col-md-12 col-sm-12 col-xs-12">
            	<div class="col-md-6 col-sm-12 col-xs-12 news_ltr">
                	<h4 class="text-uppercase color_white">subscribe to our newsletter for latest news</h4>
                    <p class="color_white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <form class="margin_top_20px">
                    	<input type="text" class="white_input_field col-xs-12 col-md-8 col-sm-8" placeholder="EMAIL ID..." /> <input type="submit" value="Send" class="light_red_btn text-uppercase col-xs-12 col-md-3 col-sm-3" />
                    </form>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 sign_up_now text-center">
                	<h3 class="text-uppercase color_white">you will earn up to 20% commission from every repeated appointment from your referrals</h3>
                    <button class="text-uppercase pink_btn inline_block"> sign up now</button>
                </div>
            </div>
        </div>
    </div>
@endsection





