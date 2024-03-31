@extends('layouts.planner-layouts')

@section('title', 'edit produit')

@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class=" flex-grow  relative h-screen bg-cover bg-center "  style="background-image: url('img/editeRA.jpg')">

       <!--  Application Details Start -->
       <div class="w-[70%] md:w-full bg-transparent pt-10 ml-[14.7%] md:ml-0">
        <div class="container mx-auto py-8">
            <div class="w-96 mx-auto rounded shadow" style="background-color: rgba(116, 116, 116, 0.885)">

                <div id="editeProduitPlant" class="mx-16 py-4 px-8 text-white text-md font-bold border-b border-grey-500">Modifier Produit 
                </div>

                <form action="">
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label id="NomPRoduitPlantEDite" for="nomProduit" class="block text-white text-sm font-bold mb-2">nom de produit</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="nomProduit" id="nomProduit"  placeholder="Za3tar">
                     
                        </div>


                        <div class="mb-4">
                            <label id="periodeEdite" for="quantiter" class="block text-white text-sm font-bold mb-2">periode</label>
                            <select class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                                name="quantiter" id="quantiter"  >
                            <option value="">hj</option>
                            <option value="">hjk</option>
                            <option value="">hj</option>
                            <option value="">hjk</option>
                        </select>
                      
                        </div>

                        <div class="mb-4">
                            <button id="savePrPlaEDite"
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