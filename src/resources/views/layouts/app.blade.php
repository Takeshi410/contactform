<!DOCTYPE html>
<html lang="ja">
<head>
    @livewireStyles
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <title>お問い合わせフォーム</title>
    @yield('css')
</head>

<body>
@livewireScripts

<header class="header">
    <div class="header__inner">
        <p class="header__logo">FashionablyLate</p>
        @yield('header')
    </div>
</header>

<main>
@yield('content')
</main>

</body>

</html>