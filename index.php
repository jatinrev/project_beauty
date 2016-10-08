
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
				<div class="container">
					<div class="header_left">
		               	<a href="#"><img src="landing-page/images/site_logo.png" title="BRC"/></a>
		           	</div>
		           	<div class="header_social_link padd_top_botm_10px text-right">
						<a href="https://www.facebook.com/">
							<img src="landing-page/images/fb_icon.png" alt>
						</a>
						<a href="https://www.twitter.com">
							<img src="landing-page/images/tw_icon.png" alt>
						</a>
						<a href="https://www.linkedin.com">
							<img src="landing-page/images/linkdin_icon.png" alt>
						</a>
					</div>
				</div>
	           	</div>
	        </div>
		</div>
	</div>

<!--Body section -->

<!-- Customer-reg section -->
	<div id="cust_reg_outr">
		<div id="cust_reg_inr" class="row">
			<div id="cust_reg_cont" class="col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
				<div class="cust_reg_left col-md-6 col-sm-6 col-xs-12">
					<div class="cust_img_inr">
						<div class="embed-responsive embed-responsive-16by9">
    						<iframe width="370" height="210" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/xSAm2wHlkog">	
    						</iframe>
						</div>
					</div>
				</div>

				<div class="cust_reg_right col-md-6 col-sm-6 col-xs-12 text-center padd_top_botm_30px">
					<h2>GROW YOUR CUSTOMERS AND INCREASE YOUR SALE</h2>
					<h4 class="margin_top_20px">Each of your customers have 100+ friends.<br>Do you want them to be your customer as well?</h4>
					<button type="button" onclick="{window.location='#sign_up_form'}" id="sign_up_btn" class="trans_btn reg_btn margin_top_20px">Register</button>
				</div>
			</div>
		</div>
	</div>

<!--beauty_club Section -->
	<div id="beauty_club_outr">
		<img src="landing-page/images/section-2.jpg" style="width:100%">
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
						<h5>Sign up and receive a Beauty Professional id and create your own profile that will help you...</h5>
						<div class="beauty_membership_list padd_top_botm_30px text-right">
							<ul class="col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                List your services, products and pricing so your clients can book and purchase online.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/1.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                            	Track and confirm new appointments with ease and NO MONTHLY FEES
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/2.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Order your customer Beauty Professional id membershipcards online to distribute to your clients.
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/3.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Motivates your existing clients to promote your services by offering commision for every new referals that book online
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/4.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Sit back and watch how easily your clientele and sales will grow
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/5.png" alt class="col-md-12 col-sm-12">
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
						<h5>Sign up and create your own profile which will track how many of your reffered friends and family book using your link. You can...</h5>

						<div class="beauty_membership_list padd_top_botm_30px text-left">
							<ul class="col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
								<a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/6.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Share your profile with your friends and family so they can join the beauty referral Club using your custom link
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/7.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Earn money based on how many of your friends and family book appointments using your id number
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/8.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                Whoever clicks your link will be able to book online and you will recieve commission for fulfilled appointments
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/9.png" alt class="col-md-12 col-sm-12">
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                You will earn commission from Every repeated appointment from your referrals
	                            </li>
	                            <a href="#" class="col-md-3 col-sm-4 col-xs-12 text-center">
	                            	<img src="landing-page/images/10.png" alt class="col-md-12 col-sm-12" >
	                            </a>
	                            <li class="col-md-9 col-sm-8 col-xs-12 text-center padd_left_right_all_zero">
	                                You can monitor or withdraw your commission to your bank or paypal account on your profile page
	                            </li>
	                        </ul>
	                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--Benefits Section -->
<div class="arrow-down"></div>
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
								Perfect for both freelance beauty professionals and salon owners.
							</li>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Minimizes marketing costs because your happy customers spread the word for you.
							</li>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Appointment booking software is included to make a process seamlessly easy.
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
								Get paid commission for making the referral you once gave away for free.
							</li>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Become an important marketer for your favourate salon or beauty professional.
							</li>
							<li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Support local, independent businesses that provide a great service.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--Signup section with background image-->
	<div id="signup_sec_outr">
		<div id="signup_sec_inr" class="row">
			<div id="signup_sec_cont" class="col-md-12 col-sm-12 col-xs-12">
				<div class="container">
					<div class="signup_text padd_top_botm_80px color_white text-center">
						<h1>You will earn upto 20% commission from every repeated appointment from your refferals.</h1>
						<div class="margin_top_80px">
							<button type="button" onclick="{window.location='#sign_up_form'}" id="sign_up_btn" class="white_btn signup_now_btn">Sign up now</button>
						</div>
					</div>
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
						<h3>Join the beauty referral club</h3>
						<p>Join our mailing list for updates and early access<br>
						We’re developing this amazing product for all salon owners & independent beauty professionals freelancers.</p>
						
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
				<div class="copy_right text-center padd_top_botm_20px color_white">Copyright © 2016 BRC
				</div>
			</div>
		</div>
	</div>

</body>
</html>

