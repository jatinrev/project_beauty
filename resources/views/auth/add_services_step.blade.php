@extends('layouts.cms_master')

@section('content')
 <?php //print_r($services);
 
  ?>
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
				<img src="{{ asset('assets/images/step2.jpg') }}" alt="step2">
			</div>
		</div>
	</div>
</div>

<div class="ibp_dashboard_cont_outr">
	<div class="ibp_dashboard_cont_inr">
		<div class="ibp_dashboard_cont">
			<div class="das_serv_left col-md-5">
				<form class="das_add_serv_form" role="form" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
					<?php $main_categories = get_main_categories(); ?>
					  <div class="form-group">
					    <label>Add Service</label>
					    <!-- <input type="text" class="form-control" name="main_service" > -->
					    <select name="main_service" class="form-control" id="main_category">
					    <option>Select Service</option>
					    @foreach($main_categories as $main_cat)
							<option value="{{ $main_cat->id }}">{{ $main_cat->service_category }}</option>
						@endforeach	
					    </select>
					  </div>

					  <div class="form-group col-md-12 padd_left_zero">
					    <label>Add <font class="color_pink">Hair</font> Services you will provide</label>
					    <small class="form-text text-muted col-md-12 padd_left_zero margin_botm_20px">You can select multiple services.</small>	
					    <select name="serv" class="form-control" id="sub_cat">
					    <option>Select Service</option>
					    @foreach($main_categories as $main_cat)
							<option value=""></option>
						@endforeach	
					    </select>

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
					  	<div class="col-md-6 padd_left_zero">
					  		<label>Add Price</label>
					    	<input type="text" class="form-control" name="serv_price" placeholder="$0" >	
					  	</div>
					  	<div class="col-md-6 padd_left_zero">
					  		<label>Add Time Duration</label>
					    	<input type="text" class="form-control" id="timepicker" name="serv_time" placeholder="-- --">	
					  	</div>
					  </div>

					  <div class="form-group col-md-12 padd_left_zero">
					  	  	<label>Add Services Photos</label>
					    	<small class="form-text text-muted col-md-12 padd_left_zero margin_botm_20px">You can add two photos.</small>	
					    	<div class="col-md-12 padd_left_zero margin_botm_20px">
					    		<input type="file" class="filestyle" name="serv_image_1" data-buttonBefore="true" 
					    		data-icon="false">	
					    	</div>
					    	<div class="col-md-12 padd_left_zero ">
					    		<input type="file" class="filestyle" name="serv_image_2" data-buttonBefore="true" 
					    		data-icon="false">
					    	</div>
					  </div>
					  
					  <div class="form-group col-md-12 padd_left_zero">
					  	  	<label>Add Description</label>
					  	  	<textarea class="form-control" id="exampleTextarea" name="serv_desc" rows="3" >
					  	  	</textarea>
					  </div>  

					  <div class="form-group col-md-12 padd_left_zero">
					  	<button type="submit" class="light_red_btn add_btn">Add</button>
					  </div>	 		
				</form>
			</div>
			<div class="das_serv_right col-md-6 pull-right">	
				<div class="form-group">
					<label class="margin_top_z margin_botm_z">Services List You Will Provide</label>
				</div>
				<div class="scrollbar_inr">
				@foreach($services as $srvces)
						<div class="services_list_cont">
							<?php $srvces->service_name  ?>
							<h4 class="margin_top_z margin_botm_z color_pink">{{ $srvces->service_name }}</h4>
							<div class="sub_ser col-md-12 col-sm-12 col-xs-12">
								<div class="sub_ser_left col-md-4 col-sm-4">
									<h5>{{ $srvces->sub_service_name }}</h5>
								</div>
								<?php  $timing = explode(':', $srvces->service_time); ?>
								<div class="sub_ser_right col-md-8 col-sm-8">
									<span>{{ $timing[0] }} hh {{ $timing[1] }} mn | <font class="color_pink">${{ $srvces->service_price }}</font></span>
								@if($srvces->service_image_1 != '')		
									<?php $path = public_path().'/assets/serv_images/'; 
									 $file1 = $path.$srvces->service_image_1;
									if(file_exists($file1)) { ?>
									 <img src="{{ asset('assets/serv_images/')}}/<?php echo $srvces->service_image_1; ?>" width="50px" height="50px">	
									<?php }  ?>	
								@else 
									  <img src="{{ asset('assets/images/serv1.png')}}" alt>
								@endif    	
									
								@if($srvces->service_image_2 != '')	
									<?php $path = public_path().'/assets/serv_images/'; 
									$file2 = $path.$srvces->service_image_2;
									if(file_exists($file2)) { ?>
									   <img src="{{ asset('assets/serv_images/')}}/<?php echo $srvces->service_image_2; ?>" width="50px" height="50px">	
									<?php }  ?>	
								@else	
									   <img src="{{ asset('assets/images/serv2.png')}}" alt>
								@endif    

								</div>
								<div class="sub_ser_parah col-md-12 col-sm-12 col-xs-12">
									<p>{{ $srvces->service_description }}</p>
								</div>
							</div>
						</div>
				@endforeach		
				</div>
				<div class="das_serv_right_btn pull-right margin_top_40px">
					<button type="submit" class="black_btn serv_back_btn" onclick="previous_url();">Back</button>
					<button type="submit" class="light_red_btn serv_cont_btn" onclick="next_url();">Continue</button>
				</div>
			</div>	
		</div>
	</div>
</div>

@endsection

@section('script')
<script>
$(document).ready(function() {
	
});
$(function () {
    var $container = $('.scrollbar_inr'),
        i = 0;
    
    $container.on('reach.scrollbox', function () {
            if (i < 0) {
                window.setTimeout(function () {
                    $container.append('<div class="test-div">' + i ++ + '</div>');
                    $container.scrollbox('update'); 
                },300);
            }
        })
        .scrollbox({
            buffer: 150 
        });
});
        </script>

 <script>
 function next_url(){
 	window.location = 'add-availability';
 }
 function previous_url(){
 	window.location = 'basic-detail';	
 }
 </script>       
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"> </script>
	<script type="text/javascript">
		$(":file").filestyle({buttonBefore: true});
		$(":file").filestyle('icon', false);
	</script>
<script>
$('#main_category').on('change', function() {
	//alert($(this).val());
 var cat_id = $(this).val();
   $.ajax({
         url: "{{ url('/get_sub_category')}}/"+cat_id,    
         type: 'get',
         success: function(output) { 
           	alert(output);
          }          
         });
});/**/
</script>

@endsection