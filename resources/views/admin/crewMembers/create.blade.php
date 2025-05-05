@extends('layout')

@section('content')
    <h1 class="text-xl font-bold mb-4">Add Member</h1>

      <form method="POST" action="{{ route('admin.crewMembers.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block font-medium">Name</label>
            <input type="text" name="name" id="name" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label for="role" class="block font-medium">Role</label>
            <input type="text" name="role" id="role" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="bio" class="block font-medium">Bio</label>
            <textarea name="bio" id="bio" class="w-full border rounded p-2" rows="4" required></textarea>
        </div>

    <div>
        <label for="image" class="block font-medium">Image</label>
        <input type="file" name="image" id="image" class="w-full border rounded p-2">
    </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Créer</button>
    </form>
@endsection
