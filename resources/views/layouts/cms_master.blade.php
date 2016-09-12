@include('layouts.header')

<div id="inr_pages_header">
  <div id="header_inr" class="row">
      <div id="header_cont padd_top_10 padd_botm_8" class="col-md-12 col-xs-12">
          <div class="header_left col-md-1 col-sm-12 col-xs-12 text-center">
              <a href="#"><img src="{{ asset('assets/images/logo.png') }}" title="BRC"/></a>
          </div>
            
            <!-- -->
                <div class="header_right col-md-8 col-sm-12 col-xs-12 margin_botm_z">
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
                <img src="{{ asset('assets/images/profile-img.jpg') }}" alt class="girl_prf">
                
                <div class="prf_rating margin_top_10px">
                    <img src="{{ asset('assets/images/profile-rating.png') }}" alt>
                </div>
                
                <div class="prf_icons margin_top_10px">
                    <img src="{{ asset('assets/images/profile-on-fb.png') }}" alt>
                    <img src="{{ asset('assets/images/profile-on-tw.png') }}" alt>
                    <img src="{{ asset('assets/images/profile-on-link.png') }}" alt>
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
                              <td class="prf_about body_bg">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has the industries of standard text ever since 1500s. when an unknow printer took a gallery of type and scramble into make a type specimen book.
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
                       <a class="col-md-6 col-sm-6 col-xs-6">
                         - Women's HairCut
                       </a>
                       <p class="col-md-2 col-sm-2 col-xs-2 price">$100</p>
                       <p class="col-md-4 col-sm-4 col-xs-4">
                         Added to Cart   <img src="{{ asset('assets/images/green-tick.png') }}" alt>
                       </p>
                       </div>
                       <div>
                         <a class="col-md-6 col-sm-6 col-xs-6">
                         - HairCut Brands
                       </a>
                       <p class="col-md-2 col-sm-2 col-xs-2 price">$100</p>
                       </div>
                       <div>
                         <a class="col-md-6 col-sm-6 col-xs-6">
                         - Colouring Hair Strands
                       </a>
                       <p class="col-md-2 col-sm-2 col-xs-2 price">$100</p>
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
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    HAIR SERVICES FOR MEN
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.<p> 
              </div>
            </div>

            <!-- 4th Accordion Starts -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    HAIR SERVICES FOR MEN
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>

                <!--5th Accordion Starts -->

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    HAIR SERVICES FOR MEN
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <p>3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
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
              <div class="prf_info padd_top_botm_20px">
                <img src="{{ asset('assets/images/profile-service1.png') }}" alt>
                <img src="{{ asset('assets/images/profile-service2.png') }}" alt>
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



@include('layouts.footer')