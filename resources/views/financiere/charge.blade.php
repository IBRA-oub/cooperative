@extends('layouts.financiere-layouts')

@section('title', 'financiere Charge')
@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
  
    <div class="h-screen">
        <div class=" flex flex-col sm:mx-72 mx-8   py-[10%] ">
            <a href="/financiere-materiel" >
          <div class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-emerald-200 border-black border-t-2 border-l-2 hover:rounded">
                <div class="translate-y-4 pl-8"> </div>
              <h3 id="materiel" class="font-bold text-center text-black py-5 col-end-4 pl-2">Materiel </h3>
          </div>
          </a>
      
          <a href="/financiere-electriciter-eau" class="mt-10">
          <div class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-purple-200 border-black border-t-2 border-l-2 hover:rounded">
                <div class="translate-y-4 pl-8"> </div>
              <h3 id="ElectriciterEau" class="font-bold text-center text-black py-5 col-end-4 pl-2">Electriciter/eau</h3>
          </div>
          </a>
      
          <a href="/financiere-location" class="mt-10">
          <div class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-yellow-200 border-black border-t-2 border-l-2 hover:rounded">
                <div class="translate-y-4 pl-8"> </div>
              <h3 id="Location" class="font-bold text-center text-black py-5 col-end-4 pl-2">Location</h3>
          </div>
         </a>
          <a href="/financiere-materiaux" class="mt-10">
          <div class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-rose-200 border-black border-t-2 border-l-2 hover:rounded">
                <div class="translate-y-4 pl-8"> </div>
              <h3 id="materiaux" class="font-bold text-center text-black py-5 col-end-4 ">Materiaux</h3>
          </div>
          </a>
        </div>
    </div>
 
 </main>


 
@endsection