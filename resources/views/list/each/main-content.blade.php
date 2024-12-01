<div class="product-main">

    <!-- メインタイトル -->
    @foreach($breadcrumbs as $index => $breadcrumb)
        @if(!$breadcrumb['url'])
            <div class="product-main-title">{{ $breadcrumb['name'] }}</div>
        @endif
    @endforeach
    <!-- メインタイトルの説明 -->
    <p class="product-main-explanation">スキンケアの一覧です。美容液や化粧水、乳液などご用意しております。</p>

    <!-- ソートメニュー -->
    <div class="product-sort">
        <select name="sort" class="product-sort-select" id="sort-select">
            <option value="recommended">おすすめ順</option>
            <option value="popular">人気順</option>
            <option value="newest">新着順</option>
            <option value="price_asc">価格が安い順</option>
            <option value="price_desc">価格が高い順</option>
        </select>
    </div>

    <hr class="custom-hr">

    <!-- 商品一覧 -->
    <div class="product-l-wrapper">

        <!-- 商品１ -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product1.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">IPSA</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">化粧水</p>
                <p class="product-card-text -number">¥4,730</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

        <!-- 商品２ -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product2.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">BULK HOMME</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">洗顔料</p>
                <p class="product-card-text -number">¥2,717</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

        <!-- 商品３ -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product3.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">PERFECT ONE FOCUS</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">クレンジング</p>
                <p class="product-card-text -number">¥2,376</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

        <!-- 商品4 -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product4.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">allolun.</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">クレンジング</p>
                <p class="product-card-text -number">¥165</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

        <!-- 商品5 -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product5.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">VT</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">美容液/オイル/クリーム</p>
                <p class="product-card-text -number">¥2,992</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

        <!-- 商品6 -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product6.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">PERFECT ONE FOCUS</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">クレンジング</p>
                <p class="product-card-text -number">¥2,376</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

        <!-- 商品7 -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product7.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">MEDIHEAL</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">パック/フェイスマスク</p>
                <p class="product-card-text -number">¥163</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

        <!-- 商品8 -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product8.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">MEDIHEAL</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">パック/フェイスマスク</p>
                <p class="product-card-text -number">¥163</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

        <!-- 商品9 -->
        <article class="product-card">
            <!-- 画像 -->
            <div class="product-card-header">
                <figure class="product-card-thumbnail">
                    <img src="{{ asset('images/product/product9.jpg') }}" alt="" class="product-card-image">
                </figure>
                <div class="product-card-title">SHISEIDO MEN</div>
            </div>
            <!-- 説明 -->
            <div class="product-card-body">
                <p class="product-card-text">スキンケアキット/ギフトセット</p>
                <p class="product-card-text -number">¥1,650</p>
            </div>
            <!-- 購入ボタン -->
            <div class="product-card-footer">
                <p class="product-card-text">
                    <a href="#" class="button -compact">
                        <i class="fas fa-shopping-cart"></i>
                        購入サイトへ
                    </a>
                </p>
            </div>

        </article>

    </div>

</div>