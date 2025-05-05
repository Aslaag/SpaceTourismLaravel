@extends('layout')

@section('content')
    <h1 class="text-xl font-bold mb-4">Add destination</h1>

      <form method="POST" action="{{ route('admin.destinations.store') }}" enctype="multipart/form-data" class="space-y-4">
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
          <label for="distance" class="block font-medium">Distance</label>
          <input type="text" name="distance" id="slug" class="w-full border rounded p-2" required>
      </div>

      <div>
        <label for="travel_time" class="block font-medium">Travel time</label>
        <input type="text" name="travel_time" id="slug" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label for="image" class="block font-medium">Image</label>
        <input type="file" name="image" id="image" class="w-full border rounded p-2">
    </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Créer</button>
    </form>
@endsection
