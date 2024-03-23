@extends('layouts.planner-layouts')

@section('title', 'planner Dashboard')

@section('content')

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main">

<div class=" h-[800px] md:h-52 w-full bg-gray-600">
    <div class="absolute right-2   sm:right-2 ">
        
        <button class=" rounded-lg px-5 py-3 bg-[#ffffff] font-bold text-white hover:bg-green-500   hover:shadow-lg hover:shadow-black active:opacity-[0.95]" onclick="showModal3()">
            <i class="fa-solid fa-plus" style="color: #000000;"></i>
        </button>
         

     </div>
    <div class="h-52 w-[90%] flex justify-around flex-wrap ml-10">
        <div class="rounded-md bg-[#c0c1c2] shadow-xl w-60 h-[9.2rem] my-5 text-black">
            <p class="mt-3 ml-2 text-center text-xl">période:     <strong>9Atf argan</strong></p>
            <p class="mt-3 ml-2">date depart <i class="fa-solid fa-arrow-right" style="color: #fcfcfd;"></i> <strong>2045-66-6</strong></p>
            <p class="mt-3 ml-2">date stop <i class="fa-solid fa-arrow-right" style="color: #fcfcfd;"></i>   <strong>4466-6-6</strong></p>
            <div class="flex justify-end">
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                        <a
                            href=""><i
                                class="fa-solid fa-trash " style="color:#ffffff"></i></a>

                    </button>
                    </form>
                    <a href="/edit-periode">
                    <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                        
                            <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                    </button>
                </a>
          </div>
        </div>

        <div class="rounded-md bg-[#c0c1c2] shadow-xl w-60 h-[9.2rem] my-5 text-black">
            <p class="mt-3 ml-2 text-center text-xl">période:     <strong>9Atf argan</strong></p>
            <p class="mt-3 ml-2">date depart <i class="fa-solid fa-arrow-right" style="color: #fcfcfd;"></i> <strong>2045-66-6</strong></p>
            <p class="mt-3 ml-2">date stop <i class="fa-solid fa-arrow-right" style="color: #fcfcfd;"></i>   <strong>4466-6-6</strong></p>
            <div class="flex justify-end">
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                        <a
                            href=""><i
                                class="fa-solid fa-trash " style="color:#ffffff"></i></a>

                    </button>
                    </form>
                    <a href="/edit-periode">
                    <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                        
                            <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                    </button>
                </a>
          </div>
        </div>


        <div class="rounded-md bg-[#c0c1c2] shadow-xl w-60 h-[9.2rem] my-5 text-black">
            <p class="mt-3 ml-2 text-center text-xl">période:     <strong>9Atf argan</strong></p>
            <p class="mt-3 ml-2">date depart <i class="fa-solid fa-arrow-right" style="color: #fcfcfd;"></i> <strong>2045-66-6</strong></p>
            <p class="mt-3 ml-2">date stop <i class="fa-solid fa-arrow-right" style="color: #fcfcfd;"></i>   <strong>4466-6-6</strong></p>
            <div class="flex justify-end">
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                        <a
                            href=""><i
                                class="fa-solid fa-trash " style="color:#ffffff"></i></a>

                    </button>
                    </form>
                    <a href="/edit-periode">
                    <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                        
                            <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                    </button>
                </a>
          </div>
        </div>


        <div class="rounded-md bg-[#c0c1c2] shadow-xl w-60 h-[9.2rem] my-5 text-black">
            <p class="mt-3 ml-2 text-center text-xl">période:     <strong>9Atf argan</strong></p>
            <p class="mt-3 ml-2">date depart <i class="fa-solid fa-arrow-right" style="color: #fcfcfd;"></i> <strong>2045-66-6</strong></p>
            <p class="mt-3 ml-2">date stop <i class="fa-solid fa-arrow-right" style="color: #fcfcfd;"></i>   <strong>4466-6-6</strong></p>
            <div class="flex justify-end">
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                        <a
                            href=""><i
                                class="fa-solid fa-trash " style="color:#ffffff"></i></a>

                    </button>
                    </form>
                    <a href="/edit-periode">
                    <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                        
                            <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                    </button>
                </a>
          </div>
        </div>
    </div>
</div>

{{-- pop up for adding periode start --}}



<div id="myModal3" class="modal3 ">
    <div class="modal-content3 rounded-lg">
      <span class="close3" onclick="closeModal3()">&times;</span>
      <form id="updateForm">
        <p class="text-xl font-bold text-center">add periode</p>

        <label for="heurs" class="block text-black text-sm font-bold mb-2">nom de periode</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="heurs" id="heurs"  placeholder="3"><br>
            <label for="heurs" class="block text-black text-sm font-bold mb-2">date Depart</label>
            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                name="heurs" id="heurs"  placeholder="3"><br>
                <label for="heurs" class="block text-black text-sm font-bold mb-2">date Stop</label>
                <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                    name="heurs" id="heurs"  placeholder="3"><br>
        <button
        class="text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
        Save
       </button>                              

       </form>
    </div>
  </div>

  {{-- pop up for adding periode end --}}


