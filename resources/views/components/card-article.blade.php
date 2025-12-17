@props(['article'])
<div class="card">
    <h2>{{ $article->titre }}</h2>
    <p>
        Auteur :
        <a href="{{ route('profil.user', $article->user_id) }}">
            {{ $article->editeur->name }}
        </a>
    </p>
    <p>{{ $article->resume }}</p>
    <img src="{{ $article->image }}" alt="{{ $article->titre }}" style="max-width:200px;">
    <p><small>Publié le {{ $article->created_at->format('d/m/Y') }}</small></p>

    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">
        Voir l’article
    </a>
</div>
