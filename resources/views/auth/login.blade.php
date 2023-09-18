@extends('template')
@section('content')
    <div class="container">
        <div class="col-sm-5 mx-auto">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-4 mb3">
                    <input id="email" class="form-control block mt-1 w-full" placeholder="E-mail" type="email" name="email" required/>
                </div>
                <div class="mt-4 mb-3">
                    <input id="password" class="form-control block mt-1 w-full"  placeholder="Пароль" type="password" name="password" required/>
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-secondary" value="Зарегестрироваться">
                </div>
                <div class="mb-3">
                    <a class="form-control btn btn-secondary" href="{{ route('register') }}">
                        Не зарегестрированны?
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
