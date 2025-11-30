<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FashionablyLate')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">


    <style>
        body {
            background: #fff;
            color: #6b5b52;
            font-family: 'Hiragino Sans', 'Helvetica Neue', sans-serif;
        }

        .header {
            text-align: center;
            padding: 40px 0 20px 0;
            border-bottom: 1px solid #e5e0db;
        }

        .header-title {
            font-family: 'Playfair Display', serif;
            font-size: 34px;
            font-weight: 500;
            color: #6b5b52;
            margin: 0;
        }

        .content-area {
            width: 900px;
            margin: 0 auto;
            padding-bottom: 60px;
        }

        footer {
            text-align: center;
            padding: 40px 0;
            color: #a9a9a9;
            font-size: 14px;
        }
        .contact-title {
        text-align: center;
        font-size: 24px;
        margin: 40px 0 50px;
        font-weight: 400;
        color: #6b5b52;
        }


    </style>
</head>

<body>

    {{-- ヘッダー --}}
    <header class="header">
        <h1 class="header-title">FashionablyLate</h1>
    </header>

    {{-- メインコンテンツ --}}
    <div class="content-area">
        @yield('content')
    </div>

</body>
</html>
