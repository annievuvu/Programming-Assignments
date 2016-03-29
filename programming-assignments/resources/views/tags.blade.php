<html>
	<body>
		@foreach($tag as $thing)
		<p>{{ $thing->value }}</p>
		@endforeach
	</body>
</html>