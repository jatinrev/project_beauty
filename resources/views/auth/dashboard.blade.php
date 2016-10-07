@extends('layouts.cms_master')

@section('css')
<style>
	.file_input_class { display: none !important; }
</style>
@endsection

@section('content')
{{-- {{ dd($user_data->user_image) }} --}}
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
				<img src="{{ asset('assets/images/step1.jpg') }}" alt="step1">
			</div>
		</div>
	</div>
</div>

<div class="ibp_dashboard_outr">
	<div class="ibp_dashboard_inr">
		<div class="ibp_dashboard">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<form class="form-horizontal col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero basic_info_form" role="form" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!--Left side detail starts -->
					<div class="customer_detail col-md-3 col-sm-3 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 margin_top_85px margin_botm_40px">
						<div class="add_pic_outr col-md-12 col-sm-12 col-xs-12 margin_botm_20px">
							<div class="add_pic_inr text-center">
								<img class="user_image_src" src="/images/user_images/{{ $user_data->user_image ? $user_data->user_image: 'dummy_image.jpg' }}" alt>
								<div class="btn_on_img">
									<a href="javascript:void(0)" onclick="select_image()">
										<span class="glyphicon glyphicon-camera"></span>
									</a>
									<h4 class="file_input_name"></h4>
								</div>
								<input class="file_input_class" type="file" name="user_profile_image">
							</div>
							<div class="pic_desc">
								<span>Lorem Ipsum</span>		
							</div>
						</div>
						
						<div class="public_prf_outr col-md-12 col-sm-12 col-xs-12 padd_left_right_all_zero">
							<div class="public_prf_inr text-center">
								<h4 class="color_pink">Public Profile</h4>
								<div class="socio_values">
									<img src="{{ asset('assets/images/profile-on-fb.png') }}" alt="">
									<input type="text" name="facebook_link" placeholder="On Facebook" value="{{ $user_data->facebook_link }}" class="form-control">
								</div>
								<div class="socio_values">
									<img src="{{ asset('assets/images/profile-on-tw.png') }}" alt>
									<input type="text" name="twitter_link" placeholder="On Twitter" value="{{ $user_data->twitter_link }}" class="form-control">	
								</div>
								<div class="socio_values">
									<img src="{{ asset('assets/images/profile-on-link.png') }}" alt>
									<input type="text" name="linked_in_link" placeholder="On Linkedin" value="{{ $user_data->linked_in_link }}" class="form-control">
								</div>
							</div>
						</div>
					</div>

					<!-- Right side detail starts-->
					<div class="rgt_detail  col-md-6 col-sm-6 col-xs-10 margin_top_85px margin_botm_65px col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
						<div class="detail_form_outr">
							<div class="panel-body">
								<div class="form-group margin_top_30px">
									<div class="col-md-4 col-sm-5 col-xs-12 padd_left_zero detail_form_lbl">
										<label>Name :</label>
									</div>
		                            <div class="col-md-8 col-sm-7 col-xs-12 padd_right_zero pad_left">
		                                <input type="text" class="form-control" name="name" value="{{ $user_data->name }}" required autofocus>
		                            </div>
		                        </div>

		                        <div class="form-group margin_top_30px">
									<div class="col-md-4 col-sm-5 col-xs-12 padd_left_zero detail_form_lbl">
										<label>Profession :</label>
									</div>
		                            <div class="col-md-8 col-sm-7 col-xs-12 padd_right_zero pad_left">
		                                <input type="text" class="form-control" name="profession" value="{{ $user_data->profession }}" required >
		                            </div>
		                        </div>

		                        <div class="form-group margin_top_30px">
									<div class="col-md-4 col-sm-5 col-xs-12 padd_left_zero detail_form_lbl">
										<label>Languages :</label>
									</div>
		                            <div class="col-md-8 col-sm-7 col-xs-12 padd_right_zero pad_left">
		                                <input type="text" id="tags" class="form-control" name="languages" value="{{ implode(', ', $user_data->get_current_user_languages()) }}" required >
		                            </div>
		                        </div>

		                        <div class="form-group margin_top_30px">
									<div class="col-md-4 col-sm-5 col-xs-12 padd_left_zero  detail_form_lbl">
										<label>Address :</label>
									</div>
		                            <div class="col-md-8 col-sm-7 col-xs-12 padd_right_zero pad_left">
		                                <input type="text" class="form-control" name="address" value="{{ $user_data->address }}" required >
		                            </div>
		                        </div>

		                  {{--  <div class="form-group margin_top_30px">
									<div class="col-md-4 col-sm-5 col-xs-12 padd_left_zero  detail_form_lbl">
										<label>Expertise :</label>
									</div>
		                            <div class="col-md-7 col-sm-6 col-xs-11 expertise_align">
		                                <input type="text" class="form-control" name="expertise" value="" required >
		                            </div>
		                            <div class="col-md-1 col-sm-1 col-xs-1 add_btn_align">
		                                <button type="button" class="light_red_btn add_btn col-md-12">Add</button>
		                            </div>
		                        </div> --}}

		                        <div class="form-group margin_top_30px margin_botm_40px">
									<div class="col-md-4 col-sm-5 col-xs-12 padd_left_zero 
									detail_form_lbl">
										<label>About :</label>
									</div>
		                            <div class="col-md-8 col-sm-7 col-xs-12 padd_right_zero pad_left">
		                                <textarea rows="6" class="form-control" name="about" required >{{ $user_data->about }}</textarea>
		                            </div>
		                        </div>						
							</div>
						</div>
						<div class="form-group margin_top_40px ">
		                    <button type="submit" class="light_red_btn continue_btn ">Continue</button>
		               	</div>
		            </div>

				</form>
				 
			</div>
		</div>	
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$( function() {
		var availableTags = [
	      	"ActionScript",
	      	"AppleScript",
	      	"Asp",
	      	"BASIC",
	      	"C",
	      	"C++",
	      	"Clojure",
	      	"COBOL",
	      	"ColdFusion",
	      	"Erlang",
	      	"Fortran",
	      	"Groovy",
	      	"Haskell",
	      	"Java",
	      	"JavaScript",
	      	"Lisp",
	      	"Perl",
	      	"PHP",
	      	"Python",
	      	"Ruby",
	      	"Scala",
	      	"Scheme"
	    ];
		function split( val ) {
			return val.split( /,\s*/ );
		}
		function extractLast( term ) {
			return split( term ).pop();
		}
		$( "#tags" )
      	// don't navigate away from the field on tab when selecting an item
      	.on( "keydown", function( event ) {
      		if ( event.keyCode === $.ui.keyCode.TAB && $( this ).autocomplete( "instance" ).menu.active ) {
      			event.preventDefault();
		    }
		})
      	.autocomplete({
      		minLength: 0,
      		source: function( request, response ) {
      			send_ajax({
      				key : extractLast( request.term )
      			}, function (data) {
      				response(data);
      			});
      			// console.log($.ui.autocomplete.filter( availableTags, extractLast( request.term ) )); // original
          		// delegate back to autocomplete, but extract the last term
          		// response( $.ui.autocomplete.filter( availableTags, extractLast( request.term ) ) );
      		},
      		focus: function() {
          		// prevent value inserted on focus
          		return false;
      		},
      		select: function( event, ui ) {
	      		var terms = split( this.value );
	          	// remove the current input
	          	terms.pop();
	          	// add the selected item
	          	terms.push( ui.item.value );
	          	// add placeholder to get the comma-and-space at the end
	          	terms.push( "" );
	          	this.value = terms.join( ", " );
	          	return false;
	      	}
  		});
  	});

	function select_image() {
		$('.file_input_class').click()
	}

	$('.file_input_class').change(function(e) {
	  	$in = $(this).val();
	  	// $('.user_image_src').attr('src', $in);
	  	$in = $in.replace("C:\\fakepath\\", "");
	  	$('.file_input_name').html($in);
		console.log($in);
	});


</script>

@endsection

