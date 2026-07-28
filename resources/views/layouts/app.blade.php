<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', config('app.name'))</title>
    <link rel="icon" href="{{ asset('LOGO Rayon FTKD.ico') }}" type="image/x-icon"/>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
    @include('layouts.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>
