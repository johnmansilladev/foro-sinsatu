@title("{$user->username()} ({$user->name()})")
@canonical(route('profile', $user->username()))

@extends('layouts.default')

@section('content')
    <section class="bg-white">
        <div
            class="bg-gray-900 bg-contain h-60 w-full"
            style="background-image: url('{{ asset('images/profile-background.svg') }}')"
        ></div>

        <div class="container mx-auto">
            <div class="flex justify-center lg:justify-start">
                <x-avatar :user="$user" class="-mt-24 w-48 h-48 rounded-full border-8 border-white" unlinked />
            </div>

            <div class="flex flex-col mt-5 p-4 lg:flex-row lg:gap-x-12">
                <div class="w-full mb-10 lg:w-1/3 lg:mb-0">
                    <div>
                        <div class="flex items-center gap-x-4">
                            <h1 class="text-4xl font-bold">{{ $user->name() }}</h1>

                            @if ($user->isAdmin() || $user->isModerator())
                                <span class="border border-lio-500 text-lio-500 rounded px-3 py-1">
                                    {{ $user->isAdmin() ? 'Admin' : 'Moderator' }}
                                </span>
                            @endif
                        </div>

                        <span class="text-gray-600">
                            Joined {{ $user->createdAt()->format('j M Y') }}
                        </span>
                    </div>

                    <div class="mt-4">
                        <span class="text-gray-900">
                            {{ $user->bio() }}
                        </span>
                    </div>

                    <div class="mt-4 mb-6 flex items-center gap-x-3">
                        @if ($user->githubUsername())
                            <a href="https://github.com/{{ $user->githubUsername() }}">
                                <x-icon-github class="w-6 h-6" />
                            </a>
                        @endif

                        @if ($user->hasTwitterAccount())
                            <a href="https://twitter.com/{{ $user->twitter() }}" class="text-twitter">
                                <x-icon-twitter class="w-6 h-6" />
                            </a>
                        @endif

                        @if ($user->hasWebsite())
                            <a href="{{ $user->website() }}">
                                <x-heroicon-o-globe-alt class="w-6 h-6" />
                            </a>
                        @endif
                    </div>

                    <div class="flex flex-col gap-y-4">
                        @if ($user->isLoggedInUser())
                            <x-buttons.secondary-button href="{{ route('settings.profile') }}" class="w-full">
                                <span class="flex items-center gap-x-2">
                                    <x-heroicon-o-pencil class="w-5 h-5" />
                                    Edit profile
                                </span>
                            </x-buttons.secondary-button>
                        @endif

                        @can(App\Policies\UserPolicy::BLOCK, $user)
                            @if (Auth::user()->hasBlocked($user))
                                <x-buttons.secondary-button class="w-full" @click.prevent="activeModal = 'unblockUser'">
                                    <span class="flex items-center gap-x-2">
                                        <x-heroicon-o-check class="w-5 h-5" />
                                        Desbloquear usuario
                                    </span>
                                </x-buttons.secondary-button>
                            @else
                                <x-buttons.danger-button class="w-full" @click.prevent="activeModal = 'blockUser'">
                                    <span class="flex items-center gap-x-2">
                                        <x-heroicon-o-x class="w-5 h-5" />
                                        Bloquear usuario
                                    </span>
                                </x-buttons.danger-button>
                            @endif
                        @endcan

                        @can(App\Policies\UserPolicy::BAN, $user)
                            @if ($user->isBanned())
                                <x-buttons.secondary-button class="w-full" @click.prevent="activeModal = 'unbanUser'">
                                    <span class="flex items-center gap-x-2">
                                        <x-heroicon-o-check class="w-5 h-5" />
                                        Quitar ban a usuario
                                    </span>
                                </x-buttons.secondary-button>
                            @else
                                <x-buttons.danger-button class="w-full" @click.prevent="activeModal = 'banUser'">
                                    <span class="flex items-center gap-x-2">
                                        <x-icon-hammer class="w-5 h-5" />
                                        Banear usuario
                                    </span>
                                </x-buttons.danger-button>
                            @endif
                        @endcan
                    </div>
                </div>

                <div class="w-full lg:w-2/3">
                    <h2 class="text-3xl font-semibold">
                        Estadísticas
                    </h2>

                    <div class="mt-4 grid grid-cols-1 lg:grid-cols-2">
                        <div class="w-full flex justify-between px-5 py-2.5 bg-gray-100">
                            <span>Hilos</span>
                            <span class="text-lio-500">
                                {{ number_format($user->countThreads()) }}
                            </span>
                        </div>

                        <div class="w-full flex justify-between px-5 py-2.5 bg-white lg:bg-gray-100">
                            <span>Respuestas</span>
                            <span class="text-lio-500">
                                {{ number_format($user->countReplies()) }}
                            </span>
                        </div>

                        <div class="w-full flex justify-between px-5 py-2.5 bg-gray-100 lg:bg-white">
                            <span>Soluciones</span>
                            <span class="text-lio-500">
                                {{ number_format($user->countSolutions()) }}
                            </span>
                        </div>

                        <div class="w-full flex justify-between px-5 py-2.5">
                            <span>Artículos</span>
                            <span class="text-lio-500">
                                {{ number_format($user->countArticles()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1>Building profile... </h1>
                jmansilla
            </div>
           <!--  @if ($articles->count() > 0)
                <div class="mt-10 px-4 lg:mt-28">
                    <h2 class="text-3xl font-semibold">
                        Artículos
                    </h2>

                    <div class="mt-8 flex flex-col gap-y-8 lg:flex-row lg:gap-x-8 lg:mb-16">
                        @foreach ($articles as $article)
                            <div class="w-full lg:w-1/3">
                                <x-articles.user-summary :article="$article" />
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif -->
        </div>

        <!-- <div class="mt-16 lg:mt-32" x-data="{ tab: 'threads' }">
            <div class="container mx-auto">
                <nav class="flex items-center justify-between lg:justify-start">
                    <button @click="tab = 'threads'" :class="{ 'text-lio-500 border-lio-500 border-b-2': tab === 'threads' }"  class="px-4 whitespace-nowrap py-5 font-medium text-lg text-gray-900 hover:text-lio-500 hover:border-lio-500 focus:outline-none focus:text-lio-500 focus:border-lio-500 lg:w-1/3">
                        Hilos posteados
                    </button>
                    <button @click="tab = 'replies'" :class="{ 'text-lio-500 border-lio-500 border-b-2': tab === 'replies' }"  class="px-4 whitespace-nowrap py-5 font-medium text-lg text-gray-900 hover:text-lio-500 hover:border-lio-500 focus:outline-none focus:text-lio-500 focus:border-lio-500 lg:w-1/3">
                        Respuestas posteadas
                    </button>
                </nav>
            </div>

            <div class="bg-gray-100 py-14 px-4">
                <div class="container mx-auto">
                    <div x-show="tab === 'threads'">
                        @include('users._latest_threads')
                    </div>

                    <div x-show="tab === 'replies'" x-cloak>
                        @include('users._latest_replies')
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    @can(App\Policies\UserPolicy::BLOCK, $user)
        @if (Auth::user()->hasBlocked($user))
            <x-modal
                identifier="unblockUser"
                :action="route('users.unblock', $user->username())"
                title="Desbloquear {{ $user->username() }}"
                type="update"
            >
                <p>Si desbloqueas a este usuario, podrás volver a mencionarlo en los hilos y respuestas.</p>
            </x-modal>
        @else
            <x-modal
                identifier="blockUser"
                :action="route('users.block', $user->username())"
                title="Bloquear {{ $user->username() }}"
                type="update"
            >
                <p>Al bloquear a este usuario se le impedirá que te mencione en hilos y respuestas. El usuario no será notificado de que lo has bloqueado.</p>
            </x-modal>
        @endif
    @endcan

    @can(App\Policies\UserPolicy::BAN, $user)
        @if ($user->isBanned())
            <x-modal
                identifier="unbanUser"
                :action="route('admin.users.unban', $user->username())"
                title="Quitar ban {{ $user->username() }}"
                type="update"
            >
                <p>Desbanear a este usuario le permitirá volver a conectarse y publicar contenido.</p>
            </x-modal>
        @else
            <x-modal
                identifier="banUser"
                :action="route('admin.users.ban', $user->username())"
                title="Banear {{ $user->username() }}"
                type="update"
            >
                <p>Banear a este usuario le impedirá conectarse, publicar hilos y responder a hilos.</p>
            </x-modal>
        @endif
    @endcan
@endsection
