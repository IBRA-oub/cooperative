@extends('layouts.publicitaire-layouts')

@section('title', 'edit publicitaire')

@section('content') 

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main">
    <!--===========Content===========-->
 <main class=" flex-grow  relative h-screen bg-cover bg-center "  style="background-image: url('img/editeRA.jpg')">

       <!--  Application Details Start -->
       <div class="w-72 md:w-full  md:pt-10 bg-transparent pt-10 ml-[14.7%] md:ml-0">
        <div class="container mx-auto py-8">
            <div class="w-80 ml-3 md:ml-0 my-0 md:w-[60%] md:mx-auto rounded shadow" style="background-color: rgba(116, 116, 116, 0.885)">

                <div id="EditePubliciter" class="mx-16 py-4 px-8 text-white text-md font-bold border-b border-grey-500 text-center">edit produit stocke
                </div>

                <form action="">
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label id="titreEdite" for="nomProduit" class="block text-white text-sm font-bold mb-2">titre</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="nomProduit" id="nomProduit"  placeholder="Za3tar">
                     
                        </div>

                        <div class="mb-4">
                            <label id="descriptionEdite" for="nomProduit" class="block text-white text-sm font-bold mb-2">description</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="nomProduit" id="nomProduit"  placeholder="Za3tar">
                     
                        </div>

                        <div class="mb-4">
                            <label id="contenuEdite" for="nomProduit" class="block text-white text-sm font-bold mb-2">contenu</label>
                            <textarea class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="nomProduit" id="nomProduit"  placeholder="Za3tar"></textarea>
                     
                        </div>

                        <div class="mb-4">
                            <label id="datePubliEdite" for="nomProduit" class="block text-white text-sm font-bold mb-2">date publiciter</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                name="nomProduit" id="nomProduit"  placeholder="Za3tar">
                     
                        </div>

                        <div class="mb-4">
                            <label id="picturEdite" for="nomProduit" class="block text-white text-sm font-bold mb-2">picture</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="file"
                                name="nomProduit" id="nomProduit"  placeholder="Za3tar">
                     
                        </div>

                      
                        <div class="mb-4 flex justify-center">
                            <button id="saveEdite"
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