@extends('layout')

@section('content')
    <h1 class="text-xl font-bold mb-4">Modify</h1>

    <form method="POST" action="{{ route('admin.technologies.update', $technology->id) }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block font-medium">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $technology->name) }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="description" class="block font-medium">Description</label>
            <textarea name="description" id="description" class="w-full border rounded p-2" rows="4" required>{{ old('description', $technology->description) }}</textarea>
        </div>

        <div>
            <label for="image" class="block font-medium">Image</label>
            @if($technology->image_desktop)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $technology->image_desktop) }}" alt="Current image" class="h-32 rounded shadow">
                </div>
            @endif
            <input type="file" name="image" id="image" class="w-full border rounded p-2">
        </div>
        <div>
            <label for="image" class="block font-medium">Image</label>
            @if($technology->image_mobile)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $technology->image_mobile) }}" alt="Current image" class="h-32 rounded shadow">
                </div>
            @endif
            <input type="file" name="image" id="image" class="w-full border rounded p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
@endsection
