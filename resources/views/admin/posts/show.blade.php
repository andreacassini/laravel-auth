@extends('layouts.admin')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ Route('admin.posts.index') }}" class="btn btn-dark">Home</a>
            </div>
            <div class="col-12 my-5">
                <div class="card">
                    <!-- Card Header -->
                    <div class="card-header d-flex justify-content-center align-items-center text-center">
                        <!-- Title -->
                        <h2 class="fs-4 fw-bold py-2">{{ $post->title }}</h2>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset('storage/'.$post->cover_image)}}" alt="img" width="500px">
                            </div>
                            <div class="col-6">
                                <div class="row justify-content-around">
                                <!-- Image -->
                                <!-- Left -->
                                <div class="col-12 my-2">
                                    <h2 class="fs-4 fw-bold py-2 me-4">Content:</h2>
                                    <span class="mt-2 pt-1">{{ $post->content }}</span>
                                </div>
                                <div class="col-12 my-2">
                                    <h2 class="fs-4 fw-bold py-2 me-4">Slug:</h2>
                                    <span class="mt-2 pt-1">{{ $post->slug }}</span>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12 text-center py-3">
                                <!-- Edit Button -->
                                <a href="#" class="btn btn-warning mx-2">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                <form action="#" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection