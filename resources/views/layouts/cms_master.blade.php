@include('layouts.header')

<div id="inr_pages_header">
  <div id="header_inr" class="row padd_top_5px">
      <div id="header_cont padd_top_10 padd_botm_8" class="col-md-12 col-xs-12">
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
        <button class="pink_btn login_btn">login</button>               
    </div>
    
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- /.navbar-collapse -->
</div>
</div>
</div>
</div>

<!-- profile section-->
<div id="profile_outer">
    <div id="profile_inr" class="row">
        <div id="profile_cont" class="col-md-12 col-sm-12 col-xs-12 margin_botm_65px">
            <div class="profile_img margin_top_65px col-md-4 col-sm-5 col-xs-12 text-center">
                <h2>Nikki</h2>
                <p>
                  <img src="{{ asset('assets/images/profile-img.jpg') }}" alt class="girl_prf">
              </p>

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

<!-- Professional Service Section -->
<div id="prf_service_outr">
    <div id="prf_service_inr" class="row">
        <div id="prf_service_cont" class="col-md-12 col-sm-12 col-xs-12">

          <!--Accordion Starts -->
          <div id="accordion" role="tablist" aria-multiselectable="true" class="col-md-6 col-sm-6 col-xs-12">
            <!-- 1st Accordion Starts -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    HAIRCUTS & STAINING
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div>
                        <a class="col-md-5 col-sm-5 col-xs-12">- Women's HairCut</a>
                        <p class="col-md-4 col-sm-4 col-xs-6 price">
                          <span>1 hr 30 min |</span> $100
                        </p>
                        <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart&nbsp;
                          <img src="{{ asset('assets/images/green-tick.png') }}" alt>
                        </p>
                      </div>
                      <div>
                        <a class="col-md-5 col-sm-5 col-xs-12">- HairCut Brands</a>
                        <p class="col-md-4 col-sm-4 col-xs-6 price">
                          <span>2 hr 30 min |</span> $100</p>
                        <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart&nbsp;
                          <img src="{{ asset('assets/images/green-tick.png') }}" alt>
                        </p>
                      </div>
                      <div>
                        <a class="col-md-5 col-sm-5 col-xs-12">- Colouring Hair Strands</a>
                        <p class="col-md-4 col-sm-4 col-xs-6 price">
                          <span>3 hr 30 min |</span> $100
                        </p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
                <!-- 2nd Accordion Starts -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    HAIR & STYLING
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div>
                        <a class="col-md-5 col-sm-5 col-xs-12"> - Women's Hairstylish</a>
                        <p class="col-md-4 col-sm-4 col-xs-6 price">
                          <span>1 hr 30 min |</span> $100
                        </p>
                        <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart&nbsp;
                          <img src="{{ asset('assets/images/green-tick.png') }}" alt>
                        </p>
                      </div>
                      <div>
                        <a class="col-md-5 col-sm-5 col-xs-12"> - Colouring Hair Strands</a>
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
    <!-- 2nd Accordion Starts -->
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            HAIR & STYLING
        </a>
    </h4>
</div>
<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
    <p>Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </p>
</div>
</div>

            <!-- 3rd Accordion Starts -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    HAIR SERVICES FOR MEN
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                      <a class="col-md-5 col-sm-5 col-xs-12"> - Men's HairCutting</a>
                      <p class="col-md-4 col-sm-4 col-xs-6 price">
                        <span>1 hr 30 min |</span> $100
                      </p>
                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart&nbsp;
                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
                      </p>
                    </div>
                    <div>
                      <a class="col-md-5 col-sm-5 col-xs-12"> - Colouring Hair Strands</a>
                      <p class="col-md-4 col-sm-4 col-xs-6 price">
                        <span>2 hr 30 min |</span> $100
                      </p>
                    </div>
                  </div>
                </div>  
              </div>
            </div>

            <!-- 4th Accordion Starts -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    HAIR SERVICES FOR MEN
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                      <a class="col-md-5 col-sm-5 col-xs-12"> - Men's HairStylish</a>
                      <p class="col-md-4 col-sm-4 col-xs-6 price">
                        <span>1 hr 30 min |</span> $100
                      </p>
                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart&nbsp;
                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
                      </p>
                    </div>
                    <div>
                      <a class="col-md-5 col-sm-5 col-xs-12"> - Colouring Hair Strands</a>
                      <p class="col-md-4 col-sm-4 col-xs-6 price">
                        <span>2 hr 30 min |</span> $100
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<!--5th Accordion Starts -->

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFive">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    HAIR SERVICES FOR MEN
                  </a>
                </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                      <a class="col-md-5 col-sm-5 col-xs-12"> - Men's Hair Brands</a>
                      <p class="col-md-4 col-sm-4 col-xs-6 price">
                        <span>1 hr 30 min |</span> $100
                      </p>
                      <p class="col-md-3 col-sm-3 col-xs-6 cart">Added to cart&nbsp;
                        <img src="{{ asset('assets/images/green-tick.png') }}" alt>
                      </p>
                    </div>
                    <div>
                      <a class="col-md-5 col-sm-5 col-xs-12"> - Colouring Hair Strands</a>
                      <p class="col-md-4 col-sm-4 col-xs-6 price">
                        <span>2 hr 30 min |</span> $100
                      </p>
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
        <p class="col-md-12 col-sm-12 col-xs-12 text-center">
          <a class="fancybox" href="{{ asset('assets/images/profile-service2.png') }}" 
          data-fancybox-group="gallery">
            <img src="{{ asset('assets/images/profile-service2.png') }}" alt="" />
          </a>

          <a class="fancybox" href="{{ asset('assets/images/profile-img.jpg') }}" 
          data-fancybox-group="gallery">
            <img src="{{ asset('assets/images/profile-img.jpg') }}" alt="" />
          </a>

          <a class="fancybox" href="{{ asset('assets/images/profile-service1.png') }}" 
          data-fancybox-group="gallery">
            <img src="{{ asset('assets/images/profile-service1.png') }}" alt="" />
          </a>

          <a class="fancybox" href="{{ asset('assets/images/product1.jpg') }}" 
          data-fancybox-group="gallery">
            <img src="{{ asset('assets/images/product1.jpg') }}" alt="" />
          </a>

          <a class="fancybox" href="{{ asset('assets/images/product3.jpg') }}" 
          data-fancybox-group="gallery">
            <img src="{{ asset('assets/images/product3.jpg') }}" alt="" />
          </a>

          <a class="fancybox" href="{{ asset('assets/images/profile-service1.png') }}" 
          data-fancybox-group="gallery">
            <img src="{{ asset('assets/images/profile-service1.png') }}" alt="" />
          </a>

          <a class="fancybox" href="{{ asset('assets/images/profile-service2.png') }}" data-fancybox-group="gallery">
            <img src="{{ asset('assets/images/profile-service2.png') }}" alt=""/>
          </a>

          <a class="fancybox" href="{{ asset('assets/images/profile-img.jpg') }}" data-fancybox-group="gallery">
            <img src="{{ asset('assets/images/profile-img.jpg') }}" alt="" />
          </a>
        </p>
      <!--Image album close -->
      </div>
    </div>
  </div>
</div>

    <!--Calender section starts -->
<div id="cal_outr">
  <div id="cal_inr" class="row">
    <div id="cal_cont" class="col-md-12 col-sm-12 col-xs-12 padd_botm_100px">
      <div class="cal_heading text-center padd_top_botm_40px">
        <h2>MY AVAILABILITY</h2>
        <img src="{{ asset('assets/images/red-heading-line.png') }}" alt width="140px" 
        height="2px">
      </div>
      <div class="cal_img text-center">
        <img src="{{ asset('assets/images/cal.jpg') }}" alt >
      </div>
      <div class="cal_time text-center">
        <img src="{{ asset('assets/images/time-slots.jpg') }}" alt >
      </div>
    </div>
  </div>
</div>



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
  <script type="text/javascript" src="{{ asset('js/jquery.fancybox.js?v=2.1.5') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css?v=2.1.5') }}" media="screen" />
  <script type="text/javascript">
    $(document).ready(function() {
      /* Simple image gallery. Uses default settings*/
      $('.fancybox').fancybox();
    });
  </script>

@include('layouts.footer')