{{-- produit planter start --}}
<div class="block md:flex gap-5 ml-[20%] w-[80%] md:w-[95%] h-screen  md:ml-10">
    <div class=" w-full h-full md:w-1/2  ">
        <main class="bg-gray-600 flex-grow h-[100vh] relative rounded-xl shadow-2xl">
            <!-- ============== header =========== -->
        
            <div class="absolute right-0 sm:top-4 sm:right-10 ">
              
               <button onclick="showModal4()" class=" rounded-lg px-10 py-3 bg-[#ffffff] font-bold text-gray-700 hover:bg-green-400 hover:text-white   hover:shadow-lg  ">
                   add produit
               </button>
           
       
            </div>
            <!-- ============ Content ============= -->
        
            <div class="md:p-6 bg-gray-600  md:m-5">
               @if (session('success'))
               <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                   <strong class="font-bold">Success!</strong>
                   <span class="block sm:inline">{{ session('success') }}</span>
               </div>
               @endif
        
                <!-- ========== table Banks-desktop ======== -->
              
                <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
                    <table class="  
                   w-full   " id="table1">
                        <thead class="  sm:w-full">
                            <tr class="bg-[#fefeff] text-black h-[40px]">
                                <th class="">ID</th>
                                <th class="">nom de produit</th>
                                
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        {{-- @foreach($allUsers as $user) --}}
                        <tbody class="sm:w-full">
                         
        
                            <tr class=" text-white pt-10 sm:pt-0  w-full border-b border-[#ffffff]">
        
                                <td class=" text-center ">
                                    {{-- {{$user->id}} --}}
                                    4
                                </td>
                                <td class=" text-center ">
                                   {{-- {{$user->fullName}} --}}
                                   za3tar
                                </td>
                             
                              
                                   <td class="text-center flex justify-center">
                                       <form action="" method="POST">
                                           @csrf
                                           @method('DELETE')
                                        <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                            <a
                                                href=""><i
                                                    class="fa-solid fa-trash " style="color:#ffffff"></i></a>
            
                                        </button>
                                       </form>
                                       <a href="/edit-produit">
                                        <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                                           
                                               <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                                       </button>
                                   </a>
                                </td>
                               
                            </tr>
                      
        
                        </tbody>
                        {{-- @endforeach --}}
                    </table>
                </div>
                
                <!-- ========== table Banks-mobile ======== -->
                <div class="block sm:hidden rounded-lg overflow-hidden mt-10 ">
                    <table class=" block sm:hidden w-full  border-2 sm:border-0  " id="table2">
                        <thead class="hidden">
                            <tr>
                                <th></th>
                                <th></th>
                               
                                <th></th>
        
        
                            </tr>
                        </thead>
                        <tbody class="block  w-full">
                           {{-- @foreach($allUsers as $user) --}}
                            <tr class="block pt-10 mt-9 sm:mt-0 sm:pt-0   w-full ">
        
                                <td data-label="id"
                                    class="border-b before:content-['id']  before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                                  {{-- {{$user->id}} --}}
                                  3
                                </td>
                                <td data-label="nomProduit" class="border-b before:content-['nomProduit'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                                     text-right">
                                   {{-- {{$user->fullName}} --}}
                                   za3tar
                                </td>
                           
                                <td data-label="Action"
                                    class=" border-b before:content-['action'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                                   
       
                                    <form action="" method="POST">
                                       @csrf
                                       @method('DELETE')
                                    <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                        <a
                                            href=""><i
                                                class="fa-solid fa-trash " style="color:#ffffff"></i></a>
        
                                    </button>
                                   </form>
                                   <a href="/edit-produit">
                                    <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                                       
                                           <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                                   </button>
                                   </a>
       
                                   
                                </td>
                                
                            </tr>
                         {{-- @endforeach --}}
        
                        </tbody>
                    </table>
                </div>
        
        
        
            </div>
            <!-- ============ Content ============= -->
        
        
        </main>
    </div>

    {{-- produit plannter end  --}}


    {{-- materiaux/outils start --}}
    <div class=" w-full h-full md:w-1/2  ">
        <main class="bg-gray-600 flex-grow h-[100vh] relative rounded-xl shadow-2xl">
            <!-- ============== header =========== -->
        
            <div class="absolute right-10 sm:top-4 sm:right-10 ">
               
               <button onclick="showModal5()" class=" rounded-lg px-10 py-3 bg-[#ffffff] font-bold text-gray-700 hover:bg-green-400 hover:text-white   hover:shadow-lg  ">
                   add 
               </button>
        
       
            </div>
            <!-- ============ Content ============= -->
        
            <div class="md:p-6 bg-gray-600  md:m-5 ">
               @if (session('success'))
               <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                   <strong class="font-bold">Success!</strong>
                   <span class="block sm:inline">{{ session('success') }}</span>
               </div>
               @endif
        
                <!-- ========== table Banks-desktop ======== -->
              
                <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
                    <table class="  
                   w-full   " id="table1">
                        <thead class="  sm:w-full">
                            <tr class="bg-[#fefeff] text-black h-[40px]">
                                <th class="">Nom produit</th>
                                <th class="">materiaux/outils</th>
                                
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        {{-- @foreach($allUsers as $user) --}}
                        <tbody class="sm:w-full">
                         
        
                            <tr class=" text-white pt-10 sm:pt-0  w-full border-b border-[#ffffff]">
        
                                <td class=" text-center ">
                                    {{-- {{$user->id}} --}}
                                    za3tar
                                </td>
                                <td class=" text-center ">
                                   {{-- {{$user->fullName}} --}}
                                   cotans
                                </td>
                             
                              
                                   <td class="text-center flex justify-center">
                                       <form action="" method="POST">
                                           @csrf
                                           @method('DELETE')
                                        <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                            <a
                                                href=""><i
                                                    class="fa-solid fa-trash " style="color:#ffffff"></i></a>
            
                                        </button>
                                       </form>
                                       <a href="/edit-materiaux-outils">
                                        <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                                           
                                               <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                                       </button>
                                   </a>
                                </td>
                               
                            </tr>
                      
        
                        </tbody>
                        {{-- @endforeach --}}
                    </table>
                </div>
                
                <!-- ========== table Banks-mobile ======== -->
                <div class="block sm:hidden rounded-lg overflow-hidden mt-10 ">
                    <table class=" block sm:hidden w-full  border-2 sm:border-0  " id="table2">
                        <thead class="hidden">
                            <tr>
                                <th></th>
                                <th></th>
                               
                                <th></th>
        
        
                            </tr>
                        </thead>
                        <tbody class="block  w-full">
                           {{-- @foreach($allUsers as $user) --}}
                            <tr class="block pt-10 sm:pt-0  mt-9 sm:mt-0 w-full ">
        
                                <td data-label="NomProduit"
                                    class="border-b before:content-['NomProduit']  before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                                  {{-- {{$user->id}} --}}
                                  Za3tar
                                </td>
                                <td data-label="materiaux/outils" class="border-b before:content-['materiaux/outils'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                                     text-right">
                                   {{-- {{$user->fullName}} --}}
                                   cotant
                                </td>
                           
                                <td data-label="Action"
                                    class=" border-b before:content-['action'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                                   
       
                                    <form action="" method="POST">
                                       @csrf
                                       @method('DELETE')
                                    <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                        <a
                                            href=""><i
                                                class="fa-solid fa-trash " style="color:#ffffff"></i></a>
        
                                    </button>
                                   </form>
                                   <a href="/edit-materiaux-outils">
                                    <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                                       
                                           <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                                   </button>
                                   </a>
       
                                   
                                </td>
                                
                            </tr>
                         {{-- @endforeach --}}
        
                        </tbody>
                    </table>
                </div>
        
        
        
            </div>
            <!-- ============ Content ============= -->
        
        
        </main>
    </div>

    {{-- materiaux/outils end --}}
