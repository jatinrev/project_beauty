	
	<script type="text/javascript" src="{{ asset('assets/bower_components/jquery/dist/jquery.js') }}"></script>
    <!--fancybox main JS and Css files -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.js?v=2.1.5') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/* Simple image gallery. Uses default settings*/
			$('.fancybox').fancybox();
		});
	</script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/angular/angular.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
	@yield('script')

</body>
</html>