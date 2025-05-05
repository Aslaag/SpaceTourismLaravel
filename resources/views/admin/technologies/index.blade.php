@extends('layout')

@section('content')
@if (session('success'))
    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded shadow">
        {{ session('success') }}
    </div>
@endif

<div class="flex flex-col text-center items-center mt-10">
    <a href="{{ route('admin.technologies.create') }}"
    class="self-end inline-block w-fit mb-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#b9bfd3] transition">
     Create
    </a>
    <h1 class="text-4xl mb-10 font-semibold tracking-wide">Explore the Universe</h1>
    <div class="flex flex-wrap justify-center gap-10">
        @foreach($technologies as $technology)
            <div class="flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black">
                <img src="{{ asset($technology->image_desktop) }}" alt="{{ $technology->name }}" class="w-full h-auto rounded-lg">

                <h2 class="mt-4 text-2xl font-bold">{{ $technology->name }}</h2>

                <p class="text-sm text-gray-600 mt-1">{{ $technology->description }}</p>
                <div class="flex justify-between">
                    <a href="{{ route('admin.technologies.edit', $technology->id) }}"
                        class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition">
                         Edit
                    </a>
                    <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" onsubmit="return confirm('Supprimer cette technology ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition">
                            Delete
                        </button>
                    </form>
                    {{ logger($technology); }}
                    <a href="{{ route('technology.show', ['slug' => $technology->slug]) }}"
                        class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition">
                         More
                    </a>
                </div>
                 
            </div>
        @endforeach
    </div>
</div>
@endsection
