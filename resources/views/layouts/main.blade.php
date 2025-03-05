<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{-- xd --}}
        @yield('title')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

</head>

<body>
    <div class="fixed top-0 left-0 h-screen w-full bg-black -z-10">

        <div
            class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:14px_24px]">
        </div>
        <div
            class="absolute left-0 right-0 top-[-10%] h-[1000px] w-[1000px] rounded-full bg-[radial-gradient(circle_400px_at_50%_300px,#fbfbfb36,#000)]">
        </div>
    </div>

    <header class=" fixed  border-black w-full h-20  top-0 ">
        <ul class=" w-full h-full flex items-center justify-center gap-8 text-white font-bold uppercase text-sm">
            <li>
                {{-- <a href="">Item 1</a>
                <a href="">Item 2</a>
                <a href="">Item 3</a>
                <a href="">Item 4</a> --}}
            </li>
            @guest()
                <a href="{{ route('login') }}" type="button"
                    class="absolute top-1/2 -translate-y-1/2 right-4 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Iniciar Sesion
                </a>
            @endguest
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        class="absolute top-1/2 -translate-y-1/2 right-4 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Cerrar Sesion
                    </button>

                </form>
            @endauth
        </ul>
    </header>

    <main class="container h-screen w-full mx-auto pt-20">
        @yield('content')
    </main>

</body>

{{-- estilos --}}



</html>
