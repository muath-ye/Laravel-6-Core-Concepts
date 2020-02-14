<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>🧨 @yield('page_title', 'BySwadi')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    @include('Style')
</head>
<body class="scrollbar-lg">
{{--@include('mine')--}}
{{--@include('ignitor-complied')--}}
<div class="container">
@yield('Payment')
</div>
</body>
</html>
