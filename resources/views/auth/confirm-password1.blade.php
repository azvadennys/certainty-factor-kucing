<x-guest-layout>
    <div class="container my-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h5 class="card-title text-center mb-4">{{ __('KONFIRMASI KATA SANDI') }}</h5>


                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Ini adalah area aman dari aplikasi. Harap konfirmasi kata sandi Anda sebelum melanjutkan.') }}
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />



                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <!-- Password -->
                            <div>
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="flex justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Confirm') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
