@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Poem</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.poems.update', $poem) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <input type="text" name="title" value="{{ old('title', $poem->title) }}" placeholder="Title" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <textarea name="excerpt" placeholder="Excerpt" class="w-full border p-2 rounded">{{ old('excerpt', $poem->excerpt) }}</textarea>
        </div>

        <div class="mb-4">
            <textarea name="content" placeholder="Content" class="w-full border p-2 rounded">{{ old('content', $poem->content) }}</textarea>
        </div>

        <div class="mb-4">
            @if($poem->images)
                <img src="{{ asset('storage/' . $poem->images) }}" class="w-24 h-16 object-cover rounded mb-2">
            @endif
            <input type="file" name="images" class="w-full">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Update Poem</button>
    </form>
</div>
@endsection
