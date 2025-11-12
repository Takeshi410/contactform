@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header')
<div class="header__login">
    <a href="/login" class="">login</a>
</div>

@endsection

@section('content')
<div class="back">
    <div class="register__content">
        <div class="section__title">
            <h2>register</h2>
        </div>
    </div>
    <div class="register-box">
        <form action="/register" method="post">
            @csrf
            <div class="register-box__inner">
                <h3>お名前</h3>
                <input type="text" class="register-box__inner--input" name="name" value="{{ old('name') }}">
                @error('name')
                {{ $message }}
                @enderror
                <h3>メールアドレス</h3>
                <input type="text" class="register-box__inner--input" name="email" value="{{ old('email') }}">
                @error('nemail')
                {{ $message }}
                @enderror
                <h3>パスワード</h3>
                <input type="password" class="register-box__inner--input" name="password" >
                @error('password')
                {{ $message }}
                @enderror
                <div class="register-button">
                    <button class="register-button--submit">登録</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
