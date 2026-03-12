@extends('admin.layouts.app')

@section('title', 'Edit Page')

@section('content')
<div class="main-content">
    <h2 class="section-title">Edit Page: {{ $page->page_name }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="page_name">Page Name</label>
        <input type="text" id="page_name" name="page_name" value="{{ old('page_name', $page->page_name) }}" required>

        <label for="content">Content</label>
        <textarea id="content" name="content" rows="10">{{ old('content', $page->content) }}</textarea>

        <label for="seo_title">SEO Title</label>
        <input type="text" id="seo_title" name="seo_title" value="{{ old('seo_title', $page->seo_title) }}">

        <label for="seo_description">SEO Description</label>
        <textarea id="seo_description" name="seo_description" rows="3">{{ old('seo_description', $page->seo_description) }}</textarea>

        <button type="submit" class="btn btn-primary">Update Page</button>
    </form>
</div>
@endsection