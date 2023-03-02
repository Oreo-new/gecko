<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>[x-cloak] { display: none !important; }</style>
		@vite(['resources/css/app.scss', 'resources/js/app.js'])
        @livewireStyles
		@livewireScripts
        @stack('header-scripts')
    </head>
	
	<body class="font-sans antialiased" id="body">
		<div class="relative">
			<header>
				{{-- <x-includes.navigation/> --}}
			</header>

			<main class="max-container">
				{{ $slot }} 
			</main>

			<footer class="theme-dark-color-bg text-white">
				<div class=""> 
					{{-- <x-pages.footer/> --}}
				</div>
			</footer>
		</div>
		
		@stack('scripts')
	</body>
</html>