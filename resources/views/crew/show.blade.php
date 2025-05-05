@extends('layout')

@section('content')
    <div class="text-center mt-10">
        <div class="flex flex-col items-center justify-center gap-10">
                <div class="flex flex-col justify-between w-[300px] p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black">
                  <img src="{{ asset($crewMember->image) }}" alt="{{ $crewMember->name }}" class="w-full h-auto rounded-lg">
                    
                  <h2 class="mt-4 text-2xl font-bold">{{ $crewMember->name }}</h2>

                  <h2 class="mt-4 text-1xl">{{ $crewMember->role }}</h2>
                  
                  <p class="text-sm text-gray-600 mt-1">{{ $crewMember->bio }}</p>
                  <div class="flex gap-4 justify-center">
                    @if (Auth::check() && Auth::user()->role === 'admin')
                    <a href="{{ route('admin.crewMembers.edit', $crewMember) }}"
                        class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition">
                         Edit
                     </a>
                     <form action="{{ route('admin.crewMembers.destroy', $crewMember->id) }}" method="POST" onsubmit="return confirm('Supprimer cette destination ?');">
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
                  <a href="{{ url('/crew/' . $previous->slug) }}" 
                     class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#b9bfd3] transition">
                     Précédent
                  </a>
              @endif
      
              @if ($next)
                  <a href="{{ url('/crew/' . $next->slug) }}" 
                     class="inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#b9bfd3] transition">
                     Suivant
                  </a>
              @endif
              </div>

        </div>
    </div>
@endsection
