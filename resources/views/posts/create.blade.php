<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel 11 CRUD Application</title>

	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
		crossorigin="anonymous">

</head>

<body>
	<div class="container pt-5">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<h4 class="col-md-9 mt-1">
						<strong> Create Post </strong>
					</h4>
					<div class="col-md-3 text-end">
						<a href="{{ route('posts.index') }}" class="btn btn-success">Back</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<form method="POST", action= {{ route('posts.store') }}>
					@csrf
					
					<div class="mt-2">
						<label class="form-label">Title:</label>
						<input type ="text" name="title" class="form-control">

						@error('title')
							<div class="text-danger">{{ $message }} </div>
						@enderror
					</div>
					<div class="mt-2">
						<label class="form-label">Body:</label>
						<textarea name="body" class="form-control"></textarea>

						@error('body')
							<div class="text-danger">{{ $message }} </div>
						@enderror
					</div>
					<div class="mt-4">
						<button class="btn btn-success">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
