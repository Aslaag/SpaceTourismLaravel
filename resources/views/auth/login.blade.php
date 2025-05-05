@extends('layout')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-[#2a2e46] text-white p-8 rounded-2xl shadow-lg">
        <h2 class="text-3xl font-semibold mb-6 text-center tracking-wide">Login</h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                       required autocomplete="email" autofocus>
                @error('email')
                    <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input id="password" type="password" name="password"
                       class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror"
                       required autocomplete="current-password">
                @error('password')
                    <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember Me --}}
            <div class="flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="form-checkbox text-blue-500 bg-gray-800 border-gray-600"
                        {{ old('remember') ? 'checked' : '' }}>
                    <span class="ml-2 text-sm">Remember Me</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-400 hover:underline">
                        Forgot Password?
                    </a>
                @endif
            </div>

            {{-- Submit --}}
            <div>
                <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection