<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion | Youco'Done</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#f45925",
                        "background-light": "#fcf9f8",
                        "background-dark": "#221410",
                    },
                    fontFamily: {
                        display: ["Be Vietnam Pro", "sans-serif"]
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: "Be Vietnam Pro", sans-serif; }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen">

<div class="flex min-h-screen w-full flex-col lg:flex-row">

    {{-- LEFT IMAGE --}}
    <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuC39iKno9t105-pnbz0vI3NlnoTUS2bAHqsP1c4DStUka481y9p8SA8sthNNOl3YIEYl8y8f1gDa3_KW1PNfQi8GOUVkmjg-YKWfsrbfCyPq7nO_uoinsZypvSHc8b7y85dzyjDrZ7sNf5ZHs2s8aFgio1xr7B9D8g1QNjghc-nyF-iZZXZNUxCi_iortd4tAE-MHjWQetTz_sUU0bpfkIIzzPDyeGklxlo5gtQhKm2iOrFssfML0-TMuIvzrYrwqfdZIW5k1D4ioY');">
        </div>
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 p-12 text-white flex flex-col justify-between h-full">
            <h1 class="text-3xl font-black">Youco'Done</h1>
            <p class="text-xl font-medium max-w-md">
                Gérez vos réservations et vos expériences culinaires en toute simplicité.
            </p>
            <p class="text-sm opacity-70">© 2024 Youco'Done</p>
        </div>
    </div>

    {{-- RIGHT FORM --}}
    <div class="flex flex-1 items-center justify-center px-6 py-12">
        <div class="w-full max-w-md">

            <h1 class="text-3xl font-black text-[#1c110d] dark:text-white mb-2">
                Bon retour parmi nous
            </h1>
            <p class="text-sm text-[#9c5e49] mb-8">
                Connectez-vous pour accéder à votre compte
            </p>

            {{-- SESSION STATUS --}}
            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <label class="block mb-2 font-medium">Adresse e-mail</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full h-14 rounded-lg border border-[#e8d5ce] px-4
                               focus:ring-2 focus:ring-primary focus:border-primary"
                        placeholder="ex: alex@email.com"
                    >
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div>
                    <div class="flex justify-between mb-2">
                        <label class="font-medium">Mot de passe</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                               class="text-sm text-primary font-bold hover:underline">
                                Mot de passe oublié ?
                            </a>
                        @endif
                    </div>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full h-14 rounded-lg border border-[#e8d5ce] px-4
                               focus:ring-2 focus:ring-primary focus:border-primary"
                        placeholder="••••••••"
                    >
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- REMEMBER --}}
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="remember"
                           class="rounded border-[#e8d5ce] text-primary focus:ring-primary">
                    <span class="text-sm">Se souvenir de moi</span>
                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="w-full h-12 bg-primary text-white font-bold rounded-lg
                               hover:opacity-90 transition shadow-lg">
                    Connexion
                </button>
            </form>

            {{-- REGISTER --}}
            <p class="text-center text-sm text-[#9c5e49] mt-8">
                Pas encore de compte ?
                <a href="{{ route('register') }}"
                   class="text-primary font-bold hover:underline">
                    Inscription
                </a>
            </p>

        </div>
    </div>
</
