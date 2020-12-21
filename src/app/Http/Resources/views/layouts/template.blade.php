<!DOCTYPE html>
<html>
	@include('layouts.head')
		<body class="hold-transition skin-blue sidebar-mini">
			<div class="wrapper">
				@include('layouts.top')
				<aside class="main-sidebar">
					@include('layouts.aside.left')
				</aside>
				<div class="content-wrapper">
					<section class="content-header">
				<div>
			</div>
					@yield('bread')
					</section>
					<section class="content container-fluid">
						@yield('content')
						@include('sweet::alert')
					</section>
				</div>
				<footer class="main-footer">
				@if(Request::is('Dashboard')=='active')
					<marquee>
				<strong> <!-- Copyright &copy; 2019 --> {{config('app.app_name')}} </strong> | {{config('app.address')}} <i class="fa fa-map-marker" aria-hidden="true"></i> | {{config('app.phone')}} <i class="fa fa-phone-square" aria-hidden="true"></i>
				</marquee>
				@else
				<strong> <!-- Copyright &copy; 2019 --> {{config('app.app_name')}} </strong> | {{config('app.address')}} <i class="fa fa-map-marker" aria-hidden="true"></i> | {{config('app.phone')}} <i class="fa fa-phone-square" aria-hidden="true"></i>
				@endif

				</footer>
				@include('layouts.right')

			</div>
			@include('layouts.foot')@stack('scripts')

			@stack('scripts')

		</body>
</html>