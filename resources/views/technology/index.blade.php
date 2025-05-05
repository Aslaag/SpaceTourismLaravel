@extends('layout')

@section('content')
    <div class="text-center mt-10">
        <h1 class="text-4xl mb-10 font-semibold tracking-wide">Explore the Universe</h1>

        <div class="flex flex-wrap justify-center gap-10">
            @foreach($technologies as $technology)
                <div class="flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black">
                    <img src="{{ asset($technology->image_desktop) }}" alt="{{ $technology->name }}" class="w-full h-auto rounded-lg">
                    
                    <h2 class="mt-4 text-2xl font-bold">{{ $technology->name }}</h2>
                    
                    <p class="text-sm text-gray-600 mt-1">{{ $technology->description }}</p>

                    <a href="{{ route('technology.show', ['slug' => $technology->slug]) }}"
                        class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition">
                         More
                     </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
