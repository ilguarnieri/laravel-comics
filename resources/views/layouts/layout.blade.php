<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <title>@yield('metaTitle')</title>
</head>
<body>
    @include('componentes.header')

    <main>
        @yield('mainContent')
    </main>

    @include('componentes.footer')    
</body>
</html>