<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

  

</head>


<body class="bg-gradient-to-tr from-fuchsia-400 to-green-200">
    <section class="sm:flex w-full h-screen ">
        <div class="hidden sm:block w-1/3 bg-white ">
         <img src="img/login.png" alt="" class="w-full h-full">
        </div>

        <div class="sm:w-2/3 flex justify-center mt-20">
            <div class="text-black w-[60%] md:w-[40%]">
                <div class="mb-8 flex flex-col items-center">
                  <img src="img/big_logo.png" width="200" alt="" srcset="" />
                 
                </div>
                <form action="#">
                    <div class="flex items-center text-lg mb-6 md:mb-8">
                        <svg class="absolute ml-3" width="24" viewBox="0 0 24 24">
                          <path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/>
                        </svg>
                        <input type="text" id="username" class="bg-white rounded-md pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Email" />
                      </div>
                      <div class="flex items-center text-lg mb-2 md:mb-2">
                        <svg class="absolute ml-3" viewBox="0 0 24 24" width="24">
                          <path d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z"/>
                        </svg>
                        <input type="password" id="password" class="bg-white  rounded-md pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Password" />
                      </div>
                      <p id="forgetPassword" class="text-blue-600">oublier mot de passe?</p>
                  <div class="mt-8 flex justify-center text-lg text-black">
                    <button id="loginBTn" type="submit" class="w-full rounded-2xl bg-fuchsia-600 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-green-400">Login</button>
                  </div>
                </form>
              </div>
        </div>
   </section>
</body>
</html>
