<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    {{ $title }}

    {{-- Import css and js using vite --}}
    @vite(['resources/js/app.js'])

    @stack('head')

    @livewireStyles
</head>

<body class="w-full">
    <!-- Page Content -->
    {{ $slot }}

    @stack('scripts')

    @livewireScripts

</body>

</html>
