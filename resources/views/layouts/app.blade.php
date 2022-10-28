<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>    
        @include('google-tag')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @stack('seo')
       
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Vite Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Feed -->
        @include('feed::links')

        <!-- PayFast -->
        @if (config('payfast.testmode') == true)
<!-- * test* -->
        <script src="https://sandbox.payfast.co.za/onsite/engine.js" defer></script>
        @else
        <script src="https://www.payfast.co.za/onsite/engine.js" defer></script>
        @endif                
        <!-- Styles -->

        @livewireStyles
                
    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @auth
                @livewire('auth-navigation-menu')
            @else
                @livewire('guest-navigation-menu')
            @endauth

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            
        </div>

        @stack('modals')

        @livewireScripts

        @stack('payfast-event-listener')
        
    </body>
</html>

