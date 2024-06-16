@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new post</h1>
    </div>
    <div class="col-lg-8">

        <form method="post" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Create post</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('input', function() {
                let titleValue = title.value;
                let slugValue = titleValue.toLowerCase().trim().replace(/[^a-z0-9]+/g, '-').replace(
                    /^-+|-+$/g, '');
                slug.value = slugValue;
            });
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
@endsection
