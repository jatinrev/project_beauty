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
				<img src="{{ asset('assets/images/step3.jpg') }}" alt="step3">
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
					 		<label>
								<input type="checkbox" checked="checked" value="1" name="serv" class="custom_checkbx">
    							<span class="custom-control-description">Mark as Holiday</span>	
    						</label>
					 	</div>
					 	<div class="form-group">
					 		<button type="button" class="light_red_btn add_btn">Add</button>
					 	</div>
					</form>	
				</div>

		<!-- Right Section-->
				<div class="add_aval_right col-md-7 col-ms-12 col-xs-12 pull-right">
					<div class="table-responsive">
						<div style="height: 270px;">
		  					<table class="table">
		  						<thead  class="hd_bg">
		  							<tr>
				  						<th>Repeat</th>
				  						<th>Start Time&nbsp;/&nbsp;Date</th>
				  						<th>End Time&nbsp;/&nbsp;Date</th>
				  						<th>Action</th>
				  					</tr>
				  				</thead>
				  				<tbody>
				  					<tr class="bgcolor_grey">
				  						<td>Daily</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>
				  							<p data-placement="top" data-toggle="tooltip" title="Delete">
				  								<a href="#" class="trash_btn">
				  									<span class="glyphicon glyphicon-trash"></span>
				  								</a>
				  							</p>
				  						</td>
				  					</tr>

				  					<tr class="bgcolor_light_grey">
				  						<td>Mon</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>
				  							<p data-placement="top" data-toggle="tooltip" title="Delete">
				  								<a href="#" class="trash_btn">
				  									<span class="glyphicon glyphicon-trash"></span>
				  								</a>
				  							</p>
				  						</td>
				  					</tr>


				  					<tr class="bgcolor_grey">
				  						<td>Tue</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>
				  							<p data-placement="top" data-toggle="tooltip" title="Delete">
				  								<a href="#" class="trash_btn">
				  									<span class="glyphicon glyphicon-trash"></span>
				  								</a>
				  							</p>
				  						</td>
				  					</tr>
				  				
				  					<tr class="bgcolor_light_grey">
				  						<td>Wed</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>
				  							<p data-placement="top" data-toggle="tooltip" title="Delete">
				  								<a href="#" class="trash_btn">
				  									<span class="glyphicon glyphicon-trash"></span>
				  								</a>
				  							</p>
				  						</td>
				  					</tr>
				  				
				  					<tr class="bgcolor_grey">
				  						<td>Thus</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>
				  							<p data-placement="top" data-toggle="tooltip" title="Delete">
				  								<a href="#" class="trash_btn">
				  									<span class="glyphicon glyphicon-trash"></span>
				  								</a>
				  							</p>
				  						</td>
				  					</tr>

				  					<tr class="bgcolor_light_grey">
				  						<td>Daily</td>
				  						<td>0hr 0min<br>M-D-Y</td>
				  						<td>0hr 0min<br>M-D-Y</td>
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
					</div>

					<div class="das_serv_right_btn pull-right margin_top_65px">
						<button type="submit" class="black_btn serv_back_btn" onclick="previous_url();">Back</button>
						<button type="submit" class="light_red_btn serv_cont_btn" onclick="next_url();">Continue</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		
<script>
 function next_url(){
 	window.location = 'add-products';
 }
 function previous_url(){
 	window.location = 'add-services';	
 }
 </script>  
		
@endsection



