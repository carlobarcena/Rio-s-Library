<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rio's Library</title>

    @include('partials.head')
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    @include('partials.style')
</head>
<body class="background">
    <div id="app">
        <main class="py-4">
            @yield('content')
            @include('modal')
        </main>
    </div>
    @include('partials.script');
</body>
</html>
