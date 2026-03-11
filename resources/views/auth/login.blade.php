@extends("posts.layouts")

@section("content")

<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <h2 class="text-center">Login</h2>
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

        <button type="submit" class="text-center btn btn-primary w-100 mt-4">Login</button>
    </form>

    <div class="mt-3 text-center">
        <p>Don't have an account? <a href="/register" class="link-primary">Register</a></p>
    </div>
</div>

@endsection
