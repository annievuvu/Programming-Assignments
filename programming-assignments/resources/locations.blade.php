<html>
	<body>
		@foreach($location as $locate)
		<p>{{ $locate->value }}</p>
		<ol>
			@foreach($location->stories as $story)
			<li>{{$story->title}}</li>
			@endforeach
		@endforeach
	</body>
</html>