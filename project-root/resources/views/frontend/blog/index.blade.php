@extends('frontend.layouts.app')
@section('title', 'Blog')

@section('content')
<section id="blog">
    <h2 class="section-title">Our Blog</h2>
    <div class="container">
        <div class="blog-grid">
            @foreach($blogs as $blog)
            <div class="blog-card">
                @if($blog->featured_image)
                <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}">
                @endif
                <h3>{{ $blog->title }}</h3>
                <p>{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary">Read More</a>
            </div>
            @endforeach
        </div>
        {{ $blogs->links() }}
    </div>
</section>
@endsection