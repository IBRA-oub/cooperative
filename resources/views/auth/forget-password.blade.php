<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Forget password</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
   

    @vite('resources/css/app.css')
    {{-- @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="assets/style.css">



</head>

<body style="background-repeat: no-repeat; background-size: cover; background-image: url('img/forget.jpg')"
>
    <div class="z-0 w-full h-screen" style="background-color: rgba(47, 47, 47, 0.81)">
    <div  class="w-72 md:w-full   ml-10 md:ml-0 bg-transparent z-10" >
        <div class="container mx-auto py-[50%] md:py-[16%]">
            @if (session('success'))
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "{{ session('success') }}",


                });
            </script>
            @endif
            <div class="w-80 md:w-[60%] md:mx-auto ml-8   rounded shadow" style="background-color: rgba(74, 74, 74, 0); box-shadow:0px 0px 12px 7px #f0ecec38">

                <div id="addUser" class=" mx-16 py-4 px-8 text-white text-5xl font-bold border-b border-grey-500 text-center"> Oublier Mots De Passe!!
                </div>

                <form action="{{route('forget.password.post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="py-4 px-8">

                        


                        <div class="mb-4">
                            <label id="EM" for="email" class="block text-white text-sm font-bold mb-2">Votre Email</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="email"
                                name="email" id="email"  placeholder="exemple@gmail.com">
                                @error('email')<p id="error_creater_id"  class="text-red-600">{{$message}}</p> @enderror

                        </div>

                       
                        <div class="mb-4 flex justify-center">
                            <button id="sv"
                                class="text-white mb-2 mx-16 rounded-full py-1 px-24 bg-[#22314c] hover:bg-white hover:text-black ">
                                Envoyer
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
</body>

</html>
