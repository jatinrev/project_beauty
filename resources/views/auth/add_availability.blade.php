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
			<div class="col-md-12 col-sm-12 col-xs-12 add_aval_outr">				 
				<div class="add_aval_left col-md-4 col-ms-12 col-xs-12">	
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
					 	<div class="form-group col-md-6 padd_left_zero">
					    	<label>Start Time </label>
					    	<input type="text" class="form-control">
					 	</div>
					 	<div class="form-group col-md-6 padd_left_zero">
					    	<label>End Time </label>
					    	<input type="text" class="form-control">
					 	</div>
					 	<div class="form-group">
					 		<label class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" value="1" name="serv">
								<span class="custom-control-indicator"></span>
    							<span class="custom-control-description">Mark as Holiday</span>	
    						</label>
					 	</div>
					 	<div class="form-group">
					 		<button type="button" class="light_red_btn add_btn">Add</button>
					 	</div>
					</form>	
				</div>
				<div class="add_aval_right col-md-7 col-ms-12 col-xs-12 pull-right">
					<div class="table-responsive">
	  					<table class="table">
	  						<thead  class="hd_bg">
	  							<tr>
			  						<th>Repeat</th>
			  						<th>Start Time/Date</th>
			  						<th>End Time/Date</th>
			  						<th>Action</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>Daily</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>
			  							<p data-placement="top" data-toggle="tooltip" title="Delete">
			  								<a href="#" class="trash_btn">
			  									<span class="glyphicon glyphicon-trash"></span>
			  								</a>
			  							</p>
			  						</td>
			  					</tr>

			  					<tr>
			  						<td>Mon</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>
			  							<p data-placement="top" data-toggle="tooltip" title="Delete">
			  								<a href="#" class="trash_btn">
			  									<span class="glyphicon glyphicon-trash"></span>
			  								</a>
			  							</p>
			  						</td>
			  					</tr>

			  					<tr>
			  						<td>Tue</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>
			  							<p data-placement="top" data-toggle="tooltip" title="Delete">
			  								<a href="#" class="trash_btn">
			  									<span class="glyphicon glyphicon-trash"></span>
			  								</a>
			  							</p>
			  						</td>
			  					</tr>
			  				
			  					<tr>
			  						<td>Wed</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>
			  							<p data-placement="top" data-toggle="tooltip" title="Delete">
			  								<a href="#" class="trash_btn">
			  									<span class="glyphicon glyphicon-trash"></span>
			  								</a>
			  							</p>
			  						</td>
			  					</tr>
			  				
			  					<tr>
			  						<td>Thus</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>0hr 0min/M-D-Y</td>
			  						<td>
			  							<p data-placement="top" data-toggle="tooltip" title="Delete">
			  								<a href="#" class="trash_btn">
			  									<span class="glyphicon glyphicon-trash"></span>
			  								</a>
			  							</p>
			  						</td>
			  					</tr>
			  				</tbody>
			  				
	  					</table>	
					</div>

					<div class="das_serv_right_btn pull-right margin_top_65px">
						<button type="submit" class="black_btn serv_back_btn">Back</button>
						<button type="submit" class="light_red_btn serv_cont_btn">Continue</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		
		
@endsection



