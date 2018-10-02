@extends('layouts.app')

@section('content')
	<h1>POSTS</h1>
	@if(count($posts)>1)
		@foreach($posts as $post)
		<div class="container">
			<div class="well">
				<h3><a href="/app1/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
			</div>
		</div>
		@endforeach
	@else
		<p>no content</p>
	@endif
@endsection