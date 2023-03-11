<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles_head')
    @stack('scripts_head')
</head>
<body>
    <div id="app" class="d-flex min-vw-100 min-vh-100">
        <aside class="sidebar">
            @yield('sidebar')
        </aside>

        <section class="content flex-grow-1 d-flex flex-column">
            <header class="header">
                @yield('header')
            </header>

            <main class="main-content flex-grow-1" style="background: rgb(244, 244, 244)">
                @yield('breadcumbs')

                @yield('content')
            </main>
        </section>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts_body')
</body>
</html>
