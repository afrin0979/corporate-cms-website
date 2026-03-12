@extends('admin.layouts.app')

@section('title', 'Manage Products')

@section('content')
<div class="main-content">
    <h2 class="section-title">Manage Products</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.products.create') }}" class="btn btn-primary" style="margin-bottom: 15px;">Add New Product</a>

    <table class="table" id="productsTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->category_id ?? 'N/A' }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>
                    @if($product->image)
                        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection