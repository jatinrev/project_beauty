@extends('layouts.cms_master')

@section('content')
<div id="prf_dashboard_outr">
	<div id="prf_dashboard_inr">
		<div id="prf_dashboard_cont">
			<div class="dash_heading col-md-12 col-sm-12 col-xs-12 padd_top_20px padd_botm_30px">
				<h3 class="text-uppercase">Complete your profile</h3>	
			</div>
		</div>
	</div>
</div>
<div class="prog_bar_outr">
	<div class="prog_bar_inr">
		<div class="prog_bar">
			<div class="web_prog_bar">
				<img src="{{ asset('assets/images/step1.jpg') }}" alt="step1">
			</div>
		</div>
	</div>
</div>

<div class="ibp_dashboard_outr">
	<div class="ibp_dashboard_inr">
		<div class="ibp_dashboard">
			<div class="container col-md-12 col-sm-12 col-xs-12">
				<form class="form-horizontal col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero basic_info_form" role="form" method="POST">
					{{ csrf_field() }}
			<!-- Left side detail starts-->
					<div class="customer_detail col-md-3 col-sm-3 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 margin_top_85px margin_botm_40px">
						<div class="add_pic_outr col-md-12 col-sm-12 col-xs-12 margin_botm_20px">
							<div class="add_pic_inr text-center">
								<span class="glyphicon glyphicon-camera"></span>
								<p>Add a photo</p>
							</div>
						</div>
						
						<div class="public_prf_outr col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
							<div class="public_prf_inr text-center">
								<h4 class="color_pink">Public Profile</h4>
								<div class="socio_values">
									<img src="{{ asset('assets/images/profile-on-fb.png') }}" alt="">
									<input type="text" name="facebook_link" placeholder="On Facebook" class="form-control">
								</div>
								<div class="socio_values">
									<img src="{{ asset('assets/images/profile-on-tw.png') }}" alt>
									<input type="text" name="twitter_link" placeholder="On Twitter" class="form-control">	
								</div>
								<div class="socio_values">
									<img src="{{ asset('assets/images/profile-on-link.png') }}" alt>
									<input type="text" name="linked_in_link" placeholder="On Linkedin" class="form-control">
								</div>
							</div>
						</div>
					</div>

					<!-- Right side detail starts-->
					<div class="detail_form_outr col-md-6 col-sm-6 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 margin_top_85px margin_botm_40px">
						<div class="panel-body row">
								<div class="form-group margin_top_30px">
									<div class="col-md-3 col-sm-3 col-xs-4 padd_left_zero">
										<label>Name :</label>
									</div>
	                                <div class="col-md-9 col-sm-9 col-xs-8 padd_right_zero">
	                                    <input type="text" class="form-control" name="name" required autofocus>
	                                </div>
	                            </div>

	                            <div class="form-group margin_top_30px">
									<div class="col-md-3 col-sm-3 col-xs-4 padd_left_zero">
										<label>Profession :</label>
									</div>
	                                <div class="col-md-9 col-sm-9 col-xs-8 padd_right_zero">
	                                    <input type="text" class="form-control" name="profession" required autofocus>
	                                </div>
	                            </div>

	                            <div class="form-group margin_top_30px">
									<div class="col-md-3 col-sm-3 col-xs-4 padd_left_zero">
										<label>Languages :</label>
									</div>
	                                <div class="col-md-9 col-sm-9 col-xs-8 padd_right_zero">
	                                    <input type="text" class="form-control" name="languages" required autofocus>
	                                </div>
	                            </div>

	                            <div class="form-group margin_top_30px">
									<div class="col-md-3 col-sm-3 col-xs-4 padd_left_zero">
										<label>Address :</label>
									</div>
	                                <div class="col-md-9 col-sm-9 col-xs-8 padd_right_zero">
	                                	<input type="text" class="form-control" name="address" required autofocus>
	                                </div>
	                            </div>

	                            <div class="form-group margin_top_30px">
									<div class="col-md-3 col-sm-3 col-xs-4 padd_left_zero">
										<label>Expertise :</label>
									</div>
	                                <div class="col-md-8 col-sm-7 col-xs-7 expertise_align">
	                                    <input type="text" class="form-control" name="expertise" required autofocus>
	                                </div>
	                                <div class="col-md-1 col-sm-2 col-xs-1 add_btn_align">
	                                	<button type="button" class="light_red_btn add_btn col-md-12">Add</button>
	                                </div>
	                            </div>

	                            <div class="form-group margin_top_30px">
									<div class="col-md-3 col-sm-3 col-xs-4 padd_left_zero">
										<label>About :</label>
									</div>
	                                <div class="col-md-9 col-sm-9 col-xs-8 padd_right_zero">
	                                    <textarea rows="6" class="form-control" name="about" required autofocus>	
	                                	</textarea>
	                                </div>
	                            </div>
	                             <div class="form-group margin_top_30px">
	                            	<button type="submit" class="light_red_btn continue_btn">Continue</button>
	                            </div>
							
						</div>
					</div>
				</form>
				 
			</div>
		</div>	
		</div>
	</div>
</div>
@endsection