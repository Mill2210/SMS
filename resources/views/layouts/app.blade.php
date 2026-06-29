<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UniSMS') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-slate-100">

    @include('layouts.sidebar')

    <div class="ml-64 min-h-screen flex flex-col">

        @include('layouts.topbar')

        <main class="mt-16 flex-1 p-8">

            {{ $slot }}

        </main>

    </div>

</body>

</html>