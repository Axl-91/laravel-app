<header>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">Navbar</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ms-auto">
                    @if (auth()->check())
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <button
                            type="button"
                            class="btn btn-primary border"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </button>
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
