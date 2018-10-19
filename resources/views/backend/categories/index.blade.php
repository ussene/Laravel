@extends('master')
@section('title', 'All categories')
@section('content')

	<div class="container col-md-10 col-md-offset-2">
		<div class="card mt-5">
			<div class="card-header border-success">
				<h5 class="float-left">All categories</h5>
				<div class="clearfix"></div>
			</div>
			<div class="card-body">
				@if(session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

				@if($categories->isEmpty())
					<p>There is no category</p>
				@else
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
							<tbody>
								@foreach($categories as $category)
									<tr>
										<td>{{ $category->name }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				@endif
			</div>
		</div>
	</div>

@endsection