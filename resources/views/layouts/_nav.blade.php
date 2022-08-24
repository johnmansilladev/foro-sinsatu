<nav class="{{ isset($hasShadow) ? 'shadow mb-1' : '' }} dark:bg-black">
    <div class="container mx-auto text-gray-800 lg:block lg:py-4" x-data="navConfig()" @click.outside="nav = false">
        <div class="block bg-white dark:bg-black 2xl:-mx-10">
            <div class="lg:px-4 lg:flex">
                <div class="block lg:flex lg:items-center lg:shrink-0">
                    <div class="flex justify-between items-center p-4 lg:p-0">
                        <a href="{{ route('home') }}" class="mr-4">
                            <img class="h-6 w-auto lg:h-8" src="{{ asset('images/logo-web-test-dark.png')}}" alt="" />
                        </a>

                        <div class="flex lg:hidden">
                            <button @click="showSearch($event)" class="">
                                <x-heroicon-o-search class="w-6 h-6 mr-4 dark:text-white dark:hover:text-blue-500" />
                            </button>

                            <button @click="nav = !nav">
                                <x-heroicon-o-menu-alt-1 x-show="!nav" class="w-6 h-6 dark:text-white dark:hover:text-blue-500" />
                            </button>

                            <button @click="nav = !nav" x-cloak>
                                <x-heroicon-o-x x-show="nav" class="w-6 h-6 dark:text-white dark:hover:text-blue-500" />
                            </button>
                        </div>
                    </div>

                    <div class="mt-2 border-b lg:block lg:mt-0 lg:border-0 " x-cloak :class="{ 'block': nav, 'hidden': !nav }">
                        <ul class="flex flex-col px-4 mb-2 gap-y-2 lg:flex-row lg:mb-0 lg:gap-6 dark:text-white">
                            <li class="rounded lg:mb-0 lg:hover:bg-black @if(is_active(['forum', 'threads*', 'thread'])) bg-white text-black @endif">
                                <a href="{{ route('forum') }}" class="inline-block w-full px-2 py-1">
                                    Forum
                                </a>
                            </li>

                            <li class="rounded lg:mb-0 lg:hover:bg-black @if(is_active(['articles', 'articles*'])) bg-white text-black @endif">
                                <a href="{{ route('articles') }}" class="inline-block w-full px-2 py-1">
                                    Articles
                                </a>
                            </li>
                            <li class="rounded lg:mb-0 lg:hover:bg-black">
                                <a href="{{ route('articles') }}" class="inline-block w-full px-2 py-1">
                                    Share links
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full block gap-x-4 lg:flex lg:items-center lg:justify-end">
                    <div class="flex items-center">
                        <button @click="showSearch($event)" @keyup.window.slash="showSearch($event)" class="dark:text-white dark:hover:text-blue-500">
                            <x-heroicon-o-search class="h-5 w-5 hidden lg:block" />
                        </button>
                        @include('_partials._search')
                    </div>

                    <ul class="block lg:flex lg:items-center gap-x-8" x-cloak :class="{ 'block': nav, 'hidden': !nav }">
                        @if (Auth::guest())
                        <!--  <li class="w-full rounded text-center lg:hover:bg-gray-100 dark:text-white dark:bg-inherit dark:lg:hover:bg-white dark:lg:hover:text-black">
                            <a href="{{ route('register') }}" class="inline-block w-full  p-2.5">
                                Register
                            </a>
                        </li> -->
                        <li>
                            <a href="{{ route('register') }}" class="inline-block w-full">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none 
                                focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 
                                py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Register</button>
                            </a>
                        </li>

                        <li>
                            <div class="hidden lg:block">
                                <!-- <x-buttons.secondary-cta class="flex items-center" href="{{ route('login') }}">
                                    <span class="flex items-center">
                                        <x-heroicon-o-user class="w-5 h-5 mr-1" />
                                        Login
                                    </span>
                                </x-buttons.secondary-cta> -->
                                <a href="{{ route('login') }}" class="inline-block w-full">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none 
                                focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 
                                py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Login</button>
                                </a>
                            </div>

                            <a href="{{ route('login') }}" class="block w-full text-center bg-lio-500 text-white p-2.5 lg:hidden">
                                Login
                            </a>
                        </li>
                        
                        @else
                        <li class="relative p-4 lg:p-0">
                            <div class="flex items-center justify-center">
                                <a href="{{ route('notifications') }}" class="hidden shrink-0 rounded-full lg:block">
                                    <span class="block relative">
                                        <x-heroicon-o-bell class="h-5 w-5 hover:fill-current hover:text-lio-500 dark:text-white dark:hover:text-blue-500" />

                                        <livewire:notification-indicator />
                                    </span>
                                </a>

                                <x-avatar :user="Auth::user()" class="h-8 w-8 ml-5" />

                                <div class="ml-2" @click.outside="settings = false">
                                    <button @click="settings = !settings" class="flex items-center">
                                        {{ Auth::user()->username() }}
                                        <x-heroicon-s-chevron-down x-show="!settings" class="w-4 h-4 ml-1" />
                                        <x-heroicon-s-chevron-left x-show="settings" class="w-4 h-4 ml-1" />
                                    </button>
                                </div>
                            </div>

                            <div x-show="settings" x-cloak class="mt-4 lg:mt-0">
                                <ul class="flex flex-col items-center lg:absolute lg:items-stretch lg:ml-0 lg:mt-2 lg:w-36 lg:rounded-md lg:shadow-lg lg:z-50 lg:bg-white">
                                    <li class="mb-4 lg:hover:bg-gray-100 lg:mb-0">
                                        <a href="{{ route('profile') }}" class="inline-block w-full lg:px-4 lg:py-3">
                                            Profile
                                        </a>
                                    </li>

                                    <li class="mb-4 lg:hover:bg-gray-100 lg:mb-0">
                                        <a href="{{ route('user.articles') }}" class="inline-block w-full lg:px-4 lg:py-3">
                                            My articles
                                        </a>
                                    </li>

                                    <li class="mb-4 lg:hover:bg-gray-100 lg:mb-0">
                                        <a href="{{ route('settings.profile') }}" class="inline-block w-full lg:px-4 lg:py-3">
                                            Settings
                                        </a>
                                    </li>

                                    @can(App\Policies\UserPolicy::ADMIN, App\Models\User::class)
                                    <li class="mb-4 lg:hover:bg-gray-100 lg:mb-0 lg:border-t lg:border-b">
                                        <a href="{{ route('admin') }}" class="inline-block w-full lg:px-4 lg:py-3">
                                            Admin
                                        </a>
                                    </li>
                                    @endcan

                                    <li class="mb-4 lg:hover:bg-gray-100 lg:mb-0">
                                        <x-buk-logout class="inline-block w-full text-left lg:px-4 lg:py-3">
                                            Log out
                                        </x-buk-logout>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        <li>
                            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--  @yield('subnav') -->
</nav>