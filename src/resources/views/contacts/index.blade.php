@extends('layouts.app')

@section('content')
<div class="contact-container">

    <h2 class="contact-title">Contact</h2>

    <form action="/contact/confirm" method="post" class="contact-form">
        @csrf

        <div class="form-row">
            <label>お名前 <span class="required">*</span></label>
            <div class="two-input">
                <input type="text" name="last_name" class="form-input" placeholder="例: 山田">
                <input type="text" name="first_name" class="form-input" placeholder="例: 太郎">
            </div>
        </div>

        <div class="form-row">
            <label>性別 <span class="required">*</span></label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="男性"> 男性</label>
                <label><input type="radio" name="gender" value="女性"> 女性</label>
                <label><input type="radio" name="gender" value="その他"> その他</label>
            </div>
        </div>

        <div class="form-row">
            <label>メールアドレス <span class="required">*</span></label>
            <input type="email" name="email" placeholder="例: test@example.com">
        </div>

        <div class="form-row">
            <label>電話番号 <span class="required">*</span></label>
            <div class="tel-input">
                <input type="text" name="tel1" placeholder="080">
                <span>-</span>
                <input type="text" name="tel2" placeholder="1234">
                <span>-</span>
                <input type="text" name="tel3" placeholder="5678">
            </div>
        </div>

        <div class="form-row">
            <label>住所 <span class="required">*</span></label>
            <input type="text" name="address" placeholder="例: 東京都渋谷区千代ヶ谷3-2-3">
        </div>

        <div class="form-row">
            <label>建物名</label>
            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
        </div>

       <div class="form-row">
    <label>お問い合わせの種類 <span class="required">*</span></label>
    <select name="kind" class="form-input">
        <option value="">選択してください</option>
        <option value="商品のお届けについて">商品のお届けについて</option>
        <option value="商品の交換について">商品の交換について</option>
        <option value="商品トラブル">商品トラブル</option>
        <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
        <option value="その他">その他</option>
    </select>
        </div>

        <div class="form-row">
            <label>お問い合わせ内容 <span class="required">*</span></label>
            <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
        </div>

        <div class="submit-area">
            <button type="submit" class="submit-btn">確認画面</button>
        </div>
    </form>
</div>
@endsection
