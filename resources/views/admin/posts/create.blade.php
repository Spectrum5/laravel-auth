@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center md-4">
            <div class="col">
                <h1>
                    Crea Post
                </h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="row mb-4">
                <div class="col">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="row md-4">
            <div class="col">
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Titolo
                        </label>
                        <input type="text" class="form-control" id="title" name="title" required maxlength="128"
                            placeholder="Inserisci il titolo..">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">
                            Contenuto
                        </label>
                        <textarea class="form-control" rows="10" id="content" name="content" required maxlength="4096"
                            placeholder="Inserisci il contenuto.."></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success">
                            Aggiungi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
