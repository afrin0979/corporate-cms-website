@extends('admin.layouts.app')

@section('title', 'Add New Service')

@section('content')
<div class="main-content">
    <h2 class="section-title">Add New Service</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="6">{{ old('description') }}</textarea>

        <label for="image">Image</label>
        <input type="file" id="image" name="image">

        <button type="submit" class="btn btn-primary">Add Service</button>
    </form>
</div>
@endsection