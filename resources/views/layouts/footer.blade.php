
	<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!--fancybox main JS and Css files -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.js?v=2.1.5') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/* Simple image gallery. Uses default settings*/
			$('.fancybox').fancybox();
		});
	</script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/angular/angular.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>


    <script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/product_index.js') }}"></script>
    <script src="{{asset('assets/js/jquery.scrollbox.js') }}" type="text/javascript"></script>
    
	@yield('script')

</body>
</html>