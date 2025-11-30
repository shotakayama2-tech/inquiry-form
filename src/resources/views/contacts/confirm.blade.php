@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Confirm</h2>
    </div>

    <form class="form" action="{{ route('contact.thanks') }}" method="POST">

        @csrf

        {{-- 名前 --}}
        <div class="form__group">
            <label class="form__label">お名前</label>
            <div class="form__confirm-text">
                {{ $inputs['last_name'] }} {{ $inputs['first_name'] }}
            </div>

            {{-- hiddenで送信 --}}
            <input type="hidden" name="last_name" value="{{ $inputs['last_name'] }}">
            <input type="hidden" name="first_name" value="{{ $inputs['first_name'] }}">
        </div>

        {{-- 性別 --}}
        <div class="form__group">
            <label class="form__label">性別</label>
            <div class="form__confirm-text">
                @if($inputs['gender'] == 1) 男性
                @elseif($inputs['gender'] == 2) 女性
                @else その他
                @endif
            </div>
            <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
        </div>

        {{-- メール --}}
        <div class="form__group">
            <label class="form__label">メールアドレス</label>
            <div class="form__confirm-text">{{ $inputs['email'] }}</div>
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">
        </div>

        {{-- 電話 --}}
        <div class="form__group">
            <label class="form__label">電話番号</label>
            <div class="form__confirm-text">
                {{ $inputs['tel1'] }} - {{ $inputs['tel2'] }} - {{ $inputs['tel3'] }}
            </div>
            <input type="hidden" name="tel1" value="{{ $inputs['tel1'] }}">
            <input type="hidden" name="tel2" value="{{ $inputs['tel2'] }}">
            <input type="hidden" name="tel3" value="{{ $inputs['tel3'] }}">
        </div>

        {{-- 住所 --}}
        <div class="form__group">
            <label class="form__label">住所</label>
            <div class="form__confirm-text">{{ $inputs['address'] }}</div>
            <input type="hidden" name="address" value="{{ $inputs['address'] }}">
        </div>

        {{-- 種類 --}}
            <div class="form__group">
            <label class="form__label">お問い合わせの種類</label>
            <div class="form__confirm-text">{{ $inputs['kind'] }}</div>

    <input type="hidden" name="kind" value="{{ $inputs['kind'] }}">
</div>

            <input type="hidden" name="category" value="{{ $inputs['category'] }}">
        </div>

        {{-- 内容 --}}
            <div class="form__group">
            <label class="form__label">お問い合わせ内容</label>

    <div class="form__confirm-text">{{ $inputs['content'] }}</div>

    <input type="hidden" name="content" value="{{ $inputs['content'] }}">
</div>


        <div class="form__button confirm-buttons">
            <button class="form__button-submit">送信する</button>
        </div>
    </form>

    {{-- 戻るボタン --}}
    <form action="/contacts" method="get" class="form__back-button">
        <button class="form__button-back">修正する</button>
    </form>

</div>
@endsection
