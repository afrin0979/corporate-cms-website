@extends('frontend.layouts.app')
@section('title', 'Services')

@section('content')
<section id="services">
    <h2 class="section-title">Our Services</h2>
    <div class="container">
        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                @if($service->image)
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                @endif
                <h3>{{ $service->title }}</h3>
                <p>{{ $service->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection