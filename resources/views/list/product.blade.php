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

            <div class="product-side">
                対象商品
                300件
            </div>

            <div class="product-main">
                メインコンテンツ
            </div>

        </div>

    </div>

</div>
    
@endsection
