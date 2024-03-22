@extends('layouts.admin-layouts')

@section('title', 'Admin travailleur')
@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class="bg-gray-100 flex-grow h-[100vh] relative">
     <!-- ============== header =========== -->
 
    
     <!-- ============ Content ============= -->
 
     <div class="md:p-6 bg-white md:m-5">
        
 
         <!-- ========== table Banks-desktop ======== -->
       
         <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
             <table class="  
            w-full   " id="table1">
                 <thead class="  sm:w-full">
                     <tr class="bg-[#31363F] text-white h-[40px]">
                         <th class="">ID</th>
                         <th class="">fullName</th>
                         <th class="">heurs</th>
                         <th class="">jour</th>
                         <th class=""></th>
                         
                        
                         
                     </tr>
                 </thead>
                 {{-- @foreach($allUsers as $user) --}}
                 <tbody class="sm:w-full">
                  
 
                     <tr class=" pt-10 sm:pt-0  w-full border-b border-[#31363F]">
 
                         <td class=" text-center ">
                             {{-- {{$user->id}} --}}
                             4
                         </td>
                         <td class=" text-center ">
                            {{-- {{$user->fullName}} --}}
                            brahim
                         </td>
                        
                         <td class=" text-center ">
                            {{-- {{$user->email}} --}}
                           7 h
                         </td>
                         <td class="text-center ">
                            {{-- {{$user->email}} --}}
                            2023-3-12
                            
                          </td>
                         <td class="text-center ">
                              {{-- devis download --}}
                              <a href="" class="">

                                <button type="button" class="button text-gray-800 bg-green-300 hover:bg-green-500 font-bold py-2 px-4 rounded-xl">
                                    <span class="button__text">devis</span><i class="fa-solid fa-download"></i>
                                  </button>
                            </a>
                            {{-- devis-download-end --}}
                            
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
                     <tr class="block pt-10 sm:pt-0   w-full ">
 
                         <td data-label="id"
                             class="border-b before:content-['id']  before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                           {{-- {{$user->id}} --}}
                           3
                         </td>
                         <td data-label="fullName" class="border-b before:content-['fullName'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{-- {{$user->fullName}} --}}
                            brrahim
                         </td>
                         <td data-label="heurs" class="border-b before:content-['heurs'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{-- {{$user->fullName}} --}}
                            1h
                         </td>
                         <td data-label="jour" class="border-b before:content-['jour'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{-- {{$user->fullName}} --}}
                           2024-2-3
                         </td>
                        
                         <td data-label="Action"
                             class=" border-b before:content-[''] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                  
                             <a href="" class="">

                                <button type="button" class="button text-gray-800 bg-green-300 hover:bg-green-500 font-bold py-2 px-4 rounded-xl">
                                    <span class="button__text">devis</span><i class="fa-solid fa-download"></i>
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
 
 
 </main>


 
@endsection
