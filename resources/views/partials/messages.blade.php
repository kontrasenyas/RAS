@if(Session::has('success'))
	<div class="alert alert-success text-center">
		<strong>Success!</strong> {{ Session::get('success') }}
	</div>
@endif