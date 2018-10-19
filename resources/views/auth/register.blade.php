@extends('master')
@section('name', 'Register')

@section('content')
	<div class="container col-md-6 col-md-offset-3">
		<div class="card mt-5">
			<div class="card-header border-success">
				<h5 class="float-left">Register an account</h5>
				<div class="clearfix"></div>
			</div>
			<div class="card-body">
				<form method="post">
					@foreach ($errors->all() as $error)
						<p class="alert alert-danger">{{ $error }}</p>
					@endforeach

					{{ csrf_field() }}
					<div class="form-group">
						<label for="name" class="col-lg-12 control-label">Name</label>
						<div class="col-lg-12">
							<input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-lg-12 control-label">Email</label>
						<div class="col-lg-12">
							<input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-lg-12 control-label">Password</label>
						<div class="col-lg-12">
							<input class="form-control" type="password" name="password" id="password">
						</div>
					</div>
					<div class="form-group">
						<label for="password_confirmation" class="col-lg-12 control-label">Confirm</label>
						<div class="col-lg-12">
							<input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="reset" class="btn btn-default btn-raised">Cancel</button>
							<button type="submit" class="btn btn-primary btn-raised">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection