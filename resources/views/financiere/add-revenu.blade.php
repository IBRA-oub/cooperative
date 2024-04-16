@extends('layouts.financiere-layouts')

@section('title', 'Add revenu')

@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class=" flex-grow  relative h-screen bg-cover bg-center "  style="background-image: url('img/addRevenu.jpg')">

       <!--  Application Details Start -->
       <div class="w-72 md:w-full  md:pt-10 bg-transparent  ml-[14.7%] md:ml-0">
          <div class="container mx-auto py-8">
            <div class="w-80 ml-3  my-10 md:my-0 md:w-[60%] md:mx-auto rounded shadow" style="background-color: rgba(116, 116, 116, 0.814)">

                <div id="addProRevenu" class="  md:mx-16 py-4 px-8 text-white text-3xl font-bold border-b border-grey-500 text-center">Ajout produit venter
                </div>

                <form action="{{route('add.revenu')}}" method="POST">
                    @csrf
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label id="NomProAdd" for="nomProduit" class="block text-white text-sm font-bold mb-2">nom Produit</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="nomProduit" id="nomProduit"  placeholder="Za3tar">
                                @error('nomProduit')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                        </div>


                        <div class="mb-4">
                            <label id="quntiterAdd" for="quantiterRevenu" class="block text-white text-sm font-bold mb-2">Quantiter</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="quantiterRevenu" id="quantiterRevenu"  placeholder="20kg">
                                @error('quantiterRevenu')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                        </div>

                        <div class="mb-4">
                            <label id="prixRevenuAdd" for="prixRevenuProduit" class="block text-white text-sm font-bold mb-2">Prix de vente</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                name="prixRevenuProduit" id="prixRevenuProduit"  placeholder="30dh">
                                @error('prixRevenuProduit')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label id="dateRevenuAdd" for="dateRevenu" class="block text-white text-sm font-bold mb-2">Date</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                                name="dateRevenu" id="dateRevenu"  placeholder="3">
                                @error('dateRevenu')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror
                        </div>


                      
                        <div class="mb-4 flex justify-center">
                            <button id="saveAdd"
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