<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Skid Row Denim Acadamy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="{{ url('assets/js/ie/html5shiv.js') }}"></script><![endif]-->
		<link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="{{ url('assets/css/ie9.css') }}" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="{{ url('assets/css/ie8.css') }}" /><![endif]-->

		@yield('styles')
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<header id="header" class="alt style2">
					<a href="{{ url('/') }}" class="logo"><strong>SKID ROW</strong> <span>DENIM ACADEMY</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				@include('partials.menu')

			    @yield('banner')

				<!-- Main -->
				@yield('main_content')

				<!-- Contact -->
				@include('partials.contact_form')

				<!-- Footer -->
				@include('partials.footer')

			</div>

			<!-- Scripts -->
			<script src="{{ url('assets/js/jquery.min.js') }}"></script>
			<script src="{{ url('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ url('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ url('assets/js/skel.min.js') }}"></script>
			<script src="{{ url('assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="{{ url('assets/js/ie/respond.min.js') }}"></script><![endif]-->
			<script src="{{ url('assets/js/main.js') }}"></script>

	@yield('scripts')
	</body>
</html>
