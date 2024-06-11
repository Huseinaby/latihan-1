@extends('dashboard.layouts.main')
@section('container')
    
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

            <h2 class="mb-4">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success">Back to My Posts</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>

            <img src="/img/niji.jpeg" class="img-fluid mt-3" alt="" style="width: 100%">
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
