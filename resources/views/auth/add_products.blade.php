@extends('layouts.cms_master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages-css/add_products.css') }}">
@endsection

@section('content')
 <pre>
<?php //print_r($errors); ?>
</pre> 
{{-- {{ dd($products) }} --}}
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
				<img src="{{ asset('assets/images/step4.jpg') }}" alt="step4">
			</div>
		</div>
	</div>
</div>
<div class="ibp_dashboard_cont_outr">
	<div class="ibp_dashboard_cont_inr">
		<div class="ibp_dashboard_cont">
			<div class="ibp_add_prds">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form class="add_prd" method="POST" role="form" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="action" value="add_products">
						<div class="form-group">							 
							<div class="col-md-12 col-sm-9 col-xs-12">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
									    <label>Product Image :</label>
									    <input name="product_image" type="file" class="filestyle" data-buttonBefore="true" data-icon="false">
									</div>
									<div class="form-group">
									    <label>Product Title :</label>
									    <input name="title" class="form-control" type="text">
									</div>
									<div class="form-group">
									    <label>Product Price :</label>
									    <input name="price" class="form-control" type="text">
									</div>  
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
									    <label>Description :</label>
									   	<textarea name="description" class="form-control" rows="6"></textarea>
									</div>
								</div>
								<div class="col-md-2 text-right pull-right col-sm-6 col-xs-12">
									<button type="submit" class="light_red_btn add_btn col-md-12 col-sm-12 col-xs-12">Add</button>
								</div>	
							</div>	
									
						</div>
					</form>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 prds_listing">
					<div class="row padd_left_right_all_zero margin_top_40px">
						@foreach ($products as $product)
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="col-md-12 col-sm-12 col-xs-12 ipb_single_prd text-center">
		 							<img src="/images/all/{{ $product->product_image }}">
		 							<div class="col-md-12 col-sm-12 col-xs-12  prd_detail text-center">
		 								<p>{{ $product->product_name }}</p>
		 								<span class="color_red">${{ $product->product_price }}</span>
		 							</div>
		 							
		 							<div class="prd_desc col-md-12 col-sm-12 col-xs-12">
		 								<a href="javascript:void(0)" onclick="delete_product({{ $product->id }})" class="remove_prd"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
		 								<p>{{ $product->product_description }}</p>
		 							</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 text-right margin_top_40px">
					<button type="submit" class="black_btn serv_back_btn" onclick="previous_url();">Back</button>
					<button type="submit" class="light_red_btn serv_cont_btn" onclick="next_url();">Continue</button>
				</div>
			</div>
		</div>
	</div>
</div>
<form action="" id="delete_product_form" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="action" value="delete_product_action">
	<input type="hidden" class="delete_product_id" name="product_id">
</form>
@endsection

@section('script')
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"> </script>
	<script type="text/javascript">
	 	$(":file").filestyle({buttonBefore: true});
	 	$(":file").filestyle('icon', true);
		function delete_product(id) {
			var output = confirm('Do you really want to delete this?')
			if(output) {
				$('.delete_product_id').val(id);
				$('#delete_product_form').submit();
			}
		}
	</script>
 <script>
 function next_url(){
 	window.location = 'add-gallery';
 }
 function previous_url(){
 	window.location = 'add-availability';	
 }
 </script>   	
@endsection




