@extends('layouts.financiere-layouts')

@section('title', 'financiere revenu')
@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class="bg-gray-100 flex-grow h-[100vh] relative">
     <!-- ============== header =========== -->
 
     <div class="absolute right-10  sm:top-10 sm:right-10 ">
        <a href="/add-revenu">
        <button id="addProRev" class=" rounded-lg px-10 py-3 bg-[#31363F] font-bold text-white hover:bg-green-500   hover:shadow-lg hover:shadow-black active:opacity-[0.95]">
            add produit revenu
        </button>
    </a>

     </div>
     <!-- ============ Content ============= -->
 
     <div class="md:p-6 bg-white md:m-5">
        @if (session('success'))
        <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
 
         <!-- ========== table -desktop ======== -->
       
         <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
             <table class=" w-full" id="table1">
                 <thead class="  sm:w-full">
                     <tr class="bg-[#31363F] text-white h-[40px]">
                         <th id="id" class="">ID</th>
                         <th id="NomPro" class="">nom de produit</th>
                         <th id="quantiter" class="">quantiter</th>
                         <th id="prix" class="">prix de vendre</th>
                         <th id="dateRev" class="">date de vendre</th>
                         <th id="Action" class="">plus options</th>
                     </tr>
                 </thead>
                 @if($Revenus->isNotEmpty())
                 @foreach($Revenus as $revenu)
                 <tbody class="sm:w-full">
                  
 
                     <tr class=" pt-10 sm:pt-0  w-full border-b border-[#31363F]">
 
                         <td class=" text-center ">
                             {{$revenu->id}}
                            
                         </td>
                         <td class=" text-center ">
                            {{$revenu->nomProduit}}
                           
                         </td>
                         <td class=" text-center ">
                            {{$revenu->quantiterRevenu}}
                           
                         </td>
                         <td class=" text-center ">
                            {{$revenu->prixRevenuProduit}}
                            dh
                         </td>
                         <td class=" text-center ">
                            {{$revenu->dateRevenu}}
                           
                         </td>
                       
                            <td class="text-center flex justify-center">
                                <form action="{{ route('revenu.delete', ['id' => $revenu->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                 <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                     <a
                                         href=""><i
                                             class="fa-solid fa-trash " style="color:#ffffff"></i></a>
     
                                 </button>
                                </form>
                                <a href="{{ route('edit-revenu', ['id' => $revenu->id]) }}">
                                 <button class="bg-green-600 text-white w-8 h-[35px] rounded-md">
                                    
                                        <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                                </button>
                            </a>
                         </td>
                        
                     </tr>
               
 
                 </tbody>
                 @endforeach
                 @else
                     
                             
            <p class="text-2xl text-black font-bold flex justify-center items-center" >Il n'y a pas donneés </p>
        
    
    @endif
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
 
 
                     </tr>
                 </thead>
                 <tbody class="block  w-full">
                    @foreach($Revenus as $revenu)
                     <tr class="block pt-10 sm:pt-0   w-full ">
 
                         <td data-label="id"
                             class="border-b before:content-['id']  before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                           {{$revenu->id}}
                           
                         </td>
                         <td data-label="nomProduit" class="border-b before:content-['nomProduit'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{$revenu->nom}}
                           
                         </td>
                         <td data-label="quantiter" class="border-b before:content-['quantiter'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{$revenu->quantiter}}
                            
                         </td>
                         <td data-label="prix" class="border-b before:content-['prix'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{$revenu->prix}}
                            dh
                         </td>
                         <td data-label="date" class="border-b before:content-['date'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{$revenu->date}}
                           
                         </td>
                         
                         <td data-label="Action"
                             class=" border-b before:content-['action'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                            
                             <div class="flex justify-end">
                             <form action="{{ route('revenu.delete', ['id' => $revenu->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                             <button class="bg-red-600 text-white w-8 h-[35px] rounded-md mr-2">
                                 <a
                                     href=""><i
                                         class="fa-solid fa-trash " style="color:#ffffff"></i></a>
 
                             </button>
                            </form>
                            <a href="{{ route('edit-revenu', ['id' => $revenu->id]) }}">
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