<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Youco'Done | Trouvez votre prochain repas préféré</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f45925",
                        "background-light": "#fcf9f8",
                        "background-dark": "#221410",
                    },
                    fontFamily: {
                        "display": ["Be Vietnam Pro", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: "Be Vietnam Pro", sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#1c110d] dark:text-white transition-colors duration-200">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <header
            class="sticky top-0 z-50 w-full border-b border-solid border-[#f4eae7] dark:border-[#3d2a24] bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
            <div class="mx-auto flex max-w-[1280px] items-center justify-between px-6 py-4 lg:px-10">
                <div class="flex items-center gap-2 text-primary">
                    <div class="size-8">
                        <svg fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z">
                            </path>
                        </svg>
                    </div>
                    <h1 class="text-xl font-black tracking-tight text-[#1c110d] dark:text-white">Youco'Done</h1>
                </div>
                <div class="flex items-center gap-4">
                    @auth
                        <a
                            href="{{ route('profile.edit') }}"
                            class="flex min-w-[140px] items-center justify-center rounded-lg h-10 px-4
                                text-[#1c110d] dark:text-white text-sm font-bold
                                hover:bg-[#f4eae7] dark:hover:bg-[#3d2a24] transition-colors">
                            Modifier profil
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                type="submit"
                                class="flex min-w-[120px] items-center justify-center rounded-lg h-10 px-5
                                    bg-primary text-white text-sm font-bold
                                    hover:opacity-90 transition-opacity">
                                Déconnexion
                            </button>
                        </form>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="flex min-w-[84px] items-center justify-center rounded-lg h-10 px-4
                                text-[#1c110d] dark:text-white text-sm font-bold
                                hover:bg-[#f4eae7] dark:hover:bg-[#3d2a24] transition-colors">
                            Connexion
                        </a>

                        <a
                            href="{{ route('register') }}"
                            class="flex min-w-[100px] items-center justify-center rounded-lg h-10 px-5
                                bg-primary text-white text-sm font-bold
                                shadow-sm hover:opacity-90 transition-opacity">
                            Inscription
                        </a>
                    @endauth
                </div>

            </div>
        </header>
        <main class="flex-1">
            <section class="relative w-full px-6 py-12 lg:px-10">
                <div class="mx-auto max-w-[1280px]">
                    <div class="@container">
                        <div class="relative flex min-h-[440px] flex-col items-center justify-center overflow-hidden rounded-xl bg-cover bg-center p-6 text-center shadow-lg"
                            style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNUMXuPzl0DYHnHsi4jgPsyr6vTtghrc1-6C8RTq0FvLQbABX9VIWV_FKIWTVr_P_fKwuFSa-nEgdBCaG8fEY3-AWF8W7TO2LfLQ4MWMixY-iN6cxfVdnMEL82ID_TuUdAWFoYsmq-wlmGltsw0kQJehs6iiMr-s2cCzmFPq1mQSv4NcRoxb2G3GdqcXYghhki1cPuC17qd7Dnme-HOzrJp6ZqgZrn7DH7gp0vs4PB3dKfOAdS1iT3qQTrnLVF4ehqWWUeivwshFo");'>
                            <div class="relative z-10 flex flex-col gap-4">
                                <h1
                                    class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-6xl">
                                    Trouvez votre prochain repas préféré
                                </h1>
                                <p class="mx-auto max-w-2xl text-white/90 text-base font-medium @[480px]:text-lg">
                                    Découvrez et réservez des tables dans les meilleurs restaurants locaux. Du dîner
                                    décontracté à la cuisine fine, votre table idéale vous attend.
                                </p>
                            </div>
                            <div class="mt-8 w-full max-w-3xl">
                                <div
                                    class="flex flex-col @[640px]:flex-row w-full items-stretch rounded-xl bg-white dark:bg-background-dark p-2 shadow-2xl">
                                    <div
                                        class="flex flex-1 items-center px-4 border-b @[640px]:border-b-0 @[640px]:border-r border-[#f4eae7] dark:border-[#3d2a24]">
                                        <span class="material-symbols-outlined text-[#9c5e49] mr-2">search</span>
                                        <input
                                            class="w-full border-none bg-transparent py-3 text-sm focus:ring-0 placeholder:text-[#9c5e49]"
                                            placeholder="Rechercher par ville, cuisine..." />
                                    </div>
                                    <div class="flex items-center @[640px]:pl-2 py-2">
                                        <button
                                            class="w-full @[640px]:w-auto flex min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold transition-all hover:scale-[1.02] active:scale-100">
                                            Rechercher
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full px-6 lg:px-10">
                <div class="mx-auto max-w-[1280px] flex items-center justify-between py-6">
                    <div>
                        <h2 class="text-2xl font-bold tracking-tight text-[#1c110d] dark:text-white">Découvrir les
                            restaurants</h2>
                        <p class="text-[#9c5e49] text-sm font-normal">Basé sur vos recherches récentes et votre
                            localisation</p>
                    </div>
                </div>
            </section>
            <section class="w-full px-6 lg:px-10 pb-20">

                <div class="mx-auto max-w-[1280px]">
                   
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                         @foreach($restaurants as $restaurant)
                        <div
                            class="group flex flex-col gap-4 rounded-xl bg-white dark:bg-[#2d1b15] p-4 shadow-sm transition-all hover:shadow-lg hover:-translate-y-1">
                            <div class="relative w-full aspect-[21/9] overflow-hidden rounded-lg">
                                <div class="h-full w-full bg-center bg-cover transition-transform duration-500 group-hover:scale-105"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC5dmQPSW1MYNwT4G9IUvu5v6Ud8Ggclw2zrzaiiu07f2vPDpaBD9wtVIaf1f19JQrA9BHzCcP_Sz5DdKtp44A9UoUCvuh8QRhblOVZkW4aZU_cdrHyY0SF-eGOEo7rOiujjlOQkGVBqjgTMNYMrQIX4tilJ0Er5D1vWio7yVg3xfYBVP9KJlJHOtsN2PoIykK5fQYlvTArLulqLNrlUnfHOA3EfOdX7GNWdFVcuTICNVu0WSx27Vjcljh1RRdTmC2Clfx8FDHH758");'>
                                </div>
                            </div>
                            <div class="flex flex-col px-1 pb-2">
                                <div class="flex items-center justify-between mb-1">
                                    <h3 class="text-xl font-bold text-[#1c110d] dark:text-white">The Golden Whisk</h3>
                                </div>
                                <p class="text-[#9c5e49] text-sm flex items-center gap-1 mb-4">
                                    <span class="material-symbols-outlined text-sm">location_on</span> {{$restaurant->localisation}}
                                </p>
                                
                                    <button onclick="window.location.href='detailsRestaurant/{{$restaurant->id}}'"
                                        class="w-full py-3 text-sm font-bold text-primary border border-primary/20 bg-primary/5 rounded-lg hover:bg-primary hover:text-white transition-all">
                                        Voir les détails
                                    </button>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </section>
        </main>
    </div>

</body>

</html>