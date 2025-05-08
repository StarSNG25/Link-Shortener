<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-title" content="Link Shortener">
		<link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

		<title>{{ config('app.name', 'Laravel') }}</title>
		
		<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
{{--		<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}

		<!-- Scripts -->
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		@fluxAppearance
	</head>
	<body class="font-sans antialiased">
		<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
			<livewire:layout.navigation />

			<!-- Page Heading -->
			@if (isset($header))
				<header class="bg-white dark:bg-gray-800 shadow">
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
		@fluxScripts
	</body>
</html>
