@extends('master')
@section('title', 'View all tickets')
@section('content')

	<div class="container col-md-8 col-md-offset-2 mt-5">
		<div class="card">
			<div class="card-header border-success">
				<h5 class="float-left">Tickets</h5>
				<div class="clearfix"></div>
			</div>
			<div class="card-body mt-2">
				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif
				@if ($tickets->isEmpty())
					<p>There is no ticket.</p>
				@else
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
							<thead class="thead-light">
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($tickets as $ticket)
									<tr>
										<td>{{ $ticket->id }}</td>
										<td>
											<a href="{{ action('TicketsController@show', $ticket->slug) }}">{{ $ticket->title }}</a>
										</td>
										<td>{{ $ticket->status ? 'Pending' : 'Answered' }}</td>
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