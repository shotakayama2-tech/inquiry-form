@extends('layouts.app')

@section('content')

<div class="admin-container">

    <h2 class="admin-subtitle">Admin</h2>

    {{-- 検索フォーム --}}
    <form action="{{ route('admin.contacts.index') }}" method="GET" class="search-form">
        <input type="text" name="keyword" placeholder="名前かメールアドレスを入力してください" value="{{ request('keyword') }}">

        <select name="gender">
            <option value="">性別</option>
            <option value="1" {{ request('gender')=='1' ? 'selected' : '' }}>男性</option>
            <option value="2" {{ request('gender')=='2' ? 'selected' : '' }}>女性</option>
        </select>

        <select name="category">
            <option value="">お問い合わせの種類</option>
            <option value="1" {{ request('category')=='1' ? 'selected' : '' }}>商品の交換について</option>
            <option value="2" {{ request('category')=='2' ? 'selected' : '' }}>返品について</option>
            <option value="3" {{ request('category')=='3' ? 'selected' : '' }}>その他</option>
        </select>

        <input type="date" name="date" value="{{ request('date') }}">

        <button class="btn-search">検索</button>
        <a href="{{ route('admin.contacts.index') }}" class="btn-reset">リセット</a>
    </form>

    {{-- エクスポート --}}
    <a href="{{ route('admin.contacts.export') }}" class="btn-export">エクスポート</a>

    {{-- 一覧テーブル --}}
    <table class="contact-table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->gender == 1 ? '男性' : '女性' }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->category }}</td>
                <td><a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn-detail">詳細</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- ページネーション --}}
    <div class="pagination-wrapper">
        {{ $contacts->links() }}
    </div>

</div>

@endsection
