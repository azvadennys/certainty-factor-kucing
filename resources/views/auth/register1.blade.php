@extends('index')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h5 class="card-title text-center mb-4">{{ __('REGISTRASI') }}</h5>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name Field -->
                            <div class="mb-3">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="form-control" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="form-control" type="password" name="password" required
                                    autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="mb-3">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" class="form-control" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <!-- Footer with Link and Button -->
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a class=" mx-4" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                                <x-primary-button class="btn btn-primary">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
