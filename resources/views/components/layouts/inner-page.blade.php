<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seo['title'] ?? ''}} - FutronAviation</title>
    <meta name="description" content="{{ $se['description'] ?? 'FutronAviation' }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    @yield('scripts-hedaer','')
</head>

<body class="page-body">
    <div id="wrapper" class="clearfix">
        <header id="header" class="full-header">
            <div id="header-wrap" class="">
                <x-partials.topbar>
                </x-paritals.topbar>
                <x-partials.main-menu>
                </x-paritals.main-menu>
                <x-partials.inner-herro :background="$background">
                </x-paritals.inner-herro>
            </div>
        </header>
        {{ $slot }}
        <x-partials.newsletter>
        </x-paritals.newsletter>
        <x-partials.footer>
        </x-paritals.footer>
    </div>
    <!-- bundle -->
    <script src="{!! mix('js/app.js') !!}"></script>
    @yield('scripts-footer','')
</body>

</html>
