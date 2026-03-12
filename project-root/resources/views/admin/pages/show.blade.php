@extends('admin.layouts.app')

@section('title', 'View Page')

@section('content')
<div class="main-content">
    <h2 class="section-title">View Page: {{ $page->page_name }}</h2>

    <div class="page-content">
        {!! $page->content !!}
    </div>

    <div class="seo-info" style="margin-top: 20px;">
        <p><strong>SEO Title:</strong> {{ $page->seo_title }}</p>
        <p><strong>SEO Description:</strong> {{ $page->seo_description }}</p>
        <p><strong>Slug:</strong> {{ $page->slug }}</p>
    </div>

    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary" style="margin-top:20px;">Back to Pages</a>
</div>
@endsection