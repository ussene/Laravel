@extends('master')
@section('name', 'Login')

@section('content')

	<div class="container col-md-6 col-md-offset-3">
		<div class="card mt-5">
			<div class="card-header border-success">
				<h5 class="float-left">Login</h5>
				<div class="clearfix"></div>
			</div>

			<div class="card-body">
				<form class="form-horizontal" method="post">
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{ $error }}</p>
					@endforeach

					{{ csrf_field() }}

					<div class="form-group">
						<label for="email" class="col-lg-12 control-label">Email</label>
						<div class="col-lg-12">
							<input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-lg-12 control-label">Password</label>
						<div class="col-lg-12">
							<input class="form-control" type="password" name="password" id="password">
						</div>
					</div>

					<div class="form-group">
						<label>
							<input type="checkbox" name="remember"> Remember Me?
						</label>
					</div>

					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="submit" class="btn btn-primary btn-raised">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection