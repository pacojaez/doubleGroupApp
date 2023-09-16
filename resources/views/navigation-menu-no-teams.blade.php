<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block w-auto h-9" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('create-trabajador') }}" :active="request()->routeIs('create-trabajador')">
                        {{ __('Añadir Trabajador') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('list-trabajadors') }}" :active="request()->routeIs('list-trabajadors')">
                        {{ __('Listar Trabajadores') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('create-uniformidad') }}" :active="request()->routeIs('create-uniformidad')">
                        {{ __('Añadir Uniformidad') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('list-uniformidads') }}" :active="request()->routeIs('list-uniformidads')">
                        {{ __('Listar Uniformidades') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('asign-uniformidad') }}" :active="request()->routeIs('asign-uniformidad')">
                        {{ __('ASIGNAR UNIFORMIDAD') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">

                <!-- Settings Dropdown -->
                <div class="relative ml-3">
                    <x-dropdown align="right" width="48">


                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('trabajadors-deleted') }}">
                                {{ __('Trabajadores Borrados') }}
                            </x-dropdown-link>
                            @if (auth()->user()->roles[0]->name === 'ADMIN')
                                <x-dropdown-link href="{{ route('users.index') }}">
                                    {{ __('GESTIÓN USUARIOS Y ROLES') }}
                                </x-dropdown-link>
                            @endif
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            @if (auth()->user()->roles('ADMIN'))
                <x-responsive-nav-link href="{{ route('users.index') }}">
                    {{ __('GESTIÓN USUARIOS Y ROLES') }}
                </x-responsive-nav-link>
            @endif
            <x-responsive-nav-link href="{{ route('create-trabajador') }}" :active="request()->routeIs('create-trabajador')">
                {{ __('AÑADIR TRABAJADOR') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('list-trabajadors') }}" :active="request()->routeIs('list-trabajadors')">
                {{ __('LISTAR TRABAJADORES') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('create-uniformidad') }}" :active="request()->routeIs('create-uniformidad')">
                {{ __('AÑADIR UNIFORMIDAD') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('list-uniformidads') }}" :active="request()->routeIs('list-uniformidads')">
                {{ __('LISTAR UNIFORMIDADES') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('asign-uniformidad') }}" :active="request()->routeIs('asign-uniformidad')">
                {{ __('ASIGNAR UNIFORMIDAD') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center px-4">


                <div>
                    <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('trabajadors-deleted') }}" :active="request()->routeIs('trabajadors-deleted')">
                    {{ __('Trabajadores Eliminados') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                {{-- @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif --}}

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

            </div>
        </div>
    </div>
</nav>
