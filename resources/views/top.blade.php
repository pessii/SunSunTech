@extends('layouts.existing')

@section('content')
    <div class="sliderArea">
        <!-- スライドショー -->
        <div class="full-screen slider">

            <div class="mrdium-screen">
                <img src="{{ asset('images/suraid1.jpeg') }}" alt="商品1">
                <div class="slide-content">
                    <h2>クリスマスコレクション２０２４</h2>
                    <p>限定メイクアップアイテム</p>
                </div>
            </div>

            <div class="mrdium-screen">
                <img src="{{ asset('images/suraid2.jpeg') }}" alt="商品2">
                <div class="slide-content">
                    <h2>２０２４ホリデーコレクション開催</h2>
                    <p>豪華なコフレが勢揃い</p>
                </div>
            </div>

            <div class="mrdium-screen">
                <img src="{{ asset('images/suraid3.jpeg') }}" alt="商品3">
                <div class="slide-content">
                    <h2>２０２４秋の新作コスメ</h2>
                    <p>人気ブランドから続々登場！</p>
                </div>
            </div>

            <div class="mrdium-screen">
                <img src="{{ asset('images/suraid4.jpeg') }}" alt="商品4">
                <div class="slide-content">
                    <h2>香りも楽しむハンド・ネイルケア</h2>
                    <p>感想が気になる季節に向けて　香水替わりにも</p>
                </div>
            </div>

        </div>

    </div>
    
    <section class="products">
        <h2>おすすめ商品</h2>
        <div class="product-list">
            <div class="product-item">
                <img src="path/to/image1.jpg" alt="商品1">
                <h3>商品名1</h3>
                <p>¥3,000</p>
                <a href="#" class="btn">カートに追加</a>
            </div>
            <div class="product-item">
                <img src="path/to/image2.jpg" alt="商品2">
                <h3>商品名2</h3>
                <p>¥2,500</p>
                <a href="#" class="btn">カートに追加</a>
            </div>
            <div class="product-item">
                <img src="path/to/image1.jpg" alt="商品1">
                <h3>商品名1</h3>
                <p>¥3,000</p>
                <a href="#" class="btn">カートに追加</a>
            </div>
            <div class="product-item">
                <img src="path/to/image2.jpg" alt="商品2">
                <h3>商品名2</h3>
                <p>¥2,500</p>
                <a href="#" class="btn">カートに追加</a>
            </div>
            <div class="product-item">
                <img src="path/to/image1.jpg" alt="商品1">
                <h3>商品名1</h3>
                <p>¥3,000</p>
                <a href="#" class="btn">カートに追加</a>
            </div>
            <div class="product-item">
                <img src="path/to/image2.jpg" alt="商品2">
                <h3>商品名2</h3>
                <p>¥2,500</p>
                <a href="#" class="btn">カートに追加</a>
            </div>
            <!-- 他の商品も同様に追加 -->
        </div>
    </section>
@endsection
