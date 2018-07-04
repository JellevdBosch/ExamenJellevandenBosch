<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        @guest
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{!! action('PostController@index') !!}" class="nav-link">Posts</a>
            </li>
        @else
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{!! action('PostController@index') !!}" class="nav-link">Posts</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{!! action('PostController@new') !!}" class="nav-link">New Post</a>
            </li>
            @if(\Auth::user()->admin == 1)
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/admin')  }}" class="nav-link">Dashboard</a>
                </li>
            @endif
        @endguest
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('register') }}" class="nav-link">
                    <p style="margin-bottom: 0">Register</p>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('login') }}" class="nav-link">
                    <p style="margin-bottom: 0">Login</p>
                </a>
            </li>
        @else
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('logout') }}" class="nav-link">
                    <p style="margin-bottom: 0">Logout</p>
                </a>
            </li>
        @endguest
    </ul>
</nav>
<!-- /.navbar -->