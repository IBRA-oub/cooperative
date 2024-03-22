@extends('layouts.admin-layouts')

@section('title', 'Admin travailleur')
@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class="bg-gray-100 flex-grow h-[100vh] relative">
     <!-- ============== header =========== -->
 
     <div class="absolute right-10  sm:top-10 sm:right-10 ">
        <a href="/add-user">
        <button class=" rounded-lg px-10 py-3 bg-[#31363F] font-bold text-white hover:bg-green-500   hover:shadow-lg hover:shadow-black active:opacity-[0.95]">
            add user
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
 
         <!-- ========== table Banks-desktop ======== -->
       
         <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
             <table class="  
            w-full   " id="table1">
                 <thead class="  sm:w-full">
                     <tr class="bg-[#31363F] text-white h-[40px]">
                         <th class="">ID</th>
                         <th class="">fullName</th>
                         <th class="">email</th>
                         <th class="">Salaire/heure</th>
                         <th class="">heure Taravailler/j</th>
                         <th class="">role</th>
                        
                         <th class="">Actions</th>
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
                            brahimoubourrih@gmail.com
                         </td>
                         <td class=" text-center ">
                            {{-- {{$user->email}} --}}
                           70 dh
                         </td>
                         <td class="text-center flex justify-center">
                            {{-- {{$user->email}} --}}
                            1 H
                            
                          </td>

                          <div id="myModal" class="modal ">
                            <div class="modal-content rounded-lg">
                              <span class="close" onclick="closeModal()">&times;</span>
                              <form id="updateForm">
                                <label for="heurs" class="block text-black text-sm font-bold mb-2">Heure travailler aujourd'hui</label>
                                <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                    name="heurs" id="heurs"  placeholder="3"><br>
                                <button
                                class="text-white mb-2 mt-5 mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
                                Save
                               </button>                              
                        
                               </form>
                            </div>
                          </div>

                         
                         {{-- @if($user->role ==='admin') --}}
                         <td class=" text-center ">
                           <p class="rounded-md bg-red-300 text-red-800"> admin</p>
                         </td>
                         {{-- @elseif($user->role ==='client') --}}
                         {{-- <td class=" text-center ">
                            <p class="rounded-md bg-green-300 text-green-800"> client</p>
                          </td> --}}
                          {{-- @elseif($user->role ==='organisateur') --}}
                          {{-- <td class=" text-center ">
                            <p class="rounded-md bg-blue-300 text-blue-800"> organisateur</p>
                          </td> --}}
                          {{-- @endif --}}
 
                        {{-- @if($user->role ==='admin')

                        @else --}}
                         <td class="  text-center flex justify-center ">
                       
                            <td class="text-center flex justify-center">
                                <div>
                                    <button type="button" class="text-gray-800 rounded-md w-8 h-[35px] focus:outline-none" id="optionsMenu2" aria-expanded="true" aria-haspopup="true" onclick="toggleDropdown2()">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <div id="optionsDropdown2" class="origin-top-right absolute right-10 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                                      <div class="py-1">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                         <button class="bg-red-600 text-white w-full h-[35px] rounded-md mb-2 hover:bg-red-800">
                                             <a href="">Supprimer</a>
                                        </button>
                                        </form>
                                        
                                       
                                         <a href="/edit-user">
                                         <button class="bg-green-600 text-white w-full h-[35px] rounded-md mb-2 hover:bg-green-800">
                                             Edite
                                        </button>
                                          </a>
                                        
            
                                        <button class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800" onclick="showModal()">
                                            add hours
                                        </button>
                                        <a href="/travailleur-heurs">
                                        <button class=" text-gray-600 w-full rounded-md h-[35px] hover:bg-black hover:text-white" >
                                           all hours
                                        </button>
                                    </a>
                                      </div>
                                    </div>
                                  </div>
                              </td>
                              
                            
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
                         <td data-label="Email" class="border-b before:content-['email'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{-- {{$user->fullName}} --}}
                            brrahim@gmail.com
                         </td>
                         <td data-label="Salaire/heure" class="border-b before:content-['Salaire/heure'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{-- {{$user->fullName}} --}}
                           70 dh
                         </td>
                         <td data-label="heureTravailler/j" class="border-b before:content-['heureTravailler/j'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                            {{-- {{$user->fullName}} --}}
                            2H
                         </td>

                         {{-- form add hour start --}}

                         <div id="myModal2" class="modal2">
                            <div class="modal-content2 rounded-lg">
                              <span class="close2" onclick="closeModal2()">&times;</span>
                              <form id="updateForm2">
                                <label for="heurs" class="block text-black text-sm font-bold mb-2">Heure travailler aujourd'hui</label>
                                <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                    name="heurs" id="heurs"  placeholder="3"><br>
                                <button
                                class="text-white mb-2 mt-5  rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
                                Save
                               </button>                              
                        
                               </form>
                            </div>
                          </div>

                         {{-- form add hour end  --}}
                         

                         {{-- @if($user->role ==='admin') --}}
                         <td data-label="Role" class="border-b before:content-['Role'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                         <p class="rounded-md bg-red-300 text-red-500"> admin</p>
                         </td>

                         {{-- @elseif($user->role ==='client') --}}

                         {{-- <td data-label="Role" class="border-b before:content-['Role'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                         <p class="rounded-md bg-green-300 text-green-800"> client</p>
                         </td>
                         @elseif($user->role ==='organisateur')

                         <td data-label="Role" class="border-b before:content-['Role'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                         <p class="rounded-md bg-blue-300 text-blue-800"> organisateur</p>
                         </td>
                         @endif --}}

                         
                        
                         {{-- @if($user->role ==='admin')
                         
                         @else --}}
                         <td data-label="Action"
                             class=" border-b before:content-['action'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                            

                             <div>
                                <button type="button" class="text-gray-800 rounded-md w-8 h-[35px] focus:outline-none" id="optionsMenu" aria-expanded="true" aria-haspopup="true" onclick="toggleDropdown()">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <div id="optionsDropdown" class="origin-top-right absolute right-10 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                                  <div class="py-1">
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                     <button class="bg-red-600 text-white w-full h-[35px] rounded-md mb-2 hover:bg-red-800">
                                         <a href="">Supprimer</a>
                                    </button>
                                    </form>
                                    
                                    
                                    <a href="/edit-user">
                                     <button class="bg-green-600 text-white w-full h-[35px] rounded-md mb-2 hover:bg-green-800">
                                         Edite
                                    </button>
                                    </a>
                                    
        
                                    <button class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800" onclick="showModal2()">
                                        add hours
                                    </button>
                                    <a href="/travailleur-heurs">
                                    <button class=" text-gray-600 w-full rounded-md h-[35px] hover:bg-black hover:text-white" >
                                        all hours
                                    </button>
                                   </a>
                                  </div>
                                </div>
                              </div>

                            
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