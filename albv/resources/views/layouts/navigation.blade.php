<nav class="bg-white border-gray-200 dark:bg-gray-800">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Navigation principale -->
        <div class="flex space-x-8">
            <a href="{{ route('home') }}" class="text-gray-900 hover:text-blue-700 dark:text-white">Home</a>
            @auth
                @if(Auth::user()->admin)
                    <a href="{{ route('dossiers.index') }}" class="text-gray-900 hover:text-blue-700 dark:text-white">Administration</a>
                @endif
            @endauth
        </div>

        <!-- Menu Authentification -->
        <div class="flex space-x-4">
            @auth
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center text-gray-900 dark:text-white">
                        {{ Auth::user()->firstname }}
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-900 hover:bg-gray-100">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-900 hover:bg-gray-100">
                                Se déconnecter
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('register') }}" class="text-white bg-green-600 hover:bg-green-700 rounded-lg text-sm px-4 py-2">
                    Créer un compte
                </a>
                <a href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-sm px-4 py-2">
                    Se connecter
                </a>
            @endauth
        </div>
    </div>
</nav>
