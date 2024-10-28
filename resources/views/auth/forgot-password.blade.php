@extends('index')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-6">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Lupa Password? Jangan khawatir. Biarkan kami mengetahui alamat email kamu dan kami akan mengirim pesan ke email kamu berupa link untuk mengganti password kamu.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
