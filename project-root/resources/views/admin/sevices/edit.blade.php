@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('content')
<div class="main-content">
    <h2 class="section-title">Edit Service: {{ $service->title }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $service->title) }}" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="6">{{ old('description', $service->description) }}</textarea>

        <label for="image">Image</label>
        <input type="file" id="image" name="image">
        @if($service->image)
            <div style="margin-top: 10px;">
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" width="120">
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Update Service</button>
    </form>
</div>
@endsection