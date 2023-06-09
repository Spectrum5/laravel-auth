@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center md-4">
        <div class="col">

            {{-- Aggiungo partials errors --}}
            @include('partials.success')

            <h1>
                {{ $post->title }}
            </h1>

            <h6>
                Slug: {{ $post->slug }}
            </h6>

            @if ($post->img)
                <div>
                    <img src="{{ asset('storage'.$post->img) }}" style="height: 300px;" alt="">
                </div>
            @endif

            <p>
                {!! nl2br($post->content) !!}
            </p>

        </div>
    </div>
@endsection
