<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cats Database!</title>
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
<!-- Display Login/Logout link -->
				<div class="text-right">
					@if(Auth::check())
						Logged in as
						<strong>{{{auth::user()->username}}}</strong>
						{{link_to('logout', 'Log Out')}}
					@else
						{{link_to('login', 'Log In')}}
					@endif
				</div>
				<div class="text-right">
					{{link_to('login', 'Log In')}}				
				</div>
				@yield('header')
			</div>
<!-- Display success messages -->
			@if(Session::has('message'))
				<div class="alert alert-success">
					{{Session::get('message')}}
				</div>
			@endif
<!--Display error messages-->
			@if(Session::has('error'))
				<div class="alert alert-warning">
					{{Session::get('error')}}
				</div>
			@endif
<!-- Display Main Content -->
			@yield('content')
		</div>
	</body>
</html>