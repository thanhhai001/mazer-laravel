<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @include('layouts.partials.scripts')
</head>

<body>
    <div id="app">
        @include('layouts.partials.sidebar')

        <div id="main" class='layout-navbar'>
            @include('layouts.partials.header')
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <h3>{{ $title ?? '' }}</h3>
                        </div>
                        {{ $slot ?? '' }}
                    </div>

                    @include('layouts.partials.footer')
                </div>
            </div>
        </div>
        {{-- @include('layouts.partials.scripts') --}}
</body>

</html>
