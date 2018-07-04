@extends('layout/dashboard')
@section('title', 'Dashboard')

@section('content')
    <div class="wrapper">

    @include('includes/dashboard/nav')

    @include('includes/dashboard/sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Post</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">
                                    <a href="{{ url("/admin") }}">Dashboard</a>
                                    /
                                    <a href="{{ url("/admin/posts") }}">Posts</a>
                                </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row justify-content-left">
                        <div class="col-lg-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Post</h3>
                                </div>
                                <!-- form start -->
                                <form role="form" action="{{ url('admin/post/edit/'.$post->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="post_title">Post Title</label>
                                            <input name="post_title" type="text" class="form-control" id="post_title" placeholder="Enter Title" value="{{ $post->titel }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_content">Post Content</label>
                                            <textarea class="form-control" id="post_content" name="post_content" placeholder="Enter Content">{{ $post->content }}</textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Jelle
            </div>
            <!-- Default to the left -->
            <strong>:)</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- AdminLTE App -->
    <script src="{{asset('js/dashboard/dashboard.js')}}"></script>
@endsection
