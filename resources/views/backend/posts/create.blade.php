@extends('master')
@section('title', 'Create A New Post')

@section('content')
	
	<div class="container col-md-10 col-md-offset-2">
		<div class="card mt-5">
			<div class="card-header border-success">
				<h5 class="float-left">Create a new post</h5>
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
						<label for="title" class="col-lg-12 control-label">Title</label>
						<div class="col-lg-12">
							<input class="form-control" type="text" name="title" id="title" placeholder="Title">
						</div>
					</div>

					<div class="form-group">
						<label for="content" class="col-lg-12 control-label">Content</label>
						<div class="col-lg-12">
							<textarea class="form-control" rows="3" id="content" name="content"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="categories" class="col-lg-12 control-label">Categories</label>
						<div class="col-lg-12">
							<select class="form-control" id="category" name="categories[]" multiple="">
								@foreach($categories as $category)
									<option value="{{ $category->id }}">
										{{ $category->name }}
									</option>
								@endforeach
							</select>
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