@extends('admin.layouts.app')

@section('title', 'Manage Pages')

@section('content')
<div class="main-content">
    <h2 class="section-title">Manage Pages</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table" id="pagesTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Page Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $page->page_name }}</td>
                <td>{{ $page->slug }}</td>
                <td>
                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-secondary">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection