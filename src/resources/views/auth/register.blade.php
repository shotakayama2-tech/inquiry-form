@extends('layouts.app')

@section('title', '会員登録')

@section('content')
<div class="auth-container">
    <h2>Register</h2>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" name="name" id="name" placeholder="例: 山田 太郎" value="{{ old('name') }}" required>
        </div>
        
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}" required>
        </div>
        
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password" placeholder="例: coachtech06" required>
        </div>

        <button type="submit">登録</button>
    </form>

    <p>既にアカウントをお持ちですか？ <a href="{{ route('login') }}">ログイン</a></p>
</div>
@endsection
