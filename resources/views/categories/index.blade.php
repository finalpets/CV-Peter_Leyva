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
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>						
						<td>{{ $category->name }}</td>
						<td>
							<a href="{{ route('categories.edit',$category->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="{{ route('categories.delete',$category->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
							
						</td>	
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div><!-- End of col md-8 -->
		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'categories.store' , 'method' => 'POST']) !!}
				<h2>New Category</h2>
				{{ Form::label('name','Name:') }}
				{{ Form::text('name', null,['class' => 'form-control']) }}

				{{ Form::submit('Create New Category', ['class'=> 'btn btn-primary btn-block btn-h1-spacing']) }}
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