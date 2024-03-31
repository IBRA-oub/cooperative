@extends('layouts.stockiste-layouts')

@section('title', 'stockiste Dashboard')

@section('content')

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main">




{{-- produit planter start --}}
    
        <main class="bg-gray-200 flex-grow h-[100vh] relative rounded-xl shadow-2xl">
            <!-- ============== header =========== -->
        
            <div class="absolute right-0 sm:top-4 sm:right-10 ">
              
               <button id="addProStok" onclick="showModal4()" class=" rounded-lg px-10 py-3 bg-[#31363F] font-bold text-white hover:bg-green-400 hover:text-white   hover:shadow-lg  ">
                   add produit
               </button>
           
       
            </div>
            <!-- ============ Content ============= -->
        
            <div class="md:p-6 bg-gray-200  md:m-5">
               @if (session('success'))
               <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                   <strong class="font-bold">Success!</strong>
                   <span class="block sm:inline">{{ session('success') }}</span>
               </div>
               @endif
        
                <!-- ========== table Banks-desktop ======== -->
              
                <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
                    <table class="  
                   w-full   " id="tableSto">
                        <thead class="  sm:w-full">
                            <tr class="bg-[#31363F] text-white h-[40px]">
                                <th id="idProSto" class="">ID</th>
                                <th id="nomProStok" class="">nom de produit</th>
                                <th id="quantiterProSTok" class="">quantiter</th>
                                
                                <th id="actionProStok" class="">plus options</th>
                            </tr>
                        </thead>
                        {{-- @foreach($allUsers as $user) --}}
                        <tbody class="sm:w-full">
                         
        
                            <tr class="  pt-10 sm:pt-0  w-full border-b border-[#31363F]">
        
                                <td class=" text-center ">
                                    {{-- {{$user->id}} --}}
                                    4
                                </td>
                                <td class=" text-center ">
                                   {{-- {{$user->fullName}} --}}
                                   za3tar
                                </td>
                                <td class=" text-center ">
                                    {{-- {{$user->fullName}} --}}
                                    220 kg
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
                                       <a href="/edit-produit-stocke">
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
                                <th></th>
        
        
                            </tr>
                        </thead>
                        <tbody class="block  w-full">
                           {{-- @foreach($allUsers as $user) --}}
                            <tr class="block pt-10 mt-9 sm:mt-0 sm:pt-0   w-full ">
        
                                <td data-label="id"
                                    class="border-b before:content-['id']  before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                                  {{-- {{$user->id}} --}}
                                  3
                                </td>
                                <td data-label="nomProduit" class="border-b before:content-['nomProduit'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                                     text-right">
                                   {{-- {{$user->fullName}} --}}
                                   za3tar
                                </td>
                           
                                <td data-label="quantiter" class="border-b before:content-['quantiter'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                                     text-right">
                                   {{-- {{$user->fullName}} --}}
                                   220 Kg
                                </td>
                           
                                <td data-label="Action"
                                    class=" border-b before:content-['action'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                                   
       
                                    <form action="" method="POST">
                                       @csrf
                                       @method('DELETE')
                                    <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                        <a
                                            href=""><i
                                                class="fa-solid fa-trash " style="color:#ffffff"></i></a>
        
                                    </button>
                                   </form>
                                   <a href="/edit-produit-stocke">
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
    

    {{-- produit plannter end  --}}


  
</div>

{{-- pop up for adding produit planter start --}}


<div id="myModal4" class="modal4 ">
    <div class="modal-content4 rounded-lg">
      <span class="close4" onclick="closeModal4()">&times;</span>
      <form id="updateForm">
        <p id="produitEnStok" class="text-xl font-bold text-center">add Produit en stocke</p>
        <label id="nomProdStok" for="heurs" class="block text-black text-sm font-bold mb-2">nom de produit</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="heurs" id="heurs"  placeholder="ghj"><br>
        <label id="quantiterStok" for="heurs" class="block text-black text-sm font-bold mb-2">quantiter</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="heurs" id="heurs"  placeholder="3"><br>
            
               
        <button id="saveStok"
        class="text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
        Save
       </button>                              

       </form>
    </div>
  </div>

  {{-- pop up for adding produit planter end --}}






</main>

@endsection