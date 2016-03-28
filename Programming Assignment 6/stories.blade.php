<html>
	<body>
		@foreach($stories as $story)
		<p>Title: {{ $story->title }}</p>
		<p>Content: {{$story->story}}</p>
		<p> Tags: </p>
		<ol>
			@foreach($story->tags as $tag)
			<li>{{$tag->value}} </li>
			@endforeach
		</ol>
		@endforeach
	</body>
</html>