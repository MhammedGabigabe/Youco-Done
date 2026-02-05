<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mot de passe oublié | Youco'Done</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet"/>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#f45925",
                        "background-light": "#f8f6f5",
                        "background-dark": "#221410",
                    },
                    fontFamily: {
                        display: ["Be Vietnam Pro", "sans-serif"]
                    },
                },
            },
        }
    </script>

    <style>
        body { font-family: "Be Vietnam Pro", sans-serif; }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#1c110d] dark:text-[#fcf9f8] min-h-screen">

<div class="flex min-h-screen flex-col lg:flex-row">

    <!-- LEFT IMAGE -->
    <div class="relative hidden lg:flex lg:w-1/2 flex-col justify-between p-12 bg-cover bg-center"
         style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuDJDgYAZKB_d1wBLo5PhpuwfFeXY8_fK04UlFdBxUs1N4kHdErCWQkLzQXbNPa8uiq_Oe1Ly3rbINrQ5riXuMjKYlGr8EVHrNMjO8hMuoXZ6rp06IICeDfMHWYT-qi6puGsK3nAAokf9CUGKCLdSobSEI5ACNDYIXFOZslKR5d7W7ft9gwjDh569dUJA0YVOVQcNwCbTPR2oggqoD-wXET3djFsASQKehHcM1pT0FlFTnGyD9Gj0sKcWGTOGViVMbXmf2VnQrvdKYI')">
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 text-white">
            <h1 class="text-2xl font-bold">Youco'Done</h1>
        </div>

        <div class="relative z-10 text-white max-w-md">
            <h2 class="text-4xl font-black mb-4">Récupération du compte</h2>
            <p class="opacity-90">
                Pas d’inquiétude, on vous aide à récupérer l’accès à votre compte.
            </p>
        </div>

        <div class="relative z-10 text-white/70 text-sm italic">
            © 2024 Youco'Done
        </div>
    </div>

    <!-- FORM -->
    <div class="flex w-full lg:w-1/2 items-center justify-center p-8">
        <div class="w-full max-w-[480px] space-y-8">

            <div>
                <h2 class="text-3xl font-bold">Mot de passe oublié</h2>
                <p class="text-sm text-[#9c5e49] mt-1">
                    Entrez votre e-mail et nous vous enverrons un lien de réinitialisation.
                </p>
            </div>

            <!-- SESSION STATUS -->
            @if (session('status'))
                <div class="bg-green-100 text-green-700 p-3 rounded text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <!-- ERRORS -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-3 rounded">
                    <ul class="text-sm list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
                @csrf

                <!-- EMAIL -->
                <div>
                    <label class="text-sm font-medium">Adresse e-mail</label>
                    <div class="relative mt-1">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#9c5e49]">
                            mail
                        </span>
                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               autofocus
                               placeholder="jean@exemple.com"
                               class="w-full rounded-xl border border-[#e8d5ce] bg-white px-12 py-3 focus:border-primary focus:ring-primary outline-none">
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-primary text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 hover:bg-primary/90 transition flex items-center justify-center gap-2">
                    <span>Envoyer le lien</span>
                    <span class="material-symbols-outlined">send</span>
                </button>
            </form>

            <p class="text-center text-sm text-[#9c5e49]">
                Vous vous souvenez de votre mot de passe ?
                <a href="{{ route('login') }}" class="text-primary font-bold hover:underline">
                    Se connecter
                </a>
            </p>

        </div>
    </div>
</div>

</body>
</html>
