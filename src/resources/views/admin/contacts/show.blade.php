@extends('layouts.app')

@section('content')
<h1>お問い合わせ詳細</h1>

<p><strong>名前:</strong> {{ $contact->name }}</p>
<p><strong>性別:</strong> {{ $contact->gender }}</p>
<p><strong>メール:</strong> {{ $contact->email }}</p>
<p><strong>電話番号:</strong> {{ $contact->tel }}</p>
<p><strong>住所:</strong> {{ $contact->address }}</p>
<p><strong>カテゴリ:</strong> {{ $contact->category }}</p>
<p><strong>内容:</strong> {{ $contact->content }}</p>
<p><strong>送信日時:</strong> {{ $contact->created_at }}</p>

<a href="{{ route('admin.contacts.index') }}">一覧に戻る</a>
@endsection
