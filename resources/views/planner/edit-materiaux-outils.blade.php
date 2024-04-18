@extends('layouts.planner-layouts')

@section('title', 'edit materiaux-outils')

@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class=" flex-grow  relative h-screen bg-cover bg-center "  style="background-image: url('img/editeRA.jpg')">

       <!--  Application Details Start -->
       <div class="w-72 md:w-full  md:pt-10 bg-transparent  ml-[14.7%] md:ml-0">
        <div class="container mx-auto py-8">
            <div class="w-80 ml-3  my-10 md:my-0  md:w-[60%] md:mx-auto rounded shadow" style="background-color: rgba(116, 116, 116, 0.885)">

                <div id="EditeModPlan" class="mx-16 py-4 px-8 text-white text-md font-bold border-b border-grey-500 text-center">edit materiaux-outils
                </div>

                <form action="{{ route('update.materiauxOutils', ['id' => $MateraiuxOutils->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="py-4 px-8">
                        <div class="mb-4">
                            <label id="NomPRoduitEdite" for="nom" class="block text-white text-sm font-bold mb-2">nom produit</label>
                            <select class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                            name="produit_planter_id" id="Periode" >
                            @foreach($produits as $produit)
                        <option value="{{$produit->id}}">{{$produit->nom}}</option>
                            @endforeach
                            
                        </select>
                      
                        </div>

                        <div class="mb-4">
                            <label id="MaterOutiEdite" for="nom" class="block text-white text-sm font-bold mb-2">materiaux/outils</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="nom" id="nom"  value="{{$MateraiuxOutils->nom}}">
                                @error('nom')
                                <p id="error_creater_id" class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 flex justify-center">
                            <button id="saveMaOutEdit"
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
        
    <!-- Student Visa End -->
 </main>
</main>
@endsection