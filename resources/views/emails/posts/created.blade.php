<div>
    <h1>
        Nuovo post pubblicato!
    </h1>

    <ul>
        <li>
            Titolo: {{ $post->title }}
        </li>

        <li>
            Contenuto:
            <p>
                {!! nl2br($post->content) !!}
            </p>
        </li>
    </ul>
</div>