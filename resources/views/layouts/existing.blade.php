<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コスメ通販サイト CosmeNavi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    @yield('styles')
    @vite(['resources/js/app.js'])
</head>
<body>
    <!-- ヘッダー -->
    <header>
        @include('layouts.partials.header')
    </header>

    <!-- コンテンツ -->
    <div class="container">
        @yield('content') <!-- 子テンプレートのコンテンツがここに挿入され -->
    </div>

    <footer>

        <div class="footer-menu">
            <ul class="footer-menu-list">
                <li><a href="#">利用規約</a></li>
                <li><a href="#">プライバシーポリシー</a></li>
            </ul>
        </div>

        <div class="copyright">
            <p>&copy; 2024 CosmeNavi. All rights reserved.</p>
        </div>

    </footer>

    <script src="{{ asset('js/top.js') }}"></script>
</body>
</html>