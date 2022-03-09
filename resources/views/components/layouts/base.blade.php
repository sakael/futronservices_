<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seo['title'] ?? '' }} - FutronServices</title>
    <meta name="description" content="{{ $seo['description'] ?? 'FutronAviation' }}" />
    <!-- App favicon -->

    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon16.png') }}" type="image/x-icon" />
	
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/favicon57.png') }}">

        <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/favicon/favicon114.png') }}">

        <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/favicon/favicon72.png') }}">

        <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/favicon/favicon144.png') }}">

    <!-- App css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    @yield('scripts-hedaer','')
</head>

<body>
    <div id="wrapper" class="clearfix">
        <header id="header" class="full-header">
            <div id="header-wrap" class="">
                <x-partials.topbar>
                </x-paritals.topbar>
                <x-partials.main-menu>
                </x-paritals.main-menu>
                <x-partials.hero>
                </x-paritals.hero>
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
    <script>
        var replace = new ReplaceMe(document.querySelector('.replace-me'), {
    animation: 'animated fadeIn',                       // Animation class or classes
    speed: 4000,                                        // Delay between each phrase in miliseconds
    separator: ',',                                     // Phrases separator
    hoverStop: false,                                   // Stop rotator on phrase hover
    clickChange: false,                                 // Change phrase on click
    loopCount: 'infinite',                              // Loop Count - 'infinite' or number
    autoRun: true,                                      // Run rotator automatically
    onInit: false,                                      // Function
    onChange: false,                                    // Function
    onComplete: false                                   // Function
});</script>
    @yield('scripts-footer','')
</body>

</html>
