@extends("posts.layouts")

@section("content")

<div class="container p-5">
    <div class="card">
    	<div class="card-header">
    		<div class="row">
    			<h4 class="col-md-9 mt-1">
    				<strong> {{$post->title}} </strong>
    			</h4>
    			<div class="col-md-3 text-end">
    				<a href="{{ route('posts.index') }}" class="btn btn-success">Back</a>
    			</div>
    		</div>
    	</div>
    	<div class="card-body text-center">
            <p>{!! nl2br(e($post->body)) !!}</p>
    	</div>
    </div>
</div>

@endsection

