@extends('template')
@section('content')
    <div class="container">
        <div class="col-sm-5 mx-auto">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="mt-4 mb-3">
                    <input id="name" class="form-control block mt-1 w-full" placeholder="Имя" type="text" name="name" required autofocus/>
                </div>
                <div class="mt-4 mb-3">
                    <input id="lastname" class="form-control block mt-1 w-full" placeholder="Фамилия" type="text" name="lastname" />
                </div>
                <div class="mt-4 mb3">
                    <input id="email" class="form-control block mt-1 w-full" placeholder="E-mail" type="email" name="email" required/>
                </div>
                <div class="mt-4 mb-3">
                    <input id="password" class="form-control block mt-1 w-full"  placeholder="Пароль" type="password" name="password" required/>
                </div>
                <div class="mt-4 mb-3">
                    <input id="password_confirmation" class="form-control block mt-1 w-full" placeholder="Подтверждение пароля" type="password" name="password_confirmation" required/>
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-secondary" value="Зарегестрироваться">
                </div>
                <div class="mb-3">
                    <a class="form-control btn btn-secondary" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
