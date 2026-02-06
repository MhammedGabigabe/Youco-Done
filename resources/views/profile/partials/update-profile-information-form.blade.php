<section class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
    <header class="mb-6">
        <h2 class="text-xl font-bold text-gray-900">
            Informations personnelles
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            Mettez à jour vos informations personnelles, votre adresse e-mail et votre photo de profil.
        </p>
    </header>

    {{-- Renvoi email de vérification --}}
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        {{-- Nom --}}
        <div>
            <x-input-label for="name" value="Nom complet" />
            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('name')"
            />
        </div>

        {{-- Email --}}
        <div>
            <x-input-label for="email" value="Adresse e-mail" />
            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-1 block w-full"
                :value="old('email', $user->email)"
                required
                autocomplete="username"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('email')"
            />

            {{-- Vérification email --}}
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3 text-sm text-gray-600">
                    <p>
                        Votre adresse e-mail n’est pas encore vérifiée.
                        <button
                            form="send-verification"
                            class="underline font-medium text-primary hover:opacity-80"
                        >
                            Renvoyer l’e-mail de vérification
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-green-600 font-medium">
                            Un nouveau lien de vérification a été envoyé.
                        </p>
                    @endif
                </div>
            @endif
        </div>

                {{-- Photo de profil --}}
        <div>
            <x-input-label for="photo" value="Photo de profil" />
            <input
                id="photo"
                name="photo"
                type="file"
                accept="image/*"
                class="mt-1 block w-full text-sm text-gray-500
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-lg file:border-0
                       file:text-sm file:font-semibold
                       file:bg-primary file:text-white
                       hover:file:brightness-110
                       transition-all"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('photo')"
            />
        </div>

        {{-- Bouton --}}
        <div class="flex items-center gap-4">
            <x-primary-button class="px-6">
                Enregistrer
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600"
                >
                    Informations mises à jour ✔
                </p>
            @endif
        </div>
    </form>
</section>
