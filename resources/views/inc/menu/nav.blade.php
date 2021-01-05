<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <!-- Branding Image -->
                <a class="navbar-brand nav-link active" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/post">Post</a>
            </li>
        </ul>

        <ul class="nav justify-content-end">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/post/create">Create Post</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button"
                        aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>
