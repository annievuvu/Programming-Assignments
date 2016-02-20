<html>
	<body>
		@foreach($story as $tale)
		<p>{{ $tale->title }}</p>
		<p>{{ $tale->story }}</p>
		<p>{{ $tale->published }}</p>
		@endforeach
	</body>
</html>
