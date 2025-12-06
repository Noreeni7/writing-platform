<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Writerly')</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased">
    <div class="container mx-auto py-10">
        @yield('content')
    </div>
</body>
</html>
