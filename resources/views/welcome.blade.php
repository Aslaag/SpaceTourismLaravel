@extends('layout')

@section('content')
    <div class="flex flex-col items-center justify-center text-center text-white space-y-8 mt-20">
        <h1 class="text-5xl font-bold tracking-wide">Welcome to Space Tourism 🚀</h1>
        <p class="max-w-xl text-lg text-gray-300">
            Get ready to explore new worlds, meet our crew, and discover the technologies that take us there.
        </p>

        <a href="/destination"
           class="mt-6 inline-block px-8 py-4 bg-white text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">
            Start your journey
        </a>
    </div>
@endsection
