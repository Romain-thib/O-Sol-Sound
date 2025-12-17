<x-layout.app title="Mon profil">
    <section>

        {{-- navigation : retourner à l'accueil et modifier le profil --}}
        <div>
            <a href="{{ route('home') }}">Retour à l'accueil</a>
            <br>
            <a href="{{ route('profil.edit', $utilisateur->id) }}">Modifier mon profil</a>
        </div>

        {{-- profil : avatar + infos du compte --}}
        <div>
            <div>
                <img src="{{ $utilisateur->avatar }}"
                     alt="Avatar de {{ $utilisateur->name }}">
            </div>
            <p>DEBUG : Le chemin est : {{ $utilisateur->avatar }}</p>

            <div>
                <h1>Nom : {{ $utilisateur->name }}</h1>
                <p>Email : {{ $utilisateur->email }}</p>
                <p>Membre depuis : {{ $utilisateur->created_at }}</p>
            </div>
        </div>

        {{-- statistiques sur les followers --}}
        <div>
            <p>Abonnés : {{ $utilisateur->suiveurs()->count() }}</p>
            <p>Abonnements : {{ $utilisateur->suivis()->count() }}</p>
        </div>

        {{-- ses articles en cours de rédaction --}}
        <div>
            <h2>Articles en cours de rédaction</h2>
            <ul>
                @forelse($utilisateur->mesArticles()->where('is_published', false)->get() as $article)
                    <li>
                        <a href="{{ route('articles.edit', $article->id) }}">{{ $article->title }}</a>
                    </li>
                @empty
                    <li>Aucun article en cours de rédaction.</li>
                @endforelse
            </ul>
        </div>

        {{-- les articles qu’il a aimés --}}
        <div>
            <h2>Articles aimés</h2>
            <ul>
                @forelse($utilisateur->likes as $article)
                    <li>
                        <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                    </li>
                @empty
                    <li>Aucun article aimé.</li>
                @endforelse
            </ul>
        </div>

    </section>
</x-layout.app>