<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{!! action('PostController@index') !!}" class="nav-link">Posts</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{!! action('PostController@new') !!}" class="nav-link">New Post</a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
                <p style="margin-bottom: 0">Logout</p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->