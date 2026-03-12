@extends('frontend.layouts.app')
@section('title', 'Contact Us')

@section('content')
<section id="contact">
    <h2 class="section-title">Contact Us</h2>
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone">

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>
@endsection