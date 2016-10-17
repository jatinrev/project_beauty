@extends('layouts.cms_master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages-css/faq.css') }}">
@endsection

@section('content')
<div id="faq_tab_outr">
  <div id="faq_tab_inr">
      <div class="dash_headingfaq col-md-12 col-sm-12 col-xs-12 padd_top_20px padd_botm_30px padd_botm_55px padd_top_35px faq_bg">
        <h3 class="">Frequently Asked Questions</h3>
        	<form class="search_btn_form" >
		        <div class="form-group col-md-5 col-md-offset-3 col-sm-12 col-xs-12 padd_left_right_all_zero">
		           <input type="text" class="form-control search_box" id="search" placeholder="Search Questions">
		        </div>
		        <button type="submit" class="srch_bttn pink_btn col-md-2 col-sm-12 col-xs-12 ">Search</button>
		    </form>    
      </div>
  </div>
</div>
<div class="faq_tab_outr">
    <div class="faq_tab_inr">
        <div class="faq_tab_cont ">

	<div class="panel-group col-md-12 col-sm-12 col-xs-12" id="accordion" role="tablist" aria-multiselectable="true">

		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<i class="more-less glyphicon glyphicon-plus"></i>
						Dummy text of  the printing and typesetting
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingTwo">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<i class="more-less glyphicon glyphicon-plus"></i>
						Dummy text of  the printing and typesetting
					</a>
				</h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingThree">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<i class="more-less glyphicon glyphicon-plus"></i>
						Dummy text of  the printing and typesetting
					</a>
				</h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				<div class="panel-body">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>

	</div><!-- panel-group -->

		</div>
    </div>
<div class="cntct_us_outr">
    <div class="cntct_us_inr">
        <div class="cntct_us_cont">          
            <div class="col-md-12 col-sm-12 col-xs-12 need_help_submit ">
               <span>Need More Help?</span><br>
               <button type="Contact Us" class="pink_btn contact_bttn ">Contact Us</button>           	
            </div>  
        </div>
    </div>
</div>        
@section('script')
<script type="text/javascript">
$(document).ready( function(){
	function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
});


</script>
@endsection
@endsection
