@extends('index')
@section('content')
    <div class="row justify-content-center">
        <div class="col-8 card shadow mb-4 mx-2">
            <div class="card-body">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="col-8 card shadow mb-4 mx-2">
            <div class="card-body">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="col-8 card shadow mb-4 mx-2">
            <div class="card-body">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection
