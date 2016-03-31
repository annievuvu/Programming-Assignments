
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		rel="stylesheet" integrity="sha384-
		1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
	<!-- Your code goes here -->
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/story/store') }}">
			{{ csrf_field() }}
			<div class="form-group">
		        <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Location</label>
		        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<select name="location_id">
						@foreach ($locations as $location)
							<option value="{{ $location->id }}">{{ $location->value }}</option>
						@endforeach
					</select>
				</div>
			</div>
		    <div class="form-group">
		        <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Title</label>
		        <!-- <br/> -->
		        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 dropdown">
		            <input type="text" class="form-control" name="title" value="{{ old('title') }}"> 
		        </div>
		    </div>
		    <div class="form-group">
		        <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Story</label>
		        <!-- <br/> -->
		        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 dropdown">
		            <input type="text" class="form-control" name="story" value="{{ old('story') }}"> 
		        </div>
		    </div>
		    <div class="form-group">
		        <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Published?</label>
		            <!-- <br/> -->
		            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 radio">
		                <label>
		                    <input type="radio" name="published" id="optionsRadio1" value="1">
		                    Yes
		                </label>
		            </div>
		            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 radio">
		                <label>
		                    <input type="radio" name="published" id="optionsRadio2" value="0" checked>
		                    No
		                </label>
		            </div>
		    </div>
		    <div class="form-group">
		        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
		            <button type="submit" name='commit' class="btn btn-primary btn-block">
		                <i class="fa fa-btn fa-sign-in"></i>Submit
		            </button>

		        </div>
		    </div>
		</form>
	<!-- Your code goes here -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
	crossorigin="anonymous"></script>
	</body>
</html>