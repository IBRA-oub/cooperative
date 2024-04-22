@extends('layouts.planner-layouts')

@section('title', 'planner Dashboard')

@section('content')

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main">

<div class=" h-[800px] md:h-52 w-full bg-white">
    <div class="absolute right-2   sm:right-2 ">
        
        <button class=" rounded-lg px-5 py-3 bg-black font-bold text-white hover:bg-green-500   hover:shadow-lg active:opacity-[0.95]" onclick="showModal3()">
            <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
        </button>
         

     </div>
     @if($periods->isNotEmpty())
     @foreach($periods as $period)
    <div class="h-52 w-[90%] flex justify-around flex-wrap ml-10">
        <div id="CssPeriode" class="rounded-md bg-white  w-60 h-[9.2rem] my-5 text-black">
            <p  class="mt-3 ml-2 text-center text-xl"><span id="periode">période:</span> <strong>{{$period->titre}}</strong></p>
            <p  class="mt-3 ml-2"> <span id="dateDebut">date début</span> <i class="fa-solid fa-arrow-right" style="color: #000000;"></i> <strong>{{$period->dateDepart}}</strong></p>
            <p  class="mt-3 ml-2"> <span id="dateFinir">date stop</span> <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>   <strong>{{$period->dateStop}}</strong></p>
            <div class="flex justify-end">
                    <form action="{{ route('periode.delete', ['id' => $period->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class=" w-8 h-[35px]  ">
                        <a
                            href=""><i
                                class="fa-solid fa-trash " style="color:#ff0101"></i></a>

                    </button>
                    </form>
                    <a href="{{ route('edit-periode', ['id' => $period->id]) }}">
                    <button class=" w-8 h-[35px] ">
                        
                            <i class="fa-solid fa-pen" style="color: #30ff02;"></i>
                    </button>
                </a>
          </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="h-52 w-[90%] flex justify-around flex-wrap ml-10">
       
           <p class="text-2xl text-green-500 flex justify-center items-center" > There is no periodes created </p>
        
    </div>
    @endif
</div>

{{-- pop up for adding periode start --}}



<div id="myModal3" class="modal3 ">
    <div class="modal-content3 rounded-lg">
      <span class="close3" onclick="closeModal3()">&times;</span>
      <form action="{{route('add.periode')}}" id="updateForm" method="POST">
        @csrf
        <p id="addPeriode" class="text-xl font-bold text-center">ajouter une periode</p>

        <label id="nomPeriode" for="titre" class="block text-black text-sm font-bold mb-2">nom de periode</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="titre" id="titre"  placeholder="argicule"><br>
            @error('titre')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

            <label id="datedb" for="dateDepart" class="block text-black text-sm font-bold mb-2">date Début</label>
            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                name="dateDepart" id="dateDepart"  placeholder="3"
                min="{{ now()->timezone('Africa/Casablanca')->format('Y-m-d') }}"><br>
                @error('dateDepart')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                <label id="dateFN" for="dateStop" class="block text-black text-sm font-bold mb-2">date Finir</label>
                <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                    name="dateStop" id="dateStop"  placeholder="3"
                    min="{{ now()->timezone('Africa/Casablanca')->format('Y-m-d') }}"><br>
                    @error('dateStop')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

        <button id="SVPer"
        class="  text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
        Save
       </button>                              

       </form>
    </div>
  </div>

  {{-- pop up for adding periode end --}}


