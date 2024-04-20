@extends('layouts.admin-layouts')

@section('title', 'Add User')

@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main overflow-y-hidden">
    <!--===========Content===========-->
 <main class=" flex-grow  relative h-screen bg-cover bg-center "  style="background-image: url('https://img.freepik.com/photos-gratuite/hommes-affaires-femmes-affaires-asiatiques-reunissant-idees-remue-meninges-application-planification-conception-web-creative-developpement-mise-page-modele-pour-projet-telephone-mobile-travaillant-ensemble-dans-petit-bureau_7861-2682.jpg?w=1060&t=st=1710787356~exp=1710787956~hmac=f89d1652eacb414a67b04d34f94613e10936ad32def24bf241e971a5a65077eb')">

    <div class="w-full h-full" style="background-color: rgba(59, 59, 59, 0.5); backdrop-filter: blur(4px);">

    </div>
       <!--  Application Details Start -->
       <div  class="absolute top-0 w-72 md:w-full   ml-10 md:ml-0 bg-transparent">
        <div class="container mx-auto py-8">
            <div class="w-80 md:w-[60%] md:mx-auto ml-8   rounded shadow bg-white" >

                <div id="addUser" class=" mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500 text-center">Ajout Travailleur
                </div>

                <form action="{{route('add-user')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label id="FL" for="fullName" class="block text-black text-sm font-bold mb-2">fullName</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="fullName" id="fullName"  placeholder="John Down">
                                @error('fullName')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                        </div>


                        <div class="mb-4">
                            <label id="EM" for="email" class="block text-black text-sm font-bold mb-2">Email</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="email"
                                name="email" id="email"  placeholder="exemple@gmail.com">
                                @error('email')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                        </div>

                        <div class="mb-4">
                            <label id="PS" for="password" class="block text-black text-sm font-bold mb-2">Password</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="password"
                                name="password" id="password"  placeholder="*********************">
                                @error('password')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                            </div>

                        <div class="mb-4">
                            <label id="SL" for="salaire" class="block text-black text-sm font-bold mb-2">Salaire/Heure</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                name="salaire" id="salaire"  placeholder="3">
                                @error('salaire')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                            </div>

                        <div class="mb-4">
                            <label id="SL" for="role" class="block text-black text-sm font-bold mb-2">Role</label>
                            <select class=" border rounded w-full py-2 px-3 text-grey-darker" 
                                name="role" id="role"  >
                            <option value="financiere">Financière</option>
                            <option value="planner">Responsable agricole</option>
                            <option value="stockiste">Stockists</option>
                            
                            <option value="travailleur">Travailleur</option>
                            
                        </select>
                        @error('role')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                    </div>


                        <div class="mb-4">
                            <label id="pic"  for="picture" class="block text-black text-sm font-bold mb-2">picture</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="file"
                                name="picture" id="picture" >
                                @error('picture')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                            </div>
                        <div class="mb-4 flex justify-center">
                            <button id="sv"
                                class="text-white mb-2 mx-16 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white ">
                                Save
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <!--  Application Details End -->


   
         
    <!-- Student Visa End -->
 </main>
</main>
@endsection