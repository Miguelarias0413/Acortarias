@extends('layouts.main')
@section('title')
    Cortarias - Acortador
@endsection
@section('content')
    <section
        id="sectionPrincipal"   
        class="  w-full h-full flex flex-col-reverse justify-end px-8 lg:flex-row items-center lg:pb-20   md:px-20 lg:px-32 ">

        <div class=" basis-1/2 w-full lg:w-6/12   flex flex-col  md:px-8 ">
            <img class=" py-4 w-full h-64 lg:h-80 "src="{{ asset('ilustraciones/undraw_to-the-moon_w1wa.svg') }}"
                alt="">
            <h2 class="  text-white font-bold md:text-left text-2xl uppercase mt-9 text-center text-wrap ">
                El mejor acortador con una velocidad Galactica
            </h2>
            @auth()
          
                <a href="{{ route('dashboard') }}" type="button" class="w-full md:w-[110%] my-3 text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Ir al Dashboard
                </a>
            @endauth
            @guest()
                <a href="{{ route('login') }}" type="button"
                    class=" w-full md:w-[110%] my-3 text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    ¡Empieza desde ya y Gratis!
                </a>
            @endguest
            <p class="text-white text-center text-wrap ">
                el mejor acortador de enlaces con una velocidad galactica, acorta tus enlaces de manera rapida y segura
            </p>
        </div>


        <div class="flex w-full  lg:w-6/12   my-8 md:my-0 md: justify-end ">
            <h1
                id="tituloPrincipal"
                class=" relative w-full  font-extrabold text-5xl text-center  text-transparent bg-clip-text bg-gradient-to-tr from-lime-200 via-lime-400 to-lime-600 b-2   ">
                ACORTARIAS
            </h1>
        </div>
    </section>


    @push('styles')
    <style>
        #sectionPrincipal::before {
            content: '';
            position: absolute;
            top: 50%;
            left: -12%;
            transform: translate(0, -50%);
            width: 25%;
            border-radius: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(115, 255, 0, 1) 0%, rgb(244, 244, 244) 100%);
            z-index: -1;
            filter: blur(220px);
        }
        #tituloPrincipal::before{
            content: '';
            position: absolute;
            top: -100px;
            right: 50px;
            background: rgb(53, 112, 1);
            width: 200px;
            height: 200px;
            z-index: -1;
            filter: blur(80px);
            

        }
    </style>
    @endpush
@endsection
