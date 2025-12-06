<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $poem->title }}</title>
    @vite(['resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 antialiased">

    <div class="max-w-3xl mx-auto py-16 px-6 text-center">

        <a href="/" class="text-gray-600 hover:text-black">&larr; Back Home</a>

        <h1 class="text-4xl font-bold mt-6 mb-4">
            {{ $poem->title }}
        </h1>

        <p class="text-gray-500 mb-10">
            Published on {{ $poem->created_at->format('M d, Y') }}
        </p>

        <div class="prose prose-lg max-w-none italic">
            {!! nl2br(e($poem->content)) !!}
        </div>

    </div>

</body>

</html>