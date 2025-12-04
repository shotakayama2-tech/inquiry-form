@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<div class="confirm-container">
    <h2>confirm</h2>

    <div class="confirm-box">
        <!-- 名前を結合して表示 -->
        <p><strong>お名前：</strong> {{ $inputs['last_name'] }} {{ $inputs['first_name'] }}</p>
        <p><strong>性別：</strong> {{ $inputs['gender'] }}</p>
        <p><strong>メール：</strong> {{ $inputs['email'] }}</p>
        <p><strong>電話番号：</strong> {{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}</p>
        <p><strong>住所：</strong> {{ $inputs['address'] }}</p>
        <p><strong>建物名：</strong> {{ $inputs['building'] }}</p>
        <p><strong>お問い合わせの種類：</strong> {{ $inputs['kind'] }}</p>
        <p><strong>お問い合わせ内容：</strong><br>{{ $inputs['content'] }}</p>

        <form method="post" action="{{ route('contact.send') }}">
            @csrf
            @foreach($inputs as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach

            <div class="confirm-buttons">
                <button type="submit" name="action" value="submit">送信</button>
                <button type="submit" name="action" value="back">修正</button>
            </div>
        </form>
    </div>
</div>

@endsection
