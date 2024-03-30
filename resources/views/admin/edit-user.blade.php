@extends('layouts.admin-layouts')

@section('title', 'Add User')

@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class=" flex-grow  relative h-screen bg-cover bg-center "  style="background-image: url('img/update.jpg')">

       <!--  Application Details Start -->
       <div class="w-full bg-transparent pt-10 ml-10 md:ml-0">
        <div class="container mx-auto py-8">
            <div class="w-96 mx-auto rounded shadow" style="background-color: rgba(116, 116, 116, 0.863)">

                <div id="EditeUSer" class="mx-16 py-4 px-8 text-white text-xl font-bold border-b border-grey-500">Edit Travailleur
                </div>

                <form action="">
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label id="FLE" for="fullName" class="block text-white text-sm font-bold mb-2">fullName</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="fullName" id="fullName"  placeholder="John Down">
                     
                        </div>


                        <div class="mb-4">
                            <label id="EME" for="email" class="block text-white text-sm font-bold mb-2">Email</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="email"
                                name="email" id="email"  placeholder="exemple@gmail.com">
                      
                        </div>

                        <div class="mb-4">
                            <label id="PSE" for="password" class="block text-white text-sm font-bold mb-2">Password</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="password"
                                name="password" id="password"  placeholder="*********************">
                            <p id=error_creater_id></p>
                        </div>

                        <div class="mb-4">
                            <label id="SLE" for="salaire" class="block text-white text-sm font-bold mb-2">Salaire/Heure</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                name="salaire" id="salaire"  placeholder="3">
                            <p id=error_creater_id></p>
                        </div>


                        <div class="mb-4">
                            <label id="picE" for="picture" class="block text-white text-sm font-bold mb-2">picture</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="file"
                                name="picture" id="picture" >
                            <p id=error_intake_year></p>
                        </div>
                        <div class="mb-4">
                            <button id="svE"
                                class="text-white mb-2 mx-16 rounded-full py-1 px-24 bg-[#31363F] hover:bg-white hover:text-black">
                                Save
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <!--  Application Details End -->


   
                    </div>
                </form>

            </div>

        </div>
    </div>
    <!-- Student Visa End -->
 </main>
</main>
@endsection