<x-guest-layout>
    <div class="container my-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h5 class="card-title text-center mb-4">{{ __('LUPA KATA SANDI') }}</h5>

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Lupa kata sandi Anda? Tidak masalah. Cukup beritahu kami alamat email Anda, dan kami akan mengirimkan tautan reset kata sandi yang memungkinkan Anda memilih kata sandi baru.') }}
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
