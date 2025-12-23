@extends('admin.layouts.app') 

@section('content')
<div class="max-w-4xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold mb-6">Edit Article</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-6">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.articles.update', $article->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Title</label>
            <input type="text" name="title" value="{{ old('title', $article->title) }}"
                class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Excerpt</label>
            <textarea name="excerpt" class="w-full border p-2 rounded">{{ old('excerpt', $article->excerpt) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Content</label>
            <textarea name="content" class="w-full border p-2 rounded">{{ old('content', $article->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Current Image</label>
            @if($article->images)
                <img src="{{ asset('storage/' . $article->images) }}" class="w-32 h-20 object-cover rounded mb-2">
            @else
                <p class="text-gray-500">No image uploaded</p>
            @endif
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Replace Image</label>
            <input type="file" name="images" class="border p-2 rounded w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Update Article
        </button>
    </form>

</div>
@endsection
