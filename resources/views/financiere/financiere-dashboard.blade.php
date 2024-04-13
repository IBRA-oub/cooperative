@extends('layouts.financiere-layouts')

@section('title', 'financiere Dashboard')

@section('content')


<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
   


        <style>
            .card {
                --main-color: #000;
                --submain-color: #78858F;
                --bg-color: #fff;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                position: relative;
                width: 100%;
                height: 384px;
                display: flex;
                flex-direction: column;
                align-items: center;
                border-radius: 20px;
                background: var(--bg-color);
            }

            .card__img {
                height: 192px;
                width: 100%;
            }

            .card__img svg {
                height: 100%;
                border-radius: 20px 20px 0 0;
            }

            .card__avatar {
                position: absolute;
                width: 114px;
                height: 114px;
                background: var(--bg-color);
                border-radius: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                top: calc(50% - 57px);
            }

            .card__avatar svg {
                width: 100px;
                height: 100px;
            }

            .card__title {
                margin-top: 60px;
                font-weight: 500;
                font-size: 18px;
                color: var(--main-color);
            }

            .card__subtitle {
                margin-top: 10px;
                font-weight: 400;
                font-size: 15px;
                color: var(--submain-color);
            }

            .card__btn {
                margin-top: 15px;
                width: 76px;
                height: 31px;
                border: 2px solid var(--main-color);
                border-radius: 4px;
                font-weight: 700;
                font-size: 11px;
                color: var(--main-color);
                background: var(--bg-color);
                text-transform: uppercase;
                transition: all 0.3s;
            }

            .card__btn-solid {
                background: var(--main-color);
                color: var(--bg-color);
            }

            .card__btn:hover {
                background: var(--main-color);
                color: var(--bg-color);
            }

            .card__btn-solid:hover {
                background: var(--bg-color);
                color: var(--main-color);
            }
        </style>



        <div class="card">
            <div class="card__img"><svg xmlns="http://www.w3.org/2000/svg" width="100%">
                    <rect fill="#ffffff" width="540" height="450"></rect>
                    <defs>
                        <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="0" x2="0"
                            y1="0" y2="100%" gradientTransform="rotate(222,648,379)">
                            <stop offset="0" stop-color="#ffffff"></stop>
                            <stop offset="1" stop-color="#FC726E"></stop>
                        </linearGradient>
                        <pattern patternUnits="userSpaceOnUse" id="b" width="300" height="250" x="0" y="0"
                            viewBox="0 0 1080 900">
                            <g fill-opacity="0.5">
                                <polygon fill="#444" points="90 150 0 300 180 300"></polygon>
                                <polygon points="90 150 180 0 0 0"></polygon>
                                <polygon fill="#AAA" points="270 150 360 0 180 0"></polygon>
                                <polygon fill="#DDD" points="450 150 360 300 540 300"></polygon>
                                <polygon fill="#999" points="450 150 540 0 360 0"></polygon>
                                <polygon points="630 150 540 300 720 300"></polygon>
                                <polygon fill="#DDD" points="630 150 720 0 540 0"></polygon>
                                <polygon fill="#444" points="810 150 720 300 900 300"></polygon>
                                <polygon fill="#FFF" points="810 150 900 0 720 0"></polygon>
                                <polygon fill="#DDD" points="990 150 900 300 1080 300"></polygon>
                                <polygon fill="#444" points="990 150 1080 0 900 0"></polygon>
                                <polygon fill="#DDD" points="90 450 0 600 180 600"></polygon>
                                <polygon points="90 450 180 300 0 300"></polygon>
                                <polygon fill="#666" points="270 450 180 600 360 600"></polygon>
                                <polygon fill="#AAA" points="270 450 360 300 180 300"></polygon>
                                <polygon fill="#DDD" points="450 450 360 600 540 600"></polygon>
                                <polygon fill="#999" points="450 450 540 300 360 300"></polygon>
                                <polygon fill="#999" points="630 450 540 600 720 600"></polygon>
                                <polygon fill="#FFF" points="630 450 720 300 540 300"></polygon>
                                <polygon points="810 450 720 600 900 600"></polygon>
                                <polygon fill="#DDD" points="810 450 900 300 720 300"></polygon>
                                <polygon fill="#AAA" points="990 450 900 600 1080 600"></polygon>
                                <polygon fill="#444" points="990 450 1080 300 900 300"></polygon>
                                <polygon fill="#222" points="90 750 0 900 180 900"></polygon>
                                <polygon points="270 750 180 900 360 900"></polygon>
                                <polygon fill="#DDD" points="270 750 360 600 180 600"></polygon>
                                <polygon points="450 750 540 600 360 600"></polygon>
                                <polygon points="630 750 540 900 720 900"></polygon>
                                <polygon fill="#444" points="630 750 720 600 540 600"></polygon>
                                <polygon fill="#AAA" points="810 750 720 900 900 900"></polygon>
                                <polygon fill="#666" points="810 750 900 600 720 600"></polygon>
                                <polygon fill="#999" points="990 750 900 900 1080 900"></polygon>
                                <polygon fill="#999" points="180 0 90 150 270 150"></polygon>
                                <polygon fill="#444" points="360 0 270 150 450 150"></polygon>
                                <polygon fill="#FFF" points="540 0 450 150 630 150"></polygon>
                                <polygon points="900 0 810 150 990 150"></polygon>
                                <polygon fill="#222" points="0 300 -90 450 90 450"></polygon>
                                <polygon fill="#FFF" points="0 300 90 150 -90 150"></polygon>
                                <polygon fill="#FFF" points="180 300 90 450 270 450"></polygon>
                                <polygon fill="#666" points="180 300 270 150 90 150"></polygon>
                                <polygon fill="#222" points="360 300 270 450 450 450"></polygon>
                                <polygon fill="#FFF" points="360 300 450 150 270 150"></polygon>
                                <polygon fill="#444" points="540 300 450 450 630 450"></polygon>
                                <polygon fill="#222" points="540 300 630 150 450 150"></polygon>
                                <polygon fill="#AAA" points="720 300 630 450 810 450"></polygon>
                                <polygon fill="#666" points="720 300 810 150 630 150"></polygon>
                                <polygon fill="#FFF" points="900 300 810 450 990 450"></polygon>
                                <polygon fill="#999" points="900 300 990 150 810 150"></polygon>
                                <polygon points="0 600 -90 750 90 750"></polygon>
                                <polygon fill="#666" points="0 600 90 450 -90 450"></polygon>
                                <polygon fill="#AAA" points="180 600 90 750 270 750"></polygon>
                                <polygon fill="#444" points="180 600 270 450 90 450"></polygon>
                                <polygon fill="#444" points="360 600 270 750 450 750"></polygon>
                                <polygon fill="#999" points="360 600 450 450 270 450"></polygon>
                                <polygon fill="#666" points="540 600 630 450 450 450"></polygon>
                                <polygon fill="#222" points="720 600 630 750 810 750"></polygon>
                                <polygon fill="#FFF" points="900 600 810 750 990 750"></polygon>
                                <polygon fill="#222" points="900 600 990 450 810 450"></polygon>
                                <polygon fill="#DDD" points="0 900 90 750 -90 750"></polygon>
                                <polygon fill="#444" points="180 900 270 750 90 750"></polygon>
                                <polygon fill="#FFF" points="360 900 450 750 270 750"></polygon>
                                <polygon fill="#AAA" points="540 900 630 750 450 750"></polygon>
                                <polygon fill="#FFF" points="720 900 810 750 630 750"></polygon>
                                <polygon fill="#222" points="900 900 990 750 810 750"></polygon>
                                <polygon fill="#222" points="1080 300 990 450 1170 450"></polygon>
                                <polygon fill="#FFF" points="1080 300 1170 150 990 150"></polygon>
                                <polygon points="1080 600 990 750 1170 750"></polygon>
                                <polygon fill="#666" points="1080 600 1170 450 990 450"></polygon>
                                <polygon fill="#DDD" points="1080 900 1170 750 990 750"></polygon>
                            </g>
                        </pattern>
                    </defs>
                    <rect x="0" y="0" fill="url(#a)" width="100%" height="100%"></rect>
                    <rect x="0" y="0" fill="url(#b)" width="100%" height="100%"></rect>
                </svg></div>
            <div class="card__avatar"><img class="w-full h-full rounded-full"
                    src="" alt=""></div>
            <div class="card__title">Your name : <i></i> </div>
            <div class="card__subtitle">UserName : <strong><i></i></strong> </div>
            {{-- <div class="card__wrapper">
                <button class="card__btn">Button</button>
                <button class="card__btn card__btn-solid">Button</button>
            </div> --}}
        </div>


    
   

    </div>
    <h1 class="text-md md:text-2xl font-bold text-gray-700 ml-[20%] md:ml-10">Les Statistique:</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6 px-4 py-8">

            
        <div
            class="flex flex-col justify-center items-center gap-2 border border-dashed border-gray-500 p-4 text-black rounded-md h-32 bg-gray-200 ml-9">
            <div class="flex gap-2 items-center">
                <span class="font-bold text-4xl">hj</span>
                <svg class="w-8 h-8 opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z">
                    </path>
                </svg>
            </div>
            <span class="font-semibold opacity-70 text-sm text-center">Event Pending</span>
        </div>
    
        <div
            class="flex flex-col justify-center items-center gap-2 border border-dashed border-gray-500 p-4 text-black rounded-md h-32 bg-gray-200 ">
            <div class="flex gap-2 items-center">
                <span class="font-bold text-4xl">hj</span>
                <svg class="w-8 h-8 opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z">
                    </path>
                </svg>
    
            </div>
            <span class="font-semibold opacity-70 text-sm text-center">Event Accepted</span>
        </div>
    
        <div
            class="flex flex-col justify-center items-center gap-2 border border-dashed border-gray-500 p-4 text-black rounded-md h-32 bg-gray-200 ml-9">
            <div class="flex gap-2 items-center">
                <span class="font-bold text-4xl">hj</span>
                <svg class="w-8 h-8 opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
            <span class="font-semibold opacity-70 text-sm text-center"> Users</span>
        </div>
    
        <div
            class="md:col-start-2 lg:col-auto flex flex-col justify-center items-center gap-2 border border-dashed text-black border-gray-500 p-4 rounded-md h-32 bg-gray-200 ml">
            <div class="flex gap-2 items-center">
                <span class="font-bold text-4xl">ghj</span>
                <svg class="w-8 h-8 opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                </svg>
    
            </div>
            <span class="font-semibold opacity-70 text-sm text-center">Categories</span>
        </div>
    
    </div>
</main>
@endsection