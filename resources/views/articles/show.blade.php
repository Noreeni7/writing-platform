<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    @vite(['resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 antialiased">

    <div class="max-w-4xl mx-auto py-16 px-6">

        <a href="/" class="text-gray-600 hover:text-black">&larr; Back Home</a>

        <h1 class="text-4xl font-bold mt-6 mb-4">
            {{ $article->title }}
        </h1>

        <p class="text-gray-500 mb-10">
            Published on {{ $article->created_at->format('M d, Y') }}
        </p>

        <div class="prose prose-lg max-w-none">
            {!! nl2br(e($article->content)) !!}
        </div>

    </div>

</body>

</html>