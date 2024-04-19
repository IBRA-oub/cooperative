<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <link rel="stylesheet" href="assets/style.css">
    @vite('resources/js/app.js')

</head>

<body class="antialiased">
    <nav style="background-color: rgba(62, 62, 62, 0.322)"
        class="fixed z-10   flex w-full items-center justify-between  py-1 shadow-sm shadow-neutral-700/10  lg:flex-wrap lg:justify-start"
        data-te-navbar-ref>
        <!-- Container wrapper -->
        <div class="flex w-full flex-wrap items-center justify-between px-6">
            <div class="flex items-center">

                <!-- Navbar Brand -->
                <a class="text-primary dark:text-primary-400" href="#!">
                    <span class="[&>svg]:ml-2 [&>svg]:mr-3 [&>svg]:h-6 [&>svg]:w-6 [&>svg]:lg:ml-0">
                        <img src="img/logo.png" alt="" class="w-8 ">
                    </span>
                </a>
            </div>





            <!-- Right elements -->
            <div class="my-1 flex items-center lg:my-0 lg:ml-auto">
                {{-- switch langue --}}
                <div class="mt-2">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
                @if (Route::has('login'))
                    <div class="  text-right z-10">
                        @auth
                            @if (auth()->user()->financiere)
                                <a id="dashboard" href="/financiere-dashboard"
                                    class="font-semibold text-gray-200 hover:text-gray-900  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @elseif(auth()->user()->admin)
                                <a id="dashboard" href="/admin-dashboard"
                                    class="font-semibold text-gray-200 hover:text-gray-900  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @elseif(auth()->user()->planner)
                                <a id="dashboard" href="/planner-dashboard"
                                    class="font-semibold text-gray-200 hover:text-gray-900  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @elseif(auth()->user()->stockiste)
                                <a id="dashboard" href="/stockiste-dashboard"
                                    class="font-semibold text-gray-200 hover:text-gray-900  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @endif
                        @else
                            <a id="login" href="/login"
                                class="mr-2 inline-block rounded px-6 pt-2.5 pb-2 text-xs bg-green-600  uppercase leading-normal font-bold text-white transition duration-150 ease-in-out hover:text-white hover:bg-opacity-10 hover:text-primary-600  focus:outline-none focus:ring-0 0 dark:text-primary-400 dark:hover:bg-neutral-700 dark:hover:bg-opacity-60 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                                data-te-ripple-init data-te-ripple-color="light">
                                Login
                            </a>
                        @endauth
                    </div>
                @endif
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>

    {{-- hero-section-start --}}
    <section class="h-screen bg-cover bg-center relative py-32 w-full"
        style="background-image: url('https://img.freepik.com/photos-gratuite/hommes-affaires-femmes-affaires-asiatiques-reunissant-idees-remue-meninges-application-planification-conception-web-creative-developpement-mise-page-modele-pour-projet-telephone-mobile-travaillant-ensemble-dans-petit-bureau_7861-2682.jpg?w=1060&t=st=1710787356~exp=1710787956~hmac=f89d1652eacb414a67b04d34f94613e10936ad32def24bf241e971a5a65077eb')">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Superposition semi-transparente -->
        <div class="container mx-auto text-left text-white relative z-5">
            <div class="sm:flex items-center">
                <div class="sm:w-1/2">
                    <h1 id="hero" class="text-3xl sm:text-7xl font-bold mb-6 text-center sm:mt-[20%]">Ensemble,
                        nous cultivons le succès</h1>
                </div>
                <div class="m-4 sm:w-1/2 sm:pl-16 sm:mt-[9%]">
                    <img src="img/argan.jpg" class="h-72 w-full object-cover rounded-xl" alt="Layout Image">
                </div>
            </div>
        </div>
        <div class="icon-scroll" data-v-c7f45378="" bis_skin_checked="1"></div>
    </section>
    {{-- hero-section-end --}}

    {{-- statistique-section-start --}}
    <section class=" w-full  sm:h-[38rem] ">
        <h1 id="statistique"
            class="mb-6  text-xl w-60% ml-[10%] sm:w-[40%] statistique  sm:text-3xl sm:ml-[30%] flex justify-center  pt-4 pb-3 font-serif font-semibold text-green-600">
            Les statistique de coopérative</h1>
        <div class="sm:flex w-full h-full">

            <div class=" mt-3 w-full h-1/2 sm:w-1/2 sm:h-full sm:m-0">

                <canvas id="barchart" width="300" height="300" class="ml-[5%] sm:ml-0"></canvas>
            </div>
            <div class=" mt-3 w-full h-1/2 sm:w-1/2 sm:h-full sm:m-0">
                <canvas id="doughnut" width="300" height="300" class="ml-[5%] sm:ml-0"></canvas>
            </div>

            <div class=" mt-3 w-full h-1/2 sm:w-1/2 sm:h-full sm:m-0">
                <canvas id="line" width="300" height="300" class="ml-[5%] sm:ml-0"></canvas>
            </div>
        </div>
    </section>
    {{-- statistique-section-end --}}

    {{-- annonce-section-start --}}

    <section class=" w-full  ">
        <h1 id="annonces"
            class=" text-xl w-60% ml-[10%] sm:w-[20%] annonce  sm:text-3xl sm:ml-[40%] flex justify-center  pt-4 pb-3 font-serif font-semibold text-green-600">
            Annonces</h1>

        <div class=" mx-4 md:mx-16 mt-10 flex flex-wrap md:flex-nowrap">

            <!-- Section de gauche  -->

            <div class="w-full md:w-2/3 p-4 bg-gray-100 mb-4 md:mb-0 md:mr-2 shadow-lg rounded-md">
                <h1 id="dernierAnnonce" class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                    Les dernières Annonces
                </h1>

                <!-- loop pour affichier les dernier publiciter -->

                @foreach ($publiciter as $pub)
                    <div class="mb-4 lg:mb-10 p-4 lg:p-0 w-full md:w-4/7 relative rounded block">

                        <img src='{{ asset('/storage/image/' . $pub->picture) }}'
                            class='rounded-md object-cover w-full h-64'>

                        <div class="flex">




                            <span class="text-green-700 text-sm hidden md:block mt-4"> Admin
                                &ensp;|&ensp;
                            </span>




                            <span class="text-gray-700 text-sm hidden md:block mt-4">
                                <span id="dateAnnonce">date annonce </span>: {{ $pub->created_at }}
                            </span>
                            <span class="text-gray-700 text-sm hidden md:block mt-4"> &ensp;|&ensp;
                                <span id="dateModifier">date modified</span>:
                                {{ $pub->updated_at }}
                            </span>
                        </div>
                        <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                            {{ $pub->titre }}
                        </h1>
                        <p class="text-gray-600 mb-4">
                            {{ $pub->contenu }}
                        </p>
                    </div>
                @endforeach

            </div>

            <!-- Section de droite  -->
            <div class="w-full md:w-1/3 p-4 bg-gray-100 md:ml-2 shadow-lg rounded-md">
                <h1 id="periode" class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight text-center">
                    Les periodes agricule
                </h1>
                <!-- sub-main posts -->
                <div class="w-full md:w-4/7">



                    @foreach ($periodes as $period)
                        <div class=" mt-5 rounded w-full flex flex-col md:flex-row mb-10">


                            <div class="bg-gray-300 rounded px-4 sm:w-full">
                                <span class="text-green-700 text-xl hidden md:block"> {{ $period->titre }}
                                </span>
                                <div class="md:mt-0 text-gray-800  text-sm mb-2">

                                    <span id="dateDebut">date début </span>: {{ $period->dateDepart }}
                                </div>

                                <div class="md:mt-0 text-gray-800  text-sm mb-2">

                                    <span id="dateFinir">date finir</span> : {{ $period->dateStop }}
                                </div>


                            </div>
                        </div>
                    @endforeach



                </div>
            </div>

        </div>

    </section>
    {{-- annonce-section-end --}}

    {{-- footer-start --}}


    <footer class="bg-white  shadow dark:bg-green-300 mt-10">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="img/logo.png" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ONE HAND</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-black sm:mb-0 ">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-black sm:text-center ">© 2023 <a href=""
                    class="hover:underline">ONE HAND™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    {{-- footer-end --}}


    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // --------------------chartjs---------------------

        const ctx = document.getElementById("barchart");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ['{{ $countCharge }} Charge', '{{ $countChargePrix }} DH Prix des charge',
                    '{{ $countRevenu }} Revenu', '{{ $countRevenuPrix }}DH Prix des revenu',
                    '{{ $countPeriode }} Periode'
                ],
                datasets: [{
                    label: "statistique",
                    data: [{{ $countCharge }}, {{ $countChargePrix }}, {{ $countRevenu }},
                        {{ $countRevenuPrix }}, {{ $countPeriode }}
                    ],
                    // backgroundColor: [
                    //     'rgba(255, 99, 132, 0.2)',  
                    //     'rgba(255, 159, 64, 0.2)',   
                    //     'rgba(255, 205, 86, 0.2)',   
                    //     'rgba(75, 192, 192, 0.2)',   
                    //     'rgba(54, 162, 235, 0.2)',   
                    // ],
                    borderWidth: 1,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });

        // __________________________________________
        const doughnut = document.getElementById("doughnut");

        new Chart(doughnut, {
            type: "doughnut",
            data: {
                labels: ['{{ $HoursTotal }} heurs totale travailler',
                    '{{ $TravailleurTotal }} totale des travailleur',
                ],
                datasets: [{
                    label: "# of Votes",
                    data: [{{ $HoursTotal }}, {{ $TravailleurTotal }}],
                    borderWidth: 1,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
        // _______________________________________
        const line = document.getElementById("line");

        new Chart(line, {
            type: "line",
            data: {
                labels: ['refernce', '{{ $countCharge }} cahrge',
                    '{{ $countChargePrix }}DH Prix des charges',
                ],
                datasets: [{
                    label: "les charges",
                    data: [10, {{ $countCharge }}, {{ $countChargePrix }}],
                    borderWidth: 1,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>


</body>

</html>
