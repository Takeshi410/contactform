@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact__content">
    <div class="section__title">
        <h2>Contact</h2>
    </div>

     @if($errors->any())

                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

        @endif

<div class="contact-table">
    <form action="/confirm" method="post">
        @csrf
        <table class="contact-table__inner">
            <tr>
                <td class="contact-table__item">
                    <div class="contact-form__item">
                        <p class="contact-form__item-p">お名前<span class="contact-form__item--span">※</span></p>
                    </div>
                </td>
                <td class="contact-table__input">
                    <div class="contact-form__input">
                        <input type="text" name="last_name" class="create-form__input--last-name" value="{{ old('last_name') }}" placeholder="例：山田" />
                        <input type="text" name="first_name" class="create-form__input--first-name" value="{{ old('first_name') }}" placeholder="例：太郎" />
                    </div>
                    @if ($errors->has('last_name'))
                        {{$errors->first('last_name')}}
                    @endif
                    @if ($errors->has('first_name'))
                        {{$errors->first('first_name')}}
                    @endif
                </td>
            </tr>

            <tr>
                <td class="contact-table__item">
                    <div class="contact-form__item">
                        <p class="contact-form__item-p">性別<span class="contact-form__item--span">※</span></p>
                    </div>
                </td>
                <td class="contact-table__input">
                    <div class="create-form__input">
                        <input type="radio" name="gender" value="1" class="create-form__input--gender" {{ old('gender') === '1' ? 'checked' : '' }}><label class="gender-label">男性</label>
                        <input type="radio" name="gender" value="2" class="create-form__input--gender" {{ old('gender') === '2' ? 'checked' : '' }}><label class="gender-label">女性</label>
                        <input type="radio" name="gender" value="3" class="create-form__input--gender" {{ old('gender') === '3' ? 'checked' : '' }}><label class="gender-label">その他</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="contact-table__item">
                    <div class="contact-form__item">
                        <p class="contact-form__item-p">メールアアドレス<span class="contact-form__item--span">※</span></p>
                    </div>
                </td>
                <td class="contact-table__input">
                    <div class="create-form__input">
                        <input type="text" name="email" class="create-form__input--email" value="{{ old('email') }}" placeholder="例: test@example.com" />
                    </div>
                </td>
            </tr>

            <tr>
                <td class="contact-table__item">
                    <div class="contact-form__item">
                        <p class="contact-form__item-p">電話番号<span class="contact-form__item--span">※</span></p>
                    </div>
                </td>
                <td class="contact-table__input">
                    <div class="contact-form__input">
                        <input type="text" name="tel_1" class="create-form__input--tel" value="{{ old('tel_1') }}" placeholder="080" />
                        <span class="tel-hyphen">-</span>
                        <input type="text" name="tel_2" class="create-form__input--tel" value="{{ old('tel_2') }}" placeholder="1234" />
                        <span class="tel-hyphen">-</span>
                        <input type="text" name="tel_3" class="create-form__input--tel" value="{{ old('tel_3') }}" placeholder="5678" />
                    </div>
                </td>
            </tr>

            <tr>
                <td class="contact-table__item">
                    <div class="contact-form__item">
                        <p class="contact-form__item-p">住所<span class="contact-form__item--span">※</span></p>
                    </div>
                </td>
                <td class="contact-table__input">
                    <div class="create-form__input">
                        <input type="text" name="address" class="create-form__input--address" value="{{ old('address') }}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" />
                    </div>
                </td>
            </tr>

            <tr>
                <td class="contact-table__item">
                    <div class="contact-form__item">
                        <p class="contact-form__item-p">建物名</p>
                    </div>
                </td>
                <td class="contact-table__input">
                    <div class="create-form__input">
                        <input type="text" name="building" class="create-form__input--building" value="{{ old('building') }}" placeholder="例: 千駄ヶ谷マンション101" />
                    </div>
                </td>
            </tr>

            <tr>
                <td class="contact-table__item">
                    <div class="contact-form__item">
                        <p class="contact-form__item-p">お問い合わせ種類<span class="contact-form__item--span">※</span></p>
                    </div>
                </td>
                <td class="contact-table__input">
                    <div class="create-form__input">
                        <select name="category_id" class="create-form__input-category">
                            <option value="">お問い合わせ種類</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="contact-table__item">
                    <div class="contact-form__item">
                        <p class="contact-form__item-p">お問い合わせ内容<span class="contact-form__item--span">※</span></p>
                    </div>
                </td>
                <td class="contact-table__input">
                    <div class="create-form__input">
                        <textarea name="detail" cols="50" rows="40" class="create-form__input--detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                    </div>
                </td>
            </tr>
        </table>

        <div class="create-form__button">
            <button class="create-form__button--submit" type="submit">内容確認</button>
        </div>
    </form>
</div>
@endsection