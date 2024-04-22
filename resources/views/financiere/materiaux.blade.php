@extends('layouts.financiere-layouts')

@section('title', 'financiere achat')
@section('content')

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main">
        <div class="hidden h-screen w-32 bg-white absolute top-0 z-10 md:flex flex-col ">


            <a href="/financiere-materiel" class="mt-32">
                <div
                    class="border flex md:grid grid-cols-5 rounded-lg shadow-lg  shadow-emerald-200 border-black border-t-2 border-l-2 hover:rounded">
                    <h3 id="materiel" class="text-center text-black py-5 col-end-4 ">materiel</h3>
                </div>
            </a>

            <a href="/financiere-electriciter-eau" class="mt-10">
                <div
                    class="border flex md:grid grid-cols-5 rounded-lg shadow-lg  shadow-purple-200 border-black border-t-2 border-l-2 hover:rounded">
                    <h3 id="ElectriciterEau" class="text-center text-black py-5 col-end-4 ">Electriciter <br> eau</h3>
                </div>
            </a>

            <a href="/financiere-location" class="mt-10">
                <div
                    class="border flex md:grid grid-cols-5 rounded-lg shadow-lg shadow-yellow-200 border-black border-t-2 border-l-2 hover:rounded">
                  
                    <h3 id="Location" class="text-center text-black py-5 col-end-4 ">location</h3>
                </div>
            </a>
            <a class="mt-10">
                <div
                    class="border flex md:grid grid-cols-5 rounded-lg shadow-lg bg-rose-200 shadow-rose-200 border-black border-t-2 border-l-2 hover:rounded">
                    
                    <h3 id="materiaux" class="text-center text-black py-5 col-end-4 ">materiaux</h3>
                </div>
            </a>

        </div>
        <!--===========Content===========-->
        <main class="bg-white flex-grow h-[100vh] relative">
            <!-- ============== header =========== -->

            <div class="absolute right-10  sm:top-10 sm:right-10 ">
                <a href="/add-materiaux">
                    <button id="addProAch"
                        class=" rounded-lg px-10 py-3 bg-[#31363F] font-bold text-white hover:bg-green-500   hover:shadow-lg hover:shadow-black active:opacity-[0.95]">
                        ajouter
                    </button>
                </a>

            </div>
            <!-- ============ Content ============= -->

            <div class="md:p-6 bg-white md:m-5 ">
                @if (session('success'))
                    <div id="success-alert"
                        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative ml-[17%] w-[70%]"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- ========== table -desktop ======== -->

                <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[90%] items-center ml-32">
                    <table class="   w-full   " id="table1">
                        <thead class="  sm:w-full">
                            <tr class="bg-[#31363F] text-white h-[40px]">
                                <th id="idA" class="">ID</th>
                                <th id="NomProAch" class="">nom </th>
                                <th id="quantiterAch" class="">quantiter</th>
                                <th id="prixAch" class="">prix </th>
                                <th id="dateAch" class="">date </th>

                                <th id="actionsAch" class="">plus options</th>
                            </tr>
                        </thead>

                        <tbody class="sm:w-full">
                            @if($Materiaux->isNotEmpty())
                            @foreach($Materiaux as $mater)
                            <tr class=" pt-10 sm:pt-0  w-full border-b border-blue-400">

                                <td class=" text-center ">
                                    {{$mater->id}}
                                </td>
                                <td class=" text-center ">
                                    {{$mater->nom}}
                                </td>
                                <td class=" text-center ">
                                    {{$mater->quantiter}}
                                </td>

                                <td class=" text-center ">
                                    {{$mater->prix}}dh
                                </td>
                                <td class=" text-center ">
                                    {{$mater->date}}
                                </td>



                                <td class="  text-center flex justify-center ">
                                    <form action="{{ route('materiaux.delete', ['id' => $mater->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                            <a href=""><i class="fa-solid fa-trash " style="color:#ffffff"></i></a>

                                        </button>
                                    </form>
                                    <a href="{{ route('edit-materiaux', ['id' => $mater->id]) }}">
                                        <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">

                                            <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                                        </button>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                            @else
                     
                             
            <p class="text-2xl text-black font-bold flex justify-center items-center" >Il n'y a pas donneés </p>
        
    
    @endif
                        </tbody>

                    </table>
                </div>

                <!-- ========== table -mobile ======== -->
                <div class="block sm:hidden rounded-lg overflow-hidden mt-10 ">
                    <table class=" block sm:hidden w-full  border-2 sm:border-0  " id="table2">
                        <thead class="hidden">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody class="block  w-full">

                            @foreach($Materiaux as $mater)
                            <tr class="block pt-10 sm:pt-0   w-full ">

                                <td data-label="id"
                                    class="border-b before:content-['id']  before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                                    {{$mater->id}}
                                </td>
                                <td data-label="nom"
                                    class="border-b before:content-['nom'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                              {{$mater->nom}}
                                </td>
                                <td data-label="quantiter"
                                    class="border-b before:content-['quantiter'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                              {{$mater->quantiter}}
                                </td>
                                <td data-label="Prix"
                                    class="border-b before:content-['Prix'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                              {{$mater->prix}}dh
                                </td>
                                <td data-label="date"
                                    class="border-b before:content-['date'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                              {{$mater->date}}
                                </td>
                                <td data-label="Action"
                                    class="border-b before:content-['Action'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                              <div class="flex justify-end">
                                    <form action="{{ route('materiaux.delete', ['id' => $mater->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                            <a href=""><i class="fa-solid fa-trash " style="color:#ffffff"></i></a>

                                        </button>
                                    </form>
                                    <a href="{{ route('edit-materiaux', ['id' => $mater->id]) }}">
                                        <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">

                                            <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                                        </button>
                                    </a>
                              </div>
                                </td>




                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>



            </div>
            <!-- ============ Content ============= -->


        </main>


    </main>



@endsection
