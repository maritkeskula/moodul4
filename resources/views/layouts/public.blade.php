<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Golden Fighters</title>
    {{--    fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,300&family=Teachers:ital@0;1&display=swap" rel="stylesheet">

    {{--    styling --}}
    @vite(['resources/css/styles.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>


    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')
</body>
</html>
