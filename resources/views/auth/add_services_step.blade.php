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
				<img src="http://localhost:8000/assets/images/step2.jpg" alt="step1">
			</div>
		</div>
	</div>
</div>

<div class="ibp_dashboard_cont_outr">
	<div class="ibp_dashboard_cont_inr">
		<div class="ibp_dashboard_cont">
			<div class="das_serv_left col-md-5">
				<form class="das_add_serv_form">
					  <div class="form-group">
					    <label>Add Service</label>
					    <input type="text" class="form-control" >
					  </div>

					  <div class="form-group col-md-12 padd_left_zero">
					    <label>Add <font class="color_pink">Hair</font> Services you will provide</label>
					    <small class="form-text text-muted col-md-12 padd_left_zero margin_botm_20px">You can select multiple services.</small>	

					    		<div class="custom-controls-stacked">
							    	<div class="col-md-12 padd_left_zero">
								    	<label class="custom-control custom-radio">
									        <input type="radio" class="custom-control-input" value="1" name="serv">
									         <span class="custom-control-indicator"></span>
    										 <span class="custom-control-description">Hair Cutting</span>									        	
									    </label>
								    </div> 
								    <div class="col-md-12 padd_left_zero">
								    	<label class="custom-control custom-radio">
									        <input type="radio" class="custom-control-input" value="2" name="serv">
									         <span class="custom-control-indicator"></span>
    										 <span class="custom-control-description">Hair Staining</span>									        	
									    </label>								    	 
								    </div>
								    <div class="col-md-12 padd_left_zero">
								    	<label class="custom-control custom-radio">
									        <input type="radio" class="custom-control-input" value="3" name="serv">
									         <span class="custom-control-indicator"></span>
    										 <span class="custom-control-description">Hair Styling</span>									        	
									    </label>								     
								    </div>
								    <div class="col-md-12 padd_left_zero">
								    	<label class="custom-control custom-radio">
									        <input type="radio" class="custom-control-input" value="4" name="serv">
									         <span class="custom-control-indicator"></span>
    										 <span class="custom-control-description">Lorem Ipsum</span>									        	
									    </label>								
								    </div> 
								</div>    
					  </div>

					  <div class="form-group col-md-12 padd_left_zero">
					  	<div class="col-md-5 padd_left_zero">
					  		<label>Add Price</label>
					    	<input type="text" class="form-control" placeholder="$0" >	
					  	</div>
					  	<div class="col-md-7 padd_left_55px">
					  		<label>Add Time Duration</label>
					    	<input type="text" class="form-control" placeholder="-- --">	
					  	</div>
					  </div>

					  <div class="form-group col-md-12 padd_left_zero">
					  	  	<label>Add Services Photos</label>
					    	<small class="form-text text-muted col-md-12 padd_left_zero margin_botm_20px">You can add two photos.</small>	
					    	<div class="col-md-12 padd_left_zero">
					    		<div class="col-md-6 padd_left_zero">
					    			<input type="file" id="file" class="">
					    		</div>
					    		<div class="col-md-6 padd_left_zero">
					    			<input type="file" id="file" class="">
					    		</div>
					    	</div>
					  </div>
					  
					  <div class="form-group col-md-12 padd_left_zero">
					  	  	<label>Add Description</label>
					  	  	<textarea class="form-control" id="exampleTextarea" rows="3" >
					  	  	</textarea>
					  </div>  

					  <div class="form-group col-md-12 padd_left_zero">
					  	<button type="button" class="light_red_btn add_btn">Add</button>
					  </div>	 		
				</form>
			</div>
			<div class="das_serv_right col-md-6 pull-right">	
				<div class="form-group">
					<label class="margin_top_z margin_botm_z">Services List You Will Provide</label>
				</div>
				<div class="scrollbar" id="ex3">
					<div class="services_list_inr">
						<div class="services_list_cont">
							<h4 class="margin_top_z margin_botm_z color_pink">Hair Services</h4>
							<div class="sub_ser">
								<h5>Lorem Ipsum
									<span>
										00 hrs 00 min | <font class="color_pink">$0</font>
										<div>
											<img src="{{ asset('assets/images/serv1.png')}}" alt>
											<img src="{{ asset('assets/images/serv2.png')}}" alt>	
										</div>
									</span>		
								</h5>

								<p>
									Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry.
								</p>
							</div>
						</div>

						<div class="services_list_cont">
							<h4 class="margin_top_z margin_botm_z color_pink">Skin Services</h4>
							<div class="sub_ser">
								<h5>Lorem Ipsum
									<span>
										00 hrs 00 min | <font class="color_pink">$0</font>
										<div>
											<img src="{{ asset('assets/images/serv1.png')}}" alt>
											<img src="{{ asset('assets/images/serv2.png')}}" alt>	
										</div>
									</span>
								</h5>
								
								<p>
									Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry.
								</p>
							</div>

							<div class="sub_ser">
								<h5>Lorem Ipsum
									<span>
										00 hrs 00 min | <font class="color_pink">$0</font>
										<div>
											<img src="{{ asset('assets/images/serv1.png')}}" alt>
											<img src="{{ asset('assets/images/serv2.png')}}" alt>	
										</div>
									</span>
								</h5>
								
								<p>
									Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry.
								</p>
							</div>
						</div>

						<div class="services_list_cont">
							<h4 class="margin_top_z margin_botm_z color_pink">Nail Services</h4>
							<div class="sub_ser">
								<h5>Lorem Ipsum
									<span>
										00 hrs 00 min | <font class="color_pink">$0</font>
										<div>
											<img src="{{ asset('assets/images/serv1.png')}}" alt>
											<img src="{{ asset('assets/images/serv2.png')}}" alt>	
										</div>
									</span>
								</h5>
								<p>
									Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="das_serv_right_btn col-md-6 col-sm-6 col-xs-6 pull-right margin_top_40px">
					<button type="submit" class="black_btn serv_back_btn">Back</button>
					<button type="submit" class="light_red_btn serv_cont_btn">Continue</button>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection