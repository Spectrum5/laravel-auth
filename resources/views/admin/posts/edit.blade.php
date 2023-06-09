@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center md-4">
            <div class="col">
                <h1>
                    Modifica Post
                </h1>
            </div>
        </div>

        {{-- Aggiungo partials errors e success --}}
        @include('partials.success')

        @include('partials.errors')

        <div class="row md-4">
            <div class="col">
                <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Titolo <span class="text-danger">*</span>
                        </label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="title" name="title" 
                        required maxlength="128" 
                        value="{{ old('title', $post->title) }}"
                        placeholder="Inserisci il titolo..">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">
                            Contenuto <span class="text-danger">*</span>
                        </label>
                        <textarea 
                        class="form-control" 
                        rows="10" id="content" 
                        name="content" 
                        required maxlength="4096"
                        placeholder="Inserisci il contenuto..">{{ old('content', $post->content) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">
                            Immagine in evidenza <span class="text-danger">*</span>
                        </label>

                        @if ($post->img)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="delete_img" id="delete_img">
                                <label class="form-check-label" for="delete_img">
                                    Cancella l'immagine in evidenza
                                </label>
                            </div>

                            <div class="mb-2">
                                <img src="{{ asset('storage'.$post->img) }}" alt="">
                            </div>
                        @endif

                        <input 
                        type="file" 
                        class="form-control" 
                        id="img" 
                        name="img" 
                        accept="image/*"
                        
                        {{-- accept="image/png,image/jpeg,image/svg" --}}
                        
                        {{-- Validazione frontend in qualche modo --}}
                        placeholder="Inserisci l'immagine in evidenza..">
                    </div>

                    <div>
                        <p>
                            N.B. i campi contrassegnati con <span class="text-danger">*</span> sono obbligatori
                        </p>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning">
                            Aggiorna
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
