@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">

    <h1 class="text-2xl font-bold mb-4">Create New Poem</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.poems.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Poem title" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Excerpt</label>
            <textarea name="excerpt" placeholder="Short excerpt" class="w-full border p-2 rounded">{{ old('excerpt') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Content</label>
            <textarea name="content" placeholder="Full poem content" class="w-full border p-2 rounded">{{ old('content') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Image (optional)</label>
            <input type="file" name="images" class="w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Save Poem
        </button>
    </form>

</div>
@endsection
