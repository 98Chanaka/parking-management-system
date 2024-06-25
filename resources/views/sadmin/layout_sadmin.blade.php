<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}"
			x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
			x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sadmin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="font-sans antialiased text-gray-900">
        <!--Header goes here-->
        @include('header')
        <!--Sidebar goes here-->
        @include('sadmin.layout_body.sidebar_sadmin')
        <div class="min-h-screen bg-light-background dark:bg-dark-background">
        @yield('sadmin')
        </div>
    </div>
</body>

</html>