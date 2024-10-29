<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コスメ通販サイト CosmeNavi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    @vite(['resources/js/app.js'])
</head>
<body>
    <header>
        <div class="header-container">
            @if (Route::has('login'))
                @auth
                <!-- ログイン時の処理 -->
                    <h1 class="site-title">CosmeNavi</h1>

                    <!-- 検索フォーム -->
                    <div class="search-form">
                        <form action=" " method="GET">
                            <div class="input-wrapper">
                                <span class="search-icon"></span>
                                <input type="text" name="query" placeholder="すべてのアイテムから探す" required>
                            </div>
                            <button type="submit"></button>
                        </form>
                    </div>

                    <!-- ドロップダウン -->
                    <div class="dropdown">
                        <div>
                            <button id="dropdownButton" class="dropdown-btn">
                                <div>{{ Auth::user()->name }}<span class="mr">様</span></div>
                            </button>
                        </div>

                        <div id="dropdownMenu" class="dropdown-content hidden">
                            <a href="{{ route('profile.edit') }}" class="dropdown-link">
                                {{ __('マイページ') }}
                            </a>

                            <a>お気に入り</a>

                            <a>閲覧履歴</a>

                            <!-- ログアウト -->
                            <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                                @csrf
                                <a href="{{ route('logout') }}" class="dropdown-link"
                                onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                    {{ __('ログアウト') }}
                                </a>
                            </form>
                        </div>
                    </div>
                @else
                    <h1 class="site-title">コスメナビ</h1>
                    <!-- ログインしていない時の処理 -->
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        ログイン
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            新規登録（無料）
                        </a>
                    @endif
                @endauth
            @endif
        </div>
        <nav>
            <ul>
                <li><a href="#">セール商品</a></li>
                <li><a href="#">ブランド商品</a></li>
                <li><a href="#">アイテム</a></li>
                <li><a href="#">カテゴリー</a></li>
                <li><a href="#">お気に入り</a></li>
                <li><a href="#">閲覧履歴</a></li>
                <li><a href="#">よくある質問</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content') <!-- 子テンプレートのコンテンツがここに挿入される -->
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