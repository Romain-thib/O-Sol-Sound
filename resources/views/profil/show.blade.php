<x-layout.app title="Mon profil">
    <section>
        <div>
            <a href="{{ route('accueil') }}">
                Retour à l'accueil
            </a>
        </div>

        <div>
            <div>
                <img src="{{ $utilisateur->avatar }}"
                     alt="Avatar de {{ $utilisateur->name }}">
            </div>
            <div>
                <h1>Nom : {{ $utilisateur->name }}</h1>
                <p>Email : {{ $utilisateur->email }}</p>
                <p>Date d'inscription : {{ $utilisateur->created_at }}</p>
            </div>
        </div>
    </section>
</x-layout.app>
