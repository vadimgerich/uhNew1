@extends('layout')

@section('page_title')
    Registration page
@endsection

@section('main_content')

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
        <h1>Registration page</h1>
        <form method="post" action="/register/check" class="form-group">
            @csrf
            <input type="text" name="login" id="login" placeholder="Enter login" class="form-control"><br>
            <input type="email" name="email" id="email" placeholder="Enter e-mail" class="form-control"><br>
            <input type="text" name="password" id="password" placeholder="Enter password" class="form-control"><br>
            <input type="text" name="name" id="name" placeholder="Enter name" class="form-control"><br>
            <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" class="form-control"><br>
            <button type="submit" class="btn btn-info">Send</button>
        </form>
    </div>
@endsection
