@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center md-4">
            <div class="col">
                <h1>
                    Tutti gli articoli
                </h1>

                <a href="{{ route('admin.posts.create') }}" class="btn btn-success">
                    Aggiungi articolo
                </a>
            </div>
        </div>

        {{-- Aggiungo partials success --}}
        @include('partials.success')

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">
                                        Dettagli
                                    </a>

                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">
                                        Aggiorna
                                    </a>

                                    <form class="d-inline-block" action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")

                                        <button class="btn btn-danger">
                                            Elimina
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
