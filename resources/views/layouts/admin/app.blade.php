<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen antialiased lg:flex" x-data="{open: false}">
        <nav
            class="absolute inset-0 z-10 h-screen p-3 text-white duration-200 transform bg-indigo-900 lg:transform-none lg:opacity-100 lg:relative w-80"
            :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': open === false}"
        >
            <div class="flex justify-between">
                <span class="p-2 text-2xl font-bold sm:text-3xl">Sidebar</span>
                <button
                    class="p-2 rounded-md focus:outline-none focus:bg-indigo-800 hover:bg-indigo-800 lg:hidden"
                    @click="open = false"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"
                        />
                    </svg>
                </button>
            </div>
            <ul class="mt-8">
                <li>
                    <a
                        href="{{ route('admin') }}"
                        class="block px-4 py-2 rounded-md hover:bg-indigo-800"
                        >Home</a
                    >
                    <a
                        href="{{ route('admin-users') }}"
                        class="block px-4 py-2 rounded-md hover:bg-indigo-800"
                        >All Users</a
                    >
                    <a
                        href="{{ route('admin-users-create') }}"
                        class="block px-4 py-2 rounded-md hover:bg-indigo-800"
                        >Create User</a
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 rounded-md hover:bg-indigo-800"
                        >All Posts</a
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 rounded-md hover:bg-indigo-800"
                        >Create Post</a
                    >
                </li>
            </ul>
        </nav>
        <div class="relative z-0 lg:flex-grow">
            <header class="flex items-center px-3 text-white bg-gray-700">
                <button
                    class="p-2 rounded-md focus:outline-none focus:bg-gray-600 hover:bg-gray-600 lg:hidden"
                    @click="open = true"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </button>
                <span class="block p-4 text-2xl font-bold sm:text-3xl"
                    >{{ $header }}</span
                >
            </header>
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
