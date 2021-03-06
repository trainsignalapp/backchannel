<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="x-ua-compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no" />

        <title>@yield('title')</title>

        @yield('scripts')

        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ mix('css/styles.css') }}" />
        @yield('css')

    </head>

    <body>
        @yield('content')
    </body>
</html>
