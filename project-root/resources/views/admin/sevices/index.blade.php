@extends('admin.layouts.app')

@section('title', 'Manage Services')

@section('content')
<div class="main-content">
    <h2 class="section-title">Manage Services</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.services.create') }}" class="btn btn-primary" style="margin-bottom: 15px;">Add New Service</a>

    <table class="table" id="servicesTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $service->title }}</td>
                <td>
                    @if($service->image)
                        <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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