@title('Sign up')

@extends('layouts.small')

@section('small-content')
    <!-- @if (! session()->has('githubData'))
        <p class="mb-8">To register, we require you to login with your GitHub account. After login you can choose your password in the settings screen.</p>

        <x-buttons.secondary-button href="{{ route('login.github') }}" fullWidth>
            <span class="flex items-center gap-x-2">
                <x-icon-github class="h-5 w-5 text-gray-500" />
                <span>Sign in with GitHub</span>
            </span>
        </x-buttons.secondary-button>
    @else
        <x-buk-form action="{{ route('register.post') }}" method="POST" class="space-y-6">
            <div>
                <x-forms.label for="name" />

                <x-forms.inputs.input name="name" value="{{ session('githubData.name') }}" placeholder="John Doe" required />
            </div>

            <div>
                <x-forms.label for="email" />

                <x-forms.inputs.email name="email" id="email" value="{{ session('githubData.email') }}" placeholder="john@example.com" required />
            </div>

            <div>
                <x-forms.label for="username" />

                <x-forms.inputs.input name="username" id="username" value="{{ session('githubData.username') }}" placeholder="johndoe" required />
            </div>

            <div class="flex items-center">
                <x-forms.inputs.checkbox name="rules" id="rules">
                    I agree to <a href="{{ route('rules') }}" class="text-blue-700" target="_blank">the rules of the portal</a>
                </x-forms.inputs.checkbox>
            </div>

            <div class="flex items-center">
                <x-forms.inputs.checkbox name="terms" id="terms">
                    I agree to <a href="{{ route('terms') }}" class="text-blue-700" target="_blank">Terms & Conditions</a> and <a href="{{ route('privacy') }}" class="text-blue-700" target="_blank">Privacy Policy</a>
                </x-forms.inputs.checkbox>
            </div>

            <x-buttons.primary-button type="submit" fullWidth>
                Register
            </x-buttons.primary-button>
        </x-buk-form>
    @endif -->
    <div>
    <x-buk-form action="{{ route('register.post') }}" method="POST" class="space-y-3">
            <div>
                <x-forms.label for="nombre" />
                <x-forms.inputs.input name="name" id="name" placeholder="John Mansilla" required />
            </div>

            <div>
                <x-forms.label for="email" />
                <x-forms.inputs.email name="email" id="email" placeholder="jmansilla@sinsatu.com" required />
            </div>

            <div>
                <x-forms.label for="Username" />
                <x-forms.inputs.input name="username" id="username" placeholder="jmansilla" required />
            </div>

            <div class="flex items-center">
                <x-forms.inputs.checkbox name="rules" id="rules">
                    Acepto las <a href="{{ route('rules') }}" class="text-blue-700" target="_blank">reglas del portal</a>
                </x-forms.inputs.checkbox>
            </div>

            <div class="flex items-center">
                <x-forms.inputs.checkbox name="terms" id="terms">
                    Acepto los<a href="{{ route('terms') }}" class="text-blue-700" target="_blank">Términos y condiciones</a> and <a href="{{ route('privacy') }}" class="text-blue-700" target="_blank">Políticas de privacidad</a>
                </x-forms.inputs.checkbox>
            </div>

            <x-buttons.primary-button type="submit" fullWidth>
                Registrarse
            </x-buttons.primary-button>
            <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>

            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">
                    O registrarse con
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
                <a href="{{ route('login.google')}}" class="block w-full bg-red-700 hover:bg-red-800 py-2 px-4 rounded" fullWidth>
                    <span class="flex items-center gap-x-2 flex justify-center">
                        <x-icon-github class="h-5 w-5 text-white" />
                        <!-- <span class="text-white">Google</span> -->
                    </span>
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
        </x-buk-form>
    </div>
@endsection
