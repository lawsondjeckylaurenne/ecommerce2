<x-guest-layout>
    <div class="flex justify-center items-center min-h-screen">
        <div class="max-w-[720px] mx-auto">
            <!-- Centering wrapper -->
            <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border">
                <div class="relative grid mx-4 mb-4 -mt-6 overflow-hidden text-white shadow-lg h-28 place-items-center rounded-xl bg-gradient-to-tr from-gray-900 to-gray-800 bg-clip-border shadow-gray-900/20">
                    <h3 class="block font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-white">
                        Se connecter
                    </h3>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4 px-6" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-col gap-4 p-6">
                        <!-- Email Input -->
                        <div class="relative h-11 w-full min-w-[200px]">
                            <x-text-input
                                id="email"
                                name="email"
                                type="email"
                                class="w-full h-full px-3 py-3 font-sans text-sm font-normal transition-all bg-transparent border rounded-md peer border-blue-gray-200 border-t-transparent text-blue-gray-700 outline outline-0 placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                placeholder=" "
                                :value="old('email')"
                                required
                                autofocus
                                autocomplete="username"
                            />
                            <x-input-label
                                for="email"
                                :value="__('Email')"
                                class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600 text-sm" />
                        </div>

                        <!-- Password Input -->
                        <div class="relative h-11 w-full min-w-[200px]">
                            <x-text-input
                                id="password"
                                name="password"
                                type="password"
                                class="w-full h-full px-3 py-3 font-sans text-sm font-normal transition-all bg-transparent border rounded-md peer border-blue-gray-200 border-t-transparent text-blue-gray-700 outline outline-0 placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                placeholder=" "
                                required
                                autocomplete="current-password"
                            />
                            <x-input-label
                                for="password"
                                :value="__('Mot de passe')"
                                class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 text-sm" />
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="-ml-2.5">
                            <label for="remember_me" class="inline-flex items-center">
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                    name="remember"
                                />
                                <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                        fill="currentColor" stroke="currentColor" stroke-width="1">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="ms-2 text-sm text-gray-600">{{ __('Se rappeler de moi') }}</span>
                            </label>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <div class="flex items-center justify-between">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-orange-500 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            @endif

                            <x-primary-button
                                class="block select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            >
                                {{ __('Se connecter') }}
                            </x-primary-button>
                        </div>

                        <p class="flex justify-center mt-6 font-sans text-sm antialiased font-light leading-normal text-inherit">
                            {{ __("Vous n'avez pas de compte?") }}
                            <a href="{{ route('register') }}"
                                class="block ml-1 font-sans text-sm antialiased font-bold leading-normal text-orange-500 transition-all hover:text-orange-600 focus:text-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                                {{ __('Inscription') }}
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
