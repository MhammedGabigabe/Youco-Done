<section class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
    <header class="mb-6">
        <h2 class="text-xl font-bold text-gray-900">
            Sécurité du compte
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            Modifiez votre mot de passe pour sécuriser votre compte.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        {{-- Mot de passe actuel --}}
        <div>
            <x-input-label
                for="current_password"
                value="Mot de passe actuel"
            />
            <x-text-input
                id="current_password"
                name="current_password"
                type="password"
                class="mt-1 block w-full"
                autocomplete="current-password"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->updatePassword->get('current_password')"
            />
        </div>

        {{-- Nouveau mot de passe --}}
        <div>
            <x-input-label
                for="password"
                value="Nouveau mot de passe"
            />
            <x-text-input
                id="password"
                name="password"
                type="password"
                class="mt-1 block w-full"
                autocomplete="new-password"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->updatePassword->get('password')"
            />
        </div>

        {{-- Confirmation --}}
        <div>
            <x-input-label
                for="password_confirmation"
                value="Confirmer le nouveau mot de passe"
            />
            <x-text-input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-1 block w-full"
                autocomplete="new-password"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->updatePassword->get('password_confirmation')"
            />
        </div>

        {{-- Bouton --}}
        <div class="flex items-center gap-4">
            <x-primary-button class="px-6">
                Mettre à jour
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600"
                >
                    Mot de passe modifié avec succès ✔
                </p>
            @endif
        </div>
    </form>
</section>