{{-- produit planter start --}}
<div class=" block md:flex gap-5 ml-[20%] w-[80%] md:w-[95%] h-screen  md:ml-10">
    <div class=" w-full h-full md:w-1/2  ">
        <main class="mate bg-white flex-grow h-[100vh] relative rounded-xl shadow-2xl">
            <!-- ============== header =========== -->
        
            <div class="absolute right-0 sm:top-4 sm:right-10 ">
              
               <button id="addProADD" onclick="showModal4()" class="text-white rounded-lg px-10 py-3 bg-[#31363F]  font-bold  hover:bg-green-400 hover:text-white   hover:shadow-lg  ">
                   add produit
               </button>
           
       
            </div>
            <!-- ============ Content ============= -->
        
            <div class="md:p-6 bg-white  md:m-5">
                @if (session('success'))
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Success!",
                        text: "{{ session('success') }}",


                    });
                </script>
                @endif
        
                <!-- ========== table Banks-desktop ======== -->
              
                <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
                    <table class="  
                   w-full   " id="tablePro">
                        <thead class="  sm:w-full">
                            <tr class="bg-[#31363F] text-white h-[40px]">
                                <th id="idADD" class="">ID</th>
                                <th id="nomProADD" class="">nom de produit</th>
                                <th id="periProADD" class="">periode</th>
                                
                                <th id="actionsADD" class="">plus options</th>
                            </tr>
                        </thead>
                        <tbody class="sm:w-full">
                            @foreach($produits as $produit)
                         
        
                            <tr class=" text-black pt-10 sm:pt-0  w-full border-b border-[#31363F]">
        
                                <td class=" text-center ">
                                    {{$produit->id}}
                                   
                                </td>
                                <td class=" text-center ">
                                   {{$produit->nom}}
                                   
                                </td>
                                <td class=" text-center ">
                                   {{$produit->periode->titre}}
                                   
                                </td>
                             
                              
                                   <td class="text-center flex justify-center">
                                    <form action="{{ route('produit.delete', ['id' => $produit->id]) }}" method="POST">

                                           @csrf
                                           @method('DELETE')
                                        <button class=" w-8 h-[35px] ">
                                            <a
                                                href=""><i
                                                    class="fa-solid fa-trash " style="color:#ff0101"></i></a>
            
                                        </button>
                                       </form>
                                       <a href="{{ route('edit-produit', ['id' => $produit->id]) }}">
                                        <button class=" w-8 h-[35px] ">
                                           
                                               <i class="fa-solid fa-pen" style="color: #30ff02;"></i>
                                       </button>
                                   </a>
                                </td>
                               
                            </tr>
                      @endforeach
        
                        </tbody>
                      
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
        
        
                            </tr>
                        </thead>
                        <tbody class="block  w-full">
                           @foreach($produits as $produit)
                            <tr class="block pt-10 mt-9 sm:mt-0 sm:pt-0   w-full ">
        
                                <td data-label="id"
                                    class="border-b before:content-['id']  before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                                  {{$produit->id}}
                                  
                                </td>
                                <td data-label="nom" class="border-b before:content-['nom'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                                     text-right">
                                   {{$produit->nom}}
                                  
                                </td>
                                <td data-label="periode" class="border-b before:content-['periode'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                                     text-right">
                                   {{$produit->periode->titre}}
                                  
                                </td>
                           
                                <td data-label="Action"
                                    class=" border-b before:content-['action'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                                   
                                    <div class="flex justify-end">
                                    <form action="{{ route('produit.delete', ['id' => $produit->id]) }}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                    <button class=" w-8 h-[35px] ">
                                        <a
                                            href=""><i
                                                class="fa-solid fa-trash " style="color:#ff0101"></i></a>
        
                                    </button>
                                   </form>
                                   <a href="{{ route('edit-produit', ['id' => $produit->id]) }}">
                                    <button class=" w-8 h-[35px] ">
                                       
                                           <i class="fa-solid fa-pen" style="color: #30ff02;"></i>
                                   </button>
                                   </a>
                                    </div>
                                   
                                </td>
                                
                            </tr>
                         @endforeach
        
                        </tbody>
                    </table>
                </div>
        
        
        
            </div>
            <!-- ============ Content ============= -->
        
        
        </main>
    </div>

    {{-- produit plannter end  --}}


    {{-- materiaux/outils start --}}
    <div class=" w-full h-full md:w-1/2  ">
        <main class="mate bg-white flex-grow h-[100vh] relative rounded-xl ">
            <!-- ============== header =========== -->
        
            <div class="absolute right-10 sm:top-4 sm:right-10 ">
               
               <button id="outilsMaterADD" onclick="showModal5()" class=" rounded-lg px-10 py-3 bg-[#31363F] font-bold text-white hover:bg-green-400 hover:text-white   hover:shadow-lg  ">
                   add 
               </button>
        
       
            </div>
            <!-- ============ Content ============= -->
        
            <div class="md:p-6 bg-white  md:m-5 ">
              
        
                <!-- ========== table Banks-desktop ======== -->
              
                <div class="hidden md:block  rounded-lg overflow-hidden mt-[10%] w-[95%] items-center ml-10 ">
                    <table class="  
                   w-full   " id="tableOM">
                        <thead class="  sm:w-full">
                            <tr class="bg-[#31363F] text-white h-[40px]">
                                <th id="nomProOutilMAterADD" class="">Nom produit</th>
                                <th id="outilsMAterADD" class="">materiaux/outils</th>
                                
                                <th id="actionOutilMAterADD" class="">Plus options</th>
                            </tr>
                        </thead>
                        <tbody class="sm:w-full">
                            @foreach($MateraiuxOutils as $materOutil)
                         
        
                            <tr class=" text-black pt-10 sm:pt-0  w-full border-b border-[#31363F]">
        
                                <td class=" text-center ">
                                    {{$materOutil->produit_planter->nom}}
                                   
                                </td>
                                <td class=" text-center ">
                                   {{$materOutil->nom}}
                                   
                                </td>
                             
                              
                                   <td class="text-center flex justify-center">
                                       <form action="{{ route('materiauxOutils.delete', ['id' => $materOutil->id]) }}" method="POST">
                                           @csrf
                                           @method('DELETE')
                                        <button class=" w-8 h-[35px] ">
                                            <a
                                                href=""><i
                                                    class="fa-solid fa-trash " style="color:#ff0101"></i></a>
            
                                        </button>
                                       </form>
                                       <a href="{{ route('edit-materiauxOutils', ['id' => $materOutil->id]) }}">
                                        <button class=" w-8 h-[35px] ">
                                           
                                               <i class="fa-solid fa-pen" style="color: #30ff02;"></i>
                                       </button>
                                   </a>
                                </td>
                               
                            </tr>
                      
        
                            @endforeach
                        </tbody>
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
        
        
                            </tr>
                        </thead>
                        <tbody class="block  w-full">
                            @foreach($MateraiuxOutils as $materOutil)
                            <tr class="block pt-10 sm:pt-0  mt-9 sm:mt-0 w-full ">
        
                                <td data-label="Nom"
                                    class="border-b before:content-['Nom']  before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                                    {{$materOutil->produit_planter->nom}}

                                </td>
                                <td data-label="materiaux/outils" class="border-b before:content-['materiaux/outils'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                                     text-right">
                                     {{$materOutil->nom}}
                                </td>
                           
                                <td data-label="Action"
                                    class=" border-b before:content-['action'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                                   
                                    <div class="flex justify-end">
                                    <form action="{{ route('materiauxOutils.delete', ['id' => $materOutil->id]) }}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                    <button class=" w-8 h-[35px] ">
                                        <a
                                            href=""><i
                                                class="fa-solid fa-trash " style="color:#ff0101"></i></a>
        
                                    </button>
                                   </form>
                                   <a href="{{ route('edit-materiauxOutils', ['id' => $materOutil->id]) }}">
                                    <button class=" w-8 h-[35px] ">
                                       
                                           <i class="fa-solid fa-pen" style="color: #30ff02;"></i>
                                   </button>
                                   </a>
                                    </div>
                                   
                                </td>
                                
                            </tr>
                         @endforeach
        
                        </tbody>
                    </table>
                </div>
        
        
        
            </div>
            <!-- ============ Content ============= -->
        
        
        </main>
    </div>

    {{-- materiaux/outils end --}}
</div>

{{-- pop up for adding produit planter start --}}


<div id="myModal4" class="modal4 ">
    <div class="modal-content4 rounded-lg">
      <span class="close4" onclick="closeModal4()">&times;</span>
      <form action="{{route('add.produit')}}" id="updateForm" method="POST">
        @csrf
        <p id="addProPlanADD" class="text-xl font-bold text-center">ajouter Produit a planter</p>
        <label id="nomProPlanADD" for="nom" class="block text-black text-sm font-bold mb-2">nom de produit</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="nom" id="nom"  placeholder="Argan"><br>
            @error('nom')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

            <label id="periodeProPLanADD" for="Periode" class="block text-black text-sm font-bold mb-2">periode</label>
            <select class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                name="periode_id" id="Periode" min="{{ now()->timezone('Africa/Casablanca')->format('Y-m-d') }}">
                @foreach($periods as $periode)
            <option value="{{$periode->id}}">{{$periode->titre}}</option>
                @endforeach
            </select><br>
               
        <button id="saveProPlanADD"
        class="text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
        Save
       </button>                              

       </form>
    </div>
  </div>

  {{-- pop up for adding produit planter end --}}


  {{-- pop up for adding materiux/outils start --}}


<div id="myModal5" class="modal5 ">
    <div class="modal-content5 rounded-lg">
      <span class="close5" onclick="closeModal5()">&times;</span>
      
        <form action="{{route('add.materiauxOutils')}}" id="updateForm" method="POST">
            @csrf
        <p id="addMaOuADD" class="text-xl font-bold text-center">ajouter Materiaux/outils</p>
        <label id="MateOutiADD" for="nom" class="block text-black text-sm font-bold mb-2">materiux/outils</label>
        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
            name="nom" id="nom"  placeholder="sizer"><br>
            @error('nom')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

            <label id="ProdAdd" for="produit_planter_id" class="block text-black text-sm font-bold mb-2">produit</label>
            <select class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                name="produit_planter_id" id="produit_planter_id" min="{{ now()->timezone('Africa/Casablanca')->format('Y-m-d') }}" >
                @foreach($produits as $produit)
            <option value="{{$produit->id}}">{{$produit->nom}}</option>
            @endforeach
          
            </select><br>
               
        <button id="saveOuMAt"
        class="text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
        Save
       </button>                              

       </form>
    </div>
  </div>

  {{-- pop up for adding materiux/outils end --}}

{{-- produit planter end --}}
</main>

@endsection