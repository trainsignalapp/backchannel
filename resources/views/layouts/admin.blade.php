<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8" />
    <meta name="x-ua-compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no" />

    <title>@yield('title') :: {{ config('app.name') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/admin.css') }}" />
</head>

<body>
    <header class="masthead">
        <div class="brand">
            <h1>{{ @config('app.name') }}</h1>
        </div>

        @include('widget.nav.main')

        <div class="right">
            <button>Hello</button>
        </div>
    </header>

    <main>
        <h2 class="title">@yield('page.title')</h2>


        <section class="content">
            @yield('content')
        </section>
    </main>

    <footer class="colophon">&nbsp;</footer>
</body>
</html>
