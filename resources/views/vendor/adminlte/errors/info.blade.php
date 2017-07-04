
@if(Session::has('info'))
	<div id="smssession" class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<ul>
			{{ Session::get('info') }}
		</ul>
	</div>
@endif



@if(Session::has('success'))
	<div id="smssession" class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<ul>
			{{ Session::get('success') }}
		</ul>
	</div>
@endif