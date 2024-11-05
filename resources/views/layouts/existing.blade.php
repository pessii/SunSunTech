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
                <li><a href="#">お悩みから探す</a></li>
                <li class="dropdown" onmouseover="showCategoriesDropdown()" onmouseout="hideCategoriesDropdown()">
                    <a href="#" id="categoriesDropdownButton" class="categories-dropdown-btn">カテゴリー</a>
                    <ul id="categoriesDropdownMenu" class="categories-dropdown-content categories-hidden">
                        <!-- スキンケア -->
                        <li class="category-item" onmouseover="showSubDropdown('skincareDropdownMenu')" onmouseout="hideSubDropdown('skincareDropdownMenu')">
                            <a href="#">スキンケア</a>
                            <ul id="skincareDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">洗顔料</a></li>
                                <li><a href="#">クレンジング</a></li>
                                <li><a href="#">化粧水</a></li>
                                <li><a href="#">美容液</a></li>
                                <li><a href="#">乳液</a></li>
                                <li><a href="#">フェイスクリーム</a></li>
                                <li><a href="#">オイル・バーム</a></li>
                                <li><a href="#">オールインワン</a></li>
                                <li><a href="#">マスク・パック</a></li>
                                <li><a href="#">スペシャルケア</a></li>
                                <li><a href="#">アイケア</a></li>
                                <li><a href="#">リップケア</a></li>
                                <li><a href="#">UVケア</a></li>
                                <li><a href="#">その他スキンケア</a></li>
                            </ul>
                        </li>
                        <!-- ベースメイク -->
                        <li class="category-item" onmouseover="showSubDropdown('baseMakeDropdownMenu')" onmouseout="hideSubDropdown('baseMakeDropdownMenu')">
                            <a href="#">ベースメイク</a>
                            <ul id="baseMakeDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">化粧下地・コントロールカラー</a></li>
                                <li><a href="#">BBクリーム</a></li>
                                <li><a href="#">CCクリーム</a></li>
                                <li><a href="#">コンシーラー</a></li>
                                <li><a href="#">ファンデーション</a></li>
                                <li><a href="#">フェイスパウダー</a></li>
                                <li><a href="#">その他ベースメイク</a></li>
                            </ul>
                        </li>
                        <!-- メイクアップ -->
                        <li class="category-item" onmouseover="showSubDropdown('makeUpDropdownMenu')" onmouseout="hideSubDropdown('makeUpDropdownMenu')">
                            <a href="#">メイクアップ</a>
                            <ul id="makeUpDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">アイブロウ</a></li>
                                <li><a href="#">アイライナー</a></li>
                                <li><a href="#">マスカラ</a></li>
                                <li><a href="#">まつ毛美容液</a></li>
                                <li><a href="#">アイシャドウ</a></li>
                                <li><a href="#">リップ</a></li>
                                <li><a href="#">チーク</a></li>
                                <li><a href="#">ハイライト・シェーディング</a></li>
                                <li><a href="#">ネイル</a></li>
                            </ul>
                        </li>
                        <!-- メイクアップアイテム -->
                        <li class="category-item" onmouseover="showSubDropdown('makeupItemsDropdownMenu')" onmouseout="hideSubDropdown('makeupItemsDropdownMenu')">
                            <a href="#">メイクアップアイテム</a>
                            <ul id="makeupItemsDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">コットン・あぶらとり紙</a></li>
                                <li><a href="#">メイクブラシ</a></li>
                                <li><a href="#">バフ・スポンジ</a></li>
                                <li><a href="#">ビューラー</a></li>
                                <li><a href="#">アイラッシュ・つけまつげ</a></li>
                                <li><a href="#">ミラー</a></li>
                                <li><a href="#">ケース</a></li>
                                <li><a href="#">化粧ポーチ・ボックス</a></li>
                                <li><a href="#">その他化粧小物</a></li>
                            </ul>
                        </li>
                        <!-- ボディケア -->
                        <li class="category-item" onmouseover="showSubDropdown('bodycareDropdownMenu')" onmouseout="hideSubDropdown('bodycareDropdownMenu')">
                            <a href="#">ボディケア</a>
                            <ul id="bodycareDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">ボディソープ</a></li>
                                <li><a href="#">ボディローション・ミルク</a></li>
                                <li><a href="#">ボディミスト</a></li>
                                <li><a href="#">ボディクリーム</a></li>
                                <li><a href="#">ボディオイル</a></li>
                                <li><a href="#">ボディマッサージ</a></li>
                                <li><a href="#">ボディスクラブ</a></li>
                                <li><a href="#">ネック・デコルテケア</a></li>
                                <li><a href="#">バストケア</a></li>
                                <li><a href="#">ウエスト・ヒップケア</a></li>
                                <li><a href="#">ハンドケア</a></li>
                                <li><a href="#">レッグケア</a></li>
                                <li><a href="#">フットケア</a></li>
                                <li><a href="#">デオドラント・制汗剤</a></li>
                                <li><a href="#">バスアイテム</a></li>
                                <li><a href="#">オーラルケア</a></li>
                                <li><a href="#">その他ボディケア</a></li>
                            </ul>
                        </li>
                        <!-- ネイル・ネイルケア -->
                        <li class="category-item" onmouseover="showSubDropdown('nailDropdownMenu')" onmouseout="hideSubDropdown('nailDropdownMenu')">
                            <a href="#">ネイル・ネイルケア</a>
                            <ul id="nailDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">マニキュア</a></li>
                                <li><a href="#">ジェルネイル</a></li>
                                <li><a href="#">ネイルアートグッズ</a></li>
                                <li><a href="#">リムーバー・除光液</a></li>
                                <li><a href="#">ネイルケア</a></li>
                                <li><a href="#">ネイルケアグッズ</a></li>
                            </ul>
                        </li>
                        <!-- ヘアケア -->
                        <li class="category-item" onmouseover="showSubDropdown('haircareDropdownMenu')" onmouseout="hideSubDropdown('haircareDropdownMenu')">
                            <a href="#">ヘアケア</a>
                            <ul id="haircareDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">シャンプー</a></li>
                                <li><a href="#">コンディショナー</a></li>
                                <li><a href="#">インバストリートメント・パック</a></li>
                                <li><a href="#">アウトバストリートメント</a></li>
                                <li><a href="#">スカルプケア</a></li>
                                <li><a href="#">ヘアカラー・パーマ</a></li>
                                <li><a href="#">ヘアスタイリング</a></li>
                                <li><a href="#">ヘアブラシ</a></li>
                                <li><a href="#">ヘアアイロン</a></li>
                            </ul>
                        </li>
                        <!-- フレグランス -->
                        <li class="category-item" onmouseover="showSubDropdown('fragranceDropdownMenu')" onmouseout="hideSubDropdown('fragranceDropdownMenu')">
                            <a href="#">フレグランス</a>
                            <ul id="fragranceDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">レディース</a></li>
                                <li><a href="#">メンズ</a></li>
                                <li><a href="#">香水</a></li>
                                <li><a href="#">フレグランスミスト</a></li>
                                <li><a href="#">ヘアフレグランス</a></li>
                                <li><a href="#">ルームフレグランス</a></li>
                                <li><a href="#">アロマオイル</a></li>
                                <li><a href="#">アロマバーム</a></li>
                            </ul>
                        </li>
                        <!-- コフレ・雑貨 -->
                        <li class="category-item" onmouseover="showSubDropdown('goodsDropdownMenu')" onmouseout="hideSubDropdown('goodsDropdownMenu')">
                            <a href="#">コフレ・雑貨</a>
                            <ul id="goodsDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">洗剤</a></li>
                                <li><a href="#">柔軟剤</a></li>
                                <li><a href="#">サニタリー・生理用品</a></li>
                                <li><a href="#">ルームフレグランス・ディフューザー</a></li>
                                <li><a href="#">エッセンシャルオイル</a></li>
                                <li><a href="#">アロマキャンドル</a></li>
                                <li><a href="#">お香・インセンス</a></li>
                                <li><a href="#">消臭剤・芳香剤</a></li>
                                <li><a href="#">ファブリックミスト</a></li>
                                <li><a href="#">マスク・ティッシュ</a></li>
                                <li><a href="#">入浴剤</a></li>
                                <li><a href="#">バスソルト</a></li>
                                <li><a href="#">その他日用品・雑貨</a></li>
                                <li><a href="#">洗剤・デタージェント</a></li>
                                <li><a href="#">タオル</a></li>
                            </ul>
                        </li>
                        <!-- ビューティーグッズ -->
                        <li class="category-item" onmouseover="showSubDropdown('beautyGoodsDropdownMenu')" onmouseout="hideSubDropdown('beautyGoodsDropdownMenu')">
                            <a href="#">ビューティーグッズ</a>
                            <ul id="beautyGoodsDropdownMenu" class="sub-dropdown hidden">
                                <li><a href="#">メイクブラシ</a></li>
                                <li><a href="#">バフ・スポンジ</a></li>
                                <li><a href="#">手鏡・メイクミラー</a></li>
                                <li><a href="#">ヘアブラシ</a></li>
                                <li><a href="#">コンタクトレンズ・カラコン</a></li>
                                <li><a href="#">アイラッシュカーラー</a></li>
                                <li><a href="#">フェイスケア美容家電</a></li>
                                <li><a href="#">ボディケア美容家電</a></li>
                                <li><a href="#">ヘアケアスタイリング美容家電</a></li>
                                <li><a href="#">その他ビューティーグッズ</a></li>
                            </ul>
                        </li>
                        <!-- こだわり条件 -->
                        <li><a href="#">こだわり条件</a></li>
                    </ul>
                </li>
                <li><a href="#">ブランド商品</a></li>
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