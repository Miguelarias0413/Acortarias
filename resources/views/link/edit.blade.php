@extends('layouts.main--no-header')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center uppercase text-gray-900">Edita tu enlace</h2>

            <form method="POST" action="{{ route('link.update', ['link' => $link]) }}">
                @csrf
                <div class="mb-4">
                    <label for="url" class="block text-sm font-medium text-gray-700">URL para Acortar</label>
                    <input type="url" name="url" id="url" value="{{ $link ? $link->url : '' }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required>
                    @error('url')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-700">Mensaje (Opcional)</label>
                    <textarea name="message" id="message"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        {{ $link ? $link->message : '' }}

                    </textarea>
                    @error('message')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Crear
                        Enlace</button>
                </div>
            </form>
            <div class="mt-4">
                <button type="button" onclick="window.history.back()"
                    class="w-full py-2 px-4 bg-gray-600 text-white font-semibold rounded-md shadow hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Volver
                    Atrás</button>
            </div>
        </div>
    </div>
@endsection
