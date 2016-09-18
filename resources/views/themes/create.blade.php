@extends('layout.master')

@section('title', '| Create Theme')

@section('content')
<div class="container">

	<div class="row">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<div class="col-md-8 col-md-offset-2">
		<h1 align="center">Create New Theme</h1>
			{!! Form::open(array('route' => 'themes.store', 'files' => true)) !!}	
				{{ Form::label('title', "Title:") }}
				{{ Form::text('title', null ,['class' => 'form-control']) }}

				{{ Form::label('featured_image','Upload Featured Image:') }}
				{{ Form::file('featured_image') }}	

				{{ Form::label('category_id','Category:') }}
				<select class="form-control" name="category_id">
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>					
					@endforeach
				</select>

				{{ Form::label('desc', "description:") }}
				{{ Form::text('desc', null ,['class' => 'form-control']) }}				

				{{ Form::label('body', "Body:") }}			
				{{ Form::textarea('body',null , ['class' => 'form-control']) }}

				{{ Form::label('link', "Link To Site:") }}
				{{ Form::text('link', 'http://' ,['class' => 'form-control']) }}		
				<div class="row">
					<div class="col-sm-6">
						<a href="{{ route('/') }}" class="btn btn-danger btn-block">Cancel</a>
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Create', ['class' => 'btn btn-success btn-block']) }}					
					</div>
					
				</div>				
			{!! Form::close() !!}			
		</div>			
	</div>
</div>
@section('footer')		
	<footer id="footer">
		@include('partials._footer')	
	</footer>
@endsection
	

@endsection