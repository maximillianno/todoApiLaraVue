<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">Friends</a></li>

                </ul>
                {{-- Search --}}
                <form action="#" class="row navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="query" placeholder="Find people">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>

                </form>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav navbar-right ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li><a href="#">Maxus</a></li>
                        <li><a href="#">Update profile</a></li>
                        <li><a href="#">Sign out</a></li>
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Sign up</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>