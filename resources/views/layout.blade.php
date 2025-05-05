<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Space Tourism</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 font-sans bg-[#0b0d17] text-white">

    <nav class="justify-between bg-[#1f2235] flex gap-8 p-4 px-6">
        <div class="flex gap-8">
            <a href="/" class="hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200">Home</a>
        <a href="/destination" class="hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200">Destination</a>
        <a href="/crew" class="hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200">Crew</a>
        <a href="/technology" class="hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200">Technology</a>
    </div>
    <div class="flex gap-8">
        @auth
        <div class="relative inline-block text-left">
            <button onclick="toggleDropdown()" class="text-white font-bold rounded hover:underline">
                {{ Auth::user()->name }}
            </button>
        
            <div id="dropdownMenu" class="hidden text-right absolute bg-white shadow-lg right-0 rounded mt-2 w-46 z-10 overflow-hidden">
                @if (Auth::check() && Auth::user()->role === 'admin')
                    <a href="{{ route('admin.destinations.index') }}"
                     class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                         Manage destinations
                     </a>
                    <a href="{{ route('admin.crewMembers.index') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Manage crew members
                    </a>
                    <a href="{{ route('admin.technologies.index') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Manage technologies
                    </a>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="w-full text-right block px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                        Logout
                    </button>
                </form>
            </div>
        </div>        
        @endauth
    </div>
    @guest
    <div class="flex gap-8">
        <a href="/login" class="text-white font-bold hover:opacity-70 transition-opacity duration-200">Login</a>
        <a href="/register" class="text-white font-bold hover:opacity-70 transition-opacity duration-200">Register</a>
    </div>
    @endguest
    </nav>

    <main class="px-10 py-16 max-w-[1200px] mx-auto">
        @yield('content')
    </main>

</body>
</html>

<script>
    function toggleDropdown() {
        const menu = document.getElementById('dropdownMenu');
        menu.classList.toggle('hidden');
    }

    // Fermer si clic en dehors
    document.addEventListener('click', function (event) {
        const button = event.target.closest('button');
        const dropdown = document.getElementById('dropdownMenu');

        if (!event.target.closest('#dropdownMenu') && !button) {
            dropdown.classList.add('hidden');
        }
    });
</script>

