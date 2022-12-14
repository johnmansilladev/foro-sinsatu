<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ isset($title) ? $title.' | ' : '' }}
        {{ config('app.name') }}
        {{ is_active('home') ? '- FORO' : '' }}
    </title>

    <meta name="description" content="Comunidad SINSATU para resolver problemas, compartir conocimiento y formar comunidades especialistas en ..." />
    <link rel="canonical" href="{{ $canonical ?? Request::url() }}" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('meta')

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>

    @include('feed::links')
    @include('layouts._favicons')
    @include('layouts._social')
    @include('layouts._fathom')

    @livewireStyles
</head>

<body class="{{ $bodyClass ?? '' }} dark:bg-slate-900 font-sans bg-white antialiased" :class="{ 'overflow-hidden': lockScroll }" x-data="{ lockScroll: false, activeModal: false }" @keyup.escape="activeModal = false">

@include('layouts._ads._banner')
@include('layouts._nav')

@yield('body')

@include('layouts._footer')

@stack('modals')

@livewireScripts

<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
</body>
</html>

