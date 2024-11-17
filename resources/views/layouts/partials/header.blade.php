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
        <li><a href="#">セール商品</a></li>

        <li class="dropdown" onmouseover="showConcernsDropdown()" onmouseout="hideConcernsDropdown()">
            <a href="#" id="concernsDropdownButton" class="concerns-dropdown-btn">お悩みから探す</a>
            <ul id="concernsDropdownMenu" class="categories-dropdown-content categories-hidden">
                <!-- スキンケア -->
                <li class="category-item" onmouseover="showSubDropdown('skincareConcernsMenu')" onmouseout="hideSubDropdown('skincareConcernsMenu')">
                    <a href="#">スキンケア</a>
                    <ul id="skincareConcernsMenu" class="sub-dropdown hidden">
                        <li><a href="#">うるおい</a></li>
                        <li><a href="#">毛穴</a></li>
                        <li><a href="#">ニキビ</a></li>
                        <li><a href="#">シミ・そばかす</a></li>
                        <li><a href="#">低刺激・敏感肌</a></li>
                        <li><a href="#">たるみ</a></li>
                        <li><a href="#">赤み・赤ら顔</a></li>
                        <li><a href="#">UVカットコスメ</a></li>
                        <li><a href="#">角質ケア</a></li>
                        <li><a href="#">顔のテカリ</a></li>
                        <li><a href="#">引き締め</a></li>
                        <li><a href="#">唇の荒れ・乾燥</a></li>
                        <li><a href="#">よく落ちる</a></li>
                        <li><a href="#">目のクマ</a></li>
                    </ul>
                </li>
                <!-- ベースメイク -->
                <li class="category-item" onmouseover="showSubDropdown('baseMakeConcernsMenu')" onmouseout="hideSubDropdown('baseMakeConcernsMenu')">
                    <a href="#">ベースメイク</a>
                    <ul id="baseMakeConcernsMenu" class="sub-dropdown hidden">
                        
                    </ul>
                </li>
                <!-- メイクアップ -->
                <li class="category-item" onmouseover="showSubDropdown('makeupConcernsMenu')" onmouseout="hideSubDropdown('makeupConcernsMenu')">
                    <a href="#">メイクアップ</a>
                    <ul id="makeupConcernsMenu" class="sub-dropdown hidden">
                        <li><a href="#">色持ちがよい</a></li>
                        <li><a href="#">お湯で落ちるマスカラ</a></li>
                        <li><a href="#">描きやすい</a></li>
                        <li><a href="#">発色がよい</a></li>
                        <li><a href="#">ダマにならない</a></li>
                        <li><a href="#">カール・ハリ(マスカラ)</a></li>
                        <li><a href="#">ボリューム(マスカラ)</a></li>
                        <li><a href="#">ロング(マスカラ)</a></li>
                        <li><a href="#">セパレート(マスカラ)</a></li>
                        <li><a href="#">にじみにくい</a></li>
                    </ul>
                </li>
                <!-- メイクアップアイテム -->
                <li class="category-item" onmouseover="showSubDropdown('makeupItemsConcernsMenu')" onmouseout="hideSubDropdown('makeupItemsConcernsMenu')">
                    <a href="#">メイクアップアイテム</a>
                    <ul id="makeupItemsConcernsMenu" class="sub-dropdown hidden">

                    </ul>
                </li>
                <!-- ボディケア -->
                <li class="category-item" onmouseover="showSubDropdown('bodyConcernsMenu')" onmouseout="hideSubDropdown('bodyConcernsMenu')">
                    <a href="#">ボディケア</a>
                    <ul id="bodyConcernsMenu" class="sub-dropdown hidden">
                        <li><a href="#">ホワイトニング(ボディ)</a></li>
                        <li><a href="#">角質ケア(ボディ)</a></li>
                        <li><a href="#">乾燥(ボディ)</a></li>
                        <li><a href="#">疲れ・コリ</a></li>
                        <li><a href="#">バストケア・ネックケア</a></li>
                        <li><a href="#">老廃物の排出・代謝</a></li>
                        <li><a href="#">むくみ・冷え</a></li>
                        <li><a href="#">スリミング・ボディライン</a></li>
                        <li><a href="#">汗・におい</a></li>
                        <li><a href="#">ムダ毛除去</a></li>
                        <li><a href="#">ストレッチマーク・妊娠線</a></li>
                        <li><a href="#">歯のホワイトニング</a></li>
                        <li><a href="#">口臭対策・口臭予防</a></li>
                        <li><a href="#">ささくれ・二枚爪</a></li>
                        <li><a href="#">べたつかない(ボディ)</a></li>
                    </ul>
                </li>
                <!-- ネイル・ネイルケア -->
                <li class="category-item" onmouseover="showSubDropdown('nailConcernsMenu')" onmouseout="hideSubDropdown('nailConcernsMenu')">
                    <a href="#">ネイル・ネイルケア</a>
                    <ul id="nailConcernsMenu" class="sub-dropdown hidden">
                        
                    </ul>
                </li>
                <!-- ヘアケア -->
                <li class="category-item" onmouseover="showSubDropdown('hairConcernsMenu')" onmouseout="hideSubDropdown('hairConcernsMenu')">
                    <a href="#">ヘアケア</a>
                    <ul id="hairConcernsMenu" class="sub-dropdown hidden">
                        <li><a href="#">抜け毛予防</a></li>
                        <li><a href="#">頭皮のエイジング</a></li>
                        <li><a href="#">フケ・頭皮のかゆみ</a></li>
                        <li><a href="#">カラーリングケア</a></li>
                        <li><a href="#">トリートメント効果</a></li>
                        <li><a href="#">さらさら</a></li>
                        <li><a href="#">髪 しっとり</a></li>
                        <li><a href="#">セットキープ力</a></li>
                        <li><a href="#">ストレートヘア</a></li>
                        <li><a href="#">ウェーブヘア</a></li>
                        <li><a href="#">ボリュームダウン(ヘア)</a></li>
                        <li><a href="#">ボリュームアップ(ヘア)</a></li>
                    </ul>
                </li>
                <!-- フレグランス -->
                <li class="category-item" onmouseover="showSubDropdown('fragranceConcernsMenu')" onmouseout="hideSubDropdown('fragranceConcernsMenu')">
                    <a href="#">フレグランス</a>
                    <ul id="fragranceConcernsMenu" class="sub-dropdown hidden">
                        
                    </ul>
                </li>
                <!-- コフレ・雑貨 -->
                <li class="category-item" onmouseover="showSubDropdown('goodsConcernsMenu')" onmouseout="hideSubDropdown('goodsConcernsMenu')">
                    <a href="#">コフレ・雑貨</a>
                    <ul id="goodsConcernsMenu" class="sub-dropdown hidden">
                        
                    </ul>
                </li>
                <!-- ビューティーグッズ -->
                <li class="category-item" onmouseover="showSubDropdown('beautyConcernsMenu')" onmouseout="hideSubDropdown('beautyConcernsMenu')">
                    <a href="#">ビューティーグッズ</a>
                    <ul id="beautyConcernsMenu" class="sub-dropdown hidden">
                        <li><a href="#">リラックス</a></li>
                        <li><a href="#">アルコールフリー</a></li>
                        <li><a href="#">オイルフリー</a></li>
                        <li><a href="#">無香料</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="dropdown" onmouseover="showCategoriesDropdown()" onmouseout="hideCategoriesDropdown()">
            <a href="{{ route('products.index') }}" id="categoriesDropdownButton" class="categories-dropdown-btn">カテゴリー</a>
            <ul id="categoriesDropdownMenu" class="categories-dropdown-content categories-hidden">
                <!-- スキンケア -->
                <li class="category-item" onmouseover="showSubDropdown('skincareDropdownMenu')" onmouseout="hideSubDropdown('skincareDropdownMenu')">
                <a href="{{ route('products.index', ['category' => 'スキンケア']) }}">スキンケア</a>
                    <ul id="skincareDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => '洗顔料']) }}">洗顔料</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'クレンジング']) }}">クレンジング</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => '化粧水']) }}">化粧水</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => '美容液']) }}">美容液</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => '乳液']) }}">乳液</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'フェイスクリーム']) }}">フェイスクリーム</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'オイル・バーム']) }}">オイル・バーム</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'オールインワン']) }}">オールインワン</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'マスク・パック']) }}">マスク・パック</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'スペシャルケア']) }}">スペシャルケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'アイケア']) }}">アイケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'リップケア']) }}">リップケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'UVケア']) }}">UVケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'スキンケア', 'subcategory' => 'その他スキンケア']) }}">その他スキンケア</a></li>
                    </ul>
                </li>
                <!-- ベースメイク -->
                <li class="category-item" onmouseover="showSubDropdown('baseMakeDropdownMenu')" onmouseout="hideSubDropdown('baseMakeDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'ベースメイク']) }}">ベースメイク</a>
                    <ul id="baseMakeDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'ベースメイク', 'subcategory' => '化粧下地・コントロールカラー']) }}">化粧下地・コントロールカラー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ベースメイク', 'subcategory' => 'BBクリーム']) }}">BBクリーム</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ベースメイク', 'subcategory' => 'CCクリーム']) }}">CCクリーム</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ベースメイク', 'subcategory' => 'コンシーラー']) }}">コンシーラー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ベースメイク', 'subcategory' => 'ファンデーション']) }}">ファンデーション</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ベースメイク', 'subcategory' => 'フェイスパウダー']) }}">フェイスパウダー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ベースメイク', 'subcategory' => 'その他ベースメイク']) }}">その他ベースメイク</a></li>
                    </ul>
                </li>
                <!-- メイクアップ -->
                <li class="category-item" onmouseover="showSubDropdown('makeUpDropdownMenu')" onmouseout="hideSubDropdown('makeUpDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'メイクアップ']) }}">メイクアップ</a>
                    <ul id="makeUpDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'アイブロウ']) }}">アイブロウ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'アイライナー']) }}">アイライナー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'マスカラ']) }}">マスカラ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'まつ毛美容液']) }}">まつ毛美容液</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'アイシャドウ']) }}">アイシャドウ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'リップ']) }}">リップ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'チーク']) }}">チーク</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'ハイライト・シェーディング']) }}">ハイライト・シェーディング</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップ', 'subcategory' => 'ネイル']) }}">ネイル</a></li>
                    </ul>
                </li>
                <!-- メイクアップアイテ -->
                <li class="category-item" onmouseover="showSubDropdown('makeupItemsDropdownMenu')" onmouseout="hideSubDropdown('makeupItemsDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'メイクアップアイテム']) }}">メイクアップアイテム</a>
                    <ul id="makeupItemsDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => 'コットン・あぶらとり紙']) }}">コットン・あぶらとり紙</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => 'メイクブラシ']) }}">メイクブラシ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => 'バフ・スポンジ']) }}">バフ・スポンジ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => 'ビューラー']) }}">ビューラー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => 'アイラッシュ・つけまつげ']) }}">アイラッシュ・つけまつげ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => 'ミラー']) }}">ミラー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => 'ケース']) }}">ケース</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => '化粧ポーチ・ボックス']) }}">化粧ポーチ・ボックス</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'メイクアップアイテム', 'subcategory' => 'その他化粧小物']) }}">その他化粧小物</a></li>
                    </ul>
                </li>
                <!-- ボディケア -->
                <li class="category-item" onmouseover="showSubDropdown('bodycareDropdownMenu')" onmouseout="hideSubDropdown('bodycareDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'ボディケア']) }}">ボディケア</a>
                    <ul id="bodycareDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ボディソープ']) }}">ボディソープ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ボディローション・ミルク']) }}">ボディローション・ミルク</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ボディミスト']) }}">ボディミスト</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ボディクリーム']) }}">ボディクリーム</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ボディオイル']) }}">ボディオイル</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ボディマッサージ']) }}">ボディマッサージ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ボディスクラブ']) }}">ボディスクラブ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ネック・デコルテケア']) }}">ネック・デコルテケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'バストケア']) }}">バストケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ウエスト・ヒップケア']) }}">ウエスト・ヒップケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'ハンドケア']) }}">ハンドケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'レッグケア']) }}">レッグケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'フットケア']) }}">フットケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'デオドラント・制汗剤']) }}">デオドラント・制汗剤</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'バスアイテム']) }}">バスアイテム</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'オーラルケア']) }}">オーラルケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ボディケア', 'subcategory' => 'その他ボディケア']) }}">その他ボディケア</a></li>
                    </ul>
                </li>
                <!-- ネイル・ネイルケア -->
                <li class="category-item" onmouseover="showSubDropdown('nailDropdownMenu')" onmouseout="hideSubDropdown('nailDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'ネイル・ネイルケア']) }}">ネイル・ネイルケア</a>
                    <ul id="nailDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'ネイル・ネイルケア', 'subcategory' => 'マニキュア']) }}">マニキュア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ネイル・ネイルケア', 'subcategory' => 'ジェルネイル']) }}">ジェルネイル</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ネイル・ネイルケア', 'subcategory' => 'ネイルアートグッズ']) }}">ネイルアートグッズ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ネイル・ネイルケア', 'subcategory' => 'リムーバー・除光液']) }}">リムーバー・除光液</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ネイル・ネイルケア', 'subcategory' => 'ネイルケア']) }}">ネイルケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ネイル・ネイルケア', 'subcategory' => 'ネイルケアグッズ']) }}">ネイルケアグッズ</a></li>
                    </ul>
                </li>
                <!-- ヘアケア -->
                <li class="category-item" onmouseover="showSubDropdown('haircareDropdownMenu')" onmouseout="hideSubDropdown('haircareDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'ヘアケア']) }}">ヘアケア</a>
                    <ul id="haircareDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'シャンプー']) }}">シャンプー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'コンディショナー']) }}">コンディショナー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'インバストリートメント・パック']) }}">インバストリートメント・パック</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'アウトバストリートメント']) }}">アウトバストリートメント</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'スカルプケア']) }}">スカルプケア</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'ヘアカラー・パーマ']) }}">ヘアカラー・パーマ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'ヘアスタイリング']) }}">ヘアスタイリング</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'ヘアブラシ']) }}">ヘアブラシ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ヘアケア', 'subcategory' => 'ヘアアイロン']) }}">ヘアアイロン</a></li>
                    </ul>
                </li>
                <!-- フレグランス -->
                <li class="category-item" onmouseover="showSubDropdown('fragranceDropdownMenu')" onmouseout="hideSubDropdown('fragranceDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'フレグランス']) }}">フレグランス</a>
                    <ul id="fragranceDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'フレグランス', 'subcategory' => 'レディース']) }}">レディース</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'フレグランス', 'subcategory' => 'メンズ']) }}">メンズ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'フレグランス', 'subcategory' => '香水']) }}">香水</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'フレグランス', 'subcategory' => 'フレグランスミスト']) }}">フレグランスミスト</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'フレグランス', 'subcategory' => 'ヘアフレグランス']) }}">ヘアフレグランス</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'フレグランス', 'subcategory' => 'ルームフレグランス']) }}">ルームフレグランス</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'フレグランス', 'subcategory' => 'アロマオイル']) }}">アロマオイル</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'フレグランス', 'subcategory' => 'アロマバーム']) }}">アロマバーム</a></li>
                    </ul>
                </li>
                <!-- コフレ・雑貨 -->
                <li class="category-item" onmouseover="showSubDropdown('goodsDropdownMenu')" onmouseout="hideSubDropdown('goodsDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'コフレ・雑貨']) }}">コフレ・雑貨</a>
                    <ul id="goodsDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => '洗剤']) }}">洗剤</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => '柔軟剤']) }}">柔軟剤</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'サニタリー・生理用品']) }}">サニタリー・生理用品</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'ルームフレグランス・ディフューザー']) }}">ルームフレグランス・ディフューザー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'エッセンシャルオイル']) }}">エッセンシャルオイル</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'アロマキャンドル']) }}">アロマキャンドル</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'お香・インセンス']) }}">お香・インセンス</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => '消臭剤・芳香剤']) }}">消臭剤・芳香剤</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'ファブリックミスト']) }}">ファブリックミスト</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'マスク・ティッシュ']) }}">マスク・ティッシュ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => '入浴剤']) }}">入浴剤</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'バスソルト']) }}">バスソルト</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'その他日用品・雑貨']) }}">その他日用品・雑貨</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => '洗剤・デタージェント']) }}">洗剤・デタージェント</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'コフレ・雑貨', 'subcategory' => 'タオル']) }}">タオル</a></li>
                    </ul>
                </li>
                <!-- ビューティーグッズ -->
                <li class="category-item" onmouseover="showSubDropdown('beautyGoodsDropdownMenu')" onmouseout="hideSubDropdown('beautyGoodsDropdownMenu')">
                    <a href="{{ route('products.index', ['category' => 'ビューティーグッズ']) }}">ビューティーグッズ</a>
                    <ul id="beautyGoodsDropdownMenu" class="sub-dropdown hidden">
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'メイクブラシ']) }}">メイクブラシ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'バフ・スポンジ']) }}">バフ・スポンジ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => '手鏡・メイクミラー']) }}">手鏡・メイクミラー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'ヘアブラシ']) }}">ヘアブラシ</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'コンタクトレンズ・カラコン']) }}">コンタクトレンズ・カラコン</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'アイラッシュカーラー']) }}">アイラッシュカーラー</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'フェイスケア美容家電']) }}">フェイスケア美容家電</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'ボディケア美容家電']) }}">ボディケア美容家電</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'ヘアケアスタイリング美容家電']) }}">ヘアケアスタイリング美容家電</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'ビューティーグッズ', 'subcategory' => 'その他ビューティーグッズ']) }}">その他ビューティーグッズ</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- ブランド商品 -->
        <li><a href="#">ブランド商品</a></li>
        <!-- こだわり条件 -->
        <li><a href="#">こだわり条件</a></li>
        <!-- よくある質問 -->
        <li><a href="#">よくある質問</a></li>
    </ul>
</nav>