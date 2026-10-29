<!DOCTYPE html>
<html lang="@yield('html-lang', 'ps')" dir="@yield('html-direction', 'rtl')">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0a1d32">
    <meta name="description" content="@yield('meta-description', 'Atlantic Oil & Lubricants — باوري روغنیات او صنعتي حل لارې')">
    <title>@yield('title', 'Atlantic Oil & Lubricants')</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body class="@yield('body-class')">
    @include('partials.header')
    <main class="site-main" dir="@yield('content-direction', 'rtl')">@yield('content')</main>
    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}" defer></script>
    @stack('scripts')
</body>
</html>