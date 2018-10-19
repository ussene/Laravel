@extends('master')
@section('name', 'Edit a user')
@section('content')

	<div class="container col-md-6 col-md-offset-3">
		<div class="card mt-5">
			<div class="card-header border-success">
				<h5 class="float-left">Edit user</h5>
				<div class="clearfix"></div>
			</div>
			<div class="card-body mt-2">
				<form method="post">
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{ $error }}</p>
					@endforeach

					@if(session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					{{ csrf_field() }}

					<div class="form-group">
						<label for="name" class="col-lg-12 control-label">Name</label>
						<div class="col-lg-12">
							<input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ $user->name }}">
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-lg-12 control-label">Email</label>
						<div class="col-lg-12">
							<input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{ $user->email }}">
						</div>
					</div>

					<div class="form-group">
						<label for="select" class="col-lg-12 control-label">Role</label>
						<div class="col-lg-12">
							<select class="form-control" id="role" name="role[]" multiple>
								@foreach($roles as $role)
									<option value="{{ $role->name }}" @if(in_array($role->name, $selectedRoles)) selected="selected" @endif>{{ $role->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-lg-12 control-label">Password</label>
						<div class="col-lg-12">
							<input class="form-control" type="password" name="password" id="password">
						</div>
					</div>

					<div class="form-group">
						<label for="password_confirmation" class="col-lg-12 control-label">Confirm password</label>
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