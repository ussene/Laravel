@extends('master')
@section('title', 'Create A New Category')

@section('content')

	<div class="container col-md-10 col-md-offset-2">
		<div class="card mt-5">
			<div class="card-header border-success">
				<h5 class="float-left">Create a new category</h5>
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
							<input class="form-control" type="text" name="name" id="name" placeholder="Name">
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