@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="page-bg">
  <div class="register-wrapper">
      <header class="header">
          <div class="register-title">Register</div>
      </header>

      <!-- ← ここが白い「大きな四角」 -->
      <div class="register-card">
          <form action="{{ route('register') }}" method="POST" class="register-form">
              @csrf

              <div class="form-inner">
                  <div class="field">
                      <label for="name">お名前</label>
                      <input id="name" type="text" name="name" placeholder="例: 山田 太郎" value="{{ old('name') }}">
                  </div>

                  <div class="field">
                      <label for="email">メールアドレス</label>
                      <input id="email" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                  </div>

                  <div class="field">
                      <label for="password">パスワード</label>
                      <input id="password" type="password" name="password" placeholder="例: coachsecret06">
                  </div>
              </div>

              <div class="actions">
                  <button type="submit" class="register-btn">登録</button>
              </div>
          </form>
      </div>
  </div>
</div>
@endsection
