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
						<strong> Posts </strong>
					</h4>
					<div class="col-md-3 text-end">
						<a href="" class="btn btn-success">Create Post</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Body</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td>{{ $post->id }}</td>
								<td>{{ $post->title }}</td>
								<td>{{ $post->body }}</td>
							</tr>
						@endforeach
					</tbody>
						{{ $posts->links() }}
				</table>
			</div>
		</div>
	</div>
</body>
</html>
