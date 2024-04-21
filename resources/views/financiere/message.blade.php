@extends('layouts.financiere-layouts')

@section('title', 'financiere message')

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main ">

 
    <!--===========Content===========-->
    <main class="bg-gray-100 flex-grow h-[100vh] relative ml-[10%] md:ml-5">

        <div class="   h-screen bg-cover bg-center" style="background-image: url('img/chat.png')">
         
            <div class="flex sm:items-center  py-3 border-b-2 border-gray-200 bg-white">
                <div class="relative flex items-center ">
                    <div class="relative ml-5">
                        <span class="absolute text-green-500 right-0 bottom-0">
                            <svg width="20" height="20">
                                <circle cx="8" cy="8" r="8" fill="currentColor"></circle>
                            </svg>
                        </span>
                        <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                            alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full">
                    </div>
                    <div class="flex flex-col leading-tight">
                        <div class="text-2xl mt-1 flex items-center">
                            <span class="text-gray-700 mr-3">Admin</span>
                        </div>

                    </div>
                </div>

            </div>
            <div  id="messagesFinanciereAdmin"
                class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch" style="max-height: 600px;">


            </div>

        </div>

        <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
            <div class="relative flex">
                

                {{-- __________________input for message ____________ --}}
                <form action="" class="flex w-full" id="messageForm">

                    <input type="hidden" id="csrf-token" value="{{ csrf_token() }}">

                    <input type="text" name="content" placeholder="Write your message!"
                        class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-md py-3">

                   

                    <input type="hidden" name="recipient" value="admin">



                    {{-- _________________button send_____________ --}}
                    <button type="submit"
                        class="inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out text-white bg-blue-300 hover:bg-blue-400 focus:outline-none">
                        <span class="font-bold">Send</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="h-6 w-6 ml-2 transform rotate-90">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                            </path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        </div>
        </div>

    </main>

</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('js/message-financiere-admin.js')}}"></script>


@section('content') 

@endsection