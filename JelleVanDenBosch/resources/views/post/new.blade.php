@extends('layout.app')

@section('title', 'New Post')

@section('content')
    <div class="wrapper">

    @include('includes/header')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">New Post</h3>
                                </div>
                                <!-- form start -->
                                <form role="form" action="{{ url('post/new') }}" method="POST"
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
                                            <input name="post_title" type="text" class="form-control" id="post_title" placeholder="Enter Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_content">Post Content</label>
                                            <textarea class="form-control" id="post_content" name="post_content" placeholder="Enter Content"></textarea>
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
                </div>
            </div>
        </div>
    </div>
@endsection