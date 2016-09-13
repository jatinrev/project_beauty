<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BRC : Home</title>
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" type="text/css" />
    <script type="text/javascript" src="{{ asset('assets/bower_components/jquery/dist/jquery.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/angular/angular.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/angular-bootstrap/ui-bootstrap.js') }}"></script>

    <!--fancybox main JS and Css files -->
	<script type="text/javascript" src="{{ asset('js/jquery.fancybox.js?v=2.1.5') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css?v=2.1.5') }}" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			/* Simple image gallery. Uses default settings*/
			$('.fancybox').fancybox();
		});
	</script>

</head>
<body>