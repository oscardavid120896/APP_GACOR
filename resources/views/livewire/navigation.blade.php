<header class="bg-emerald-600 sticky top-0" x-data="dropdown()">

    <div class="container flex items-center h-16">
        <a
            x-on:click="show()"
            class="flex flex-col items-center justify-center px-4 bg-white bg-opacity-30 text-white cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>
                Menú
            </span>
        </a>
        <a href="/dashboard" class="mx-6">
            <x-jet-application-mark class="block w-auto items-center justify-center" style="height: 100px" />
        </a>

        @livewire('search')

        <div class="mx-6 relative">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        <div class="border"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white text-3xl cursor-pointer "></i>
                    </x-slot>


                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>

        @livewire('dropdown-cart')

    </div>

    <nav id="navigation-menu" 
    :class="{'block': open, 'hidden': !open}"   
    class="bg-cyan-800 bg-opacity-25 w-full absolute hidden">
        <div class="container h-full">
            <div
            x-on:click.away="close()"
            class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        Mi avance</li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        Recetas</li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        Noticias</li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        Contacto</li>
                    <li class="text-teal-700 hover:bg-emerald-500 hover:text-white py-2 px-4 text-sm flex items-center">
                        <a href="/imc"> Calcular IMC</a></li>
                    <div class=" absolute w-3/4 h-full top-0 right-0">
                    </div>
                </ul>

                {{-- <div class="col-span-3 bg-teal-100">
                    <div class="grid grid-cols-4">
                        <div>
                            <p class="text-lg font-semibold text-center text-gray-900 mb-3">
                                Más detalles
                            </p>
                        </div>
                        <div class="col-span-3">

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </nav>
</header>




