@if (Session::has('success'))

<div class="alert alert-success alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	<strong>{{ Session::get('success') }}</strong>

</div>

@endif


@if (Session::has('error'))

<div class="alert alert-danger alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	<strong>{{ Session::get('error') }}</strong>

</div>

@endif


@if (Session::get('warning'))

<div class="alert alert-warning alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	<strong>{{ Session::get('warnning') }}</strong>

</div>

@endif


@if (Session::get('info'))

<div class="alert alert-info alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	<strong>{{ Session::get('info') }}</strong>

</div>

@endif


@if (count($errors)>0)

<div class="alert alert-danger">

	<button type="button" class="close" data-dismiss="alert">×</button>	
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>

@endif