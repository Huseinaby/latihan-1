@extends('dashboard.layouts.main')
@section('container')
    
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

            <h2 class="mb-4">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success">Back to My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle">Hapus</span></button>
              </form>

            <img src="/img/niji.jpeg" class="img-fluid mt-3" alt="" style="width: 100%">
            <article class="my-3">
                {!! $post->body !!}
            </article>
            <br>
            <a href="/dashboard/posts" class="mb-3">Back to Blog</a>
            <br><br>
        </div>
    </div>
</div>

@endsection
