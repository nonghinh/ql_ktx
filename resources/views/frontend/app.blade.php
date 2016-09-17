<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ký túc xá CNTT va TT | @yield('title')</title>
	<link rel="stylesheet" href="{!! url('public/assets/css/bootstrap.min.css')!!}">
	<link rel="stylesheet" href="{!! url('public/assets/css/font-awesome.min.css')!!}">
	<link rel="stylesheet" href="{!! url('public/assets/css/font-roboto.css')!!}">
	<link rel="stylesheet" href="{!! url('public/assets/css/main.css')!!}">
</head>
<body>
	<div id="wrapper">
		@include('frontend.blocks.header')
		<div class="wrapper-content">
			<div class="container">
				@yield('content')
			</div>
		</div>
		@include('frontend.blocks.footer')
	</div>
	<script type="text/javascript" src="{!! url('public/assets/js/jquery-1.12.0.min.js') !!}"></script>
	<script type="text/javascript" src="{!! url('public/assets/js/bootstrap.min.js') !!}"></script>
	<script type="text/javascript" src="{!! url('public/assets/js/main.js') !!}"></script>
</body>
</html>