@extends('layout.app')

@section('title', 'All Posts')
<style>
    .all-posts {
        height: 1000px;
        max-height: 1000px;
        overflow-y: scroll;
    }
</style>
@section('content')
    <div class="wrapper">
        @include('includes/header')
        @if(Session::has('success'))
            <div class="container">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            </div>
    @endif
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <h2>All posts</h2>
                            <div class="all-posts">
                                @guest
                                    @foreach ($posts as $post)
                                        <div class="card card-body">
                                            <h3>{{ $post->titel }}</h3>
                                            <p>{{ $post->content }}</p>
                                            <small>{{ $post->author }}</small>
                                        </div>
                                    @endforeach
                                @else
                                    @foreach ($posts as $post)
                                        @if(\Auth::user()->username == $post->author)
                                            <div class="card card-body">
                                                <h3>{{ $post->titel }}</h3>
                                                <p>{{ $post->content }}</p>
                                                <small>{{ $post->author }}</small>
                                                @if($post->updated_at != $post->created_at)
                                                    {{ $post->updated_at }}
                                                @else
                                                    {{ $post->created_at }}
                                                @endif
                                                <div class="pull-right">
                                                    <small><a href="{{ url('post/edit/'.$post->id) }}">Edit</a></small>
                                                    <small><a href="{{ url('post/delete/'.$post->id) }}">Delete</a></small>
                                                </div>
                                            </div>
                                        @else
                                            <div class="card card-body">
                                                <h3>{{ $post->titel }}</h3>
                                                <p>{{ $post->content }}</p>
                                                <small>{{ $post->author }}</small>
                                                @if($post->updated_at != $post->created_at)
                                                    {{ $post->updated_at }}
                                                @else
                                                    {{ $post->created_at }}
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection