@extends('layouts.cms_master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages-css/contact_us.css') }}">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

@endsection
@section('content')
<div id="contact_us_outr">
  <div id="contact_us_inr">
      <div class="dash_heading col-md-12 col-sm-12 col-xs-12 padd_top_20px padd_botm_30px padd_botm_55px padd_top_35px">
        <h3 class="">Contact Us</h3>
        <span>lorem ipsum is simply dummy text of the printing and typesetting</span>
      </div>
  </div>
</div>
<div class="contact_us_outr">
    <div class="contact_us_inr">
        <div class="contact_us_cont">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-sm-4 col-xs-12 contact_reach_us_part">
                	<h3>REACH US</h3>
                	<p>Richard McClintock,</p>
                	<p>Hampden-Sydney College,</p>
                	<p>Virginia</p>
                	<div class="col-md-12 phone_heading">
                	<h2>PHONE</h2>
                	<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                	<span>0123 45 67 89</span>
                    </div>
                    <div class="col-md-12 envelope_heading">
                	<h2>EMAIL</h2>
                	<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                	<a href="">mail@brd.com</a>
                    </div>
                    <div class="col-md-12 follow_us_heading">
                	<h2>FOLLOW US</h2>
                	<a href="#"><img src="/assets/images/profile-on-fb.png"></a>
                	<a href="#"><img src="/assets/images/profile-on-tw.png"></a>
                	<a href="#"><img src="/assets/images/profile-on-link.png"></a>
                    </div>

                </div>

                <div class="col-md-7 col-sm-7 col-xs-12 contact_drop_us_part pull-right">
                     <h3>DROP US LINE</h3>
                     <form>
					 <div class="form-group">
					    <input type="text" class="form-control" id="name"  placeholder="Name">
					 </div>
					 <div class="form-group">
					 <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email">
					 </div>
					 <div class="form-group">
					    <input type="text" class="form-control" id="phone" placeholder="Phone number">
					 </div>
					 <div class="form-group text_area">
					    <textarea class="form-control" id="Textarea" rows="6" placeholder="Your message"></textarea>
					 </div>
					  <button type="submit" class="pink_btn">Send</button>
					 </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map_outr contact_map">

        
           <div class="col-md-12 col-sm-12 col-xs-12 contact_map padd_left_right_all_zero">
           	    <img src="assets/images/contact-map.jpg">
           </div>
        

</div>
	<!-- <div class="container">
		<h1>CONTACT US</h1>
		<div class="col-md-offset-3 col-md-6">
			<form action="" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="email">Email</label>
	                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
	                </div>
	                <div class="form-group">
	                	<label for="query">Query</label>
	                	<textarea name="query" id="query" class="form-control" required></textarea>
	                </div>
	                <button type="submit" class="btn btn-primary block full-width m-b">Submit</button>
			</form>
		</div>
	</div> -->
@endsection