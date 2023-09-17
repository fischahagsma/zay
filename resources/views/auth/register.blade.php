@extends('template')
@section('content')
    <div class="container">
        <div class="col-sm-5 mx-auto">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="mb-3">
                    <input id="name" class="form-control block mt-1 w-full" placeholder="Имя" type="text" name="name" :value="old('name')" required autofocus/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mb3">
                    <input id="email" class="form-control block mt-1 w-full" placeholder="E-mail" type="email" name="email" :value="old('email')" required/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4 mb-3">
                    <input id="password" class="form-control block mt-1 w-full"  placeholder="пароль" type="password" name="password" required/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mt-4 mb-3">
                    <input id="password_confirmation" class="form-control block mt-1 w-full" placeholder="подтверждение пароля" type="password" name="password_confirmation" required/>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <button class="ml-4">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
