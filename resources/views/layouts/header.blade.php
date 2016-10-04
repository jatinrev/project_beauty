<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BRC : Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css?v=2.1.5') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jquery-ui-1.12.1.custom/jquery-ui.css') }}" />
    <link href="{{ asset('assets/css/jquery.scrollbox.css') }}" media="screen" rel="stylesheet" type="text/css" />
    
	<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
	<script src="{{ asset('js/common_js.js') }}"></script>
    @yield('css')
</head>
<body>