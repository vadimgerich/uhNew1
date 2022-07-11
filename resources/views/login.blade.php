@extends('layout')

@section('page_title')
    Login page
@endsection

@section('main-content')

    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <h1>Login page</h1>
        <form method="post" action="/login/check" class="form-group">
            @csrf
            <input type="text" name="login" id="login" placeholder="Enter login" class="form-control"><br>
            <input type="password" name="password" id="password" placeholder="Enter password" class="form-control"><br>
            <button type="submit" class="btn btn-info">Login</button>
            <a href="/register" class="btn btn-danger">Register</a>
        </form>
    </div>
@endsection
