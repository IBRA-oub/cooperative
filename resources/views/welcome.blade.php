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
       <nav
        class="fixed z-10   flex w-full items-center justify-between  py-1 shadow-sm shadow-neutral-700/10 bg-green-300 lg:flex-wrap lg:justify-start"
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
                {{-- @if (Route::has('login')) --}}
                    <div class="  text-right z-10">
                        {{-- @auth --}}
                            <a href=""
                            class="font-semibold text-gray-900 hover:text-gray-900  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        {{-- @else --}}
                            <a href=""
                               class="mr-2 inline-block rounded px-6 pt-2.5 pb-2 text-xs bg-green-600  uppercase leading-normal font-bold text-white transition duration-150 ease-in-out hover:text-white hover:bg-opacity-10 hover:text-primary-600  focus:outline-none focus:ring-0 0 dark:text-primary-400 dark:hover:bg-neutral-700 dark:hover:bg-opacity-60 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                               data-te-ripple-init data-te-ripple-color="light">
                                Login
                            </a>
                        {{-- @endauth --}}
                    </div>
                {{-- @endif --}}
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>

    {{-- hero-section-start --}} 
    <section class="h-screen bg-cover bg-center relative py-32 w-full" style="background-image: url('https://img.freepik.com/photos-gratuite/hommes-affaires-femmes-affaires-asiatiques-reunissant-idees-remue-meninges-application-planification-conception-web-creative-developpement-mise-page-modele-pour-projet-telephone-mobile-travaillant-ensemble-dans-petit-bureau_7861-2682.jpg?w=1060&t=st=1710787356~exp=1710787956~hmac=f89d1652eacb414a67b04d34f94613e10936ad32def24bf241e971a5a65077eb')">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Superposition semi-transparente -->
        <div class="container mx-auto text-left text-white relative z-5">
            <div class="sm:flex items-center">
                <div class="sm:w-1/2">
                    <h1 class="text-3xl sm:text-7xl font-bold mb-6 text-center sm:mt-[20%]">Ensemble, nous cultivons le succès</h1>
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
        <h1 class="mb-6  text-xl w-60% ml-[10%] sm:w-[40%] statistique  sm:text-3xl sm:ml-[30%] flex justify-center  pt-4 pb-3 font-serif font-semibold text-green-600">Les statistique de coopérative</h1>
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

    <section class=" w-full h-[52rem] sm:h-[38rem] ">
        <h1 class=" text-xl w-60% ml-[10%] sm:w-[20%] annonce  sm:text-3xl sm:ml-[40%] flex justify-center  pt-4 pb-3 font-serif font-semibold text-green-600">Annonces</h1>

        <div  class=" mx-4 md:mx-16 mt-10 flex flex-wrap md:flex-nowrap">

            <!-- Section de gauche (2/3) -->
    
            <div  class="w-full md:w-2/3 p-4 bg-gray-100 mb-4 md:mb-0 md:mr-2 shadow-lg rounded-md">
                <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                    Les derniere Annoce
                </h1>
                <!-- main post 1 -->
                <!-- loop pour affichier les dernier wiki -->
              
                <div class="mb-4 lg:mb-10 p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
                     
                     <img src='img/argan.jpg' class='rounded-md object-cover w-full h-64'>
                   
                    <div class="flex">
                        
                            
                           
    
                        <span class="text-green-700 text-sm hidden md:block mt-4">  ahmed 
                            &ensp;|&ensp;
                        </span>
                        
                              
                            
                           
                        <span class="text-gray-700 text-sm hidden md:block mt-4">
                            date annonce :  276/2873/73
                        </span>
                        <span class="text-gray-700 text-sm hidden md:block mt-4"> &ensp;|&ensp; dateModified:
                             4567
                        </span>
                    </div>
                    <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                         prende de salaire
                    </h1>
                    <p class="text-gray-600 mb-4">
                          il faut tous les travailleur demain matin 4 by 4 vient vers le derecteur pour prendre leur salaire
                    </p>
                </div>
    
                <!-- sub-main posts -->
            </div>
    
            <!-- Section de droite (1/3) -->
            <div  class="w-full md:w-1/3 p-4 bg-gray-100 md:ml-2 shadow-lg rounded-md">
                <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight text-center">
                    La periode agricule
                </h1>
                <!-- sub-main posts -->
                <div class="w-full md:w-4/7">
                    <!-- post 1 -->
                    
                    
                   
                    <div class=" mt-5 rounded w-full flex flex-col md:flex-row mb-10">
                         
                       
                        <div class="bg-gray-300 rounded px-4 sm:w-full">
                            <span class="text-green-700 text-xl hidden md:block"> prendre argan 
                            </span>
                                <div class="md:mt-0 text-gray-800  text-sm mb-2">
                                    
                                date depart : 20024-2-3 80:00
                                </div>

                                <div class="md:mt-0 text-gray-800  text-sm mb-2">
                                  
                                    date stop : 20024-2-3 80:00
                                </div>
    
    
                        </div>
                    </div>

                   
    
                </div>
            </div>
    
        </div>

    </section>
    {{-- annonce-section-end --}}

    {{-- footer-start --}}
    

<footer class="bg-white  shadow dark:bg-green-300 mt-7">
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
        <span class="block text-sm text-black sm:text-center ">© 2023 <a href="" class="hover:underline">ONE HAND™</a>. All Rights Reserved.</span>
    </div>
</footer>

{{-- footer-end --}}


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </body>
</html>
