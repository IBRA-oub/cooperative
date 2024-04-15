@extends('layouts.financiere-layouts')

@section('title', 'financiere Charge')
@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
  
    <div class="h-screen">
        <div class=" flex flex-col sm:mx-72 mx-8   py-[10%] ">
            <a href="/financiere-materiel" >
          <div class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-emerald-200 border-black border-t-2 border-l-2 hover:rounded">
                <div class="translate-y-4 pl-8"> <Image alt="instagram logo" width="30" height="30" src="https://static.wixstatic.com/media/9ae113_6e1036826c9e4c318a7d347f3a0f1bd2~mv2.jpg/v1/fill/w_600,h_378,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Outils%201%2009_20.jpg" /></div>
              <h3 class="text-center text-black py-5 col-end-4 pl-2">materiel </h3>
          </div>
          </a>
      
          <a href="/financiere-electriciter-eau" class="mt-10">
          <div class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-purple-200 border-black border-t-2 border-l-2 hover:rounded">
                <div class="translate-y-4 pl-8"> <Image alt="instagram logo" width="30" height="30" src="https://sahilnetic.xyz/instagram.png" /></div>
              <h3 class="text-center text-black py-5 col-end-4 pl-2">Electriciter/eau</h3>
          </div>
          </a>
      
          <a href="/financiere-location" class="mt-10">
          <div class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-yellow-200 border-black border-t-2 border-l-2 hover:rounded">
                <div class="translate-y-4 pl-8"> <Image alt="instagram logo" width="30" height="30" src="https://sahilnetic.xyz/instagram.png" /></div>
              <h3 class="text-center text-black py-5 col-end-4 pl-2">location</h3>
          </div>
         </a>
          <a href="/financiere-materiaux" class="mt-10">
          <div class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-rose-200 border-black border-t-2 border-l-2 hover:rounded">
                <div class="translate-y-4 pl-8"> <Image alt="instagram logo" width="30" height="30" src="https://sahilnetic.xyz/css.png" /></div>
              <h3 class="text-center text-black py-5 col-end-4 ">materiaux</h3>
          </div>
          </a>
        </div>
    </div>
 
 </main>


 
@endsection