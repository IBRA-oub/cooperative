@extends('layouts.admin-layouts')

@section('title', 'Admin travailleur')
@section('content')

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main">
        <!--===========Content===========-->
        <main class="bg-white flex-grow h-[100vh] relative">


            <!-- ============== header =========== -->

            <div class="absolute right-10  sm:top-10 sm:right-10 ">
                <a href="/add-user-pages">
                    <button id="addU"
                        class=" rounded-lg px-10 py-3 bg-[#31363F] font-bold text-white hover:bg-green-500   hover:shadow-lg hover:shadow-black active:opacity-[0.95]">
                        add user
                    </button>
                </a>

            </div>
            <!-- ============ Content ============= -->

            <div class="md:p-6 bg-white md:m-5">

                @if (session('success'))
                    <script>
                        Swal.fire({
                            icon: "success",
                            title: "Success!",
                            text: "{{ session('success') }}",


                        });
                    </script>

                @elseif(session('error'))
                <script>
                  Swal.fire({
                      icon: "error",
                      title: "Error!",
                      text: "{{ session('error') }}",


                  });
              </script>
                @endif



                <!-- ========== table desktop ======== -->

                <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
                    <table class=" ltr  w-full" id="table1">
                        <thead class="  sm:w-full">
                            <tr class="bg-[#31363F] text-white h-[40px]">
                                <th id="id" class="">ID</th>
                                <th id="fulN" class="">fullName</th>
                                <th id="Ema" class="">email</th>
                                <th id="s/l" class="">Salaire/heure</th>
                                <th id="HR/j" class="">heures Taravailler</th>
                                <th id="RL" class="">role</th>

                                <th id="AC" class="">Actions</th>
                            </tr>
                        </thead>
                        @foreach ($users as $user)

                            <tbody class="sm:w-full">


                                <tr class=" pt-10 sm:pt-0  w-full border-b border-[#31363F]">

                                    <td class=" text-center ">
                                        {{ $user->id }}

                                    </td>
                                    <td class=" text-center ">
                                        {{ $user->fullName }}

                                    </td>
                                    <td class=" text-center ">
                                        {{ $user->email }}

                                    </td>

                                    @if ($user->admin)
                                        <td class=" text-center ">
                                            ....
                                        </td>
                                    @elseif($user->financiere)
                                        <td class=" text-center ">
                                            {{ $user->financiere->salaire }} DH
                                        </td>
                                    @elseif($user->planner)
                                        <td class=" text-center ">
                                            {{ $user->planner->salaire }} DH
                                        </td>
                                    @elseif($user->stockiste)
                                        <td class=" text-center ">
                                            {{ $user->stockiste->salaire }} DH
                                        </td>
                                   
                                    @elseif($user->travailleur)
                                        @foreach ($user->travailleur as $travailleur)
                                            <td class=" text-center ">
                                              {{ $travailleur->salaire }} DH
                                            </td>
                                            @endforeach
                                            @endif
                                            
                                            @if($user->admin)
                                            <td class="text-center flex justify-center">
                                              ... H
                                            </td>
                                            @elseif($user->financiere)
                                            <td class="text-center flex justify-center">
                                              {{ $totaleHeursFi }} H
                                            </td>
                                            @elseif($user->planner)
                                            <td class="text-center flex justify-center">
                                              {{ $totaleHeursPl }} H
                                            </td>
                                            @elseif($user->stockiste)
                                            <td class="text-center flex justify-center">
                                              {{ $totaleHeursSt }} H
                                            </td>
                                          
                                            
                                            @elseif($user->travailleur)

                                            @foreach ($user->travailleur as $travailleur)

                                            <td class="text-center flex justify-center">
                                              {{ $totaleHeursTr[$travailleur->id] }} H
                                              @endforeach
                                            </td>
                                            @endif
                                    
                                    
                                    {{-- pop up ading hour start --}}

                                    <div id="myModal" class="modal">
                                        <div class="modal-content rounded-lg">
                                            <span class="close" onclick="closeModal()">&times;</span>
                                            <form id="updateForm" action="{{ route('add-heur') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="user_type" id="userType">
                                                <input type="hidden" name="user_id" id="userIdInput">
                                                <label id="HTJ" for="heurs"
                                                    class="block text-black text-sm font-bold mb-2 text-center">Heure
                                                    travailler aujourd'hui</label>
                                                <input class="border rounded w-full py-2 px-3 text-grey-darker"
                                                    type="number" name="heurs" id="heurs" placeholder="3"><br>
                                                @error('heurs')
                                                    <p id="error_creater_id" class="text-red-600">{{ $message }}</p>
                                                @enderror

                                                <button id="svHtj"
                                                    class="text-white mb-2 mt-5 mx-56 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">Save</button>
                                            </form>
                                        </div>
                                    </div>




                                    {{-- pop up ading hour end  --}}


                                    @if ($user->admin)
                                        <td class=" text-center ">
                                            <p class="rounded-md bg-red-300 text-red-800"> admin</p>
                                        </td>
                                    @elseif($user->financiere)
                                        <td class=" text-center ">
                                            <p class="rounded-md bg-blue-300 text-blue-800">financiere</p>
                                        </td>
                                    @elseif($user->planner)
                                        <td class=" text-center ">
                                            <p class="rounded-md bg-green-300 text-green-800"> planner</p>
                                        </td>
                                    @elseif($user->stockiste)
                                        <td class=" text-center ">
                                            <p class="rounded-md bg-gray-300 text-gray-800"> stockiste</p>
                                        </td>
                                   
                                    @elseif($user->travailleur)
                                        <td class=" text-center ">
                                            <p class="rounded-md bg-gray-300 text-gray-800"> travailleur</p>
                                        </td>
                                    @endif


                                    @if ($user->admin)
                                        <td>

                                        </td>
                                    @else
                                        <td class="text-center flex justify-center">
                                            <div>
                                                <button type="button"
                                                    class="text-gray-800 rounded-md w-8 h-[35px] focus:outline-none optionsMenu2Button"
                                                    id="optionsMenu2" aria-expanded="true" aria-haspopup="true">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>
                                                <div id="optionsDropdown2"
                                                    class="optionsDropdown2 origin-top-right absolute right-10 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                                                    <div class="py-1">
                                                        <form action="{{ route('user.delete', ['id' => $user->id]) }}" 
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button id="sup" type="submit"
                                                                class="bg-red-600 text-white w-full h-[35px] rounded-md mb-2 hover:bg-red-800">
                                                                Supprimer
                                                            </button>
                                                        </form>


                                                        <a href="{{ route('edit-user', ['id' => $user->id]) }}">
                                                            <button id="edi"
                                                                class="bg-green-600 text-white w-full h-[35px] rounded-md mb-2 hover:bg-green-800">
                                                                Edite
                                                            </button>
                                                        </a>


                                                        @if ($user->financiere)
                                                            <button id="addH"
                                                                class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800"
                                                                onclick="showModal({{ $user->financiere->id }} , 'financiere' )">
                                                                add hours
                                                            </button>
                                                        @elseif($user->planner)
                                                            <button id="addH"
                                                                class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800"
                                                                onclick="showModal({{ $user->planner->id }},'planner')">
                                                                add hours
                                                            </button>
                                                        @elseif($user->stockiste)
                                                            <button id="addH"
                                                                class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800"
                                                                onclick="showModal({{ $user->stockiste->id }} , 'stockiste')">
                                                                add hours
                                                            </button>
                                                      
                                                        @elseif($user->travailleur)
                                                            @foreach ($user->travailleur as $travailleur)
                                                                <button id="addH"
                                                                    class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800"
                                                                    onclick="showModal({{ $travailleur->id }} , 'travailleur' )">
                                                                    add hours
                                                                </button>
                                                            @endforeach
                                                        @endif


                                                        @if ($user->financiere)
                                                            <a
                                                                href="{{ route('travailleur-heurs', ['id' => $user->financiere->id , 'type'=>'financiere']) }}">
                                                                <button id="AllH"
                                                                    class=" text-gray-600 w-full rounded-md h-[35px] hover:bg-black hover:text-white">
                                                                    all hours
                                                                </button>
                                                            </a>
                                                        @elseif($user->planner)
                                                            <a
                                                                href="{{ route('travailleur-heurs', ['id' => $user->planner->id , 'type'=>'planner']) }}">
                                                                <button id="AllH"
                                                                    class=" text-gray-600 w-full rounded-md h-[35px] hover:bg-black hover:text-white">
                                                                    all hours
                                                                </button>
                                                            </a>
                                                        @elseif($user->stockiste)
                                                            <a
                                                                href="{{ route('travailleur-heurs', ['id' => $user->stockiste->id , 'type'=>'stockiste']) }}">
                                                                <button id="AllH"
                                                                    class=" text-gray-600 w-full rounded-md h-[35px] hover:bg-black hover:text-white">
                                                                    all hours
                                                                </button>
                                                            </a>
                                                      
                                                        @elseif($user->travailleur)
                                                            @foreach ($user->travailleur as $travailleur)
                                                                <a
                                                                    href="{{ route('travailleur-heurs', ['id' => $travailleur->id , 'type'=>'travailleur']) }}">
                                                                    <button id="AllH"
                                                                        class=" text-gray-600 w-full rounded-md h-[35px] hover:bg-black hover:text-white">
                                                                        all hours
                                                                    </button>
                                                                </a>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    @endif

                                </tr>


                            </tbody>
                        @endforeach

                    </table>
                </div>
                <div class="hidden md:flex justify-start mt-10">

                    {{$users->links()}}
                </div>

                <!-- ========== table mobile ======== -->
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
                            @foreach ($users as $user)
                                <tr class="block pt-10 sm:pt-0   w-full ">

                                    <td data-label="id"
                                        class="border-b before:content-['id']  before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                                        {{ $user->id }}

                                    </td>
                                    <td data-label="fullName"
                                        class="border-b before:content-['fullName'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                                        {{ $user->fullName }}

                                    </td>
                                    <td data-label="Email"
                                        class="border-b before:content-['email'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                                        {{ $user->email }}

                                    </td>
                                    @if ($user->admin)
                                        <td data-label="Salaire/heure"
                                            class="border-b before:content-['Salaire/heure'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                                            ...

                                        </td>
                                    @elseif($user->financiere)
                                        <td data-label="Salaire/heure"
                                            class="border-b before:content-['Salaire/heure'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                                            {{ $user->financiere->salaire }} DH

                                        </td>
                                    @elseif($user->planner)
                                        <td data-label="Salaire/heure"
                                            class="border-b before:content-['Salaire/heure'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                                            {{ $user->planner->salaire }} DH

                                        </td>
                                    @elseif($user->stockiste)
                                        <td data-label="Salaire/heure"
                                            class="border-b before:content-['Salaire/heure'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                                            {{ $user->stockiste->salaire }} DH

                                        </td>
                                  
                                    @elseif($user->travailleur)
                                        @foreach ($user->travailleur as $travailleur)
                                            <td data-label="Salaire/heure"
                                                class="border-b before:content-['Salaire/heure'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                                                {{ $travailleur->salaire }} DH
                                            </td>
                                        @endforeach
                                    @endif
                                    <td data-label="heuresTravailler"
                                        class="border-b before:content-['heuresTravailler'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                              text-right">
                                        {{-- {{$user->fullName}} --}}
                                        2H
                                    </td>

                                    {{-- form add hour start --}}

                                    <div id="myModal2" class="modal2">
                                        <div class="modal-content2 rounded-lg">
                                            <span class="close2" onclick="closeModal2()">&times;</span>
                                            <form id="updateForm2">
                                                <input type="hidden" name="user_type" id="userType1">
                                                <input type="hidden" name="user_id" id="userIdInput1">
                                                <label for="heurs"
                                                    class="block text-black text-sm font-bold mb-2 text-center">Heure
                                                    travailler aujourd'hui</label>
                                                <input class=" border rounded w-full py-2 px-3 text-grey-darker"
                                                    type="number" name="heurs" id="heurs" placeholder="3"><br>
                                                @error('heurs')
                                                    <p id="error_creater_id" class="text-red-600">{{ $message }}</p>
                                                @enderror
                                                <button
                                                    class="text-white mb-2 mt-5  rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
                                                    Save
                                                </button>

                                            </form>
                                        </div>
                                    </div>

                                    {{-- form add hour end  --}}


                                    @if ($user->admin)
                                        <td data-label="Role"
                                            class="border-b before:content-['Role'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                                            <p class="rounded-md bg-red-300 text-red-500"> admin</p>
                                        </td>
                                    @elseif($user->financiere)
                                        <td data-label="Role"
                                            class="border-b before:content-['Role'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                                            <p class="rounded-md bg-blue-300 text-blue-800"> financiere</p>
                                        </td>
                                    @elseif($user->planner)
                                        <td data-label="Role"
                                            class="border-b before:content-['Role'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                                            <p class="rounded-md bg-green-300 text-green-800"> planner</p>
                                        </td>
                                    @elseif($user->stockiste)
                                        <td data-label="Role"
                                            class="border-b before:content-['Role'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                                            <p class="rounded-md bg-gray-300 text-gray-800"> stockiste</p>
                                        </td>
                                 
                                    @elseif($user->travailleur)
                                        <td data-label="Role"
                                            class="border-b before:content-['Role'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                         text-right">
                                            <p class="rounded-md bg-blue-300 text-blue-800"> travailleur</p>
                                        </td>
                                    @endif




                                    @if ($user->admin)
                                        <td>
                                            ...
                                        </td>
                                    @else
                                        <td data-label="Action"
                                            class=" border-b before:content-['action'] before:absolute before:left-20 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">


                                            <div>
                                                <button type="button"
                                                    class="text-gray-800 rounded-md w-8 h-[35px] focus:outline-none optionsMenuButton"
                                                    id="optionsMenu" aria-expanded="true" aria-haspopup="true"
                                                    onclick="toggleDropdown()">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>


                                                <div id="optionsDropdown"
                                                    class="optionsDropdown origin-top-right absolute right-10 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                                                    <div class="py-1">
                                                        <form action="{{ route('user.delete', ['id' => $user->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                class="bg-red-600 text-white w-full h-[35px] rounded-md mb-2 hover:bg-red-800">
                                                                <a href="">Supprimer</a>
                                                            </button>
                                                        </form>


                                                        <a href="{{ route('edit-user', ['id' => $user->id]) }}">
                                                            <button
                                                                class="bg-green-600 text-white w-full h-[35px] rounded-md mb-2 hover:bg-green-800">
                                                                Edite
                                                            </button>
                                                        </a>

                                                        @if ($user->financiere)
                                                            <button
                                                                class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800"
                                                                onclick="showModal2({{ $user->financiere->id }} , 'financiere')">
                                                                add hours
                                                            </button>
                                                        @elseif($user->planner)
                                                            <button
                                                                class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800"
                                                                onclick="showModal2({{ $user->planner->id }},'planner')">
                                                                add hours
                                                            </button>
                                                        @elseif($user->stockiste)
                                                            <button
                                                                class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800"
                                                                onclick="showModal2({{ $user->stockiste->id }} , 'stockiste')">
                                                                add hours
                                                            </button>
                                                        
                                                        @elseif($user->travailleur)
                                                            @foreach ($user->travailleur as $travailleur)
                                                                <button
                                                                    class="bg-gray-600 text-white w-full rounded-md h-[35px] mb-2 hover:bg-gray-800"
                                                                    onclick="showModal2({{ $travailleur->id }} , 'travailleur')">
                                                                    add hours
                                                                </button>
                                                            @endforeach
                                                        @endif
                                                        {{-- completrer pou le mobile --}}
                                                        <a href="/travailleur-heurs">
                                                            <button
                                                                class=" text-gray-600 w-full rounded-md h-[35px] hover:bg-black hover:text-white">
                                                                all hours
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>


                                        </td>
                                    @endif

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
               
                <div class=" md:hidden justify-end ml-[15%] mt-10">

                    {{$users->links()}}
                </div>

            </div>
            <!-- ============ Content ============= -->


        </main>


    </main>



@endsection
