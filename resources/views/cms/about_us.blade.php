@extends('layouts.cms_master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages-css/about_us.css') }}">
@endsection
@section('content')
<div id="about_us_outr">
  <div id="about_us_inr">  
      <div class="dash_heading col-md-12 col-sm-12 col-xs-12 padd_top_20px padd_botm_30px ">
        <h3 class="text-uppercase ">ABOUT US</h3>
      </div>
  </div>
</div>
<div class="about_us_outr">
    <div class="about_us_inr">
        <div class="about_us_cont">
	        <div class="col-md-12 col-sm-12 col-xs-12">
		        <div class="col-md-7 col-sm-6 col-xs-12 about_para">
		           <p>The beauty service industry is worth $20 billion and there are over 80,000 beauty and hair salons coast to coast. Over the next 5 years, this is predicted to grow to $58 billion. Women are spending more and more on beauty services each year, but evidently the competition has never been tougher. </p> 
		           <p>What can small salon owners and independent beauty professionals do to increase their profits? Are expensive advertising strategies the only option? </p>
		           <p>The Beauty Referral Club opens up a variety of opportunities. Now this unique online platform can benefit salons, independent beauty professionals, and their customers! 
		           </p>
		        </div>
		       <div class="col-md-4 col-sm-6 col-xs-12 col about_img_div" >
                   <div class="video_img">
                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/xSAm2wHlkog" frameborder="0" allowfullscreen></iframe>
                   </div>
               </div>  
	        </div>   
			<div class="col-md-12 col-sm-12 col-xs-12">
			    <div class="col-md-12 col-sm-12 col-xs-12 about_fourth_para">
				  <P>Through our referral program, independent beauty professionals and salons are rewarded for providing an amazing service with more customers. Customers are rewarded for their referrals with paid commission. We all refer our favorite nail salon or hairdresser for free when we love their service, so why not get paid for your referrals? 
			      </P>
		        </div>
			</div>
			
        </div>  
    </div>
</div>
<div class="about_us_outr about_second_para_img">
    <div class="about_us_inr">
        <div class="about_us_cont">	
			<div class="col-md-12 col-sm-12 col-xs-12">
			    <div class="col-md-8 col-sm-12 col-xs-12 about_second_para_img_p">
			      <p><i class="commas">"</i>Most referral programs are too gimmicky. Your 6th appointment gets you 50% off, for example. Where's the motivation in that? There are always strings attached. We wanted to create a referral program that cuts those strings and is immediately rewarding.<i class="commas">"</i> </p>
			    <span class="founders_of_beauty">- DWAYNE & SHIRLEY BENNETT SR,<br>
			       <i>Founders of Beauty Referral Club</i> </span>	  
			    </div> 

			    <div class="col-md-4 col-xs-12 col-sm-12">
			      <img src="assets/images/Profile Pic.png" name="" class="about_secnd_img"/>	
			    </div>
			</div>
        </div>
    </div>
</div> 
<div class="benefit_for_outr">
    <div class="benefit_for_inr">
        <div class="benefit_for_cont">
            <div class="dash_heading col-md-12 col-sm-12 col-xs-12 padd_top_20px padd_botm_30px ">
               <h3 class="text-uppercase ">BENEFITS FOR</h3>
            </div> 
            <div class="benefit_for_outr">
                <div class="benefit_for_inr">
                    <div class="benefit_for_cont">  
                       <div class="col-md-12 col-sm-12 col-xs-12 benefits_two_imgs">
                            <div class="col-md-5 col-sm-12 col-xs-12 professionals benfits_box_margin_m">
                                <img src="assets/images/prof-signup-icon.png" name="" class="professional-1"/>
                                <h4>BEAUTY PROFESSIONALS</h4>
                                <ul class="checkmark">
                                	<li>Perfect for both freelance beauty professionals and salon owners</li>
                                	<li>minimizes marketing costs because your happy customers spread the word for you</li>
                                	<li>Appointment booking software is included to make the process seamlessly easy</li>
                                </ul>
                            </div> 
                            <div class="col-md-5 col-sm-12 col-xs-12 customers pull-right benfits_box_margin_m">
                                <img src="assets/images/cust-signup-icon.png" name="" class="customers-1"/>
                                <h4>CUSTOMERS</h4>
                                <ul class="checkmark">
                                	<li>Get paid commision for making the referrel for you once gave away for free</li>
                                	<li>Become an important maketer for your favourite salon or beauty professionals.</li>
                                	<li>Support local independent businesses that provide a great service.</li>
                                </ul>
                                                        
                            </div>
                        </div>    
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div> 	           
@endsection