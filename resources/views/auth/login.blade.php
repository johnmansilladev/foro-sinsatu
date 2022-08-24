@title('Login')

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
                    O continuar con
                </span>
            </div>
        </div>

        <div class="mt-6 flex w-full justify-between">
            <!-- <div>
                <x-buttons.secondary-button href="{{ route('login.github') }}" fullWidth>
                    <span class="flex items-center gap-x-2">
                        <x-icon-github class="h-5 w-5 text-gray-500" />
                        <span>Sign in with GitHub</span>
                    </span>
                </x-buttons.secondary-button>
            </div> -->
            <div class="w-1/3 mx-1 my-1">
                <a href="{{ route('login.google')}}" class="block w-full bg-cyan-700 hover:bg-cyan-800 py-2 px-4 rounded" fullWidth >
                    <span class="flex items-center gap-x-2 flex justify-center">
                        <x-icon-github class="h-5 w-5 text-white" />
                    <!--  <span class="text-white">LinkedIn</span> -->
                    </span>
                </a>
            </div>
            <div class="w-1/3 mx-1 my-1">
                <a href="{{ route('login.google')}}" class="" fullWidth>
                <button type="button" class="text-white bg-red-700 hover:bg-red-800/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                    <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                </svg>
                Gmail
                </button>
                
                </a>
            </div>
            <div class="w-1/3 mx-1 my-1">
                <a href="{{ route('login.facebook')}}" class="block w-full bg-blue-700 hover:bg-blue-800 py-2 px-4 rounded" fullWidth>
                    <span class="flex items-center gap-x-2 flex justify-center">
                        <x-icon-facebook class="h-5 w-5 text-white" />
                        <!-- <span class="text-white">Facebook</span> -->
                    </span>
                </a>
            </div>
        </div>
    </div>
@endsection
