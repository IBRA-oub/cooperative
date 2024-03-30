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

    
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/style.css">
  
</head>

<body >
{{-- __________sidebar____________ --}}

<aside class="w-20 bg-[#31363F] fixed inset-0 z-50  h-100vh md:w-72 e ">
    <div class="relative border-b border-white/20">
      <a class="flex items-center gap-4 py-6 px-8" >
        <img src="img/logo.png" alt="" width="40px">
        <h6 class="hidden md:block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">ONE HAND</h6>
      </a>
      <button class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden" type="button">
        <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
       
        </span>
      </button>
    </div>
    <div class="m-4">
      <ul class="mb-4 flex flex-col gap-1">

        <li>
          {{-- switch langue --}}
          <div class="hidden md:flex md:justify-center mt-2">
            
            <input type="radio" id="arabicF" name="langue" value="arabicF" class="hidden">
            <label for="arabicF" id="labelarbicF" class="text-sm bg-white border-2 border-red-500 text-red-500 hover:bg-gray-300 rounded-md  cursor-pointer transition-colors duration-300 ease-in-out md:px-5  ">العربية</label>
        
            <input type="radio" id="francaisF" name="langueF" value="francais" class="hidden">
            <label for="francaisF"  id="labelFranceF" class= " hidden text-sm bg-white border-2 border-blue-500 text-blue-500 hover:bg-gray-300 rounded-md  cursor-pointer transition-colors duration-300 ease-in-out md:px-5 ">Francais</label>
        </div>
        </li>

        @if(request()->is('financiere-dashboard'))
        <li>
          <a aria-current="page" class="active" href="/financiere-dashboard">
           
            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"></path> <path d="M9 18H4v-8h5v8zm6 0h-5V6h5v12zm6 0h-5V2h5v16zm1 4H3v-2h19v2z"></path> </g> </g></svg>
              <p id="statistique" class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Statistique</p>
            </button>
           
        </a>
    </li>
    @else
    <li>
        <a aria-current="page" class="active" href="/financiere-dashboard">
            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs  rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg width="24px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"></path> <path d="M9 18H4v-8h5v8zm6 0h-5V6h5v12zm6 0h-5V2h5v16zm1 4H3v-2h19v2z"></path> </g> </g></svg>
                <p id="statistique1"  class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Statistique</p>
            </button>
        </a>
    </li>
    @endif

    @if(request()->is('financiere-revenu'))
    
    <li>
        <a class="" href="/financiere-revenu">
          <button     class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
          type="button">
          <svg fill="#ffffff" width="24px" height="24px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M277.675 981.521c5.657 0 10.24-4.583 10.24-10.24V499.514c0-5.651-4.588-10.24-10.24-10.24h-81.92c-5.652 0-10.24 4.589-10.24 10.24v471.767c0 5.657 4.583 10.24 10.24 10.24h81.92zm0 40.96h-81.92c-28.278 0-51.2-22.922-51.2-51.2V499.514c0-28.271 22.924-51.2 51.2-51.2h81.92c28.276 0 51.2 22.929 51.2 51.2v471.767c0 28.278-22.922 51.2-51.2 51.2zm275.456-40.96c5.657 0 10.24-4.583 10.24-10.24V408.777c0-5.657-4.583-10.24-10.24-10.24h-81.92a10.238 10.238 0 00-10.24 10.24v562.504c0 5.657 4.583 10.24 10.24 10.24h81.92zm0 40.96h-81.92c-28.278 0-51.2-22.922-51.2-51.2V408.777c0-28.278 22.922-51.2 51.2-51.2h81.92c28.278 0 51.2 22.922 51.2 51.2v562.504c0 28.278-22.922 51.2-51.2 51.2zm275.456-40.016c5.657 0 10.24-4.583 10.24-10.24V318.974c0-5.651-4.588-10.24-10.24-10.24h-81.92c-5.652 0-10.24 4.589-10.24 10.24v653.251c0 5.657 4.583 10.24 10.24 10.24h81.92zm0 40.96h-81.92c-28.278 0-51.2-22.922-51.2-51.2V318.974c0-28.271 22.924-51.2 51.2-51.2h81.92c28.276 0 51.2 22.929 51.2 51.2v653.251c0 28.278-22.922 51.2-51.2 51.2zM696.848 40.96l102.39.154c11.311.017 20.494-9.138 20.511-20.449S810.611.171 799.3.154L696.91 0c-11.311-.017-20.494 9.138-20.511 20.449s9.138 20.494 20.449 20.511z"></path><path d="M778.789 20.571l-.307 101.827c-.034 11.311 9.107 20.508 20.418 20.542s20.508-9.107 20.542-20.418l.307-101.827C819.783 9.384 810.642.187 799.331.153s-20.508 9.107-20.542 20.418z"></path><path d="M163.84 317.682h154.184a51.207 51.207 0 0036.211-14.999L457.208 199.71a10.263 10.263 0 017.237-3.003h159.754a51.235 51.235 0 0036.198-14.976l141.13-141.13c7.998-7.998 7.998-20.965 0-28.963s-20.965-7.998-28.963 0L631.447 152.755a10.265 10.265 0 01-7.248 2.992H464.445a51.226 51.226 0 00-36.201 14.999L325.271 273.719a10.244 10.244 0 01-7.248 3.003H163.839c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48z"></path></g></svg>                <p id="revenu" class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Revenu</p>
          </button>
        </a>
      </li>
    @else 
    <li>
          <a class="" href="/financiere-revenu">
            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs  rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
           <svg fill="#ffffff" width="24px" height="64px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M277.675 981.521c5.657 0 10.24-4.583 10.24-10.24V499.514c0-5.651-4.588-10.24-10.24-10.24h-81.92c-5.652 0-10.24 4.589-10.24 10.24v471.767c0 5.657 4.583 10.24 10.24 10.24h81.92zm0 40.96h-81.92c-28.278 0-51.2-22.922-51.2-51.2V499.514c0-28.271 22.924-51.2 51.2-51.2h81.92c28.276 0 51.2 22.929 51.2 51.2v471.767c0 28.278-22.922 51.2-51.2 51.2zm275.456-40.96c5.657 0 10.24-4.583 10.24-10.24V408.777c0-5.657-4.583-10.24-10.24-10.24h-81.92a10.238 10.238 0 00-10.24 10.24v562.504c0 5.657 4.583 10.24 10.24 10.24h81.92zm0 40.96h-81.92c-28.278 0-51.2-22.922-51.2-51.2V408.777c0-28.278 22.922-51.2 51.2-51.2h81.92c28.278 0 51.2 22.922 51.2 51.2v562.504c0 28.278-22.922 51.2-51.2 51.2zm275.456-40.016c5.657 0 10.24-4.583 10.24-10.24V318.974c0-5.651-4.588-10.24-10.24-10.24h-81.92c-5.652 0-10.24 4.589-10.24 10.24v653.251c0 5.657 4.583 10.24 10.24 10.24h81.92zm0 40.96h-81.92c-28.278 0-51.2-22.922-51.2-51.2V318.974c0-28.271 22.924-51.2 51.2-51.2h81.92c28.276 0 51.2 22.929 51.2 51.2v653.251c0 28.278-22.922 51.2-51.2 51.2zM696.848 40.96l102.39.154c11.311.017 20.494-9.138 20.511-20.449S810.611.171 799.3.154L696.91 0c-11.311-.017-20.494 9.138-20.511 20.449s9.138 20.494 20.449 20.511z"></path><path d="M778.789 20.571l-.307 101.827c-.034 11.311 9.107 20.508 20.418 20.542s20.508-9.107 20.542-20.418l.307-101.827C819.783 9.384 810.642.187 799.331.153s-20.508 9.107-20.542 20.418z"></path><path d="M163.84 317.682h154.184a51.207 51.207 0 0036.211-14.999L457.208 199.71a10.263 10.263 0 017.237-3.003h159.754a51.235 51.235 0 0036.198-14.976l141.13-141.13c7.998-7.998 7.998-20.965 0-28.963s-20.965-7.998-28.963 0L631.447 152.755a10.265 10.265 0 01-7.248 2.992H464.445a51.226 51.226 0 00-36.201 14.999L325.271 273.719a10.244 10.244 0 01-7.248 3.003H163.839c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48z"></path></g></svg>                <p id="revenu1"  class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Revenu</p>
            </button>
          </a>
        </li>
        @endif

        @if(request()->is('financiere-achat'))
    
        <li>
            <a class="" href="/financiere-achat">
              <button     class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
              type="button">
                <svg fill="#ffffff" width="24px" height="24px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M75.249 184.32h92.805c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48H75.249c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48z"></path><path d="M188.534 256.645V163.84c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48v92.805c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48z"></path><path d="M178.331 844.362c-87.4-87.4-137.372-205.543-137.372-331.641 0-119.519 44.857-231.97 124.29-318.029 7.672-8.312 7.153-21.268-1.159-28.94s-21.268-7.153-28.94 1.159C48.801 260.463-.001 382.804-.001 512.721c0 137.072 54.364 265.599 149.369 360.604 7.998 7.998 20.965 7.998 28.963 0s7.998-20.965 0-28.963zm769.796-5.999h-92.805c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48h92.805c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48z"></path><path d="M834.842 766.038v92.805c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48v-92.805c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48z"></path><path d="M845.045 178.322c87.4 87.4 137.372 205.543 137.372 331.641 0 119.519-44.857 231.97-124.29 318.029-7.672 8.312-7.153 21.268 1.159 28.94s21.268 7.153 28.94-1.159c86.349-93.552 135.151-215.893 135.151-345.81 0-137.072-54.364-265.599-149.369-360.604-7.998-7.998-20.965-7.998-28.963 0s-7.998 20.965 0 28.963zm-87.918 495.217c16.962 0 30.72-13.758 30.72-30.72V379.047c0-16.968-13.754-30.72-30.72-30.72H268.351c-16.966 0-30.72 13.752-30.72 30.72v263.772c0 16.962 13.758 30.72 30.72 30.72h488.776zm0 40.96H268.351c-39.583 0-71.68-32.097-71.68-71.68V379.047c0-39.591 32.094-71.68 71.68-71.68h488.776c39.586 0 71.68 32.089 71.68 71.68v263.772c0 39.583-32.097 71.68-71.68 71.68z"></path><path d="M586.34 510.932c0-40.651-32.952-73.605-73.605-73.605-40.644 0-73.595 32.956-73.595 73.605s32.951 73.605 73.595 73.605c40.653 0 73.605-32.954 73.605-73.605zm40.96 0c0 63.272-51.29 114.565-114.565 114.565-63.267 0-114.555-51.295-114.555-114.565s51.288-114.565 114.555-114.565c63.276 0 114.565 51.293 114.565 114.565z"></path></g></svg>                  <p id="achat"  class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Achat</p>
              </button>
            </a>
          </li>
        @else 
        <li>
              <a class="" href="/financiere-achat">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs  rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg fill="#ffffff" width="24px" height="64px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M75.249 184.32h92.805c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48H75.249c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48z"></path><path d="M188.534 256.645V163.84c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48v92.805c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48z"></path><path d="M178.331 844.362c-87.4-87.4-137.372-205.543-137.372-331.641 0-119.519 44.857-231.97 124.29-318.029 7.672-8.312 7.153-21.268-1.159-28.94s-21.268-7.153-28.94 1.159C48.801 260.463-.001 382.804-.001 512.721c0 137.072 54.364 265.599 149.369 360.604 7.998 7.998 20.965 7.998 28.963 0s7.998-20.965 0-28.963zm769.796-5.999h-92.805c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48h92.805c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48z"></path><path d="M834.842 766.038v92.805c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48v-92.805c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48z"></path><path d="M845.045 178.322c87.4 87.4 137.372 205.543 137.372 331.641 0 119.519-44.857 231.97-124.29 318.029-7.672 8.312-7.153 21.268 1.159 28.94s21.268 7.153 28.94-1.159c86.349-93.552 135.151-215.893 135.151-345.81 0-137.072-54.364-265.599-149.369-360.604-7.998-7.998-20.965-7.998-28.963 0s-7.998 20.965 0 28.963zm-87.918 495.217c16.962 0 30.72-13.758 30.72-30.72V379.047c0-16.968-13.754-30.72-30.72-30.72H268.351c-16.966 0-30.72 13.752-30.72 30.72v263.772c0 16.962 13.758 30.72 30.72 30.72h488.776zm0 40.96H268.351c-39.583 0-71.68-32.097-71.68-71.68V379.047c0-39.591 32.094-71.68 71.68-71.68h488.776c39.586 0 71.68 32.089 71.68 71.68v263.772c0 39.583-32.097 71.68-71.68 71.68z"></path><path d="M586.34 510.932c0-40.651-32.952-73.605-73.605-73.605-40.644 0-73.595 32.956-73.595 73.605s32.951 73.605 73.595 73.605c40.653 0 73.605-32.954 73.605-73.605zm40.96 0c0 63.272-51.29 114.565-114.565 114.565-63.267 0-114.555-51.295-114.555-114.565s51.288-114.565 114.555-114.565c63.276 0 114.565 51.293 114.565 114.565z"></path></g></svg>                    <p id="achat"  class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Achat</p>
                </button>
              </a>
            </li>
            @endif

        @if(request()->is('financiere-message'))
        <li>
            <a class="" href="/financiere-message">
                <button     class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                type="button">      
                              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 9H17M7 13H17M21 20L17.6757 18.3378C17.4237 18.2118 17.2977 18.1488 17.1656 18.1044C17.0484 18.065 16.9277 18.0365 16.8052 18.0193C16.6672 18 16.5263 18 16.2446 18H6.2C5.07989 18 4.51984 18 4.09202 17.782C3.71569 17.5903 3.40973 17.2843 3.21799 16.908C3 16.4802 3 15.9201 3 14.8V7.2C3 6.07989 3 5.51984 3.21799 5.09202C3.40973 4.71569 3.71569 4.40973 4.09202 4.21799C4.51984 4 5.0799 4 6.2 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2V20Z" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e5e3df;"></path> </g></svg> 
                               <p  id="message" class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Message</p>
              </button>
            </a>
          </li>
        @else
        <li>
          <a class="" href="/financiere-message">
            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 9H17M7 13H17M21 20L17.6757 18.3378C17.4237 18.2118 17.2977 18.1488 17.1656 18.1044C17.0484 18.065 16.9277 18.0365 16.8052 18.0193C16.6672 18 16.5263 18 16.2446 18H6.2C5.07989 18 4.51984 18 4.09202 17.782C3.71569 17.5903 3.40973 17.2843 3.21799 16.908C3 16.4802 3 15.9201 3 14.8V7.2C3 6.07989 3 5.51984 3.21799 5.09202C3.40973 4.71569 3.71569 4.40973 4.09202 4.21799C4.51984 4 5.0799 4 6.2 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2V20Z" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e5e3df;"></path> </g></svg> 
                             <p  id="message1"  class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Message</p>
            </button>
          </a>
        </li>
        @endif
      </ul>
      <ul class="mb-4 flex flex-col gap-1">
        <li class="mx-3.5 mt-4 mb-2">
          <p class="hidden md:block antialiased font-sans text-sm leading-normal text-white font-black uppercase opacity-75">auth pages</p>
        </li>
        <li>
          
            <form method="POST" action="">
                @csrf
            <button type="submit" class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
              </svg>
              <p id="logout" class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize"> Log out</p>
            </button>
            </form>
         
        </li>
       
      </ul>
    </div>
  </aside>

{{-- _________sidebar end__________ --}}
   

    @yield('content')

    <script src="js/main.js"></script>
    <script src="js/financier.js"></script>
    
    <script>
        // Masquer le message de succès après 3 secondes
        setTimeout(function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 3000); // 3000 millisecondes = 3 secondes
    </script>
</body>

</html>
