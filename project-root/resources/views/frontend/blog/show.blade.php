@extends('frontend.layouts.app')
@section('title', $blog->title)

@section('content')
<section id="blog-detail">
    <div class="container">
        <h2>{{ $blog->title }}</h2>
        @if($blog->featured_image)
        <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" style="width:100%; margin-bottom:20px;">
        @endif
        <div class="blog-content">
            {!! $blog->content !!}
        </div>
        <a href="{{ route('blog.index') }}" class="btn btn-secondary" style="margin-top:20px;">Back to Blog</a>
    </div>
</section>
@endsection