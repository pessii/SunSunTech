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
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="all-sale" name="sale[]" value="all">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">すべてのセール商品</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="sale-10" name="sale[]" value="10">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">10%OFF以上</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="sale-25" name="sale[]" value="25">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">25%OFF以上</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="sale-50" name="sale[]" value="50">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">50%OFF以上</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="sale-70" name="sale[]" value="70">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">70%OFF以上</span>
                        </label>
                    </div>
                </div>

                <!-- サイドコンテンツのアイテムをチェックボックスで検索 -->
                <div class="product-side-item-search">
                    <div class="product-side-item-search-title">アイテム</div>
                    <div class="product-side-item-search-checkbox">
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="face-wash" name="items[]" value="洗顔料">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">洗顔料</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="cleansing" name="items[]" value="クレンジング">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">クレンジング</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="lotion" name="items[]" value="化粧水">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">化粧水</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="serum" name="items[]" value="美容液">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">美容液</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="emulsion" name="items[]" value="乳液">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">乳液</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="face-cream" name="items[]" value="フェイスクリーム">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">フェイスクリーム</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="oil-balm" name="items[]" value="オイル・バーム">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">オイル・バーム</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="all-in-one" name="items[]" value="オールインワン">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">オールインワン</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="mask-pack" name="items[]" value="マスク・パック">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">マスク・パック</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="special-care" name="items[]" value="スペシャルケア">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">スペシャルケア</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="eye-care" name="items[]" value="アイケア">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">アイケア</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="lip-care" name="items[]" value="リップケア">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">リップケア</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="uv-care" name="items[]" value="UVケア">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">UVケア</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="other-skincare" name="items[]" value="その他スキンケア">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">その他スキンケア</span>
                        </label>
                    </div>
                </div>

                <!-- サイドコンテンツのブランドをチェックボックスで検索 -->
                <div class="product-side-brand-search">
                    <div class="product-side-brand-search-title">ブランド</div>
                    <div class="product-side-brand-search-checkbox">
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="louis-vuitton" name="brand[]" value="louis-vuitton">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ルイ・ヴィトン</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="chanel" name="brand[]" value="chanel">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">シャネル</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="gucci" name="brand[]" value="gucci">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">グッチ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="prada" name="brand[]" value="prada">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">プラダ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="hermes" name="brand[]" value="hermes">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">エルメス</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="dior" name="brand[]" value="dior">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ディオール</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="saint-laurent" name="brand[]" value="saint-laurent">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">サンローラン</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="fendi" name="brand[]" value="fendi">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">フェンディ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="balenciaga" name="brand[]" value="balenciaga">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">バレンシアガ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="givenchy" name="brand[]" value="givenchy">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ジバンシィ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="versace" name="brand[]" value="versace">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ヴェルサーチ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="burberry" name="brand[]" value="burberry">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">バーバリー</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="bottega-veneta" name="brand[]" value="bottega-veneta">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ボッテガ・ヴェネタ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="dolce-gabbana" name="brand[]" value="dolce-gabbana">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ドルチェ＆ガッバーナ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="miu-miu" name="brand[]" value="miu-miu">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ミュウミュウ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="tom-ford" name="brand[]" value="tom-ford">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">トム・フォード</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="coach" name="brand[]" value="coach">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">コーチ</span>
                        </label>
                    </div>
                </div>

                <!-- サイドコンテンツのお悩みから探す -->
                <div class="product-side-concern-search">
                    <div class="product-side-concern-search-title">お悩み</div>
                    <div class="product-side-concern-search-checkbox">
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="moisture" name="concerns[]" value="うるおい">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">うるおい</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="pores" name="concerns[]" value="毛穴">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">毛穴</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="acne" name="concerns[]" value="ニキビ">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ニキビ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="spots" name="concerns[]" value="シミ・そばかす">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">シミ・そばかす</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="sensitive" name="concerns[]" value="低刺激・敏感肌">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">低刺激・敏感肌</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="sagging" name="concerns[]" value="たるみ">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">たるみ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="redness" name="concerns[]" value="赤み・赤ら顔">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">赤み・赤ら顔</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="uv-care" name="concerns[]" value="UVカットコスメ">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">UVカットコスメ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="keratin" name="concerns[]" value="角質ケア">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">角質ケア</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="oily" name="concerns[]" value="顔のテカリ">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">顔のテカリ</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="tightening" name="concerns[]" value="引き締め">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">引き締め</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="lip-dryness" name="concerns[]" value="唇の荒れ・乾燥">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">唇の荒れ・乾燥</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="easy-remove" name="concerns[]" value="よく落ちる">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">よく落ちる</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="dark-circles" name="concerns[]" value="目のクマ">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">目のクマ</span>
                        </label>
                    </div>
                </div>

                <!-- サイドコンテンツのパーソナルカラーを選択 -->
                <div class="product-side-personal-color">
                    <div class="product-side-personal-color-title">パーソナルカラー</div>
                    <div class="product-side-personal-color-checkbox">
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="spring" name="personal_color[]" value="spring">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">スプリング（イエベ）</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="summer" name="personal_color[]" value="summer">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">サマー（ブルベ）</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="autumn" name="personal_color[]" value="autumn">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">オータム（イエベ）</span>
                        </label>
                        <label class="ECM_CheckboxInput">
                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="winter" name="personal_color[]" value="winter">
                            <span class="ECM_CheckboxInput-DummyInput"></span>
                            <span class="ECM_CheckboxInput-LabelText">ウィンター（ブルベ）</span>
                        </label>
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