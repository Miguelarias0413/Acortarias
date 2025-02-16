@extends('layouts.main--no-header')

@section('content')
    <section class="w-full h-full ">
        <header class="flex justify-between items-center h-20 bg-white text-white px-4 bg-opacity-20 backdrop-blur-2xl">
            <a href="{{route('landing')}}" class="flex items-center space-x-2">
                <h1 class="text-2xl font-bold border-b-2 border-blue-400">Acortarias</h1>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>  
            </a>
            <div class="flex items-center justify-between gap-6 h-full  p-0  ">
                <p id="counter" class="text-2xl h-full text-center flex items-center font-bold  px-2">
                    10
                </p>
                <a id="btnGo" href="{{$link->url}}"  
                    class="desactivated my-3 text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Continuar al enlace
                </a >
            </div>
        </header>
        <article class=" my-20 w-full h-[60vh] bg-white text-white px-4 bg-opacity-5 backdrop-blur-2xl flex flex-col items-center justify-start  font-semibold text-lg">
            <header class=" w-full max-w-7xl p-6 rounded-lg shadow-md mb-2 text-white font-bold text-center text-md ">
                Mensaje creado por {{$link->user->name}}
            </header>
           {{$link->message}}
        </article>
    </section>
@endsection

@vite(['resources/js/showLink.js','resources/css/showLink.css '] )
