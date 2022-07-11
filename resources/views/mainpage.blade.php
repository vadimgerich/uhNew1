@extends('layout')

@section('pageMainDescription')
    <h1>
        Alt+S - В роботу. Alt+K - В архів. Esc - Сброс в список
    </h1>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('mainpage')}}" id="search_tickets" method="post">
                @csrf
                <input id="search_ticket" name="search_ticket" type="text" placeholder="Телефон / Ключ пошуку" class="form-control">
            </form>
        </div>
    </div><br><br>

    <div id="user-content" class="container">

    </div>

{{--    @if($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @if(is_array($errors))--}}
{{--                    @foreach($errors as $error)--}}
{{--                        <li>{{$error}}</li>--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <li>{{$errors}}</li>--}}
{{--                @endif--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <h1>Lul</h1>--}}
{{--    @if(session('users')!=null)--}}
{{--        <table class="table table-sm">--}}
{{--            <thead>--}}
{{--                <th>ID</th>--}}
{{--                <th>Email</th>--}}
{{--                <th>Login</th>--}}
{{--                <th>Password</th>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach(session('users') as $user)--}}
{{--                <tr>--}}
{{--                    <td>{{$user->id}}</td>--}}
{{--                    <td>{{$user->login}}</td>--}}
{{--                    <td>{{$user->email}}</td>--}}
{{--                    <td>{{$user->password}}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @endif--}}

{{--    <div>--}}
{{--        <form action="/mainpage/db_users" method="post">--}}
{{--            @csrf--}}
{{--            <label for="number_of_users">Введіть кількість юзерів</label>--}}
{{--            <input type="number" name="number_of_users" id="number_of_users"><br><br>--}}
{{--            <label for="number_of_users">Введіть префікс логінів юзерів</label>--}}
{{--            <input type="text" name="login_prefix" id="login_prefix"><br><br>--}}
{{--            <button type="submit" class="btn btn-info">Get users</button>--}}
{{--        </form>--}}
{{--    </div>--}}
@endsection
