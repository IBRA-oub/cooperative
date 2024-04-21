@extends('layouts.planner-layouts')

@section('title', 'edit periode')

@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class=" flex-grow  relative h-screen bg-cover bg-center "  style="background-image: url('{{asset('img/editeRA.jpg')}}')">

    <div class="w-full h-full" style="background-color: rgba(59, 59, 59, 0.5); backdrop-filter: blur(4px);">

    </div>
       <!--  Application Details Start -->
       <div class="absolute top-10 w-72 md:w-full  md:pt-10 bg-transparent  ml-[14.7%] md:ml-0">
        <div class="container mx-auto py-8">
            <div class="w-80 ml-3  my-10 md:my-0  md:w-[60%] md:mx-auto rounded shadow bg-white">

                <div id="editPeriode" class="mx-16 py-4 px-8 text-black text-md font-bold border-b border-grey-500 text-center">Edit une periode
                </div>

                <form action="{{route('update.periode',['id'=>$periode->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label id="NomPeriode" for="titre" class="block text-black text-sm font-bold mb-2">nom de periode</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="titre" id="titre"  value="{{$periode->titre}}">
                                @error('titre')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                        </div>


                        <div class="mb-4">
                            <label id="dateDebutEdit" for="dateDepart" class="block text-black text-sm font-bold mb-2">date début</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                                name="dateDepart" id="dateDepart"  value="{{$periode->dateDepart}}">
                                @error('dateDepart')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                        </div>

                        <div class="mb-4">
                            <label id="dateFinirEdite" for="dateStop" class="block text-black text-sm font-bold mb-2">date Finir</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                                name="dateStop" id="dateStop"  value="{{$periode->dateStop}}"
                                min="{{ now()->timezone('Africa/Casablanca')->format('Y-m-d') }}">
                                @error('dateStop')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                        </div>

                       


                      
                        <div class="mb-4 flex justify-center">
                            <button id="saveEdit"
                                class="text-white mb-2 mx-16 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
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