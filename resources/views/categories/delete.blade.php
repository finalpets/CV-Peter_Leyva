@extends('layout.master')

@section('title', '| Create Theme')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-8 col-md-offset-2">
			<h1>DELETE THIS CATEGORY?</h1>
			<p>
				<strong>Name:</strong>{{ $category->name }}<br>
			</p>

			{{ Form::open(['route' => ['categories.destroy',$category->id], 'method' => 'DELETE']) }}

				{{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-danger btn-block btn-lg']) }}

			{{ Form::close() }}

			
		</div>
		
	</div>
</div>
@section('footer')		
	<footer id="footer">
		@include('partials._footer')	
	</footer>
@endsection
	

@endsection