
<?php
	$conn= mysqli_connect('localhost', 'root', '','brc_landing_page') or die ("could not connect to mysql");
	//$db_name= mysqli_select_db('brc_landing_page', $conn) or die ("no database");
	
	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact_number'];
		$optionvalues = $_POST['option_values'];
		$message = $_POST['message'];

	if($name !=''||$email !=''){
		$query= mysqli_query($conn,"insert into signup(name, email, contact_number, option_values, message) values ('$name', '$email', '$contact', '$optionvalues', '$message')");

		echo "Data Inserted successfully...!!";
	}
	else{
		echo "Insertion Failed. Some Fields are Blank....!!";
	}
	}
mysqli_close($conn);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="landing-page/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="landing-page/css/index-style.css" type="text/css" />
	<script type="text/javascript" src="landing-page/js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#sign_up_btn'). click(function() {window.location='#sign_up_form'});
		});
	</script>
</head>
<body>
<!--Header section -->
	<div id="header_outr">
		<div id="header_inr" class="row">
			<div id="header_cont" class="col-md-12 col-sm-12 col-xs-12">
				<div class="header_left col-md-6 col-sm-6 col-xs-12">
		            <a href="#" class="padd_left_right_all_zero">
		            	<img src="landing-page/images/logo.png" title="BRC"/>
		            </a>
		            
		        </div>
		        <div class="header_social_link padd_top_botm_10px text-right col-md-6 col-sm-6 col-xs-12">
		           	<a href="https://plus.google.com/115076482321090636351">
		           		<img src="landing-page/images/g_plus_icon.png" alt>
		           	</a>
					<a href="https://www.facebook.com/beautyreferralclub/">
						<img src="landing-page/images/fb_icon.png" alt>
					</a>
					<a href="https://twitter.com/BeautyReferClub">
						<img src="landing-page/images/tw_icon.png" alt>
					</a>
					<a href="https://www.instagram.com/beautyreferralclub/">
						<img src="landing-page/images/insta_icon.png" alt>
					</a>
				</div>
	        </div>
		</div>
	</div>

<!--Body section -->

<!-- Customer-reg section -->
	<div id="cust_reg_outr">
		<div id="cust_reg_inr" class="row">
			<div id="cust_reg_cont" class="col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
				<div class="cust_reg_left col-md-6 col-sm-6 col-xs-12 padd_left_right_all_zero">
					<div class="embed-responsive embed-responsive-16by9">
    					<iframe width="370" height="210" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/xSAm2wHlkog">	
    					</iframe>
					</div>
				</div>

				<div class="cust_reg_right color_white col-md-6 col-sm-6 col-xs-12 text-center">
					<h2>GROW YOUR CUSTOMER BASE <br>AND INCREASE SALES</h2>
					<h3 class="margin_top_20px">Bring new clients through the door with referrals.</h3>
					<button type="button" onclick="{window.location='#sign_up_form'}" id="sign_up_btn" class="white_btn reg_btn margin_top_20px">JOIN THE CLUB</button>
					<p><i>It's Free</i></p>
				</div>
			</div>
		</div>
	</div>

<!--beauty_club Section -->
	<div id="prof_sec_outr">
		<div id="prof_sec_inr" class="row">
			<div id="prof_sec_cont" class="col-md-12 col-sm-12 col-xs-12 padd_top_botm_10px">
				<div class="container text-center">
					<div class="prof_heading padd_top_botm_40px">
						<h2>Top 3 common mistakes salon owners and beauty professionals make</h2>
					</div>

					<div class="prof_sec col-md-4 col-sm-4 col-xs-12 padd_left_right_40px">
						<div class="sec_1 text-center">
							<a href="#">
								<img src="landing-page/images/advertise_icon.png" alt>
							</a>
							<h2>Excessive <br> Advertising</h2>
						</div>
					</div>

					<div class="prof_sec col-md-4 col-sm-4 col-xs-12 padd_left_right_40px">
						<div class="sec_2 text-center">
							<a href="#">
								<img src="landing-page/images/store_icon.png" alt>
							</a>
							<h2>Expensive <br> Storefront</h2>
						</div>
					</div>

					<div class="prof_sec col-md-4 col-sm-4 col-xs-12 padd_left_right_40px">
						<div class="sec_3 text-center">
							<a href="#">
								<img src="landing-page/images/price_icon.png" alt>
							</a>
							<h2>Price <br>Increases</h2>
						</div>
					</div>

					<div class="prof_heading_2 color_dark_grey col-md-12 col-sm-12 col-xs-12 padd_top_60px padd_botm_30px">
						<h2>Are you also following the same marketing strategies?</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--BRC benefits Section -->
	<div id="brc_benefit_outr">
		<div id="brc_benefit_inr" class="row">
			<div id="brc_benefit_cont" class="col-md-12 col-sm-12 col-xs-12 ">
				<div class="brc_heading container padd_top_botm_30px text-center">
				<h2>Here's How Beauty Referral Club Can Benefit You</h2>
				<h3 class="color_dark_grey padd_top_botm_10px">Through our referral program, salon owners and beauty professionals are rewarded for providing an amazing service with more customers. Customers are rewarded for referrals with paid commission.</h3>
			</div>
		</div>
	</div>

