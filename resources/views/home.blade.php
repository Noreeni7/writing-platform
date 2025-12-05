<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <!-- NAVIGATION BAR  -->
    <header class="fixed w-full bg-white shadow z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Brand  -->
            <a href="#" class="text-2xl font-bold text-gray-900">Writerly</a>

            <!-- Links  -->
            <nav class="space-x-6 hidden md:flex">
                <a href="#articles" class="text-gray-700 hover:text-gray-900 transition">Articles</a>
                <a href="#poetry" class="text-gray-700 hover:text-gray-900 transition">Poetry</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 transition">About</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 transition">Contact</a>
            </nav>

            <!-- Mobile Menu Button  -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-gray-700 focus:outline-none">
                    ☰
                </button>
            </div>
        </div>
    </header>

    <!-- Spacer for fixed header  -->
    <div class="h-20"></div>


    <!-- FEATURED ARTICLES  -->
    <section id="articles" class="py-20 bg-gray-800 px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-green-500">Featured Articles</h2>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">

            <!-- Article Card  -->

            @foreach ($articles as $article)
            <div class="group border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition text-gray-900 dark:text-white">
                <h3 class="text-xl font-semibold mb-3 group-hover:text-green-500">
                    {{ $article->title }}
                </h3>
                <p class="text-gray-600 dark:text-gray-300 text-gray-600 mb-4">
                    {{ $article->excerpt }}
                </p>
                <a href="#" class="text-gray-800 font-medium group-hover:underline">
                    Read more →
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <!-- FEATURED POETRY  -->
    <section id="poetry" class="py-20 px-6 bg-gray-200">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Poetry</h2>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">

            <!-- Poem Card  -->
            @foreach ($poems as $poem)
            <div class="group border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition bg-white">
                <h3 class="text-xl font-semibold mb-3 group-hover:text-gray-900">
                    {{ $poem->title }}
                </h3>
                <p class="text-gray-600 mb-4 italic">
                    {{ $poem->content }}
                </p>
                <a href="#" class="text-gray-800 font-medium group-hover:underline">
                    Read poem →
                </a>
            </div>
            @endforeach

        </div>
    </section>

    <!-- FOOTER  -->
    <footer class="bg-gray-900 text-gray-300 py-10">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">

            <!-- Brand  -->
            <div class="mb-6 md:mb-0 text-center md:text-left">
                <h3 class="text-xl font-bold text-white">Writerly</h3>
                <p class="text-gray-400">A space for creative writing and poetry.</p>
            </div>

            <!-- Links  -->
            <div class="flex space-x-6 text-center md:text-right">
                <a href="#articles" class="hover:text-white transition">Articles</a>
                <a href="#poetry" class="hover:text-white transition">Poetry</a>
                <a href="#" class="hover:text-white transition">About</a>
                <a href="#" class="hover:text-white transition">Contact</a>
            </div>
        </div>

        <div class="mt-8 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Writerly. All rights reserved.
        </div>
    </footer>


</body>

</html>