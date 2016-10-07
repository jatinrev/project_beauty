@extends('layouts.cms_master')

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
	 	if(!Modernizr.csscalc){
    		$('.del_gal_img img').width($(PARENT_EL).width() - 20)
    		alert("hi");
		}
	});

	function add_gallery_image() {
		$('.gallery_file').click();
	}
	$('.gallery_file').change(function(e) {
		$('#gallery_form').submit();
	});
</script>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages-css/add_gallery.css') }}">
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
				<img src="/assets/images/step5.jpg" alt="step1">
			</div>
		</div>
	</div>
</div>
<div class="ibp_dashboard_cont_outr">
	<div class="ibp_dashboard_cont_inr">
		<div class="ibp_dashboard_cont">
			<div class="col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
				<div class="col-md-3 col-sm-3 col-xs-12 ibp_prd_outr">
						<div class="ibp_single_gal col-md-12 col-sm-12 col-xs-12 text-center padd_left_right_all_zero">
							<img src="/assets/images/home-slider.jpg" class="ibp_single_gal_img">
							<a href="#" class="del_gal_img"><img src="/assets/images/del-white-icon.png"></a>	
						</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 ibp_prd_outr">
						<div class="ibp_single_gal col-md-12 col-sm-12 col-xs-12 text-center padd_left_right_all_zero">
							<img src="/assets/images/profile-img.jpg" class="ibp_single_gal_img">
							<a href="#" class="del_gal_img"><img src="/assets/images/del-white-icon.png"></a>	
						</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 ibp_prd_outr">
						<div class="ibp_single_gal col-md-12 col-sm-12 col-xs-12 text-center padd_left_right_all_zero">
							<img src="/assets/images/home-slider.jpg" class="ibp_single_gal_img">
							<a href="#" class="del_gal_img"><img src="/assets/images/del-white-icon.png"></a>	
						</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 ibp_prd_outr">
						<div class="ibp_single_gal col-md-12 col-sm-12 col-xs-12 text-center padd_left_right_all_zero">
							<img src="/assets/images/home-slider.jpg" class="ibp_single_gal_img">
							<a href="#" class="del_gal_img"><img src="/assets/images/del-white-icon.png"></a>	
						</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero margin_top_40px add_prd_next_row_for_m">
				<div class="col-md-3 col-sm-3 col-xs-12 ibp_prd_outr">
						<div class="ibp_single_gal col-md-12 col-sm-12 col-xs-12 text-center padd_left_right_all_zero">
							<img src="/assets/images/home-slider.jpg" class="ibp_single_gal_img">
							<a href="#" class="del_gal_img"><img src="/assets/images/del-white-icon.png"></a>	
						</div>
				</div>				 
				<div class="col-md-3 col-sm-3 col-xs-12 ibp_prd_outr">
						<div class="ibp_single_gal col-md-12 col-sm-12 col-xs-12 text-center padd_left_right_all_zero">
							<div class="for_new_gal_img col-md-12 col-sm-12 col-xs-12">
								<form id="gallery_form" method="POST" role="form" enctype="multipart/form-data">
									{{ csrf_field() }}
									<input type="hidden" name="action" value="add_gallery_image">
									<input type="file" class="gallery_file" name="gallery_image" style="display: none;">
									<a href="javascript:void(0)" onclick="add_gallery_image()" class="add_new_gal_img"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
									<span class="col-md-12 col-sm-12 col-xs-12 add_gal_img_text">Add Gallery Image</span>
								</form>
							</div>	
						</div>
				</div>
			</div>

	
		</div>
	</div>
</div>	

@endsection



