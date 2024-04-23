@extends('layouts.admin-layouts')

@section('title', 'publicitaire ')

@section('content')

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main">




        {{-- produit planter start --}}

        <main class="bg-white flex-grow h-[100vh] relative rounded-xl shadow-2xl">
            <!-- ============== header =========== -->

            <div class="absolute right-0 sm:top-3 sm:right-10 mb-10 sm:mb-0">

                <button id="addPubliciter" onclick="showModal6()"
                    class=" rounded-lg px-10 py-3 bg-[#31363F] font-bold text-white hover:bg-green-400 hover:text-white   hover:shadow-lg  ">
                    ajouter publiciter
                </button>


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
                @endif

                <!-- ========== table Banks-desktop ======== -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 ">
                    @if($publiciters->isNotEmpty())
                    @foreach ($publiciters as $publiciter)
                        
                    <div
                        class="w-[78%] md:w-full  p-4 bg-gray-100 mb-4 md:mb-0 md:mr-2 ml-[20%] md:ml-0 mt-10 shadow-lg rounded-md">

                        <div class="mb-4 lg:mb-10 p-4 lg:p-0 w-full relative rounded block mt-9 md:mt-0">
                            <div class="flex w-full justify-end">
                                <form action="{{route('publiciter.delete',['id'=>$publiciter->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class=" w-8 h-[35px] rounded-md">
                                        <a href=""><i class="fa-solid fa-trash " style="color:#ff0202"></i></a>

                                    </button>
                                </form>
                                <a href=" {{route('edit-publiciter',['id'=>$publiciter->id])}}">
                                    <button class=" w-8 h-[35px] rounded-md">

                                        <i class="fa-solid fa-pen " style="color: #32ff12;"></i>
                                    </button>
                                </a>
                            </div>
                            <img src='{{asset('/storage/image/'.$publiciter->picture )}}' class='rounded-md object-cover w-full h-64'>

                            <div class="flex">



                                <span class="text-gray-700 text-sm hidden md:block mt-4">
                                    <span id="dateAnnonce">date annonce</span>: {{$publiciter->created_at}}
                                </span>
                                <span class="text-gray-700 text-sm hidden md:block mt-4"> &ensp;|&ensp; <span
                                        id="dateModified">date Modified</span>:
                                        {{$publiciter->updated_at}}
                                </span>
                            </div>
                            <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                                {{$publiciter->titre}}
                            </h1>
                            <p class="text-gray-600 mb-4">
                                {{$publiciter->contenu}}
                            </p>


                        </div>

                       
                    </div>
                    @endforeach
                    @else
                    {{-- <div class="w-full h"> --}}
                        <p class="flex justify-center items-center  text-4xl">Il n'y a pas des publiciter créer</p>
                    {{-- </div> --}}
                    @endif


                    
                </div>

                <div class=" md:hidden justify-end ml-[15%] mt-10 z-0">

                    {{$publiciters->links()}}
                </div>




            </div>
            <!-- ============ Content ============= -->


        </main>


        {{-- produit plannter end  --}}



        </div>

        {{-- pop up for adding produit planter start --}}

        <div id="myModal6" class="modal6 ">
            <div class="modal-content6 rounded-lg">
                <span class="close6" onclick="closeModal6()">&times;</span>
                <form id="updateForm" action="{{route('add.publiciter')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p id="addPubliciter1" class="text-xl md:text-3xl  font-bold text-center">ajouter Publiciter</p>
                    <label id="titreAdd" for="titre" class="block text-black text-sm font-bold mb-2">titre</label>
                    <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text" name="titre"
                        id="titre" placeholder="le preme de ce mois" value="{{ old('titre') }}"><br>
                        @error('titre')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                    <label id="contenu" for="contenu" class="block text-black text-sm font-bold mb-2">contenu</label>
                    <textarea class=" border rounded w-full py-2 px-3 text-grey-darker" type="text" name="contenu" id="contenu"
                        placeholder="detailles.......">{{ old('contenu') }}</textarea><br>
                        @error('contenu')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror


                    <label id="picture" for="picture" class="block text-black text-sm font-bold mb-2">picture</label>
                    <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="file" name="picture"
                        id="picture" {{ old('piture') }}><br>
                        @error('picture')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror



                    <button id="savePubli" type="submit" onclick="checkFields()"
                        class="text-white mb-2 mt-5 md:mx-60 rounded-full py-1 px-24 bg-[#31363F] hover:bg-black hover:text-white">
                        Save
                    </button>

                </form>
            </div>
        </div>
      

        {{-- pop up for adding produit planter end --}}






    </main>

@endsection