<!--Benefits Division Section -->	
	<div id="benefit_outr">
		<div id="benefit_inr" class="row">
			<div id="benefit_cont" class="col-md-12 col-sm-12 col-xs-12 padd_top_60px padd_botm_30px color_white">
				<div class="container">
					<div class="benefit_top text-center col-xs-12">
						<h1>Benefits</h1>
					</div>
					<div class="prf_benefit text-center col-md-4 col-sm-4 col-xs-12">
						<h3>Beauty Professionals</h3>
						<img src="landing-page/images/arrow_img1.png" alt>
						<ul class="col-md-12">
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Perfect for both salon owners and beauty professionals .
							</li>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Minimizes marketing costs because your happy customers spread the word for you.
							</li>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Appointment booking software is included to make the process seamlessly easy.
							</li>
						</ul>
					</div>
					<div class="benefit_center text-center col-md-4 col-sm-4 padd_top_botm_90px">
						<h1>Benefits</h1>
					</div>
					<div class="cust_benefit text-center col-md-4 col-sm-4 col-xs-12">
						<h3>Customers</h3>
						<img src="landing-page/images/arrow_img2.png" alt>
						<ul>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Get paid commission for making the referral you once gave away for FREE.
							</li>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Support your favorite local salon or beauty professional that provides great service.
							</li>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Monitor and track your commission on your online profile account.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- BRC tools -->
	<div id="brc_tool_outr">
		<div id="brc_tool_inr" class="row">
			<div id="brc_tool_cont" class="col-md-12 col-sm-12 col-xs-12">
				<div class="container padd_top_botm_40px">
					<div class="tools_sec col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="landing-page/images/commision.png" alt>
						<h2>Commissions</h2>
					</div>
					<div class="tools_sec col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="landing-page/images/book_online.png" alt>
						<h2>Online Booking</h2>
					</div>
					<div class="tools_sec col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="landing-page/images/time_save.png" alt>
						<h2>Time Saving</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- How_it_works Section-->
	<div id="how_it_works_outr" class="padd_botm_40px">
		<div id="how_it_works_inr" class="row">
			<div id="how_it_works_cont" class="col-md-12 col-sm-12 col-xs-12">
				<div class="how_it_works_heading padd_top_botm_30px col-md-3 col-sm-4 col-xs-6 
				text-center">
					<h3>How it works</h3>
				</div>
				<div class="container">
					<div class="beauty_prf_membership col-md-5 col-sm-5 col-xs-12 text-center pull-left">
						<h3>Beauty Professional Membership</h3>
						<h4>Increase your bookings with your customer referrals.</h4>
						<div class="beauty_membership_list padd_top_botm_30px text-right">
							<ul class="col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Order referral cards to give to your clients.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/1.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                            	Offer your clients commission for referring your services.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/2.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Track and confirm booked appointments with no monthly fees.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/3.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Sit back and watch your clientele and sales grow.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/4.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            
	                        </ul>
                    	</div>
					</div>
					<div class="center_img col-md-2 col-sm-2 col-xs-12">
						<img src="landing-page/images/11.png" alt>
					</div>
					<div class="beauty_cust_membership col-md-5 col-sm-5 col-xs-12 text-center 
					pull-right">
						<h3>Beauty Customer Membership</h3>
						<h4>Start earning commission for your beauty referrals.</h4>

						<div class="beauty_membership_list padd_top_botm_30px text-left">
							<ul class="col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
								<a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/5.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Create a profile and get your unique referral code.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/6.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Refer family and friends to your favorite salon or beauty professional.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/7.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                            	Earn commission every time someone fulfills an appointment using your referral code.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/8.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Monitor and withdraw your commission directly to your bank or Pay Pal account.
	                            </li>
	                            </li>
	                        </ul>
	                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--Signup section with background image-->
	<div id="signup_sec_outr">
		<div id="signup_sec_inr" class="row">
			<div id="signup_sec_cont" class="col-md-12 col-sm-12 col-xs-12 margin_top_85px" >
				<div class="container text-center">
					
						<button type="button" onclick="{window.location='#sign_up_form'}" id="sign_up_btn" class="white_btn signup_now_btn">Join now while it's free</button>
					
				</div>
			</div>
		</div>
	</div>

<!-- Message box -->
	<div id="msg_box_outr"  class="padd_botm_40px">
		<div id="msg_box_inr" class="row">
			<div id="msg_box_cont" class="col-md-12 col-sm-12 col-xs-12">
				<div class="container">
					<div class="msg_box_light_bg text-center">
						<div class="msg_box_dark_bg">
							<a href="#">
								<img src="landing-page/images/msg_box.png" alt>
							</a>
						</div>
					</div>

	<!-- Join the club section-->
					<div class="join_form_top text-center padd_top_40px">
						<h2>Join the beauty referral club</h2>
						<h3>Join our mailing list for updates and request <br> an early invitation. We are nearly complete!</h3>
						<img src="landing-page/images/red-division-line.jpg" alt>

						<div class="join_form_inr padd_top_40px">
							<form class="form-horizontal" role="form" id="sign_up_form" method="post">
								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<input type="text" placeholder="Name" class="form-control" required
									name="name">
								</div>
								 <div class="form-group col-md-6 col-sm-6 col-xs-12">
									<input type="email" placeholder="Email" class="form-control" required
									name="email">
								</div>
								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<input type="text" placeholder="Contact Number" class="form-control"
									required name="contact_number">
								</div>
								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<select class="form-control" name="option_values" required>
										<option>-Select-</option>
										<option value="Beauty Professional">Beauty Professional</option>
										<option value="Customer">Customer</option>
									</select>
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<textarea class="form-control txtarea" rows="6" name="message" required >Your Message
									</textarea>
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<button type="submit" class="send_btn" name="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--Subscribe News Section -->
	

<!--Footer Section -->
	<div id="footer_outr">
		<div id="footer_inr" class="row">
			<div id="footer_cont" class="col-md-12 col-sm-12 col-xs-12">
				<div class="copy_right text-center padd_top_botm_10px color_white">Copyright © 2016 BRC
				</div>
			</div>
		</div>
	</div>

</body>
</html>

