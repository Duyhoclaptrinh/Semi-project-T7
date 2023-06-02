@extends('layout-auth')
@section('title', 'Đăng nhập')
@section('content')

<section id="login" class="contact">


	<div class="row" style="justify-content: center;">

		<div class="col-lg-6">
			<div class="container">

				<div class="section-title">
					<h2>Login</h2>
				</div>

				@if (session('message'))
				<span class="aler alert-danger">
					<strong>{{session('message')}}</strong>
				</span>
				@endif
				<form action="{{route('auth.login')}}" method="post" role="form">
					@csrf
					<div class="php-email-form">
						<div class="col-lg-12 col-md-12">
							<div class="col form-group">
								<input type="email" name="email" placeholder="Email" required="" class="form-control">
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="form-group">
								<input type="password" name="password" placeholder="Password" required="" class="form-control">
							</div>
						</div>
						<div class="text-center">don't have an account? <a href="{{route('welcome.register')}}">sign up</a></div>
						<div class="text-center">
							<button type="submit">login</button>
						</div>
					</div>
				</form>
			</div>

		</div>

	</div>
</section><!-- End Contact Section -->
@endsection
