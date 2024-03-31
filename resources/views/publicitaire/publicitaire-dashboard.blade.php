@extends('layouts.publicitaire-layouts')

@section('title', 'publicitaire Dashboard')

@section('content')

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main">




{{-- produit planter start --}}
    
        <main class="bg-gray-200 flex-grow h-[100vh] relative rounded-xl shadow-2xl">
            <!-- ============== header =========== -->
        
            <div class="absolute right-0 sm:top-3 sm:right-10 mb-10 sm:mb-0">
              
               <button id="addPubliciter" onclick="showModal6()" class=" rounded-lg px-10 py-3 bg-[#31363F] font-bold text-white hover:bg-green-400 hover:text-white   hover:shadow-lg  ">
                   add publiciter
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
              
                <div  class="w-[78%] md:w-full  p-4 bg-gray-100 mb-4 md:mb-0 md:mr-2 ml-[20%] md:ml-0 mt-10 shadow-lg rounded-md">
                 
                 
                  
                    <div class="mb-4 lg:mb-10 p-4 lg:p-0 w-full relative rounded block">
                        <div class="flex w-full justify-end">
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                             <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                 <a
                                     href=""><i
                                         class="fa-solid fa-trash " style="color:#ffffff"></i></a>
 
                             </button>
                            </form>
                            <a href="/edit-publiciter">
                             <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                                
                                    <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                            </button>
                        </a>
                        </div>
                         <img src='img/argan.jpg' class='rounded-md object-cover w-full h-64'>
                       
                        <div class="flex">
                            
                            <span class="text-green-700 text-sm hidden md:block mt-4">  ahmed 
                                &ensp;|&ensp;
                            </span>      
                               
                            <span class="text-gray-700 text-sm hidden md:block mt-4">
                                <span id="dateAnnonce">date annonce</span>:  276/2873/73
                            </span>
                            <span class="text-gray-700 text-sm hidden md:block mt-4"> &ensp;|&ensp; <span id="dateModified">date Modified</span>:
                                 4567
                            </span>
                        </div>
                        <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                             prende de salaire
                        </h1>
                        <p class="text-gray-600 mb-4">
                              il faut tous les travailleur demain matin 4 by 4 vient vers le derecteur pour prendre leur salaire
                        </p>

                        
                    </div>
        
                    <!-- sub-main posts -->
                </div>
                
              
                
        
        
        
            </div>
            <!-- ============ Content ============= -->
        
        
        </main>
    

    {{-- produit plannter end  --}}


  
</div>

{{-- pop up for adding produit planter start --}}


<div id="myModal6" class="modal6 ">
    <div class="modal-content6 rounded-lg">
      <span class="close6" onclick="closeModal6()">&times;</span>
      <form id="updateForm">
        <p id="addPubliciter" class="text-xl font-bold text-center">ajouter Publiciter</p>
        <label id="titreAdd" for="heurs" class="block text-black text-sm font-bold mb-2">titre</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="heurs" id="heurs"  placeholder="ghj"><br>
        <label id="description" for="heurs" class="block text-black text-sm font-bold mb-2">description</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="heurs" id="heurs"  placeholder="ghj"><br>
        <label id="contenu" for="heurs" class="block text-black text-sm font-bold mb-2">contenu</label>
        <textarea class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="heurs" id="heurs"  placeholder="ghj"></textarea><br>
        <label id="datePubliciter" for="heurs" class="block text-black text-sm font-bold mb-2">date publiciter</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
            name="heurs" id="heurs"  placeholder="ghj"><br>
        <label id="picture" for="heurs" class="block text-black text-sm font-bold mb-2">picture</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="file"
            name="heurs" id="heurs"  placeholder="3"><br>
            
               
        <button id="savePubli"
        class="text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
        Save
       </button>                              

       </form>
    </div>
  </div>

  {{-- pop up for adding produit planter end --}}






</main>

@endsection