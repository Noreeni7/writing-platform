<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen">
        <nav class="bg-gray-800 text-white p-4">
            <a href="{{ route('admin.articles.index') }}" class="mr-4">Articles</a>
            <a href="{{ route('admin.articles.create') }}">Create Article</a>
        </nav>

        <main class="p-6">
            @yield('content')
        </main>
    </div>
</body>

</html>