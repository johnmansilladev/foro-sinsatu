@title('Inicia sesión')

@extends('layouts.small')

@section('small-content')
    <x-buk-form action="{{ route('login.post') }}" method="POST" class="space-y-6">
        <div>
            <x-forms.label for="username" />

            <x-forms.inputs.input name="username" id="username" required />
        </div>

        <div>
            <x-forms.label for="password" />

            <x-forms.inputs.password name="password" id="password" required />
        </div>

        <div class="flex items-center justify-between">
            <x-forms.inputs.checkbox name="remember" id="remember">
                Recordarme
            </x-forms.inputs.checkbox>

            <div class="text-sm">
                <a href="{{ route('password.forgot') }}" class="font-medium text-lio-600 hover:text-lio-500">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>
        </div>

        <div class="w-full">
            <x-buttons.primary-button type="submit" fullWidth>
                Iniciar sesión
            </x-buttons.primary-button>
        </div>
    </x-buk-form>

    <div class="mt-6">
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>

            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">
                    O iniciar sesión con
                </span>
            </div>
        </div>

        <div class="mt-6">
            <!-- <div>
                <x-buttons.secondary-button href="{{ route('login.github') }}" fullWidth>
                    <span class="flex items-center gap-x-2">
                        <x-icon-github class="h-5 w-5 text-gray-500" />
                        <span>Sign in with GitHub</span>
                    </span>
                </x-buttons.secondary-button>
            </div> -->
            <div class="mt-1 mb-2">
                <x-buttons.secondary-button href="{{ route('login.google')}}" fullWidth class="bg-cyan-700 hover:bg-cyan-800">
                    <span class="flex items-center gap-x-2">
                        <x-icon-github class="h-5 w-5 text-white" />
                        <span class="text-white">LinkedIn</span>
                    </span>
                </x-buttons.secondary-button>
            </div>
            <div class="mt-1 mb-2">
                <x-buttons.secondary-button href="{{ route('login.google')}}" fullWidth class="bg-red-700 hover:bg-red-800">
                    <span class="flex items-center gap-x-2">
                        <x-icon-github class="h-5 w-5 text-white" />
                        <span class="text-white">Google</span>
                    </span>
                </x-buttons.secondary-button>
            </div>
            <div class="mt-1 mb-1">
                <x-buttons.secondary-button href="{{ route('login.facebook')}}" fullWidth class="bg-blue-700 hover:bg-blue-800">
                    <span class="flex items-center gap-x-2 ">
                        <x-icon-facebook class="h-5 w-5 text-white" />
                        <span class="text-white">Facebook</span>
                    </span>
                </x-buttons.secondary-button>
            </div>
        </div>
    </div>
@endsection
