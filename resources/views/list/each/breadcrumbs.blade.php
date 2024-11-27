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