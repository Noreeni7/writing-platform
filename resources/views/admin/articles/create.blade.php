<form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Title" class="w-full mb-4 border p-2">

    <textarea name="excerpt" placeholder="Excerpt" class="w-full mb-4 border p-2"></textarea>

    <textarea name="content" placeholder="Content" class="w-full mb-4 border p-2"></textarea>

    <input type="file" name="images" class="mb-4">

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Save Article
    </button>
</form>