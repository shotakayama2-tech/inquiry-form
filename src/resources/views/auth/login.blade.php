@extends('layouts.app')

@section('title', 'ログイン')

@section('content')
<div class="auth-container">
    <h2>Login</h2>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}" required>
        </div>
        
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password" placeholder="例: coachtech06" required>
        </div>

        <button type="submit">ログイン</button>
    </form>

    <p>アカウントをお持ちでない場合 <a href="{{ route('register') }}">新規登録</a></p>
</div>
@endsection
