@extends('layouts.cms_master')

@section('content')
<div id="prf_dashboard_outr">
	<div id="prf_dashboard_inr">
		<div id="prf_dashboard_cont" class="row">
			<div class="dash_heading col-md-12 col-sm-12 col-xs-12 padd_top_20px padd_botm_30px">
				<h3 class="text-uppercase">Complete your profile</h3>	
			</div>

		<!-- Top bar profile links-->
			<div class="prf_link_items col-md-12 col-sm-12 col-xs-12 padd_top_botm_10px text-center">
				<div class="link_items first">
					<a href="#" class="color_pink">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
						<p>Basic detail</p>
					</a>
					
				</div>
				<div class="division_line">
					<img src="{{ asset('assets/images/red-division-line.jpg') }}" alt>
				</div>

				<div class="link_items">
					<a href="#" class="color_grey">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
						<p>Add Services</p>
					</a>
				</div>
				<div class="division_line">
					<img src="{{ asset('assets/images/white-division-line.jpg') }}" alt>
				</div>

				<div class="link_items">
					<a href="#" class="color_grey">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
						<p>Add Availability</p>
					</a>
				</div>
				<div class="division_line">
					<img src="{{ asset('assets/images/white-division-line.jpg') }}" alt>
				</div>
			
				<div class="link_items">
					<a href="#" class="color_grey">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
						<p>Add Products</p>
					</a>
				</div>
				<div class="division_line">
					<img src="{{ asset('assets/images/white-division-line.jpg') }}" alt>
				</div>
				

				<div class="link_items">
					<a href="#" class="color_grey">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
						<p>Add gallery</p>
					</a>
				</div>
			</div>


		<!-- User Profile Detail starts -->
			<div class="container col-md-12 col-sm-12 col-xs-12">

		<!-- Left side detail starts-->
				<div class="customer_detail col-md-3 col-sm-3 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 margin_top_85px margin_botm_40px">
					<div class="add_pic_outr col-md-12 col-sm-12 col-xs-12 margin_botm_20px">
						<div class="add_pic_inr text-center">
							<span class="glyphicon glyphicon-camera"></span>
							<p>Add a photo</p>
						</div>
					</div>
					
					<div class="public_prf_outr col-md-12 col-sm-12 col-xs-12">
						<div class="public_prf_inr text-center">
							<h4 class="color_pink">Public Profile</h4>
							<div class="socio_values">
								<img src="{{ asset('assets/images/profile-on-fb.png') }}" alt>
								<input type="email" placeholder="On Facebook" class="form-control" 
								required>
							</div>
							<div class="socio_values">
								<img src="{{ asset('assets/images/profile-on-tw.png') }}" alt>
								<input type="email" placeholder="On Twitter" class="form-control" 
								required>	
							</div>
							<div class="socio_values">
								<img src="{{ asset('assets/images/profile-on-link.png') }}" alt>
								<input type="email" placeholder="On Linkedin" class="form-control"  required>
							</div>
						</div>
					</div>
				</div>

		<!-- Right side detail starts-->
				<div class="detail_form_outr col-md-6 col-sm-6 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 margin_top_85px margin_botm_40px">
					<div class="panel-body row">
						<form class="form-horizontal col-md-12 col-sm-12 col-xs-12" role="form" method="POST">
							<div class="form-group margin_top_30px">
								<div class="col-md-3 col-sm-3 col-xs-4">
									<label>Name :</label>
								</div>
                                <div class="col-md-9 col-sm-9 col-xs-8">
                                    <input type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>

                            <div class="form-group margin_top_30px">
								<div class="col-md-3 col-sm-3 col-xs-4">
									<label>Profession :</label>
								</div>
                                <div class="col-md-9 col-sm-9 col-xs-8">
                                    <input type="text" class="form-control" name="profession" required autofocus>
                                </div>
                            </div>

                            <div class="form-group margin_top_30px">
								<div class="col-md-3 col-sm-3 col-xs-4">
									<label>Languages :</label>
								</div>
                                <div class="col-md-9 col-sm-9 col-xs-8">
                                    <input type="text" class="form-control" name="languages" required autofocus>
                                </div>
                            </div>

                            <div class="form-group margin_top_30px">
								<div class="col-md-3 col-sm-3 col-xs-4">
									<label>Address :</label>
								</div>
                                <div class="col-md-9 col-sm-9 col-xs-8">
                                	<input type="text" class="form-control" name="address" required autofocus>
                                </div>
                            </div>

                            <div class="form-group margin_top_30px">
								<div class="col-md-3 col-sm-3 col-xs-4">
									<label>Expertise :</label>
								</div>
                                <div class="col-md-8 col-sm-7 col-xs-7 expertise_align">
                                    <input type="text" class="form-control" name="expertise" required autofocus>
                                </div>
                                <div class="col-md-1 col-sm-2 col-xs-1 add_btn_align">
                                	<button type="button" class="light_red_btn add_btn">Add</button>
                                </div>
                            </div>

                            <div class="form-group margin_top_30px">
								<div class="col-md-3 col-sm-3 col-xs-4">
									<label>About :</label>
								</div>
                                <div class="col-md-9 col-sm-9 col-xs-8">
                                    <textarea rows="6" class="form-control" name="about" required autofocus>	
                                	</textarea>
                                </div>
                            </div>
						</form>
					</div>
				</div>

				<div class="rgt_botm_btn margin_botm_150px col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 ">
					<button type="submit" class="light_red_btn continue_btn">Continue</button>			
				</div>
			</div>
		</div>
	</div>
</div>
@endsection