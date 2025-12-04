@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-thanks">
    <h2>Thank You!</h2>
    <p>お問い合わせありがとうございました。</p>

    <div class="thanks-button">
        <a href="/contacts" class="thanks-link">HOME</a>
    </div>
</div>
@endsection


