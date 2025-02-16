@extends('layouts.main--no-header')

@section('title')
    Dashboard - Acortador
@endsection

@section('content')
<div class="min-h-screen flex flex-col">
    <header class="bg-gray-800 text-white p-4 flex items-center justify-between">
        <a href="{{route('landing')}}" class="flex items-center space-x-2">
            <h1 class="text-2xl font-bold border-b-2 border-blue-400">Dashboard</h1>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </a>
        <a href="{{route('link.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600">
            Crear Un Nuevo Enlace
        </a>
    </header>
    <main class="flex-grow flex items-start justify-center ">
        <div class="w-full max-w-7xl p-6">
            @if (session('success'))
            <header class=" w-full max-w-7xl p-6 bg-green-400 rounded-lg shadow-md text-white font-bold text-center text-md ">
                {{session('success')}}
            </header>      
            @endif
            @if (session('error'))
            <header class=" w-full max-w-7xl p-6 bg-red-400 rounded-lg shadow-md text-white font-bold text-center text-md ">
                El registro no se pudo eliminar
            </header>      
            @endif
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">Bienvenido al Dashboard <span class=" text-2xl uppercase text-blue-600">{{$user->name}}</span></h2>
                <p class="mb-4">Aquí puedes ver un resumen de tu actividad.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <h3 class="text-lg font-bold mb-2">Estadísticas</h3>
                        <p class="text-gray-600">Resumen de tus estadísticas.</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow p-4 col-span-2">
                        <h3 class="text-lg font-bold mb-2">Enlaces Recientes</h3>
                        <p class="text-gray-600">Lista de tus enlaces más recientes.</p>
                        @if ($user->links->count())
                            <ul class="mt-4">
                                @foreach ($user->links as $link)
                                    <li class="flex justify-between py-2 border-b border-gray-200">
                                        <div class="flex space-x-2">
                                            <form action="{{route('link.delete', $link->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white p-2 rounded shadow hover:bg-red-600">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                            <a href="{{route('link.edit', ['link'=> $link])}}" class="bg-blue-500 text-white p-2 rounded shadow hover:bg-blue-600">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M5 20h2M7 4h10M7 4h2M7 4v16M17 4v16M7 4l10 16"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <a href="{{route('link.show', $link)}}" class="text-blue-500">{{ $link->url}}</a>
                                        <span class="text-gray-500">{{ $link->created_at->diffForHumans() }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-500">No hay enlaces recientes.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection