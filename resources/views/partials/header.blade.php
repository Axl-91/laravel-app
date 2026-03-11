<header>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">Navbar</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ms-auto">
                    @if (auth()->check())
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button
                                type="submit"
                                class="btn btn-primary border">
                                Logout
                            </button>
                        </form>
                    @else
                        <a
                            type="button"
                            class="btn btn-primary border"
                            href="/login">
                            Login
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
