@extends('layouts.cms_master')

@section('content')
	<!-- profile section-->
	<div id="profile_outer">
	    <div id="profile_inr" class="row">
	        <div id="profile_cont" class="col-md-12 col-sm-12 col-xs-12">
	            <div class="profile_img margin_top_65px col-md-4 col-sm-5 col-xs-12 text-center">
	                <h2>Nikki</h2>
	                <a class="prf_img" href="#">
	                  <img src="{{ asset('assets/images/profile-img.jpg') }}" alt class="girl_prf">
	                </a>

	                <div class="prf_rating margin_top_10px">
	                  <a href="#">
	                    <img src="{{ asset('assets/images/profile-rating.png') }}" alt>
	                  </a>
	                </div>
	                
	                <div class="prf_icons margin_top_10px">
	                  <a href="#">
	                    <img src="{{ asset('assets/images/profile-on-fb.png') }}" alt>
	                  </a>
	                  <a href="#">
	                    <img src="{{ asset('assets/images/profile-on-tw.png') }}" alt>
	                  </a>
	                  <a href="#">
	                    <img src="{{ asset('assets/images/profile-on-link.png') }}" alt>
	                  </a>
	                </div>
	            </div> 

	            <div class="col-md-8 col-sm-7 col-xs-12">
	                <div class="profile_info margin_top_50px">
	                    <div class="table-responsive">   
	                      <table cellpadding="10" class="table">
	                        <tbody>
	                            <tr>                              
	                              <td class="prf_heading hd_bg">Profession</td>
	                              <td class="prf_desc body_bg">Hair Stylist</td>
	                            </tr>
	                           <tr>                              
	                              <td class="prf_heading hd_bg">Languages</td>
	                              <td class="prf_desc body_bg">English, French</td>
	                            </tr>
	                            <tr>                              
	                              <td class="prf_heading hd_bg">Public Profile</td>
	                              <td class="prf_link body_bg"><a href="#">https://wwww.beautyreferalclub.com/nikki</a>
	                              </td>
	                            </tr>
	                            <tr>                              
	                              <td class="prf_heading hd_bg">Address</td>
	                              <td class="prf_desc body_bg">Hampden-sydney College, Virginia</td>
	                            </tr>
	                            <tr>                              
	                              <td class="prf_heading hd_bg">Expertise</td>
	                              <td class="prf_desc body_bg">
	                                <span class="expert">Hair Cutting</span>
	                                <span class="expert">Hair Styling</span>
	                                <span class="expert">Hair Staining</span>
	                                <span class="expert">Hair</span>
	                            </td>
	                            </tr>
	                            <tr>                              
	                              <td class="prf_heading hd_bg">About</td>
	                              <td class="prf_about body_bg">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has the industries of standard text ever since 1500s. when an unknow printer took a gallery of type and scramble into make a type specimen book. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
	                                <br>
	                                Lorem ipsum is simply dummy text of the printing and typesetting industry.
	                              </td>
	                            </tr>
	                          </tbody>
	                      </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

		<!--Products Image Carousel -->
	<div class="container">
		<div class="prd_heading padd_top_botm_40px text-center">
			<h2>PRODUCTS</h2>
			<img src="{{ asset('assets/images/red-heading-line.png') }}" alt height="2px" width="80px">
	    </div>
		<div class="row">
			<div class="col-md-12">
				<div class="carousel carousel-showsixmoveone slide" id="carousel123">
					<div class="prd_crsl_arrow">
						<a class="left carousel-control" href="#carousel123" data-slide="prev">
							<i class="glyphicon glyphicon-chevron-left"></i>
						</a>
						<a class="right carousel-control" href="#carousel123" data-slide="next">
							<i class="glyphicon glyphicon-chevron-right"></i>
						</a>
					</div>		    
					<!--Product Items -->
					<div class="carousel-inner">
						<div class="item active">
					    	<div class="col-xs-12 col-sm-4 col-md-3 item_outr">
					        	<a href="#">
					            	<button type="button" class="light_red_btn cart_btn">
					            		<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
					            	</button>
					           	<img src="{{ asset('assets/images/product1.jpg') }}" class="img-responsive">
					        	</a>
					        	<div class="product_detail">
                            		<a href="#" class="prd_det">Lorem Ipsum<b>$50</b>
                            		</a>
                        		</div>
					    	</div>
						</div>
						<div class="item">
					        <div class="col-xs-12 col-sm-4 col-md-3 item_outr">
					            <a href="#">
					            	<button type="button" class="light_red_btn cart_btn">
					            		<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
					            	</button>
					            	<img src="{{ asset('assets/images/product2.jpg') }}" class="img-responsive">
					            </a>
					            <div class="product_detail">
                                    <a href="#" class="prd_det">Lorem Ipsum<b>$60</b></a>
                                </div>
					        </div>
						</div>
						<div class="item">
					        <div class="col-xs-12 col-sm-4 col-md-3 item_outr">
					            <a href="#">
					            	<button type="button" class="light_red_btn cart_btn">
					            		<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
					            	</button>
					            	<img src="{{ asset('assets/images/product3.jpg') }}" class="img-responsive">
					            </a>
					            <div class="product_detail">
                                    <a href="#" class="prd_det">Lorem Ipsum<b>$70</b></a>
                                </div>
							</div>
						</div>          
						<div class="item">
					        <div class="col-xs-12 col-sm-4 col-md-3 item_outr">
					            <a href="#">
					            	<button type="button" class="light_red_btn cart_btn">
					            		<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
					            	</button>
					            	<img src="{{ asset('assets/images/product2.jpg') }}" class="img-responsive">
					            </a>
					            <div class="product_detail">
                                    <a href="#" class="prd_det">Lorem Ipsum<b>$60</b></a>
                                </div>
							</div>
						</div>
						<div class="item">
					        <div class="col-xs-12 col-sm-4 col-md-3 item_outr">
					            <a href="#">
					            	<button type="button" class="light_red_btn cart_btn">
					            		<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
					            	</button>
					            	<img src="{{ asset('assets/images/product1.jpg') }}" class="img-responsive">
					            </a>
					            <div class="product_detail">
                                    <a href="#" class="prd_det">Lorem Ipsum<b>$50</b></a>
                                </div>
							</div>
						</div>
						<div class="item">
					        <div class="col-xs-12 col-sm-4 col-md-3 item_outr">
					            <a href="#">
					            	<button type="button" class="light_red_btn cart_btn">
					            		<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
					            	</button>
					            	<img src="{{ asset('assets/images/product3.jpg') }}" class="img-responsive">
						        </a>
					            <div class="product_detail">
                                    <a href="#" class="prd_det">Lorem Ipsum<b>$70</b></a>
                                </div>
							</div>
						</div>
						<div class="item">
					        <div class="col-xs-12 col-sm-4 col-md-3 item_outr">
					            <a href="#">
					            	<button type="button" class="light_red_btn cart_btn">
					            		<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
					            	</button>
					            	<img src="{{ asset('assets/images/product2.jpg') }}" class="img-responsive">
					            </a>
					        	<div class="product_detail">
                                    <a href="#" class="prd_det">Lorem Ipsum<b>$60</b></a>
                                </div>
					        </div>
						</div>
						<div class="item">
					    	<div class="col-xs-12 col-sm-4 col-md-3 item_outr">
					        	<a href="#">
					            	<button type="button" class="light_red_btn cart_btn">
					            		<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
					            	</button>
					           	<img src="{{ asset('assets/images/product1.jpg') }}" class="img-responsive">
					        	</a>
					        	<div class="product_detail">
                            		<a href="#" class="prd_det">Lorem Ipsum<b>$50</b>
                            		</a>
                        		</div>
					    	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	    <!--Image gallery starts -->
	<div id="gallery_outr">
	  <div id="gallery_inr">
	    <div id="gallery_cont">
	      <div class="gallery_head padd_top_botm_40px text-center">
	        <h2>GALLERY</h2>
	        <img src="{{ asset('assets/images/red-heading-line.png') }}" alt height="2px" 
	        width="90px">
	      </div>
	      
	      <div class="gallery_coll row">
	        <!--Image album starts -->
	        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
	          <a class="fancybox col-md-3 col-sm-6 col-xs-12" href="{{ asset('assets/images/profile-service2.png') }}" 
	          data-fancybox-group="gallery">
	            <img src="{{ asset('assets/images/profile-service2.png') }}" alt="" />
	          </a>

	          <a class="fancybox col-md-3 col-sm-6 col-xs-12" href="{{ asset('assets/images/profile-img.jpg') }}" 
	          data-fancybox-group="gallery">
	            <img src="{{ asset('assets/images/profile-img.jpg') }}" alt="" />
	          </a>

	          <a class="fancybox col-md-3 col-sm-6 col-xs-12" href="{{ asset('assets/images/profile-service1.png') }}" 
	          data-fancybox-group="gallery">
	            <img src="{{ asset('assets/images/profile-service1.png') }}" alt="" />
	          </a>

	          <a class="fancybox col-md-3 col-sm-6 col-xs-12" href="{{ asset('assets/images/product1.jpg') }}" 
	          data-fancybox-group="gallery">
	            <img src="{{ asset('assets/images/product1.jpg') }}" alt="" />
	          </a>

	          <a class="fancybox col-md-3 col-sm-6 col-xs-12" href="{{ asset('assets/images/product3.jpg') }}" 
	          data-fancybox-group="gallery">
	            <img src="{{ asset('assets/images/product3.jpg') }}" alt="" />
	          </a>

	          <a class="fancybox col-md-3 col-sm-6 col-xs-12" href="{{ asset('assets/images/profile-service1.png') }}" 
	          data-fancybox-group="gallery">
	            <img src="{{ asset('assets/images/profile-service1.png') }}" alt="" />
	          </a>

	          <a class="fancybox col-md-3 col-sm-6 col-xs-12" href="{{ asset('assets/images/profile-service2.png') }}" data-fancybox-group="gallery">
	            <img src="{{ asset('assets/images/profile-service2.png') }}" alt=""/>
	          </a>

	          <a class="fancybox col-md-3 col-sm-6 col-xs-12" href="{{ asset('assets/images/profile-img.jpg') }}" data-fancybox-group="gallery">
	            <img src="{{ asset('assets/images/profile-img.jpg') }}" alt="" />
	          </a>
	        </div>
	      <!--Image album close -->
	      </div>
	    </div>
	  </div>
	</div>


	 <!-- Professional Service Section -->
	<div id="prf_service_outr">
	    <div id="prf_service_inr" class="row">
	        <div id="prf_service_cont" class="col-md-12 col-sm-12 col-xs-12 margin_top_65px">
	    
	        <!-- Accordion Starts-->
	          <div id="accordion" role="tablist" aria-multiselectable="true" class="col-md-6 col-sm-6 col-xs-12">
	            <!--1st Accordion starts -->
	              <div class="panel-group" id="accordion">
	                  <div class="panel panel-default">
	                      <div class="panel-heading" role="tab" id="headingOne">
	                        <h4 class="panel-title">
	                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	                            HAIRCUTS & STAINING
	                          </a>
	                        </h4>
	                      </div>
	                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	                          <div class="panel-body row">
	                              <div class="col-md-12 col-sm-12 col-xs-12">
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">Women's HairCut</a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>1 hr 30 min |</span> $100
	                                      </p>
	                                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart
	                                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
	                                      </p>
	                                  </div>
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">HairCut Brands</a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>2 hr 30 min |</span> $100</p>
	                                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart
	                                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
	                                      </p>
	                                  </div>
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">Colouring Hair Strands
	                                      </a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>3 hr 30 min |</span> $100
	                                      </p>
	                                  </div>
	                              </div>
	                          </div>
	                      </div>
	                  </div>
	              </div>


	              <!--2nd Accordion starts -->
	              <div class="panel-group" id="accordion">
	                  <div class="panel panel-default">
	                      <div class="panel-heading"  role="tab" id="headingTwo">
	                        <h4 class="panel-title">
	                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	                            HAIR & STYLING
	                          </a>
	                        </h4>
	                      </div>
	                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	                          <div class="panel-body row">
	                              <div class="col-md-12 col-sm-12 col-xs-12">
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">HairStyles
	                                      </a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>1 hr 30 min |</span> $100</p>
	                                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart
	                                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
	                                      </p>
	                                  </div>
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">Colouring Hair Strands
	                                      </a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>2 hr 30 min |</span> $100
	                                      </p>
	                                  </div>
	                              </div>
	                          </div>
	                      </div>
	                  </div>
	              </div>

	               <!--3rd Accordion starts -->
	              <div class="panel-group" id="accordion">
	                  <div class="panel panel-default">
	                      <div class="panel-heading" role="tab" id="headingThree">
	                        <h4 class="panel-title">
	                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	                            HAIR SERVICES FOR MEN
	                          </a>
	                        </h4>
	                      </div>
	                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                          <div class="panel-body row">
	                              <div class="col-md-12 col-sm-12 col-xs-12">
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">Men's HairCut</a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>1 hr 30 min |</span> $100
	                                      </p>
	                                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart
	                                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
	                                      </p>
	                                  </div>
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">Colouring Hair Strands
	                                      </a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>3 hr 30 min |</span> $100
	                                      </p>
	                                  </div>
	                              </div>
	                          </div>
	                      </div>
	                  </div>
	              </div>

	              <!--4th Accordion starts -->
	              <div class="panel-group" id="accordion">
	                  <div class="panel panel-default">
	                      <div class="panel-heading" role="tab" id="headingFour">
	                        <h4 class="panel-title">
	                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"aria-expanded="false" aria-controls="collapseFour">
	                            HAIR SERVICES FOR MEN
	                          </a>
	                        </h4>
	                      </div>
	                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
	                          <div class="panel-body row">
	                              <div class="col-md-12 col-sm-12 col-xs-12">
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#"> HairCut Brands</a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>1 hr 30 min |</span> $100
	                                      </p>
	                                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart
	                                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
	                                      </p>
	                                  </div>
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">Colouring Hair Strands
	                                      </a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>2 hr 30 min |</span> $100
	                                      </p>
	                                  </div>
	                              </div>
	                          </div>
	                      </div>
	                  </div>
	              </div>

	              <!--5th Accordion starts -->
	              <div class="panel-group" id="accordion">
	                  <div class="panel panel-default">
	                      <div class="panel-heading" role="tab" id="headingFive">
	                        <h4 class="panel-title">
	                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
	                            HAIR SERVICES FOR MEN
	                          </a>
	                        </h4>
	                      </div>
	                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
	                          <div class="panel-body row">
	                              <div class="col-md-12 col-sm-12 col-xs-12">
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">Men's HairStylish</a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>1 hr 30 min |</span> $100
	                                      </p>
	                                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart
	                                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
	                                      </p>
	                                  </div>
	                                  <div>
	                                      <a class="col-md-5 col-sm-5 col-xs-12" href="#">Hair Cutting</a>
	                                      <p class="col-md-4 col-sm-4 col-xs-6 price">
	                                        <span>2 hr 30 min |</span> $100
	                                      </p>
	                                  </div>
	                              </div>
	                          </div>
	                      </div>
	                  </div>
	              </div>
	          </div>
	        <!--Accordion Ends -->


	      <!-- Professional Service Right Section  -->
	            <div id="prf_detail" class="col-md-6 col-sm-6 col-xs-12">
	              <div class="prf_det_info text-center">
	                <h2>Women's Haircut</h2>
	                <img src="{{ asset('assets/images/red-heading-line.png') }}" alt width="127px" height="2px">  
	              </div>
	              <div class="prf_img padd_top_20px text-center">
	                <img src="{{ asset('assets/images/profile-service1.png') }}" alt >
	                <img src="{{ asset('assets/images/profile-service2.png') }}" alt >
	              </div>
	              <div class="prf_info padd_botm_20px pad_left_right_20px">
	                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has the industries of standard dummy text ever since 1500s. when an unknow printer took a gallery of type and scramble into make a type specimen book.
	                </p>
	                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has the industries of standard dummy text ever since 1500s.</p>
	              </div>
	              <div class="text-center padd_botm_30px">
	                <input type="submit" class="light_red_btn check_btn" value="Check Availability">
	              </div>
	            </div>

	        </div>
	    </div>
	</div>

	    <!--Calender section starts -->
	<div id="cal_outr">
	  <div id="cal_inr" class="row">
	    <div id="cal_cont" class=" col-md-12 col-sm-12 col-xs-12 padd_botm_100px">
	      <div class="cal_heading text-center padd_top_botm_40px">
	        <h2>MY AVAILABILITY</h2>
	        <img src="{{ asset('assets/images/red-heading-line.png') }}" alt width="140px" 
	        height="2px">
	      </div>
	      <div class="cal_img text-center">
	        <img src="{{ asset('assets/images/cal.jpg') }}" alt>
	      </div>
	      <div class="cal_time text-center">
	        <img src="{{ asset('assets/images/time-slots.jpg') }}" alt>
	      </div>
	    </div>
	  </div>
	</div>


@endsection

