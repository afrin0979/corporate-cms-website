@extends('frontend.layouts.app')
@section('title', 'Products')

@section('content')
<section id="products">
    <h2 class="section-title">Our Products</h2>
    <div class="container">
        <div class="products-grid">
            @foreach($products as $product)
            <div class="product-card">
                @if($product->image)
                <img src="{{ asset($product->image) }}" alt="{{ $product->title }}">
                @endif
                <h3>{{ $product->title }}</h3>
                <p>${{ number_format($product->price,2) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection