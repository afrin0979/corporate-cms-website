@extends('admin.layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="main-content">
    <h2 class="section-title">Edit Product: {{ $product->title }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $product->title) }}" required>

        <label for="category_id">Category ID</label>
        <input type="number" id="category_id" name="category_id" value="{{ old('category_id', $product->category_id) }}">

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="6">{{ old('description', $product->description) }}</textarea>

        <label for="price">Price</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ old('price', $product->price) }}">

        <label for="image">Image</label>
        <input type="file" id="image" name="image">
        @if($product->image)
            <div style="margin-top: 10px;">
                <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="120">
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection