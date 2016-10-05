@extends('layouts.cms_master')

@section('script')

@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages-css/add_availability.css') }}">
@endsection

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
				<img src="/assets/images/step3.jpg" alt="step1">
			</div>
		</div>
	</div>
</div>
<div class="ibp_dashboard_cont_outr">
	<div class="ibp_dashboard_cont_inr">
		<div class="ibp_dashboard_cont">
			<div class="co-md-12 col-sm-12 col-xs-12 add_aval_outr">				 
				<div class="col-md-4 col-ms-12 col-xs-12">	
					<form class="ibp_add_aval_form">
						<div class="form-group">
					    	<label>Repeat </label>
					    	<select class="form-control">
							  <option>Daily</option>
							  <option>Monday - Friday</option>
							  <option>Monday - Saturday</option>
							  <option>Specific</option>
							</select>
					 	</div>
					 	<div class="form-group">
					    	<label>Start Time </label>
					    	<input type="text" class="form-control">
					 	</div>
					 	<div class="form-group">
					    	<label>End Time </label>
					    	<input type="text" class="form-control">
					 	</div>
					 	<div class="form-group">
					    	<label>End Time </label>
					    	<input type="text" class="form-control">
					 	</div>
					</form>	
				</div>
				<div class="col-md-8 col-ms-12 col-xs-12">	
				</div>
			</div>
		</div>
	</div>
</div>		
		
@endsection



