@extends('template')
@section('content')
    <div class="col-sm-7 mx-auto mt-3">
        <p><strong>Имя: </strong>{{auth()->user()->name}}</p>
        <p><strong>Фамилия: </strong>{{auth()->user()->lastname}}</p>
        <p><strong>E-mail: </strong>{{auth()->user()->email}}</p>
        <p><strong>ID: </strong>{{auth()->user()->id}}</p>
    </div>
    <div class="col-sm-7 mx-auto mb-3">
        <form id="logoutForm" action="/logout" method="post">
            @csrf
            <input class=" btn btn-secondary" type="submit" value="Выход">
        </form>
    </div>
@endsection
{{--
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
--}}
