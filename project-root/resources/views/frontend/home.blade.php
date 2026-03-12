@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')
<div class="hero-slider">
    @foreach($hero_sliders as $slide)
        <img src="{{ asset($slide->image) }}" alt="{{ $slide->title }}">
        <div class="hero-content">
            <h1>{{ $slide->title }}</h1>
            <p>{{ $slide->subtitle }}</p>
            @if($slide->button_link)
                <a href="{{ $slide->button_link }}" class="btn">{{ $slide->button_text }}</a>
            @endif
        </div>
    @endforeach
</div>

<section id="services">
    <h2 class="section-title">Our Services</h2>
    <div class="container">
        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                @if($service->image)
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                @endif
                <h3>{{ $service->title }}</h3>
                <p>{{ $service->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="products">
    <h2 class="section-title">Featured Products</h2>
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

<section id="blog">
    <h2 class="section-title">Latest Blogs</h2>
    <div class="container">
        <div class="blog-grid">
            @foreach($blogs as $blog)
            <div class="blog-card">
                @if($blog->featured_image)
                <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}">
                @endif
                <h3>{{ $blog->title }}</h3>
                <p>{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary">Read More</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="contact-cta">
    <div class="container">
        <h2>Contact Us Today</h2>
        <a href="{{ route('contact') }}" class="btn btn-primary">Get in Touch</a>
    </div>
</section>
@endsection