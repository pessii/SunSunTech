@extends('layouts.existing')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product-list.css') }}">
@endsection

@section('content')

<div class="product-wrapper">

    <div class="container">
        <!-- パンくず -->
        <div class="product-breadcrumbs">
            @foreach($breadcrumbs as $index => $breadcrumb)
                @if($breadcrumb['url'])
                    <a href="{{ $breadcrumb['url'] }}" class="product-breadcrumb-link">{{ $breadcrumb['name'] }}</a>
                @else
                    <span class="product-breadcrumb-name">{{ $breadcrumb['name'] }}</span>
                @endif
                
                @if($index < count($breadcrumbs) - 1)
                    <span class="product-breadcrumb-separator">　＞　</span>
                @endif
            @endforeach
        </div>

        <div class="product-content-wrapper">

            <!-- サイドコンテンツ -->
            <div class="product-side">
                <!-- サイドコンテンツの件数 -->
                <div class="product-side-content">
                    <div class="product-side-title">対象商品</div>
                    <div class="product-side-count"><span>300</span>件</div>
                </div>

                <!-- サイドコンテンツのキーワード検索 -->
                <div class="product-side-keyword-search">
                    <div class="product-side-keyword-search-title">キーワード検索</div>
                    <div class="product-side-keyword-search-input">
                        <input type="text" name="keyword" placeholder="キーワードを入力">
                    </div>
                </div>

                <!-- サイドコンテンツの価格で検索 -->
                <div class="product-side-price-search">
                    <div class="product-side-price-search-title">価格</div>
                    <div class="product-side-price-search-input">
                        <input type="text" id="price-min" name="price_min" placeholder="最小価格" class="price-input" pattern="[0-9]*" inputmode="numeric">
                        <span class="price-separator">〜</span>
                        <input type="text" id="price-max" name="price_max" placeholder="最大価格" class="price-input" pattern="[0-9]*" inputmode="numeric">
                    </div>
                </div>

                <!-- サイドコンテンツのセール商品で検索 -->
                <div class="product-side-sale-search">
                    <div class="product-side-sale-search-title">セール商品</div>
                    <div class="product-side-sale-search-checkbox">
                        <div class="sale-checkbox-item">
                            <input type="checkbox" id="all-sale" name="sale[]" value="all">
                            <label for="all-sale">すべてのセール商品</label>
                        </div>
                        <div class="sale-checkbox-item">
                            <input type="checkbox" id="sale-10" name="sale[]" value="10">
                            <label for="sale-10">10%OFF以上</label>
                        </div>
                        <div class="sale-checkbox-item">
                            <input type="checkbox" id="sale-25" name="sale[]" value="25">
                            <label for="sale-25">25%OFF以上</label>
                        </div>
                        <div class="sale-checkbox-item">
                            <input type="checkbox" id="sale-50" name="sale[]" value="50">
                            <label for="sale-50">50%OFF以上</label>
                        </div>
                        <div class="sale-checkbox-item">
                            <input type="checkbox" id="sale-70" name="sale[]" value="70">
                            <label for="sale-70">70%OFF以上</label>
                        </div>
                    </div>
                </div>

                <!-- サイドコンテンツのアイテムをチェックボックスで検索 -->
                <div class="product-side-item-search">
                    <div class="product-side-item-search-title">アイテム</div>
                    <div class="product-side-item-search-checkbox">
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="face-wash" name="items[]" value="洗顔料">
                            <label for="face-wash">洗顔料</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="cleansing" name="items[]" value="クレンジング">
                            <label for="cleansing">クレンジング</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="lotion" name="items[]" value="化粧水">
                            <label for="lotion">化粧水</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="serum" name="items[]" value="美容液">
                            <label for="serum">美容液</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="emulsion" name="items[]" value="乳液">
                            <label for="emulsion">乳液</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="face-cream" name="items[]" value="フェイスクリーム">
                            <label for="face-cream">フェイスクリーム</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="oil-balm" name="items[]" value="オイル・バーム">
                            <label for="oil-balm">オイル・バーム</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="all-in-one" name="items[]" value="オールインワン">
                            <label for="all-in-one">オールインワン</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="mask-pack" name="items[]" value="マスク・パック">
                            <label for="mask-pack">マスク・パック</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="special-care" name="items[]" value="スペシャルケア">
                            <label for="special-care">スペシャルケア</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="eye-care" name="items[]" value="アイケア">
                            <label for="eye-care">アイケア</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="lip-care" name="items[]" value="リップケア">
                            <label for="lip-care">リップケア</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="uv-care" name="items[]" value="UVケア">
                            <label for="uv-care">UVケア</label>
                        </div>
                        <div class="item-checkbox-item">
                            <input type="checkbox" id="other-skincare" name="items[]" value="その他スキンケア">
                            <label for="other-skincare">その他スキンケア</label>
                        </div>
                    </div>
                </div>

                <!-- サイドコンテンツのブランドをチェックボックスで検索 -->
                <div class="product-side-brand-search">
                    <div class="product-side-brand-search-title">ブランド</div>
                    <div class="product-side-brand-search-checkbox">
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="louis-vuitton" name="brand[]" value="louis-vuitton">
                            <label for="louis-vuitton">ルイ・ヴィトン</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="chanel" name="brand[]" value="chanel">
                            <label for="chanel">シャネル</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="gucci" name="brand[]" value="gucci">
                            <label for="gucci">グッチ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="prada" name="brand[]" value="prada">
                            <label for="prada">プラダ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="hermes" name="brand[]" value="hermes">
                            <label for="hermes">エルメス</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="dior" name="brand[]" value="dior">
                            <label for="dior">ディオール</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="saint-laurent" name="brand[]" value="saint-laurent">
                            <label for="saint-laurent">サンローラン</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="fendi" name="brand[]" value="fendi">
                            <label for="fendi">フェンディ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="balenciaga" name="brand[]" value="balenciaga">
                            <label for="balenciaga">バレンシアガ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="givenchy" name="brand[]" value="givenchy">
                            <label for="givenchy">ジバンシィ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="versace" name="brand[]" value="versace">
                            <label for="versace">ヴェルサーチ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="burberry" name="brand[]" value="burberry">
                            <label for="burberry">バーバリー</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="bottega-veneta" name="brand[]" value="bottega-veneta">
                            <label for="bottega-veneta">ボッテガ・ヴェネタ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="dolce-gabbana" name="brand[]" value="dolce-gabbana">
                            <label for="dolce-gabbana">ドルチェ＆ガッバーナ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="miu-miu" name="brand[]" value="miu-miu">
                            <label for="miu-miu">ミュウミュウ</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="tom-ford" name="brand[]" value="tom-ford">
                            <label for="tom-ford">トム・フォード</label>
                        </div>
                        <div class="brand-checkbox-item">
                            <input type="checkbox" id="coach" name="brand[]" value="coach">
                            <label for="coach">コーチ</label>
                        </div>
                    </div>
                </div>

                <!-- サイドコンテンツのお悩みから探す -->
                <div class="product-side-concern-search">
                    <div class="product-side-concern-search-title">お悩み</div>
                    <div class="product-side-concern-search-checkbox">
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="moisture" name="concerns[]" value="うるおい">
                            <label for="moisture">うるおい</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="pores" name="concerns[]" value="毛穴">
                            <label for="pores">毛穴</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="acne" name="concerns[]" value="ニキビ">
                            <label for="acne">ニキビ</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="spots" name="concerns[]" value="シミ・そばかす">
                            <label for="spots">シミ・そばかす</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="sensitive" name="concerns[]" value="低刺激・敏感肌">
                            <label for="sensitive">低刺激・敏感肌</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="sagging" name="concerns[]" value="たるみ">
                            <label for="sagging">たるみ</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="redness" name="concerns[]" value="赤み・赤ら顔">
                            <label for="redness">赤み・赤ら顔</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="uv-care" name="concerns[]" value="UVカットコスメ">
                            <label for="uv-care">UVカットコスメ</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="keratin" name="concerns[]" value="角質ケア">
                            <label for="keratin">角質ケア</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="oily" name="concerns[]" value="顔のテカリ">
                            <label for="oily">顔のテカリ</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="tightening" name="concerns[]" value="引き締め">
                            <label for="tightening">引き締め</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="lip-dryness" name="concerns[]" value="唇の荒れ・乾燥">
                            <label for="lip-dryness">唇の荒れ・乾燥</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="easy-remove" name="concerns[]" value="よく落ちる">
                            <label for="easy-remove">よく落ちる</label>
                        </div>
                        <div class="concern-checkbox-item">
                            <input type="checkbox" id="dark-circles" name="concerns[]" value="目のクマ">
                            <label for="dark-circles">目のクマ</label>
                        </div>
                    </div>
                </div>

                <!-- サイドコンテンツのパーソナルカラーを選択 -->
                <div class="product-side-personal-color">
                    <div class="product-side-personal-color-title">パーソナルカラー</div>
                    <div class="product-side-personal-color-checkbox">
                        <div class="color-checkbox-item">
                            <input type="checkbox" id="spring" name="personal_color[]" value="spring">
                            <label for="spring">スプリング（イエベ）</label>
                        </div>
                        <div class="color-checkbox-item">
                            <input type="checkbox" id="summer" name="personal_color[]" value="summer">
                            <label for="summer">サマー（ブルベ）</label>
                        </div>
                        <div class="color-checkbox-item">
                            <input type="checkbox" id="autumn" name="personal_color[]" value="autumn">
                            <label for="autumn">オータム（イエベ）</label>
                        </div>
                        <div class="color-checkbox-item">
                            <input type="checkbox" id="winter" name="personal_color[]" value="winter">
                            <label for="winter">ウィンター（ブルベ）</label>
                        </div>
                    </div>
                </div>

                <!-- 検索ボタンと検索条件をリセットボタン -->
                <div class="product-side-search-buttons">
                    <button type="submit" class="search-button">
                        検索する
                    </button>
                    <button type="button" class="reset-button" id="reset-search">
                        条件をリセット
                    </button>
                </div>

            </div>

            <!-- メインコンテンツ -->
            <div class="product-main">
                メインコンテンツ
            </div>

        </div>

    </div>

</div>
    
@endsection

@section('scripts')
    <script src="{{ asset('js/product-list.js') }}"></script>
@endsection