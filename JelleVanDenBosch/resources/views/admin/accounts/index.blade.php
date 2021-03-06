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
                            <h1 class="m-0 text-dark">Normal Posts</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">
                                    <a href="{{ url("/admin") }}">Dashboard</a>
                                     /
                                    <a href="{{ url("/admin/accounts") }}">Accounts</a>
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
                    <div class="row">
                        @foreach ($accounts as $account)
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $account->username }}</h5>

                                        <div class="card-footer">
                                            <small class="card-info"><b>id:</b> {{ $account->id }}</small><br>
                                            <small class="card-info"><b>email:</b> {{ $account->email }}</small><br>
                                            <small class="card-info"><b>admin:</b> {{ $account->admin }}</small><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
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
