@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header')
<div class="header__register">
    <a href="/register" class="">register</a>
</div>

@endsection

@section('content')
<div class="back">
    <div class="login__content">
        <div class="section__title">
            <h2>Login</h2>
        </div>
    </div>

    <div class="login-box">
        <form action="/login" method="post">
            @csrf
            <div class="login-box__inner">
                <h3>メールアドレス</h3>
                <input type="text" class="login-box__inner--input" name="email" value="{{ old('email') }}">
                <h3>パスワード</h3>
                <input type="password" class="login-box__inner--input" name="password">

                @if ($errors->any())
                    <div class="error-message">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="login-button">
                    <button class="login-button--submit">ログイン</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
