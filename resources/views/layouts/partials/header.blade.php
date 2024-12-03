<div class="header-container">
    @if (Route::has('login'))
        @auth
        <!-- ログイン時の処理 -->
            <h1 class="site-title">
                <a href="{{ url('/') }}" class="site-title">CosmeNavi</a>
            </h1>

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


            <div class="favorite-icon">
                <div class="header-icons">
                    <!-- 閲覧履歴ボタン -->
                    <div class="icon-with-text">
                        <i class="far fa-clock"></i>
                        <span>閲覧履歴</span>
                    </div>
                    <!-- お気に入りボタン -->
                    <div class="icon-with-text">
                        <i class="far fa-heart"></i>
                        <span>お気に入り</span>
                    </div>
                </div>
            </div>

            <!-- ドロップダウン -->
            <div class="dropdown" onmouseover="showNameDropdown()" onmouseout="hideNameDropdown()">
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
            <h1 class="site-title">
                <a href="{{ url('/') }}" class="site-title">CosmeNavi</a>
            </h1>
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
        <!-- セール商品 -->
        <li><a href="#">セール商品</a></li>
        <!-- お悩みから探す -->
        <li><a href="#">お悩みから探す</a></li>
        <!-- カテゴリー -->
        <li><a href="{{ route('products.index') }}">カテゴリー</a></li>
        <!-- ブランド商品 -->
        <li><a href="#">ブランド商品</a></li>
        <!-- こだわり条件 -->
        <li><a href="#">こだわり条件</a></li>
        <!-- セール商品 -->
        <li><a href="#">セール商品</a></li>
    </ul>
</nav>