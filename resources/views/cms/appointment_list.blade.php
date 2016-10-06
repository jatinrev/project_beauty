@extends('layouts.cms_master')

@section('script')

@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages-css/appointment_list.css') }}">
@endsection

@section('content')

<div id="prf_dashboard_outr">
  <div id="prf_dashboard_inr">
    <div id="prf_dashboard_cont">
      <div class="dash_heading col-md-12 col-sm-12 col-xs-12 padd_top_20px padd_botm_30px ">
        <h3 class="text-uppercase ">APPOINTMENTS LISTING</h3>
      </div>
    </div>
  </div>
</div>
<div class="prog_bar_outr calendr_main_div">
  <div class="prog_bar_inr">
    <div class="prog_bar">
      <div class="web_prog_bar">
			<div class="appointment_cal_cont">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<span class="col-md-3">From : </span>
						<div class="cal_input col-md-8"><input type="text" name="" class="form-control"></div>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-12">
						<span class="col-md-3">To : </span>
						<div class="cal_input col-md-8"><input type="text" name="" class="form-control">
					</div>
				</div>
			</div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="ibp_dashboard_cont_outr">
	<div class="ibp_dashboard_cont_inr">
		<div class="ibp_dashboard_cont">
			<div class="col-md-12 col-sm-12 col-xs-12"> 
		        <div class="bs-example table-responsive" data-example-id="hoverable-table">
				    <table class="table table-hover table_col appointment_list_hover">
				    <thead>
						<tr>
						<th>USER</th>
						<th>SERVICE TITLE</th>
						<th>DURATION</th>
						<th>TIME SLOTS</th>
						</tr>
				    </thead>
				    <tbody class="botm_space">
						<tr>
						<td><img src="assets/images/profile-img.jpg" name="" class="app_list_img"/> Nikki</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						</tr>
						<tr>
						<td><img src="assets/images/profile-img.jpg" name="" class="app_list_img"/>Nikki</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
						</tr>
						<tr>
						<td><img src="assets/images/profile-img.jpg" name="" class="app_list_img"/>Nikki</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
						</tr>
				    </tbody>
				    </table>
		        </div>
            </div>		
		</div>
	</div>
</div>

@endsection



