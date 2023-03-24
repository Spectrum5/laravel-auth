@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center md-4">
        <div class="col">

            @if (session('success'))
                <div class="alert alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <h1>
                {{ $post->title }}
            </h1>

            <h6>
                Slug: {{ $post->slug }}
            </h6>

            <p>
                {{ $post->content }}
            </p>

            <a href="{{ route('admin.posts.create') }}" class="btn btn-success">
                Aggiungi articolo
            </a>
        </div>
    </div>
@endsection
