<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @stack('HTMLMeta')

    <x-layout::default.partials.styles />
    @stack('styles')

    <title>@yield('HTMLTitle')</title>
</head>
<body>

    <div class="app">
        <x-widget::navigation />

        <div class="page-content">
            {{ $pageContent }}
        </div>

        <x-widget::alert />
        <x-widget::footer />
    </div>

    <x-layout::default.partials.scripts />
    @stack('scripts')
</body>
</html>
