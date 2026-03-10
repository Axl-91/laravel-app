@extends("posts.layouts")

@section("content")

<div class="d-flex justify-content-center align-items-center vh-100 border">
    <div class="card text-white bg-dark shadow h-75 w-25">
            <h2 class="card-title text-center p-5">Login</h2>
        <div class="card-body d-flex flex-column">
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group pb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <button type="submit" class="text-center btn btn-primary btn-block mt-4">Login</button>

            </form>
        </div>
    </div>
</div>

@endsection
