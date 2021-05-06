<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Octo') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <!-- Layount -->
        <div class="md:flex flex-col md:flex-row md:min-h-screen w-full bg-gray-100">
        <x-octo-sidebar :items="$sidebar['items']">
            <div class="flex-shrink-0 py-3 border-gray-100 border-b flex justify-center">
                <a class="mr-2" href="{{ route('home') }}">
                    <x-jet-application-mark class="block h-9 w-auto" />
                </a>
            </div>
        </x-octo-sidebar>
        <div class="flex flex-col w-full">
            @livewire('navigation-menu')
            @if (isset($header))
                <header class="bg-white">
                    <div class="max-w-7xl mx-auto py-6 px-2 sm:px-3 lg:px-4">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

        @livewire('livewire-ui-modal')
        @livewireUIScripts
        @livewireScripts
    </body>
</html>