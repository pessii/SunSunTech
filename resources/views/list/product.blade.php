@extends('layouts.existing')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product-list.css') }}">
@endsection

@section('content')

<div class="product-wrapper">

    <div class="container">
        <!-- パンくず -->
        @include('list.each.breadcrumbs', ['breadcrumbs' => $breadcrumbs])

        <div class="product-content-wrapper">

            <!-- サイドコンテンツ -->
            @include('list.each.side-content')

            <!-- メインコンテンツ -->
            @include('list.each.main-content', ['breadcrumbs' => $breadcrumbs])

        </div>

    </div>

</div>
    
@endsection

@section('scripts')
    <script src="{{ asset('js/product-list.js') }}"></script>
@endsection