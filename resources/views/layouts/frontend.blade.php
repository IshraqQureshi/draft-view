<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    
    {{-- Libraries --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    {{-- Custom --}}
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    @include('layouts.header')

    <main id="page-content">
    @yield('content')
    </main>
    @include('layouts.footer')

    {{-- JQuery Engine --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    {{-- Libraries --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    {{-- Custom --}}
    <script src="/js/custom.js"></script> 
</body>
</html>