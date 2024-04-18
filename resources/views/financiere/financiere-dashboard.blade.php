@extends('layouts.financiere-layouts')

@section('title', 'financiere Dashboard')

@section('content')


<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-white min-h-screen transition-all main overflow-y-hidden">
   


        <style>
            .card {
                --main-color: #000;
                --submain-color: #78858F;
                --bg-color: #fff;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                position: relative;
                width: 100%;
                height: 384px;
                display: flex;
                flex-direction: column;
                align-items: center;
                border-radius: 20px;
                background: var(--bg-color);
            }
            @media screen and (max-width: 480px) {
                .card {

                    
                    margin-left: 10%;
                   
                    
                }

                
            }

            .card__img {
                height: 192px;
                width: 100%;
            }

            .card__img svg {
                height: 100%;
                border-radius: 20px 20px 0 0;
            }

            .card__avatar {
                position: absolute;
                width: 114px;
                height: 114px;
                background: var(--bg-color);
                border-radius: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                top: calc(50% - 57px);
            }

            .card__avatar svg {
                width: 100px;
                height: 100px;
            }

            .card__title {
                margin-top: 60px;
                font-weight: 500;
                font-size: 18px;
                color: var(--main-color);
            }

            .card__subtitle {
                margin-top: 10px;
                font-weight: 400;
                font-size: 15px;
                color: var(--submain-color);
            }

            .card__btn {
                margin-top: 15px;
                width: 76px;
                height: 31px;
                border: 2px solid var(--main-color);
                border-radius: 4px;
                font-weight: 700;
                font-size: 11px;
                color: var(--main-color);
                background: var(--bg-color);
                text-transform: uppercase;
                transition: all 0.3s;
            }

            .card__btn-solid {
                background: var(--main-color);
                color: var(--bg-color);
            }

            .card__btn:hover {
                background: var(--main-color);
                color: var(--bg-color);
            }

            .card__btn-solid:hover {
                background: var(--bg-color);
                color: var(--main-color);
            }
        </style>



        <div class="card">
            <div class="card__img" style="background-image: url('https://www.lacooperationagricole.coop/sites/default/files/news/2019-09/bonnes%20aisons%20d%27adh%C3%A9rer%20%C3%A0%20une%20coop%C3%A9rative.JPG'); background-size: cover; background-position:50% 35%"></div>

            <div class="card__avatar"><img class="w-full h-full rounded-full"
                    src="{{asset('/storage/image/'.auth()->user()->picture )}}" alt=""></div>
                    
            <div class="card__title">Nom : {{auth()->user()->fullName}} <i></i> </div>
            <div class="card__subtitle">Email : {{auth()->user()->email}} <strong><i></i></strong> </div>
            <div class="card__subtitle">Role : <strong><i>Financiere </i></strong> </div>
            {{-- <div class="card__wrapper">
                <button class="card__btn">Button</button>
                <button class="card__btn card__btn-solid">Button</button>
            </div> --}}
        </div>


    
   

    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6 px-4 py-8 ml-10 md:ml-0">

            
        <div
            class="shadow-xl flex flex-col justify-center items-center gap-2 border border-dashed border-gray-500 p-4 text-black rounded-md h-32 bg-gray-200 ml-9">
            <div class="flex gap-2 items-center">
                <span class="font-bold text-4xl">{{$countRevenu}}</span>
                <i class="fa-brands fa-product-hunt fa-2xl"></i>
            </div>
            <span id="totaleProduit" class="font-semibold opacity-70 text-sm text-center">Totale des produit</span>
        </div>
    
        <div
            class="ml-10 md:ml-0 shadow-xl flex flex-col justify-center items-center gap-2 border border-dashed border-gray-500 p-4 text-black rounded-md h-32 bg-gray-200 ">
            <div class="flex gap-2 items-center">
                <span class="font-bold text-4xl text-green-600">{{$countRevenuPrix}} DH</span>
                <i class="fa-solid fa-chart-line fa-2xl" style="color: green"></i>
    
            </div>
            <span id="prixTotalPRod" class="font-semibold opacity-70 text-sm text-center">Prix totale des produit</span>
        </div>
    
        <div
            class="shadow-xl flex flex-col justify-center items-center gap-2 border border-dashed border-gray-500 p-4 text-black rounded-md h-32 bg-gray-200 ml-9">
            <div class="flex gap-2 items-center">
                <span class="font-bold text-4xl">{{$countCharge}}</span>
                <i class="fa-solid fa-file-invoice-dollar fa-2xl"></i>
            </div>
            <span id="totaleCharge" class="font-semibold opacity-70 text-sm text-center"> Totale des chagre</span>
        </div>
    
        <div
            class="shadow-xl md:col-start-2 lg:col-auto flex flex-col justify-center items-center gap-2 border border-dashed text-black border-gray-500 p-4 rounded-md h-32 bg-gray-200 ml">
            <div class="flex gap-2 items-center">
                <span class="font-bold text-4xl text-red-600">{{$countChargePrix}} DH</span>
                <i class="fa-solid fa-chart-line fa-2xl" style="color: red"></i>
    
            </div>
            <span id="prixTotaleCharge" class="font-semibold opacity-70 text-sm text-center">Prix totale des Charge</span>
        </div>
    
    </div>
</main>
@endsection