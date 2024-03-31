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
            
            <input type="radio" id="arabicPU" name="langue" value="arabicPU" class="hidden">
            <label for="arabicPU" id="labelarbicPU" class="text-sm bg-white border-2 border-red-500 text-red-500 hover:bg-gray-300 rounded-md  cursor-pointer transition-colors duration-300 ease-in-out md:px-5  ">العربية</label>
        
            <input type="radio" id="francaisPU" name="langue" value="francaisPU" class="hidden">
            <label for="francaisPU"  id="labelFrancePU" class= " hidden text-sm bg-white border-2 border-blue-500 text-blue-500 hover:bg-gray-300 rounded-md  cursor-pointer transition-colors duration-300 ease-in-out md:px-5 ">Francais</label>
        </div>
        </li>
        @if(request()->is('publicitaire-info-stati'))
        <li>
          <a aria-current="page" class="active" href="/publicitaire-info-stati">
           
            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"></path> <path d="M9 18H4v-8h5v8zm6 0h-5V6h5v12zm6 0h-5V2h5v16zm1 4H3v-2h19v2z"></path> </g> </g></svg>
              <p id="infoSatati" class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">info/Statistique</p>
            </button>
           
        </a>
    </li>
    @else
    <li>
        <a aria-current="page" class="active" href="/publicitaire-info-stati">
            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs  rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg width="24px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b; --darkreader-inline-stroke: #e8e6e3;" stroke="#ffffff" data-darkreader-inline-stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"></path> <path d="M9 18H4v-8h5v8zm6 0h-5V6h5v12zm6 0h-5V2h5v16zm1 4H3v-2h19v2z"></path> </g> </g></svg>
                <p id="infoSatati1"  class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">info/Statistique</p>
            </button>
        </a>
    </li>
    @endif


        @if(request()->is('publicitaire-dashboard'))
    
        <li>
            <a class="" href="/publicitaire-dashboard">
              <button     class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
              type="button">
            <svg width="24px" height="24px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e8e6e3;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 10.0005H7.082C6.66587 9.99708 6.26541 10.1591 5.96873 10.4509C5.67204 10.7427 5.50343 11.1404 5.5 11.5565V17.4455C5.5077 18.3117 6.21584 19.0078 7.082 19.0005H9.918C10.3341 19.004 10.7346 18.842 11.0313 18.5502C11.328 18.2584 11.4966 17.8607 11.5 17.4445V11.5565C11.4966 11.1404 11.328 10.7427 11.0313 10.4509C10.7346 10.1591 10.3341 9.99708 9.918 10.0005Z" stroke="#fdfcfc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e6e4e1;"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 4.0006H7.082C6.23326 3.97706 5.52559 4.64492 5.5 5.4936V6.5076C5.52559 7.35629 6.23326 8.02415 7.082 8.0006H9.918C10.7667 8.02415 11.4744 7.35629 11.5 6.5076V5.4936C11.4744 4.64492 10.7667 3.97706 9.918 4.0006Z" stroke="#fdfcfc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e6e4e1;"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 13.0007H17.917C18.3333 13.0044 18.734 12.8425 19.0309 12.5507C19.3278 12.2588 19.4966 11.861 19.5 11.4447V5.55666C19.4966 5.14054 19.328 4.74282 19.0313 4.45101C18.7346 4.1592 18.3341 3.9972 17.918 4.00066H15.082C14.6659 3.9972 14.2654 4.1592 13.9687 4.45101C13.672 4.74282 13.5034 5.14054 13.5 5.55666V11.4447C13.5034 11.8608 13.672 12.2585 13.9687 12.5503C14.2654 12.8421 14.6659 13.0041 15.082 13.0007Z" stroke="#fdfcfc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e6e4e1;"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 19.0006H17.917C18.7661 19.0247 19.4744 18.3567 19.5 17.5076V16.4936C19.4744 15.6449 18.7667 14.9771 17.918 15.0006H15.082C14.2333 14.9771 13.5256 15.6449 13.5 16.4936V17.5066C13.525 18.3557 14.2329 19.0241 15.082 19.0006Z" stroke="#fdfcfc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e6e4e1;"></path> </g></svg>                       <p id="dashboard" class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">dashboard</p>
       </button>
            </a>
          </li>
        @else 
        <li>
              <a class="" href="/publicitaire-dashboard">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs  rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
            <svg width="24px" height="64px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e8e6e3;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 10.0005H7.082C6.66587 9.99708 6.26541 10.1591 5.96873 10.4509C5.67204 10.7427 5.50343 11.1404 5.5 11.5565V17.4455C5.5077 18.3117 6.21584 19.0078 7.082 19.0005H9.918C10.3341 19.004 10.7346 18.842 11.0313 18.5502C11.328 18.2584 11.4966 17.8607 11.5 17.4445V11.5565C11.4966 11.1404 11.328 10.7427 11.0313 10.4509C10.7346 10.1591 10.3341 9.99708 9.918 10.0005Z" stroke="#fdfcfc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e6e4e1;"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 4.0006H7.082C6.23326 3.97706 5.52559 4.64492 5.5 5.4936V6.5076C5.52559 7.35629 6.23326 8.02415 7.082 8.0006H9.918C10.7667 8.02415 11.4744 7.35629 11.5 6.5076V5.4936C11.4744 4.64492 10.7667 3.97706 9.918 4.0006Z" stroke="#fdfcfc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e6e4e1;"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 13.0007H17.917C18.3333 13.0044 18.734 12.8425 19.0309 12.5507C19.3278 12.2588 19.4966 11.861 19.5 11.4447V5.55666C19.4966 5.14054 19.328 4.74282 19.0313 4.45101C18.7346 4.1592 18.3341 3.9972 17.918 4.00066H15.082C14.6659 3.9972 14.2654 4.1592 13.9687 4.45101C13.672 4.74282 13.5034 5.14054 13.5 5.55666V11.4447C13.5034 11.8608 13.672 12.2585 13.9687 12.5503C14.2654 12.8421 14.6659 13.0041 15.082 13.0007Z" stroke="#fdfcfc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e6e4e1;"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 19.0006H17.917C18.7661 19.0247 19.4744 18.3567 19.5 17.5076V16.4936C19.4744 15.6449 18.7667 14.9771 17.918 15.0006H15.082C14.2333 14.9771 13.5256 15.6449 13.5 16.4936V17.5066C13.525 18.3557 14.2329 19.0241 15.082 19.0006Z" stroke="#fdfcfc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e6e4e1;"></path> </g></svg>                        <p id="dashboard1" class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">dashboard</p>
        </button>
              </a>
            </li>
            @endif

        @if(request()->is('publicitaire-message'))
        <li>
            <a class="" href="/publicitaire-message">
                <button     class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-md shadow-white hover:shadow-lg hover:shadow-white active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                type="button">      
                              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 9H17M7 13H17M21 20L17.6757 18.3378C17.4237 18.2118 17.2977 18.1488 17.1656 18.1044C17.0484 18.065 16.9277 18.0365 16.8052 18.0193C16.6672 18 16.5263 18 16.2446 18H6.2C5.07989 18 4.51984 18 4.09202 17.782C3.71569 17.5903 3.40973 17.2843 3.21799 16.908C3 16.4802 3 15.9201 3 14.8V7.2C3 6.07989 3 5.51984 3.21799 5.09202C3.40973 4.71569 3.71569 4.40973 4.09202 4.21799C4.51984 4 5.0799 4 6.2 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2V20Z" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e5e3df;"></path> </g></svg> 
                               <p id="message"  class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Message</p>
              </button>
            </a>
          </li>
        @else
        <li>
          <a class="" href="/publicitaire-message">
            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 9H17M7 13H17M21 20L17.6757 18.3378C17.4237 18.2118 17.2977 18.1488 17.1656 18.1044C17.0484 18.065 16.9277 18.0365 16.8052 18.0193C16.6672 18 16.5263 18 16.2446 18H6.2C5.07989 18 4.51984 18 4.09202 17.782C3.71569 17.5903 3.40973 17.2843 3.21799 16.908C3 16.4802 3 15.9201 3 14.8V7.2C3 6.07989 3 5.51984 3.21799 5.09202C3.40973 4.71569 3.71569 4.40973 4.09202 4.21799C4.51984 4 5.0799 4 6.2 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2V20Z" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: #e5e3df;"></path> </g></svg> 
                             <p id="message1"  class="hidden md:block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Message</p>
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
    <script src="js/publicitaire.js"></script>
    
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
