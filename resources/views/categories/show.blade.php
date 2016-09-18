@extends('layout.master')

@section('title', '| Create Theme')

@section('content')
<div class="container">

<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Tags</th>
						</tr>

				</thead>
				<tbody>
					@foreach($tag->posts as $post)
					<tr>
						<th>{{ $post->id }}</th>
						<th>{{ $post->title }}</th>
						<td>
						@foreach ($post->tags as $tag)
						<span class="label label-default">{{ $tag->name }}</span>
						@endforeach
						</td>
						<td><a href="{{ route('posts.show',$post->id) }}" class="btn btn-default btn-xs">View</a></td>
					</tr>
					@endforeach
					
				</tbody>
				
			</table>
			
		</div>
		
	</div>






</div>
@section('footer')		
	<footer id="footer">
		@include('partials._footer')	
	</footer>
@endsection
	

@endsection