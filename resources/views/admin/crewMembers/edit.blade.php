@extends('layout')

@section('content')
    <h1 class="text-xl font-bold mb-4">Modify</h1>

    <form method="POST" action="{{ route('admin.crewMembers.update', $crewMember->id) }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block font-medium">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $crewMember->name) }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="role" class="block font-medium">Role</label>
            <input type="text" name="role" id="role" value="{{ old('name', $crewMember->role) }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="bio" class="block font-medium">Bio</label>
            <textarea name="bio" id="bio" class="w-full border rounded p-2" rows="4" required>{{ old('bio', $crewMember->bio) }}</textarea>
        </div>

        <div>
            <label for="image" class="block font-medium">Image</label>
            @if($crewMember->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $crewMember->image) }}" alt="Current image" class="h-32 rounded shadow">
                </div>
            @endif
            <input type="file" name="image" id="image" class="w-full border rounded p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
@endsection
