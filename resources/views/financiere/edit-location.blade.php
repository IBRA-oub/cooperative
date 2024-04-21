@extends('layouts.financiere-layouts')

@section('title', 'edit location')

@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class=" flex-grow  relative h-screen bg-cover bg-center "  style="background-image: url('{{asset('img/editeRA.jpg')}}')">

    <div class="w-full h-full" style="background-color: rgba(59, 59, 59, 0.5); backdrop-filter: blur(4px);">

    </div>
       <!--  Application Details Start -->
       <div class="absolute top-10 w-72 md:w-full bg-transparent md:pt-10 ml-[14.7%] md:ml-0">
        <div class="container mx-auto py-8">
            <div class="w-80 ml-3  my-10 md:my-0 md:w-[60%] md:mx-auto rounded shadow bg-white" >

                <div id="editeLocation" class="mx-16 py-4 px-8 text-black text-3xl font-bold border-b border-grey-500 text-center">Edit les charges  Location
                </div>

                <form action="{{route('update.location',['id'=>$location->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label id="nomProAchEdi" for="nom" class="block text-black text-sm font-bold mb-2">nom-ville </label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="nom" id="nom"  value="{{$location->nom}}">
                                @error('nom')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                        </div>


                       

                        <div class="mb-4">
                            <label id="prixAchaEdit" for="prix" class="block text-black text-sm font-bold mb-2">Prix </label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                name="prix" id="prix"  value="{{$location->prix}}">
                                @error('prix')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label id="dateAchatEdit" for="date" class="block text-black text-sm font-bold mb-2">Date</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                                name="date" id="date"  value="{{$location->date}}"
                                min="{{ now()->timezone('Africa/Casablanca')->format('Y-m-d') }}">
                                @error('date')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                        </div>


                      
                        <div class="mb-4 flex justify-center">
                            <button
                            id="saveEditAchat"
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