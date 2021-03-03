<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8" />
    <meta name="x-ua-compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no" />

    <title>@yield('title') :: {{ config('app.name') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ mix('css/admin.css') }}" />
</head>

<body>
    <header class="masthead">
        <div class="brand">
            <h1>{{ @config('app.name') }}</h1>
        </div>

        <nav class="main"></nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="colophon">&nbsp;</footer>
</body>
</html>
