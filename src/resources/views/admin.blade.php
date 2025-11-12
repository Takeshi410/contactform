@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header')
<div class="header__logout">
    <form action="/logout" method="post">
        @csrf
        <button class="header__logout--button" >logout</button>
    </form>
</div>
@endsection

@section('content')
<div class="admin__content">
    <div class="section__title">
        <h2>Admin</h2>
    </div>

    <form action="/admin/search">
    <div class="search-form__item">
        <input type="text" class="search-form__item--keyword" name="keyword" value="{{ request('keyword') }}" placeholder="名前やメールアドレスを入力してください">

        <select name="gender" .search-form__item-- class="search-form__item--gender">
            <option value="">性別</option>
            <option value="1" {{ request('gender') === '1' ? 'selected' : '' }}>男性</option>
            <option value="2" {{ request('gender') === '2' ? 'selected' : '' }}>女性</option>
            <option value="3" {{ request('gender') === '3' ? 'selected' : '' }}>その他</option>
        </select>

        <select name="category" .search-form__item-- class="search-form__item--category">
            <option value="">お問い合わせの種類</option>
            @foreach ($categories as $category)
            <option value="{{ $category['id'] }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category['content'] }}</option>
            @endforeach
        </select>

        <input type="date" name="date" class="search-form__item--date" value="{{ request('date') }}" >

        <button>検索</button>
    </form>
    <form action="/reset">
        <button class="search-form__reset">リセット</button>
    </form>
    </div>


    <div class="admin__pagination">
    {{ $contacts->appends(request()->query())->links() }}
    </div>

    <table class="admin-table">
        <tr class="admin-table__header">
            <th class="admin-table__name">名前</th>
            <th class="admin-table__gender">性別</th>
            <th class="admin-table__email">メールアドレス</th>
            <th class="admin-table__category">お問い合わせの種類</th>
            <th class="admin-table__detail"></th>
        </tr>
        @foreach ($contacts as $contact)
        <tr class="admin-table__row">
            <td class="admin-table__name"><input type="text" class="admin-table__input--name" Value="{{ $contact['last_name'] . '　' . $contact['first_name'] }}" readonly></td>
            <td class="admin-table__gender"><input type="hidden" Value="{{ $contact['gender'] }}">
                    <?php
                    if ($contact['gender'] == '1') {
                        echo '男性';
                    } elseif ($contact['gender'] == '2') {
                        echo '女性';
                    } else {
                        echo 'その他';
                    }
                    ?></td>
            <td class="admin-table__email"><input type="text" Value="{{ $contact['email'] }}" readonly></td>
            <td class="admin-table__category"><input type="text" Value="{{ $contact['category']['content'] }}" readonly></td>
            <td><button>詳細</button></td>
        </tr>
        @endforeach
    </table>
@endsection