@if (Session::has('success'))

	<div class="message">
	     Det lyckades. {{ session::get('success') }}
	</div>

@endif
