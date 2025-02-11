@extends("posts.layouts")

@section("content")

<div class="card">
	<div class="card-header">
		<div class="row">
			<h4 class="col-md-9 mt-1">
				<strong> Posts </strong>
			</h4>
			<div class="col-md-3 text-end">
				<a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		@session("success")
			<div class="alert alert-success"> {{ $value }} </div>
		@endsession
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Body</th>
					<th width="250px">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>{{ $post->id }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->body }}</td>
						<td>
							<form method="POST",
								action="{{ route('posts.destroy', $post->id) }}"
								onsubmit="return confirm('Are you sure you want to delete?')">
								@csrf
								@method('DELETE')

								<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-info">Edit</a>
								<button type="submit" class="btn btn-outline-danger">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $posts->links('pagination::bootstrap-4') }}
	</div>
</div>

@endsection
