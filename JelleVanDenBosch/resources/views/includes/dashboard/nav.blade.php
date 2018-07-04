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

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="{{ url('post/new') }}" method="POST"
          enctype="multipart/form-data">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                </button>
            </div>
        </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <p style="margin-bottom: 0">Logout</p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->