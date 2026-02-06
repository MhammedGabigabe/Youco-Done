<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $restaurants->nom }} | Youco'Done</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700;900&display=swap" rel="stylesheet" />

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
        body {
            font-family: "Be Vietnam Pro", sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#1c110d] dark:text-white">

    <!-- Header -->
    <header class="sticky top-0 z-50 border-b bg-background-light/80 backdrop-blur-md">
        <div class="mx-auto max-w-[1280px] flex justify-between items-center px-6 py-4">
            <a href="/" class="flex items-center gap-2 text-primary font-black text-xl">
                Youco'Done
            </a>
            <a href="/" class="text-sm font-bold hover:text-primary">
                ← Retour
            </a>
        </div>
    </header>

    <!-- Main -->
    <main class="px-6 py-12 lg:px-10">
        <div class="mx-auto max-w-[1280px]">

            <!-- Titre -->
            <div class="mb-6">
                <h1 class="text-4xl font-black">{{ $restaurants->nom }}</h1>
                <p class="text-[#9c5e49] flex items-center gap-1 mt-2">
                    <span class="material-symbols-outlined text-sm">location_on</span>
                    {{ $restaurants->localisation }}
                </p>
            </div>

            <!-- Image -->
            <div class="mb-10">
                <img
                    src="{{asset('storage/'.$restaurants->photos->first()->url) ?? 'https://via.placeholder.com/1200x500' }}"
                    class="w-full h-[420px] object-cover rounded-xl shadow">
            </div>

            <!-- Infos -->
            <div class="grid md:grid-cols-2 gap-8 mb-12">

                <div class="bg-white dark:bg-[#2d1b15] p-6 rounded-xl shadow">
                    <h2 class="text-xl font-bold mb-4">Informations</h2>
                    <ul class="space-y-2 text-sm text-[#9c5e49]">
                        <li><strong>Cuisine :</strong> {{ $restaurants->typesCuisines->first()->nom }}</li>
                        <li><strong>Capacité :</strong> {{ $restaurants->capacite }} personnes</li>
                        <li>
                            <strong>Statut :</strong>
                            <span class="{{ $restaurants->est_actif ? 'text-green-600' : 'text-red-600' }}">
                                {{ $restaurants->est_actif ? 'Ouvert' : 'Fermé' }}
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Horaires -->
                <div class="bg-white dark:bg-[#2d1b15] p-6 rounded-xl shadow">
                    <h2 class="text-xl font-bold mb-4">Horaires</h2>
                    <ul class="space-y-2 text-sm">
                        @foreach($restaurants->horaire->jours as $jour)
                            <li class="flex justify-between">
                                <span>{{ $jour->nom }}</span>
                                <span>{{ $jour->heure_debut }} - {{ $jour->heure_fin }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Menu -->
            <div class="bg-white dark:bg-[#2d1b15] p-6 rounded-xl shadow">
                <h2 class="text-2xl font-bold mb-6">Menu</h2>

                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($restaurants->menus as $menu)
                        @foreach($menu->plats as $plat)
                            <div class="flex justify-between border-b pb-2">
                                <span>{{ $plat->nom }}</span>
                                <span class="font-bold text-primary">{{ $plat->prix }} DH</span>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

        </div>
    </main>

</body>
</html>
