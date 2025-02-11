@extends("posts.layouts")

@section("content")

<div class="card">
	<div class="card-header">
		<div class="row">
			<h4 class="col-md-9 mt-1">
				<strong> Edit Post </strong>
			</h4>
			<div class="col-md-3 text-end">
				<a href="{{ route('posts.index') }}" class="btn btn-success">Back</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<form method="POST", action= {{ route('posts.update', $post->id) }}>
			@csrf
			@method('PUT')
		
			<div class="mt-2">
				<label class="form-label">Title:</label>
				<input type ="text" name="title" class="form-control", value={{ $post->title }}>

				@error('title')
					<div class="text-danger">{{ $message }} </div>
				@enderror
			</div>
			<div class="mt-2">
				<label class="form-label">Body:</label>
				<textarea name="body" class="form-control">{{ $post->body }}</textarea>

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

@endsection
