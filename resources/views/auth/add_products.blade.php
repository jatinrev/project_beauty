@extends('layouts.cms_master')

@section('css')
<style type="text/css">
.add_prd{background: #fff none repeat scroll 0 0;border-top: 4px solid #952650;-webkit-box-shadow: 0 4px 3px 1px #D4D4D4;
box-shadow: 0 4px 3px 1px #D4D4D4; float: left; width: 100%; padding: 4% 2%;}
.ipb_single_prd img{ width: 100%}
.prd_detail{ background-color: #F3F3F3;padding: 5px 0;margin-top: 5px;}
.prd_detail p {color: #666;font-size: 14px;font-weight: bold;padding: 5px 0; margin: 0}
.prd_detail span {font-size: 16px;font-weight: bold;}
.ipb_single_prd {border-top: 4px solid #952650;-webkit-box-shadow: 0 4px 3px 1px #D4D4D4;box-shadow: 0 4px 3px 1px #D4D4D4; padding: 5px; position: relative; cursor: pointer;}
.remove_prd {  left: 45%;position: absolute;top: 15px;z-index: 9999;}
.remove_prd span {color: #fff;font-size: 21px;}
.prd_desc{ position: absolute; top: 0; height: 96%; overflow: hidden; background-color: rgba(0,0,0,0.5); width: 96%; top: 5px; display: none;padding-top: 55px; padding-bottom: 20px;}
.prd_desc p {font-size: 14px;   margin: 0 auto;width: 95%;color: #fff; text-align: center; height: 100%; overflow: hidden;}
.ipb_single_prd:hover .prd_desc{ display: block;}

@media screen and (max-width: 767px){
	 
	.prd_desc {
      height:98%;
    left: 0;
      top: 5px;
    width: 100%;}
 
}
</style>
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
				<img src="http://localhost:8000/assets/images/step4.jpg" alt="step1">
			</div>
		</div>
	</div>
</div>
<div class="ibp_dashboard_cont_outr">
	<div class="ibp_dashboard_cont_inr">
		<div class="ibp_dashboard_cont">
			<div class="ibp_add_prds">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form class="add_prd ">
						<div class="form-group">							 
							<div class="col-md-12 col-sm-9 col-xs-12">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
									    <label>Product Image :</label>
									    <input type="file" class="filestyle" data-buttonBefore="true" data-icon="false">
									</div>
									<div class="form-group">
									    <label>Product Title :</label>
									    <input class="form-control" type="text">
									</div>
									<div class="form-group">
									    <label>Product Price :</label>
									    <input class="form-control" type="text">
									</div>  
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
									    <label>Description :</label>
									   <textarea class="form-control" rows="6"></textarea>
									  </div>
								</div>
								<div class="col-md-2 text-right pull-right col-sm-6 col-xs-12">
									<button type="button" class="light_red_btn add_btn col-md-12 col-sm-12 col-xs-12">Add</button>
								</div>	
							</div>	
									
						</div>
					</form>
				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12 prds_listing margin_top_40px">
					<div class="row padd_left_right_all_zero">
								<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd text-center">
				 							<img src="/assets/images/home-slider.jpg">
				 							<div class="col-md-12 col-sm-12 col-xs-12  prd_detail text-center">
				 								<p>Lorem Ipsum Text</p>
				 								<span class="color_red">$15</span>
				 							</div>
				 							
				 							<div class="prd_desc col-md-12 col-sm-12 col-xs-12">
				 								<a href="#" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
				 								<p>Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. </p>
				 							</div>
										</div>
								</div>				
								<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd">
				 							<img src="/assets/images/ibp-prd-img.jpg">
				 							<div class="col-md-12 col-sm-12 col-xs-12  prd_detail text-center">
				 								<p>Lorem Ipsum Text</p>
				 								<span class="color_red">$15</span>
				 							</div>
				 							
				 							<div class="prd_desc">
				 								<a href="#" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
				 								<p>Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. </p>
				 							</div>
										</div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd">
				 							<img src="/assets/images/ibp-prd-img.jpg">
				 							<div class="col-md-12 col-sm-12 col-xs-12  prd_detail text-center">
				 								<p>Lorem Ipsum Text</p>
				 								<span class="color_red">$15</span>
				 							</div>
				 							
				 							<div class="prd_desc">
				 								<a href="#" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
				 								<p>Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. </p>
				 							</div>
									</div>
								</div> 
								<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd">
				 							<img src="/assets/images/ibp-prd-img.jpg">
				 							<div class="col-md-12  col-sm-12 col-xs-12  prd_detail text-center">
				 								<p>Lorem Ipsum Text</p>
				 								<span class="color_red">$15</span>
				 							</div>
				 							
				 							<div class="prd_desc">
				 								<a href="#" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
				 								<p>Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. </p>
				 							</div>
									</div>
								</div> 
					</div>
					 <div class="row padd_left_right_all_zero margin_top_40px">
								<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd">
				 							<img src="/assets/images/ibp-prd-img.jpg">
				 							<div class="col-md-12 col-sm-12 col-xs-12 prd_detail text-center">
				 								<p>Lorem Ipsum Text</p>
				 								<span class="color_red">$15</span>
				 							</div>
				 							
				 							<div class="prd_desc">
				 								<a href="#" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
				 								<p>Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. </p>
				 							</div>
										</div>
								</div>				
								<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd">
				 							<img src="/assets/images/ibp-prd-img.jpg">
				 							<div class="col-md-12 col-sm-12 col-xs-12  prd_detail text-center">
				 								<p>Lorem Ipsum Text</p>
				 								<span class="color_red">$15</span>
				 							</div>
				 							
				 							<div class="prd_desc">
				 								<a href="#" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
				 								<p>Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. </p>
				 							</div>
										</div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd">
				 							<img src="/assets/images/ibp-prd-img.jpg">
				 							<div class="col-md-12 col-sm-12 col-xs-12  prd_detail text-center">
				 								<p>Lorem Ipsum Text</p>
				 								<span class="color_red">$15</span>
				 							</div>
				 							
				 							<div class="prd_desc">
				 								<a href="#" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
				 								<p>Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. </p>
				 							</div>
									</div>
								</div> 
								<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd">
				 							<img src="/assets/images/ibp-prd-img.jpg">
				 							<div class="col-md-12 col-sm-12 col-xs-12  prd_detail text-center">
				 								<p>Lorem Ipsum Text</p>
				 								<span class="color_red">$15</span>
				 							</div>
				 							
				 							<div class="prd_desc">
				 								<a href="#" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
				 								<p>Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. Lorem Ipsum is simply text written on the service page and it is dummy text of the typesetting industry. </p>
				 							</div>
									</div>
								</div> 
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 text-right margin_top_40px">
					<button type="submit" class="black_btn serv_back_btn">Back</button>
					<button type="submit" class="light_red_btn serv_cont_btn">Continue</button>
				</div>
			</div>
		</div>
	</div>
</div>
@section('script')
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"> </script>
 <script type="text/javascript">
  $(":file").filestyle({buttonBefore: true});
  $(":file").filestyle('icon', true);
 </script>
 @endsection
@endsection