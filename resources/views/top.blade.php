@extends('layouts.existing')

@section('content')
    <!-- スライドショー -->
    @include('top.slider')

    <article class="top-article">

        <!-- 商品一覧 -->
        <div class="main">
            @include('top.merchandise')
        </div>

        <!-- 再度バー -->
        <div class="side sub">
            @include('top.side')
        </div> 

    </article>
    
@endsection
