@extends('admin.layouts.app')

@section('title', 'Add New Product')

@section('content')
<div class="main-content">
    <h2 class="section-title">Add New Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>

        <label for="category_id">Category ID</label>
        <input type="number" id="category_id" name="category_id" value="{{ old('category_id') }}">

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="6">{{ old('description') }}</textarea>

        <label for="price">Price</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}">

        <label for="image">Image</label>
        <input type="file" id="image" name="image">

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection