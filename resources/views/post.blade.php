@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h2 class="mb-4">{{ $post->title }}</h2>
                <p>By <a href="/posts?user={{ $post->user->username }}">{{ $post->user->name }}</a>
                    In <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="/img/niji.jpeg" alt="" style="width: 100%">
                <article class="my-3">
                    {!! $post->body !!}
                </article>
                <br>
                <a href="/blog" class="mb-3">Back to Blog</a>
                <br><br>
            </div>
        </div>
    </div>
@endsection
