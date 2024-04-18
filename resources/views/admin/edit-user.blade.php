@extends('layouts.admin-layouts')

@section('title', 'Add User')

@section('content')

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-green-200 min-h-screen transition-all main">
        <!--===========Content===========-->
        <main class=" flex-grow  relative h-screen bg-cover bg-center " style="background-image: url('img/update.jpg')">

            <div class="w-full h-full" style="background-color: rgba(59, 59, 59, 0.5); backdrop-filter: blur(4px);">

            </div>
            <!--  Application Details Start -->
            <div class="absolute top-0 w-72 md:w-full   bg-transparent  ml-10 md:ml-0">
                <div class="container mx-auto py-8">
                    <div class="w-80 md:w-[60%] md:mx-auto ml-8 rounded shadow bg-white">

                        <div id="EditeUSer"
                            class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500 text-center">Edit
                            Travailleur
                        </div>

                        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="py-4 px-8">

                                <div class="mb-4">
                                    <label id="FLE" for="fullName"
                                        class="block text-black text-sm font-bold mb-2">fullName</label>
                                    <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                                        name="fullName" id="fullName" value="{{ $user->fullName }}">
                                    @error('fullName')
                                        <p id="error_creater_id" :messages="$errors - > get('fullName')" class="text-red-600">
                                            {{ $message }}</p>
                                    @enderror

                                </div>


                                <div class="mb-4">
                                    <label id="EME" for="email"
                                        class="block text-black text-sm font-bold mb-2">Email</label>
                                    <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="email"
                                        name="email" id="email" value="{{ $user->email }}">
                                    @error('email')
                                        <p id="error_creater_id" :messages="$errors - > get('fullName')" class="text-red-600">
                                            {{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="mb-4">
                                    <label id="PSE" for="password"
                                        class="block text-black text-sm font-bold mb-2">Password</label>
                                    <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="password"
                                        name="password" id="password" placeholder="*********************">
                                    @error('password')
                                        <p id="error_creater_id" :messages="$errors - > get('fullName')" class="text-red-600">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label id="SLE" for="salaire"
                                        class="block text-black text-sm font-bold mb-2">Salaire/Heure</label>
                                    @if ($user->financiere)
                                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                            name="salaire" id="salaire" value="{{ $user->financiere->salaire }}">
                                        @error('salaire')
                                            <p id="error_creater_id" :messages="$errors - > get('fullName')" class="text-red-600">
                                                {{ $message }}</p>
                                        @enderror
                                    @elseif ($user->planner)
                                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                            name="salaire" id="salaire" value="{{ $user->planner->salaire }}">
                                        @error('salaire')
                                            <p id="error_creater_id" :messages="$errors - > get('fullName')" class="text-red-600">
                                                {{ $message }}</p>
                                        @enderror
                                    @elseif ($user->stockiste)
                                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                            name="salaire" id="salaire" value="{{ $user->stockiste->salaire }}">
                                        @error('salaire')
                                            <p id="error_creater_id" :messages="$errors - > get('fullName')" class="text-red-600">
                                                {{ $message }}</p>
                                        @enderror
                                    @elseif ($user->travailleur)
                                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number"
                                            name="salaire" id="salaire" value="{{ $user->travailleur->salaire }}">
                                        @error('salaire')
                                            <p id="error_creater_id" :messages="$errors - > get('fullName')" class="text-red-600">
                                                {{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <label id="SL" for="role"
                                        class="block text-black text-sm font-bold mb-2">Role</label>
                                    <select class=" border rounded w-full py-2 px-3 text-grey-darker" name="role"
                                        id="role">
                                        <option value="financiere">Financière</option>
                                        <option value="planner">Responsable agricole</option>
                                        <option value="stockiste">Stockists</option>

                                        <option value="travailleur">Travailleur</option>

                                    </select>
                                    <p id=error_creater_id></p>
                                </div>

                                <div class="mb-4">
                                    <label id="picE" for="picture"
                                        class="block text-black text-sm font-bold mb-2">picture</label>
                                    <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="file"
                                        name="picture" id="picture">
                                    @error('picture')
                                        <p id="error_creater_id" :messages="$errors - > get('fullName')" class="text-red-600">
                                            {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4 flex justify-center">
                                    <button id="svE"
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



            </div>
            </form>

            </div>

            </div>
            </div>
            <!-- Student Visa End -->
        </main>
    </main>
@endsection
