@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto p-4">

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Poems</h1>
        <a href="{{ route('admin.poems.create') }}"
           class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
           Add New Poem
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border rounded shadow">
        <thead>
            <tr class="bg-gray-100 border-b">
                <th class="px-4 py-2 text-left">#</th>
                <th class="px-4 py-2 text-left">Title</th>
                <th class="px-4 py-2 text-left">Excerpt</th>
                <th class="px-4 py-2 text-left">Image</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($poems as $poem)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $poem->id }}</td>
                    <td class="px-4 py-2">{{ $poem->title }}</td>
                    <td class="px-4 py-2">{{ $poem->excerpt }}</td>
                    <td class="px-4 py-2">
                        @if($poem->images)
                            <img src="{{ asset('storage/' . $poem->images) }}" 
                                 class="w-24 h-16 object-cover rounded">
                        @else
                            <span class="text-gray-400">No image</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('admin.poems.edit', $poem->id) }}"
                           class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
                           Edit
                        </a>

                        <form action="{{ route('admin.poems.destroy', $poem->id) }}" 
                              method="POST" 
                              class="inline-block"
                              onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">
                        No poems found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
