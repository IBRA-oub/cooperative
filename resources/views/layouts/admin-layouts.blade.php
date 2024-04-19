<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title', config('app.name'))</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @vite('resources/css/app.css')
    {{-- @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="assets/style.css">



</head>

<body>
    {{-- __________sidebar____________ --}}

    <aside class="w-20 bg-[#31363F] fixed inset-0 z-50  h-100vh md:w-72 e ">
        <div class="relative border-b border-white/20">
            <a class="flex items-center gap-4 py-6 px-8">
                <img src="img/logo.png" alt="" width="40px">
                <h6
                    class="hidden md:block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">
                    ONE HAND</h6>
            </a>
            <button
                class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
                type="button">
                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">

                </span>
            </button>
        </div>
        <div class="m-4">
            <ul class="mb-4 flex flex-col gap-1">

                <li>
                    {{-- switch langue --}}
                    <div class="hidden md:flex md:justify-center mt-2">

                        <input type="radio" id="arabic" name="langue" value="arabic" class="hidden">
                        <label for="arabic" id="labelarbic"
                            class="text-sm bg-white border-2 border-red-500 text-red-500 hover:bg-gray-300 rounded-md  cursor-pointer transition-colors duration-300 ease-in-out md:px-5  ">العربية</label>

                        <input type="radio" id="francais" name="langue" value="francais" class="hidden">
                        <label for="francais" id="labelFrance"
                            class= " hidden text-sm bg-white border-2 border-blue-500 text-blue-500 hover:bg-gray-300 rounded-md  cursor-pointer transition-colors duration-300 ease-in-out md:px-5 ">Francais</label>
                    </div>
                </li>
                @if (request()->is('admin-dashboard'))
                    <li>
                        <a aria-current="page" class="active" href="/admin-dashboard">

                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" fill="#ffffff" data-darkreader-inline-fill=""
                                    style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;"
                                    stroke="#ffffff" data-darkreader-inline-stroke="">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M9 18H4v-8h5v8zm6 0h-5V6h5v12zm6 0h-5V2h5v16zm1 4H3v-2h19v2z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <p id="statistique"
                                    class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Statistique</p>
                            </button>

                        </a>
                    </li>
                @else
                    <li>
                        <a aria-current="page" class="active" href="/admin-dashboard">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs  rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg width="24px" height="64px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" fill="#ffffff" data-darkreader-inline-fill=""
                                    style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;"
                                    stroke="#ffffff" data-darkreader-inline-stroke="">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M9 18H4v-8h5v8zm6 0h-5V6h5v12zm6 0h-5V2h5v16zm1 4H3v-2h19v2z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <p id="statistique1"
                                    class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Statistique</p>
                            </button>
                        </a>
                    </li>
                @endif

                @if (request()->is('admin-travailleur'))
                    <li>
                        <a class="" href="/admin-travailleur">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg width="24px" height="24px" viewBox="0 0 24.00 24.00" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"
                                            stroke="#fdfcfc" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-darkreader-inline-stroke=""
                                            style="--darkreader-inline-stroke: #e6e4e1;"></path>
                                    </g>
                                </svg>
                                <p id="Travailleur"
                                    class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Travailleur</p>
                            </button>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="" href="/admin-travailleur">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs  rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg width="24px" height="64px" viewBox="0 0 24.00 24.00" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"
                                            stroke="#fdfcfc" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-darkreader-inline-stroke=""
                                            style="--darkreader-inline-stroke: #e6e4e1;"></path>
                                    </g>
                                </svg>
                                <p id="Travailleur1"
                                    class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Travailleur</p>
                            </button>
                        </a>
                    </li>
                @endif

                @if (request()->is('publicitaire'))
                    <li>
                        <a class="" href="/publicitaire">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                              <svg fill="#ffffff" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M460.8,32.337H210.189v-2.695C210.189,13.298,196.891,0,180.547,0H94.316C77.972,0,64.674,13.298,64.674,29.642v2.695 H51.2c-28.231,0-51.2,22.969-51.2,51.2v21.558v301.811c0,28.231,22.969,51.2,51.2,51.2h185.937v24.253 c0,16.344,13.298,29.642,29.642,29.642h118.568c16.344,0,29.642-13.298,29.642-29.642v-24.253H460.8 c28.231,0,51.2-22.969,51.2-51.2V105.095V83.537C512,55.306,489.031,32.337,460.8,32.337z M80.842,29.642 c0-7.43,6.044-13.474,13.474-13.474h86.232c7.43,0,13.474,6.044,13.474,13.474v67.368H80.842V29.642z M16.168,83.537 c0-19.317,15.715-35.032,35.032-35.032h13.474v48.505H16.168V83.537z M237.137,267.538v120.504h-153.6 c-7.43,0-13.474-6.044-13.474-13.474V191.326c0-7.43,6.044-13.474,13.474-13.474h207.495v37.891l-40.695,27.13 C242.071,248.384,237.137,257.604,237.137,267.538z M398.821,482.358c0,7.43-6.044,13.474-13.474,13.474H266.779 c-7.43,0-13.474-6.044-13.474-13.474v-214.82c0-4.515,2.243-8.706,6-11.211l31.727-21.15v4.655c0,7.396,2.31,14.259,6.238,19.921 c-0.55,2.254-0.848,4.606-0.848,7.027c0,16.344,13.298,29.642,29.642,29.642s29.642-13.298,29.642-29.642 s-13.298-29.642-29.642-29.642c-6.984,0-13.408,2.434-18.479,6.49c-0.251-1.226-0.384-2.495-0.384-3.795v-15.433l11.39-7.594 c2.27-1.513,4.871-2.27,7.473-2.27c2.601,0,5.204,0.757,7.474,2.27l59.284,39.522c3.756,2.505,6,6.696,6,11.211V482.358z M326.063,258.695c-3.151,0-6.117-0.786-8.731-2.158c2.353-2.01,5.4-3.232,8.731-3.232c7.43,0,13.474,6.044,13.474,13.474 s-6.044,13.474-13.474,13.474c-5.297,0-9.877-3.08-12.077-7.536c3.767,1.387,7.834,2.146,12.077,2.146 c4.466,0,8.084-3.618,8.084-8.084C334.147,262.313,330.529,258.695,326.063,258.695z M401.79,242.873l-59.283-39.522 c-9.99-6.661-22.898-6.66-32.885,0l-2.421,1.615v-27.113h121.263c7.43,0,13.474,6.044,13.474,13.474v183.242 c0,7.43-6.044,13.474-13.474,13.474h-13.474V267.538C414.989,257.604,410.055,248.384,401.79,242.873z M309.046,161.684 c3.034-6.362,9.511-10.779,17.017-10.779s13.981,4.417,17.017,10.779H309.046z M495.832,406.905 c0,19.317-15.715,35.032-35.032,35.032h-45.811v-37.726h13.474c16.344,0,29.642-13.298,29.642-29.642V191.326 c0-16.344-13.298-29.642-29.642-29.642h-68.32c-3.661-15.43-17.546-26.947-34.08-26.947s-30.419,11.517-34.08,26.947H83.537 c-16.344,0-29.642,13.298-29.642,29.642v183.242c0,16.344,13.298,29.642,29.642,29.642h153.6v37.726H51.2 c-19.317,0-35.032-15.715-35.032-35.032V113.179h479.663V406.905z M495.832,97.011H210.189V48.505H460.8 c19.317,0,35.032,15.715,35.032,35.032V97.011z"></path> <path d="M417.684,64.135c-4.466,0-8.084,3.618-8.084,8.084v1.078c0,4.466,3.619,8.084,8.084,8.084s8.084-3.618,8.084-8.084 v-1.078C425.768,67.753,422.15,64.135,417.684,64.135z"></path> <path d="M385.347,64.135c-4.466,0-8.084,3.618-8.084,8.084v1.078c0,4.466,3.618,8.084,8.084,8.084 c4.466,0,8.084-3.618,8.084-8.084v-1.078C393.432,67.753,389.813,64.135,385.347,64.135z"></path> <path d="M450.021,64.135c-4.466,0-8.084,3.618-8.084,8.084v1.078c0,4.466,3.618,8.084,8.084,8.084 c4.466,0,8.084-3.618,8.084-8.084v-1.078C458.105,67.753,454.487,64.135,450.021,64.135z"></path> </g> </g> </g> </g></svg>
                                <p id="publicitaire"
                                    class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Publiciter</p>
                            </button>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="" href="/publicitaire">
                          <button
                          class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                          type="button">
                             <svg fill="#ffffff" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M460.8,32.337H210.189v-2.695C210.189,13.298,196.891,0,180.547,0H94.316C77.972,0,64.674,13.298,64.674,29.642v2.695 H51.2c-28.231,0-51.2,22.969-51.2,51.2v21.558v301.811c0,28.231,22.969,51.2,51.2,51.2h185.937v24.253 c0,16.344,13.298,29.642,29.642,29.642h118.568c16.344,0,29.642-13.298,29.642-29.642v-24.253H460.8 c28.231,0,51.2-22.969,51.2-51.2V105.095V83.537C512,55.306,489.031,32.337,460.8,32.337z M80.842,29.642 c0-7.43,6.044-13.474,13.474-13.474h86.232c7.43,0,13.474,6.044,13.474,13.474v67.368H80.842V29.642z M16.168,83.537 c0-19.317,15.715-35.032,35.032-35.032h13.474v48.505H16.168V83.537z M237.137,267.538v120.504h-153.6 c-7.43,0-13.474-6.044-13.474-13.474V191.326c0-7.43,6.044-13.474,13.474-13.474h207.495v37.891l-40.695,27.13 C242.071,248.384,237.137,257.604,237.137,267.538z M398.821,482.358c0,7.43-6.044,13.474-13.474,13.474H266.779 c-7.43,0-13.474-6.044-13.474-13.474v-214.82c0-4.515,2.243-8.706,6-11.211l31.727-21.15v4.655c0,7.396,2.31,14.259,6.238,19.921 c-0.55,2.254-0.848,4.606-0.848,7.027c0,16.344,13.298,29.642,29.642,29.642s29.642-13.298,29.642-29.642 s-13.298-29.642-29.642-29.642c-6.984,0-13.408,2.434-18.479,6.49c-0.251-1.226-0.384-2.495-0.384-3.795v-15.433l11.39-7.594 c2.27-1.513,4.871-2.27,7.473-2.27c2.601,0,5.204,0.757,7.474,2.27l59.284,39.522c3.756,2.505,6,6.696,6,11.211V482.358z M326.063,258.695c-3.151,0-6.117-0.786-8.731-2.158c2.353-2.01,5.4-3.232,8.731-3.232c7.43,0,13.474,6.044,13.474,13.474 s-6.044,13.474-13.474,13.474c-5.297,0-9.877-3.08-12.077-7.536c3.767,1.387,7.834,2.146,12.077,2.146 c4.466,0,8.084-3.618,8.084-8.084C334.147,262.313,330.529,258.695,326.063,258.695z M401.79,242.873l-59.283-39.522 c-9.99-6.661-22.898-6.66-32.885,0l-2.421,1.615v-27.113h121.263c7.43,0,13.474,6.044,13.474,13.474v183.242 c0,7.43-6.044,13.474-13.474,13.474h-13.474V267.538C414.989,257.604,410.055,248.384,401.79,242.873z M309.046,161.684 c3.034-6.362,9.511-10.779,17.017-10.779s13.981,4.417,17.017,10.779H309.046z M495.832,406.905 c0,19.317-15.715,35.032-35.032,35.032h-45.811v-37.726h13.474c16.344,0,29.642-13.298,29.642-29.642V191.326 c0-16.344-13.298-29.642-29.642-29.642h-68.32c-3.661-15.43-17.546-26.947-34.08-26.947s-30.419,11.517-34.08,26.947H83.537 c-16.344,0-29.642,13.298-29.642,29.642v183.242c0,16.344,13.298,29.642,29.642,29.642h153.6v37.726H51.2 c-19.317,0-35.032-15.715-35.032-35.032V113.179h479.663V406.905z M495.832,97.011H210.189V48.505H460.8 c19.317,0,35.032,15.715,35.032,35.032V97.011z"></path> <path d="M417.684,64.135c-4.466,0-8.084,3.618-8.084,8.084v1.078c0,4.466,3.619,8.084,8.084,8.084s8.084-3.618,8.084-8.084 v-1.078C425.768,67.753,422.15,64.135,417.684,64.135z"></path> <path d="M385.347,64.135c-4.466,0-8.084,3.618-8.084,8.084v1.078c0,4.466,3.618,8.084,8.084,8.084 c4.466,0,8.084-3.618,8.084-8.084v-1.078C393.432,67.753,389.813,64.135,385.347,64.135z"></path> <path d="M450.021,64.135c-4.466,0-8.084,3.618-8.084,8.084v1.078c0,4.466,3.618,8.084,8.084,8.084 c4.466,0,8.084-3.618,8.084-8.084v-1.078C458.105,67.753,454.487,64.135,450.021,64.135z"></path> </g> </g> </g> </g></svg>

                                <p id="publicitaire1"
                                    class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Publiciter</p>
                            </button>
                        </a>
                    </li>
                @endif

                @if (request()->is('admin-message'))
                    <li>
                        <a class="" href="/admin-message">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M7 9H17M7 13H17M21 20L17.6757 18.3378C17.4237 18.2118 17.2977 18.1488 17.1656 18.1044C17.0484 18.065 16.9277 18.0365 16.8052 18.0193C16.6672 18 16.5263 18 16.2446 18H6.2C5.07989 18 4.51984 18 4.09202 17.782C3.71569 17.5903 3.40973 17.2843 3.21799 16.908C3 16.4802 3 15.9201 3 14.8V7.2C3 6.07989 3 5.51984 3.21799 5.09202C3.40973 4.71569 3.71569 4.40973 4.09202 4.21799C4.51984 4 5.0799 4 6.2 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2V20Z"
                                            stroke="#fafafa" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-darkreader-inline-stroke=""
                                            style="--darkreader-inline-stroke: #e5e3df;"></path>
                                    </g>
                                </svg>
                                <p id="Message"
                                    class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Message</p>
                            </button>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="" href="/admin-message">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M7 9H17M7 13H17M21 20L17.6757 18.3378C17.4237 18.2118 17.2977 18.1488 17.1656 18.1044C17.0484 18.065 16.9277 18.0365 16.8052 18.0193C16.6672 18 16.5263 18 16.2446 18H6.2C5.07989 18 4.51984 18 4.09202 17.782C3.71569 17.5903 3.40973 17.2843 3.21799 16.908C3 16.4802 3 15.9201 3 14.8V7.2C3 6.07989 3 5.51984 3.21799 5.09202C3.40973 4.71569 3.71569 4.40973 4.09202 4.21799C4.51984 4 5.0799 4 6.2 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2V20Z"
                                            stroke="#fafafa" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-darkreader-inline-stroke=""
                                            style="--darkreader-inline-stroke: #e5e3df;"></path>
                                    </g>
                                </svg>
                                <p id="Message1"
                                    class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Message</p>
                            </button>
                        </a>
                    </li>
                @endif
            </ul>
            <ul class="mb-4 flex flex-col gap-1">
                <li class="mx-3.5 mt-4 mb-2">
                    <p
                        class="hidden md:block antialiased font-sans text-sm leading-normal text-white font-black uppercase opacity-75">
                        auth pages</p>
                </li>
                <li>

                    <a href="{{ route('logout') }}">
                        <button type="submit"
                            class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd"
                                    d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p id="logout"
                                class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                Log out</p>
                        </button>
                    </a>

                </li>

            </ul>
        </div>
    </aside>

    {{-- _________sidebar end__________ --}}


    @yield('content')

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/admin.js')}}"></script>

    {{-- <script>
        // Masquer le message de succès après 3 secondes
        setTimeout(function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 3000); // 3000 millisecondes = 3 secondes
    </script> --}}
</body>

</html>
