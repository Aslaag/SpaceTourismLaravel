@extends('layout')

@section('content')
    <h1 class="text-xl font-bold mb-4">Add technology</h1>

      <form method="POST" action="{{ route('admin.technologies.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block font-medium">Name</label>
            <input type="text" name="name" id="name" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="description" class="block font-medium">Description</label>
            <textarea name="description" id="description" class="w-full border rounded p-2" rows="4" required></textarea>
        </div>

    <div>
        <label for="image_desktop" class="block font-medium">Image desktop</label>
        <input type="file" name="image_desktop" id="image_desktop" class="w-full border rounded p-2">
    </div>
    <div>
        <label for="image_mobile" class="block font-medium">Image mobile</label>
        <input type="file" name="image_mobile" id="image_mobile" class="w-full border rounded p-2">
    </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create</button>
    </form>
@endsection
