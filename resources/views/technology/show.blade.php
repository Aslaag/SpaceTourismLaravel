@extends('layout')

@section('content')
    <div class="text-center mt-10">
        <div class="flex flex-wrap flex-col items-center justify-center gap-10">
                <div class="flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black">
                    <img src="{{ asset($technology->image_desktop) }}" alt="{{ $technology->name }}" class="w-full h-auto rounded-lg">
                    
                    <h2 class="mt-4 text-2xl font-bold">{{ $technology->name }}</h2>
                    
                    <p class="text-sm text-gray-600 mt-1">{{ $technology->description }}</p>
                    <div class="flex gap-4 justify-center">
                        @if (Auth::check() && Auth::user()->role === 'admin')
                        <a href="{{ route('admin.technologies.edit', $technology) }}"
                            class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition">
                             Edit
                         </a>
                         <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" onsubmit="return confirm('Supprimer cette destination ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition">
                                Delete
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
                <div>
                    @if ($previous)
                    <a href="{{ url('/technology/' . $previous->slug) }}" 
                       class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#b9bfd3] transition">
                       Précédent
                    </a>
                @endif
        
                @if ($next)
                    <a href="{{ url('/technology/' . $next->slug) }}" 
                       class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#b9bfd3] transition">
                       Suivant
                    </a>
                @endif
                </div>
        </div>
    </div>
@endsection
