@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-between my-4 align-items-center">
        <div class="col-6">
            <h1 class="">Add new post</h1>
        </div>
        <div class="col-6 text-end">
            <div>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-dark">Home</a>
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-4">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control"  value="{{ old('title') }}">
                </div>
                <div class="form-group mt-4">
                    <label class="control-label">Immagine di copertina:</label>
                    <input type="file" name="cover_image" id="cover_image" class="form-control @error('cover_image') is_invalid"@enderror  value="{{ old('cover_image') }}">
                </div>
                <div class="form-group mt-4">
                    <label for="content">Content:</label>
                    <input type="text" name="content" id="content" class="form-control"  value="{{ old('content') }}">
                </div>
                <div class="form-group mt-4">
                    <label for="slug">Slug:</label>
                    <input type="text" name="slug" id="slug" class="form-control"  value="{{ old('slug') }}">
                </div>
                <div class="form-group my-4 col-12 text-center">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection