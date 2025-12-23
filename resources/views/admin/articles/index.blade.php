@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Articles</h1>
        <a href="{{ route('admin.articles.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Create New Article
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left px-4 py-2 border-b">Title</th>
                    <th class="text-left px-4 py-2 border-b">Excerpt</th>
                    <th class="text-left px-4 py-2 border-b">Content</th>
                    <th class="text-left px-4 py-2 border-b">Image</th>
                    <th class="text-left px-4 py-2 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">{{ $article->title }}</td>
                    <td class="px-4 py-2 border-b">{{ $article->excerpt }}</td>
                    <td class="px-4 py-2 border-b">{{ Str::limit($article->content, 50) }}</td>
                    <td class="px-4 py-2 border-b">
                        @if($article->images)
                            <img src="{{ asset('storage/' . $article->images) }}" 
                                 class="w-24 h-16 object-cover rounded" 
                                 alt="{{ $article->title }}">
                        @else
                            <span class="text-gray-400">No image</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 border-b flex space-x-2">
                        <a href="{{ route('admin.articles.edit', $article->id) }}" 
                           class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">
                            Edit
                        </a>
                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $articles->links() }}
    </div>
</div>
@endsection
