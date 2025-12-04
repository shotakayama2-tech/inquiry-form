@extends('layouts.app')

@section('title', 'Login')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-wrapper">

    <h2 class="login-heading">Login</h2>

    <div class="login-box">
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>メールアドレス</label>
                <input type="email" name="email" placeholder="例: test@example.com" required>
            </div>

            <div class="form-group">
                <label>パスワード</label>
                <input type="password" name="password" placeholder="例: coachtech006" required>
            </div>

            <div class="btn-area">
                <button type="submit" class="login-btn">ログイン</button>
            </div>
        </form>
    </div>

</div>
@endsection
