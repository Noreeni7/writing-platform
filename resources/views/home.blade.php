<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <section>
        <h1> My articles </h1>
    </section>

    {{-- FEATURED ARTICLES --}}
    <section id="articles" class="py-20 bg-gray-50 px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Articles</h2>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">

            {{-- Article Card --}}
            <div class="group border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition bg-white">
                <h3 class="text-xl font-semibold mb-3 group-hover:text-gray-900">
                    The Art of Slow Living
                </h3>
                <p class="text-gray-600 mb-4">
                    Exploring intentional living in a noisy world.
                </p>
                <a href="#" class="text-gray-800 font-medium group-hover:underline">
                    Read more →
                </a>
            </div>

            {{-- Article Card --}}
            <div class="group border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition bg-white">
                <h3 class="text-xl font-semibold mb-3 group-hover:text-gray-900">
                    Creativity in Stillness
                </h3>
                <p class="text-gray-600 mb-4">
                    Why quiet spaces help unlock deeper ideas.
                </p>
                <a href="#" class="text-gray-800 font-medium group-hover:underline">
                    Read more →
                </a>
            </div>

            {{-- Article Card --}}
            <div class="group border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition bg-white">
                <h3 class="text-xl font-semibold mb-3 group-hover:text-gray-900">
                    Designing a Minimal Life
                </h3>
                <p class="text-gray-600 mb-4">
                    Lessons from minimalism for a balanced lifestyle.
                </p>
                <a href="#" class="text-gray-800 font-medium group-hover:underline">
                    Read more →
                </a>
            </div>

        </div>
    </section>

    {{-- FEATURED POETRY --}}
    <section id="poetry" class="py-20 px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Poetry</h2>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10">

            {{-- Poem Card --}}
            <div class="group border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition bg-white">
                <h3 class="text-xl font-semibold mb-3 group-hover:text-gray-900">
                    Whispers at Dawn
                </h3>
                <p class="text-gray-600 mb-4 italic">
                    *In the quiet hush before the sun breaks...*
                </p>
                <a href="#" class="text-gray-800 font-medium group-hover:underline">
                    Read poem →
                </a>
            </div>

            {{-- Poem Card --}}
            <div class="group border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition bg-white">
                <h3 class="text-xl font-semibold mb-3 group-hover:text-gray-900">
                    Petals in the Wind
                </h3>
                <p class="text-gray-600 mb-4 italic">
                    *A soft dance of stories carried on gentle winds...*
                </p>
                <a href="#" class="text-gray-800 font-medium group-hover:underline">
                    Read poem →
                </a>
            </div>

            {{-- Poem Card --}}
            <div class="group border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition bg-white">
                <h3 class="text-xl font-semibold mb-3 group-hover:text-gray-900">
                    Echoes of Light
                </h3>
                <p class="text-gray-600 mb-4 italic">
                    *Where shadows end, a tender glow begins...*
                </p>
                <a href="#" class="text-gray-800 font-medium group-hover:underline">
                    Read poem →
                </a>
            </div>

        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-gray-300 py-10 mt-20">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">

            {{-- Brand --}}
            <div class="mb-6 md:mb-0 text-center md:text-left">
                <h3 class="text-xl font-bold text-white">Writerly</h3>
                <p class="text-gray-400">A space for creative writing and poetry.</p>
            </div>

            {{-- Links --}}
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