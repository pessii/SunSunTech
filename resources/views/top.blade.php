@extends('layouts.existing')

@section('content')
    <section class="hero">
        <!-- スライドショー -->
        <div class="slideshow-container">

            <div class="slides fade">
                <div class="slide-content">
                    <h2>クリスマスコレクション２０２４</h2>
                    <p>限定メイクアップアイテム</p>
                </div>
                <img src="{{ asset('images/suraid1.jpeg') }}" alt="商品1">
            </div>

            <div class="slides fade">
                <div class="slide-content">
                    <h2>２０２４ホリデーコレクション開催</h2>
                    <p>豪華なコフレが勢揃い</p>
                </div>
                <img src="{{ asset('images/suraid2.jpeg') }}" alt="商品2">
            </div>

            <div class="slides fade">
                <div class="slide-content">
                    <h2>２０２４秋の新作コスメ</h2>
                    <p>人気ブランドから続々登場！</p>
                </div>
                <img src="{{ asset('images/suraid3.jpeg') }}" alt="商品3">
            </div>

            <div class="slides fade">
                <div class="slide-content">
                    <h2>香りも楽しむハンド・ネイルケア</h2>
                    <p>感想が気になる季節に向けて　香水替わりにも</p>
                </div>
                <img src="{{ asset('images/suraid4.jpeg') }}" alt="商品4">
            </div>

            <!-- 前へ・次へボタン -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </section>
    
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