</div>

{{-- pop up for adding produit planter start --}}


<div id="myModal4" class="modal4 ">
    <div class="modal-content4 rounded-lg">
      <span class="close4" onclick="closeModal4()">&times;</span>
      <form id="updateForm">
        <p class="text-xl font-bold text-center">add Produit</p>
        <label for="heurs" class="block text-black text-sm font-bold mb-2">nom de produit</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="heurs" id="heurs"  placeholder="3"><br>
            <label for="heurs" class="block text-black text-sm font-bold mb-2">periode</label>
            <select class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                name="heurs" id="heurs"  placeholder="3">
            <option value="">fghjk</option>
            <option value="">ghjk</option>
            <option value="">ghjk</option>
            <option value="">hjk</option>
            </select><br>
               
        <button
        class="text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
        Save
       </button>                              

       </form>
    </div>
  </div>

  {{-- pop up for adding produit planter end --}}


  {{-- pop up for adding materiux/outils start --}}


<div id="myModal5" class="modal5 ">
    <div class="modal-content5 rounded-lg">
      <span class="close5" onclick="closeModal5()">&times;</span>
      <form id="updateForm">
        <p class="text-xl font-bold text-center">add Materiaux/outils</p>
        <label for="heurs" class="block text-black text-sm font-bold mb-2">materiux/outils</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="heurs" id="heurs"  placeholder="3"><br>
            <label for="heurs" class="block text-black text-sm font-bold mb-2">produit</label>
            <select class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                name="heurs" id="heurs"  placeholder="3">
            <option value="">fghjk</option>
            <option value="">ghjk</option>
            <option value="">ghjk</option>
            <option value="">hjk</option>
            </select><br>
               
        <button
        class="text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
        Save
       </button>                              

       </form>
    </div>
  </div>

  {{-- pop up for adding materiux/outils end --}}

{{-- produit planter end --}}
</main>

@endsection